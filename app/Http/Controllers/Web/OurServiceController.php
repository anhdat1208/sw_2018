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
                $englishParams = ['slug' => 'digital-strategy'];
                $frenchParams = ['slug' => 'strategie-digitale'];
                $vietnameseParams = ['slug' => 'tu-van-truyen-thong'];
                break;
            case 'thiet-ke-da-phuong-tien':
            case 'web-graphic-design':
            case 'web-graphic-design':
                $view = 'web_graphic_design';
                $englishParams = ['slug' => 'web-graphic-design'];
                $frenchParams = ['slug' => 'web-graphic-design'];
                $vietnameseParams = ['slug' => 'thiet-ke-da-phuong-tien'];
                break;
            case 'lap-trinh-thiet-ke-web':
            case 'web-development':
            case 'developpement-site-web':
                $view = 'web_development';
                $englishParams = ['slug' => 'web-development'];
                $frenchParams = ['slug' => 'developpement-site-web'];
                $vietnameseParams = ['slug' => 'lap-trinh-thiet-ke-web'];
                break;
            case 'phan-mem-ung-dung':
            case 'custom-development-software':
            case 'solution-sur-mesure':
                $view = 'custom_development_software';
                $englishParams = ['slug' => 'solution-sur-mesure'];
                $frenchParams = ['slug' => 'developpement-site-web'];
                $vietnameseParams = ['slug' => 'phan-mem-ung-dung'];
                break;
            case 'toi-uu-hoa-tim-kiem-seo':
            case 'search-engine-optimization-seo':
            case 'referencement-naturel-seo':
                $view = 'service_seo';
                $englishParams = ['slug' => 'search-engine-optimization-seo'];
                $frenchParams = ['slug' => 'referencement-naturel-seo'];
                $vietnameseParams = ['slug' => 'toi-uu-hoa-tim-kiem-seo'];
                break;
            case 'dedicated-team':
            case 'equipe-dediee':
            case 'doi-ngu':
                $view = 'dedicated_team';
                $englishParams = ['slug' => 'dedicated-team'];
                $frenchParams = ['slug' => 'equipe-dediee'];
                $vietnameseParams = ['slug' => 'doi-ngu'];
                break;
        }

        return view('web.our_service.detail', compact('view', 'englishParams', 'vietnameseParams', 'frenchParams'));
    }
}
