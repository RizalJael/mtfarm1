<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mortal;
use App\Models\TbTernak;
use Illuminate\Http\Request;

class MortalController extends Controller
{
    public function index()
    {
        $mortals = Mortal::join('tb_ternaks', 'tb_mortals.kode', '=', 'tb_ternaks.kode')
            ->select('tb_mortals.*', 'tb_ternaks.jenis', 'tb_ternaks.jkel')
            ->orderBy('tb_mortals.tgl', 'asc')
            ->orderBy('tb_mortals.kode', 'asc')
            ->orderBy('tb_ternaks.jenis', 'asc')
            ->orderBy('tb_ternaks.jkel', 'asc')
            ->orderBy('tb_mortals.penyebab', 'asc')
            ->get();

        return response()->json($mortals);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|exists:tb_ternaks,kode',
            'tgl' => 'required|date',
            'penyebab' => 'required',
        ]);

        $mortal = Mortal::create($request->all());
        return response()->json($mortal, 201);
    }

    public function show($id)
    {
        $mortal = Mortal::with('ternak')->findOrFail($id);
        return response()->json($mortal);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|exists:tb_ternaks,kode',
            'tgl' => 'required|date',
            'penyebab' => 'required',
        ]);

        $mortal = Mortal::findOrFail($id);
        $mortal->update($request->all());

        return response()->json($mortal);
    }

    public function destroy($id)
    {
        $mortal = Mortal::findOrFail($id);
        $mortal->delete();

        return response()->json(null, 204);
    }

    public function getTernaks()
    {
        $ternaks = TbTernak::all();
        return response()->json($ternaks);
    }
}
