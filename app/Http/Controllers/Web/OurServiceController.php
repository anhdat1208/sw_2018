<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class OurServiceController extends Controller
{
    public function index()
    {
        return view('web.our_service.index');
    }

    public function detail($slug)
    {
        // TO DO: Optimize this block
        switch ($slug) {
            case 'tu-van-truyen-thong':
            case 'digital-strategy':
            case 'strategie-digitale':
                $view = 'digital_strategy';
                break;
            case 'thiet-ke-da-phuong-tien':
            case 'web-graphic-design':
            case 'web-graphic-design':
                $view = 'web_graphic_design';
                break;
            case 'lap-trinh-thiet-ke-web':
            case 'web-development':
            case 'developpement-site-web':
                $view = 'web_development';
                break;
            case 'phan-mem-ung-dung':
            case 'custom-development-software':
            case 'solution-sur-mesure':
                $view = 'custom_development_software';
                break;
            case 'toi-uu-hoa-tim-kiem-seo':
            case 'search-engine-optimization-seo':
            case 'referencement-naturel-seo':
                $view = 'service_seo';
                break;
            case 'dedicated-team':
            case 'doi-ngu':
                $view = 'dedicated_team';
                break;
            default:
                $view = 'digital_strategy';
                break;
        }

        return view('web.our_service.detail', compact('view'));
    }
}
