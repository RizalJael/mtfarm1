<?php

namespace App\Http\Controllers;

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

        return view('potong.index', compact('potongs'));
    }

    public function create()
    {
        $ternaks = TbTernak::all();
        return view('potong.create', compact('ternaks'));
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

        Potong::create($request->all());

        return redirect('/potong');
    }

    public function edit($id)
    {
        $potong = Potong::findOrFail($id);
        $ternaks = TbTernak::all();
        return view('potong.edit', compact('potong', 'ternaks'));
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

        return redirect('/potong');
    }

    public function destroy($id)
    {
        $potong = Potong::findOrFail($id);
        $potong->delete();

        return redirect('/potong');
    }
}
