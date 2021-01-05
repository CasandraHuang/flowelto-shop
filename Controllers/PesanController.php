<?php

namespace App\Http\Controllers;
use App\Bunga;
use App\Pesanan;
use App\User;
use App\PesananDetail;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function _construct(){
        $this ->middleware('auth');
    }

    public function index($id)
    {
        $bunga = Bunga::where('id', $id)->first();
        return view('pesan.index',compact('bunga'));
    }

    public function pesan(Request $request, $id)
    {
        $bunga = Bunga::where('id', $id)->first();
        $tanggal = Carbon::now();
        if($request->jumlah_pesan > $bunga->stok){
            return redirect("pesan.index", $id);
        }
        //validasi
        $cek_pesanan= Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if(empty($cek_pesanan)){
        //buat simpan ke db pesanan
        $pesanan = new Pesanan;
        $pesanan->user_id = Auth::user()->id;
        $pesanan->tanggal = $tanggal;
        $pesanan->status = 0;
        $pesanan->jumlah_harga = $bunga->harga*$request->jumlah_pesan;
        $pesanan->save();
        }

        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        
        //cek pesanan deatailya
        $cek_pesanan_detail = PesananDetail::where("bunga_id", $bunga->id)->where("pesanan_id", $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail)){
        $pesanan_detail = new PesananDetail;
        $pesanan_detail->bunga_id = $bunga->id;
        $pesanan_detail->pesanan_id = $pesanan_baru->id;
        $pesanan_detail->jumlah = $request->jumlah_pesan;
        $pesanan_detail->jumlah_harga = $bunga->harga*$request->jumlah_pesan ;
        $pesanan_detail->save();
        }
        else{
            $pesanan_detail = PesananDetail::where("bunga_id", $bunga->id)->where("pesanan_id", $pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

            //harga sekarang
            $harga_pesanan_detail_baru = $bunga->harga*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        //menjumlahkan pesanan
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$bunga->harga*$request->jumlah_pesan;
        $pesanan->update();
        
        return redirect('check_out');
    }


    public function check_out()
    {
        
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
     
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

       return view('pesan.check_out' , compact('pesanan','pesanan_details'));
    }

      public function delete($id)
    {
        $pesanan_detail = PesananDetail::where("id", $id)->first();

        $pesanan = Pesanan::Where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

     
        $pesanan_detail->delete();
        return redirect('check_out');
    }

    public function conf()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status=1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id' , $pesanan_id)->get();
        foreach($pesanan_details as $pd){
            $bunga = Bunga::where('id', $pd->bunga_id)->first();
            $bunga->stok = $bunga->stok-$pd->jumlah;
            $bunga->update();
        }
        return redirect('pesan.transaction');
    }

    public function transaksi()
    {
        
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
     
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

       return view('pesan.transaction' , compact('pesanan','pesanan_details'));
    }
}
