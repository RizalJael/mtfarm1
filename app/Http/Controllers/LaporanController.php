<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Mortal;
use App\Models\Potong;
use App\Models\TbTernak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // Tanggal default
        $startDate = $request->input('start_date', Carbon::now()->subMonth()->format('Y-m-d'));
        $endDate = $request->input('end_date', Carbon::now()->format('Y-m-d'));

        // Jika tombol reset ditekan, set tanggal ke null
        if ($request->has('reset')) {
            $startDate = null;
            $endDate = null;
        }

        $laporan = DB::table('tb_ternaks')
            ->leftJoin('tb_potong', 'tb_ternaks.kode', '=', 'tb_potong.kode')
            ->leftJoin('tb_mortals', 'tb_ternaks.kode', '=', 'tb_mortals.kode')
            ->select(
                'tb_ternaks.id',
                'tb_ternaks.tgl',
                'tb_ternaks.jenis',
                'tb_ternaks.jkel',
                'tb_ternaks.induk',
                'tb_ternaks.asal',
                'tb_ternaks.asal_kedatangan',
                DB::raw(
                    "CASE
                        WHEN tb_potong.kode IS NOT NULL THEN 'Keluar'
                        WHEN tb_mortals.kode IS NOT NULL THEN 'Keluar'
                        ELSE 'Masuk'
                    END AS masuk_keluar"
                )
            );

        // Jika tanggal tidak null, tambahkan filter tanggal ke query
        if ($startDate && $endDate) {
            $laporan->whereBetween('tb_ternaks.tgl', [$startDate, $endDate]);
        }

        $laporan = $laporan->orderBy('tb_ternaks.tgl', 'DESC')
            ->get();

        return view('laporan.index', compact('laporan', 'startDate', 'endDate'));
    }
}
