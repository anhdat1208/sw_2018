<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $clients = $this->getClients();
        return view('web.home.index', compact('clients'));
    }

    private function getClients()
    {
        return [
            ['name' => 'ILA', 'logo' => 'ila.png', 'url' => ''],
            ['name' => 'EES', 'logo' => 'ees.png', 'url' => ''],
            ['name' => 'DMS', 'logo' => 'dms.png', 'url' => ''],
            ['name' => 'First viec lam', 'logo' => 'first-viet-lam.png', 'url' => ''],
            ['name' => 'Comet', 'logo' => 'comet.png', 'url' => ''],
            ['name' => 'Eduniversal Ranking', 'logo' => 'ranking.png', 'url' => ''],
            ['name' => 'Porsche Club', 'logo' => 'porsche-club.png', 'url' => ''],
            ['name' => 'Mua ban xe', 'logo' => 'muabanxe.png', 'url' => ''],
            ['name' => 'Guidformation', 'logo' => 'guidformation.png', 'url' => ''],
        ];
    }
}
