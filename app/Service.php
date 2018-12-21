<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function getServiceIdBySlug()
    {
        switch ($slug) {
            case 'tu-van-truyen-thong':
            case 'digital-strategy':
            case 'strategie-digitale':
                return 1;
            case 'thiet-ke-da-phuong-tien':
            case 'web-graphic-design':
                return 2;
            case 'lap-trinh-thiet-ke-web':
            case 'web-development':
            case 'developpement-site-web':
                return 3;
            case 'phan-mem-ung-dung':
            case 'custom-development-software':
            case 'solution-sur-mesure':
                return 4;
            case 'toi-uu-hoa-tim-kiem-seo':
            case 'search-engine-optimization-seo':
            case 'referencement-naturel-seo':
                return 5;
            case 'dedicated-team':
            case 'doi-ngu':
                return 6;
        }
    }
}
