<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required',
        ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        return redirect('/pertanyaan');
    }

    public function show($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request)
    {
        $item = DB::table('pertanyaan')->where('id', $id)->first();
        if ($item->judul == $request->input('judul')){
            $request->validate([
                'judul' => 'required',
                'isi' => 'required',
            ]);
        }
        else {
            $request->validate([
                'judul' => 'required|unique:pertanyaan',
                'isi' => 'required',
            ]);
        }

        $query = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"]
            ]);
        return redirect('/pertanyaan');
    }

    public function destroy($id)
    {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan');
    }
    
}
