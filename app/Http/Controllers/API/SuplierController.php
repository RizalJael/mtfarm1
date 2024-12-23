<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TbTernak;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index()
    {
        $ternaks = TbTernak::where('asal', 'suplier')->get();
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
            'asal' => 'required|in:suplier',
            'asal_kedatangan' => 'required|string',
            'keterangan' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        $request->merge(['asal' => 'suplier']);
        $ternak = TbTernak::create($request->all());
        return response()->json($ternak, 201);
    }

    public function show($id)
    {
        $ternak = TbTernak::where('asal', 'suplier')->find($id);
        if (!$ternak) {
            return response()->json(['message' => 'Ternak suplier not found'], 404);
        }
        return response()->json($ternak);
    }

    public function update(Request $request, $id)
    {
        $ternak = TbTernak::where('asal', 'suplier')->find($id);
        if (!$ternak) {
            return response()->json(['message' => 'Ternak suplier not found'], 404);
        }

        $request->validate([
            'tgl' => 'required|date',
            'jenis' => 'required|string|max:15',
            'jkel' => 'required|string|max:10',
            'kode' => 'required|string|max:15|unique:tb_ternaks,kode,' . $id,
            'induk' => 'nullable|string|max:255',
            'asal_kedatangan' => 'required|string',
            'keterangan' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        $request->merge(['asal' => 'suplier']);
        $ternak->update($request->all());
        return response()->json($ternak);
    }

    public function destroy($id)
    {
        $ternak = TbTernak::where('asal', 'suplier')->find($id);
        if (!$ternak) {
            return response()->json(['message' => 'Ternak suplier not found'], 404);
        }
        $ternak->delete();
        return response()->json(null, 204);
    }
}
