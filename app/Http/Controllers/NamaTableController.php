<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaTableController extends Controller
{
    public function index()
    {
        $data = NamaTable::all();
        return view('nama_table.index', compact('data'));
    }

    public function create()
    {
        return view('nama_table.create');
    }


    public function store(Request $request)
    {

    $request->validate([
        'kolom1' => 'required',
        'kolom2' => 'required',
    ]);

    NamaTable::create($request->all());

    return redirect()->route('nama_table.index')
                    ->with('success', 'Data berhasil ditambahkan.');
    }
}