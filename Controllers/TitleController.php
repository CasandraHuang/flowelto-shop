<?php

namespace App\Http\Controllers;
use App\Title;
use App\Bunga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TitleController extends Controller
{
    public function index()
    {
        $title= Title::all();
        // dd($title);
        return view('home',compact('title'));
    }

    public function title($id)
    {
        $title = Title::all();
        $bungas = Bunga::where('titlebunga_id', $id)->get();
        //dd($bungas);
        return view('handmade', compact('bungas','title'));
    }

    public function edit($id){
        $titles = Title::findOrFail($id);
        return view('title.edit', compact('titles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title_bunga' => 'required|unique:titles|min:5',
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

        $title = Title::find($id)->update([
            'title_bunga' => $request->title_bunga,
            'photo' => $foto
        ]);
        return redirect('/');
    }


    public function delete($id) {
        Title::find($id)->delete();

        return redirect('/');
    }
}
