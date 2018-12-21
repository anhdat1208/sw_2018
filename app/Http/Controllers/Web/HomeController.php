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
            ['name' => 'ILA', 'logo' => 'ila.png', 'url' => 'https://ila.edu.vn/'],
            ['name' => 'EES', 'logo' => 'ees.png', 'url' => 'http://www.eduniversal-deans-vote.com/'],
            ['name' => 'DMS', 'logo' => 'dms.png', 'url' => 'http://digitalmarketingsoftware.net/'],
            ['name' => 'First viec lam', 'logo' => 'first-viet-lam.png', 'url' => 'http://first-viec-lam.com/'],
            ['name' => 'Comet', 'logo' => 'comet.png', 'url' => 'http://cometgiadung.vn/'],
            ['name' => 'Eduniversal Ranking', 'logo' => 'ranking.png', 'url' => 'http://www.eduniversal-ranking.com/'],
            ['name' => 'Porsche Club', 'logo' => 'porsche-club.png', 'url' => 'http://porscheclub.org.sg/'],
            ['name' => 'Mua ban xe', 'logo' => 'muabanxe.png', 'url' => 'http://mua-ban-xe.com/'],
            ['name' => 'Guidformation', 'logo' => 'guidformation.png', 'url' => 'http://www.apres-bac-s.com/'],
        ];
    }
}
