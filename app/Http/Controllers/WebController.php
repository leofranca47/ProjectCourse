<?php

namespace App\Http\Controllers;

use App\Support\Seo;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Home - escola',
            'Essa escola vai te levar para o proximo nivel',
            url('/'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.home', [ 'head' => $head ]);
    }

    public function course()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Course - escola',
            'Essa escola vai te levar para o proximo nivel',
            url('/'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.course', [ 'head'=>$head ]);
    }

    public function blog()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Blog - escola',
            'Essa escola vai te levar para o proximo nivel',
            url('/'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.blog', [ 'head'=>$head ]);
    }

    public function contact()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Contact - escola',
            'Essa escola vai te levar para o proximo nivel',
            url('/'),
            asset('images/img_bg_1.jpg')
        );
        return view('front.contact', [ 'head'=>$head ]);
    }
}
