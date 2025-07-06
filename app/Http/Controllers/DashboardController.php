<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Pastikan model Contact sudah dibuat

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil total data kontak
        $totalContacts = Contact::count();

        // Simulasi pengunjung dan bounce rate — bisa diganti dengan logika nyata
        $totalVisitors = 6800;
        $bounceVisitors = 884; // contoh: 13% dari totalVisitors

        $visitorsRate = number_format(($totalVisitors / 100000) * 100, 1); // misal target 100.000
        $bounceRate = number_format(($bounceVisitors / $totalVisitors) * 100, 1);

        return view('dashboard', [
            'visitorsRate' => $visitorsRate,
            'bounceRate'   => $bounceRate,
            'totalContacts'=> $totalContacts,
        ]);
    }
}
