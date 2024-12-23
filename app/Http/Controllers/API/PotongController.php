<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Potong;
use App\Models\TbTernak;
use Illuminate\Http\Request;

class PotongController extends Controller
{
    public function index()
    {
        $potongs = Potong::join('tb_ternaks', 'tb_potong.kode', '=', 'tb_ternaks.kode')
            ->select('tb_potong.*', 'tb_ternaks.jenis', 'tb_ternaks.jkel', 'tb_ternaks.asal')
            ->orderBy('tb_potong.tgl', 'asc')
            ->orderBy('tb_potong.kode', 'asc')
            ->orderBy('tb_ternaks.jenis', 'asc')
            ->orderBy('tb_ternaks.jkel', 'asc')
            ->orderBy('tb_potong.bobot', 'asc')
            ->orderBy('tb_potong.tujuan', 'asc')
            ->orderBy('tb_potong.keterangan', 'asc')
            ->get();

        return response()->json($potongs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|exists:tb_ternaks,kode',
            'tgl' => 'required|date',
            'bobot' => 'required|numeric',
            'tujuan' => 'required',
            'keterangan' => 'nullable',
        ]);

        $potong = Potong::create($request->all());
        return response()->json($potong, 201);
    }

    public function show($id)
    {
        $potong = Potong::with('ternak')->findOrFail($id);
        return response()->json($potong);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|exists:tb_ternaks,kode',
            'tgl' => 'required|date',
            'bobot' => 'required|numeric',
            'tujuan' => 'required',
            'keterangan' => 'nullable',
        ]);

        $potong = Potong::findOrFail($id);
        $potong->update($request->all());

        return response()->json($potong);
    }

    public function destroy($id)
    {
        $potong = Potong::findOrFail($id);
        $potong->delete();

        return response()->json(null, 204);
    }

    public function getTernaks()
    {
        $ternaks = TbTernak::all();
        return response()->json($ternaks);
    }
}
