<?php

namespace App\Http\Controllers;

use App\Models\TbTernak;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data populasi domba
        $dombaJantan = TbTernak::where('jenis', 'domba')->where('jkel', 'jantan')->count();
        $dombaBetina = TbTernak::where('jenis', 'domba')->where('jkel', 'betina')->count();
        $dombaAnak = TbTernak::where('jenis', 'domba')->where('jkel', 'anak')->count();

        // Data populasi sapi
        $sapiJantan = TbTernak::where('jenis', 'sapi')->where('jkel', 'jantan')->count();
        $sapiBetina = TbTernak::where('jenis', 'sapi')->where('jkel', 'betina')->count();
        $sapiAnak = TbTernak::where('jenis', 'sapi')->where('jkel', 'anak')->count();

        // Data populasi kambing
        $kambingJantan = TbTernak::where('jenis', 'kambing')->where('jkel', 'jantan')->count();
        $kambingBetina = TbTernak::where('jenis', 'kambing')->where('jkel', 'betina')->count();
        $kambingAnak = TbTernak::where('jenis', 'kambing')->where('jkel', 'anak')->count();

        // Total ternak per jenis
        $totalDomba = $dombaJantan + $dombaBetina + $dombaAnak;
        $totalSapi = $sapiJantan + $sapiBetina + $sapiAnak;
        $totalKambing = $kambingJantan + $kambingBetina + $kambingAnak;

        // Total keseluruhan ternak
        $totalTernak = $totalDomba + $totalSapi + $totalKambing;

        return view('dashboard', compact(
            'totalTernak',
            'totalDomba',
            'totalKambing',
            'totalSapi',
            'dombaJantan',
            'dombaBetina',
            'dombaAnak',
            'sapiJantan',
            'sapiBetina',
            'sapiAnak',
            'kambingJantan',
            'kambingBetina',
            'kambingAnak'
        ));
    }
}
