<?php

namespace App\Http\Controllers;
use App\Bunga;
use App\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{

    public function _construct()
    {
        $this ->middleware('auth');
    }

    public function index()
    {
        $bungas = Bunga::orderBy('id', 'desc')->paginate(8);
        // dd($bungas);
        return view('handmade', compact('bungas'));
    }

    public function create()
    {
        $title= Title::all();
        return view('flower.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'nama_bunga' => 'required|min:5',
            'harga' => 'required|numeric|min:50000',
            'keterangan' => 'required',
            'photo_bunga' => 'required|mimes:jpeg,png,jpg,svg',
        ]);

        $foto = null;

        $foto = $request->photo_bunga->getClientOriginalName();
        $request->photo_bunga->move(public_path('assets'), $foto);

        $stok = 100;
        Bunga::create([
            'titlebunga_id' => $request->title,
            'photo_bunga' => $foto,
            'nama_bunga' => $request->nama_bunga,
            'harga' => $request->harga,
            'stok' => $stok,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/handmade');
        }

        public function edit($id){
            $bungas = Bunga::findOrFail($id);
            $title= Title::all();
            return view('flower.edit', compact('bungas','title'));
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'title_bunga' => 'required',
                'nama_bunga' => 'required|unique:bungas|min:5',
                'harga' => 'required|numeric|min:50000',
                'keterangan' => 'required|min:20',
            ]);

            $foto = null;

            if($request->photo_bunga) {
                $request->validate([
                    'photo_bunga' => 'required|mimes:jpeg,png,jpg,svg',
                ]);

                $foto = $request->photo_bunga->getClientOriginalName();
                $request->photo_bunga->move(public_path('assets'), $foto);
            } else {
                $foto = $request->oldImage;
            }


            $bunga = Bunga::find($id)->update([
                'titlebunga_id' => $request->title_bunga,
                'photo_bunga' => $foto,
                'nama_bunga' => $request->nama_bunga,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'keterangan' => $request->keterangan,
            ]);

            return redirect('/handmade');
        }

        public function delete($id) {
            $bungas = Bunga::find($id)->delete();

            return redirect('/handmade');
        }
}
