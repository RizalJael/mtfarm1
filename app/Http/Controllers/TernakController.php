<?php

namespace App\Http\Controllers;

use App\Models\TbTernak;
use Illuminate\Http\Request;

class TernakController extends Controller
{
    public function index()
    {
        $ternaks = TbTernak::all();
        return view('ternak.index', compact('ternaks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl' => 'required|date',
            'jenis' => 'required|string|max:15',
            'jkel' => 'required|string|max:10',
            'kode' => 'required|string|max:15|unique:tb_ternaks',
            'induk' => 'nullable|string|max:255',
            'asal' => 'required|in:suplier,kelahiran',
            'asal_kedatangan' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        TbTernak::create($request->all());

        return redirect('/ternak');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tgl' => 'required|date',
            'jenis' => 'required|string|max:15',
            'jkel' => 'required|string|max:10',
            'kode' => 'required|string|max:15|unique:tb_ternaks,kode,' . $id,
            'induk' => 'nullable|string|max:255',
            'asal' => 'required|in:suplier,kelahiran',
            'asal_kedatangan' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        $ternak = TbTernak::find($id);
        $ternak->update($request->all());

        return redirect('/ternak');
    }

    public function destroy($id)
    {
        $ternak = TbTernak::find($id);
        $ternak->delete();

        return redirect('/ternak');
    }

    public function create()
    {
        return view('ternak.create');
    }

    public function edit($id)
    {
        $ternak = TbTernak::find($id);
        return view('ternak.edit', compact('ternak'));
    }
}
