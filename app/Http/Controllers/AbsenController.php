<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;

class AbsenController extends Controller
{
    public function index()
    {
        $data = Absen::all();
        return view('index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string|unique:absens,nisn',
            'kelas' => 'required|string|max:50',
        ]);

        Absen::create($request->all());
        return redirect()->route('absen.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Absen::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string|unique:absens,nisn,' . $id,
            'kelas' => 'required|string|max:50',
        ]);

        $data = Absen::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('absen.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = Absen::findOrFail($id);
        $data->delete();

        return redirect()->route('absen.index')->with('success', 'Data berhasil dihapus');
    }
}


