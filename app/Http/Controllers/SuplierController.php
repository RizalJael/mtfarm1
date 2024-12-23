<?php

namespace App\Http\Controllers;

use App\Models\TbTernak;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index()
    {
        $ternaks = TbTernak::where('asal', 'suplier')->get();
        return view('suplier.index', compact('ternaks'));
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl' => 'required|date',
            'jenis' => 'required|string|max:15',
            'jkel' => 'required|string|max:10',
            'kode' => 'required|string|max:15|unique:tb_ternaks',
            'induk' => 'nullable|string|max:255',
            'asal' => 'required|in:suplier,kelahiran', // Pastikan 'asal' selalu 'suplier'
            'asal_kedatangan' => 'required|string', // Asal kedatangan wajib diisi
            'keterangan' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        TbTernak::create($request->all());

        return redirect('/suplier');
    }

    public function show($id)
    {
        $ternak = TbTernak::find($id);
        return view('suplier.show', compact('ternak'));
    }

    public function edit($id)
    {
        $ternak = TbTernak::find($id);
        return view('suplier.edit', compact('ternak'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tgl' => 'required|date',
            'jenis' => 'required|string|max:15',
            'jkel' => 'required|string|max:10',
            'kode' => 'required|string|max:15|unique:tb_ternaks,kode,' . $id,
            'induk' => 'nullable|string|max:255',
            'asal' => 'required|in:suplier,kelahiran', // Pastikan 'asal' selalu 'suplier'
            'asal_kedatangan' => 'required|string', // Asal kedatangan wajib diisi
            'keterangan' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        $ternak = TbTernak::find($id);
        $ternak->update($request->all());

        return redirect('/suplier');
    }

    public function destroy($id)
    {
        $ternak = TbTernak::find($id);
        $ternak->delete();

        return redirect('/suplier');
    }
}
