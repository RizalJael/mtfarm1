<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TbTernak;
use Illuminate\Http\Request;

class TernakController extends Controller
{
    public function index()
    {
        $ternaks = TbTernak::all();
        return response()->json($ternaks);
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
            'status' => 'nullable|string|max:255',
        ]);

        $ternak = TbTernak::create($request->all());
        return response()->json($ternak, 201);
    }

    public function show($id)
    {
        $ternak = TbTernak::find($id);
        if (!$ternak) {
            return response()->json(['message' => 'Ternak not found'], 404);
        }
        return response()->json($ternak);
    }

    public function update(Request $request, $id)
    {
        $ternak = TbTernak::find($id);
        if (!$ternak) {
            return response()->json(['message' => 'Ternak not found'], 404);
        }

        $request->validate([
            'tgl' => 'required|date',
            'jenis' => 'required|string|max:15',
            'jkel' => 'required|string|max:10',
            'kode' => 'required|string|max:15|unique:tb_ternaks,kode,' . $id,
            'induk' => 'nullable|string|max:255',
            'asal' => 'required|in:suplier,kelahiran',
            'asal_kedatangan' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'status' => 'nullable|string|max:255',
        ]);

        $ternak->update($request->all());
        return response()->json($ternak);
    }

    public function destroy($id)
    {
        $ternak = TbTernak::find($id);
        if (!$ternak) {
            return response()->json(['message' => 'Ternak not found'], 404);
        }
        $ternak->delete();
        return response()->json(null, 204);
    }
}
