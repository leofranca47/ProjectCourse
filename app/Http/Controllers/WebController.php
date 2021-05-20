<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Support\Seo;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - Home - escola',
            'Essa escola vai te levar para o proximo nivel',
            url('/'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
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
        $posts = Post::orderBy('created_at', 'DESC')->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - Blog - escola',
            'Essa escola vai te levar para o proximo nivel',
            url('/'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.blog', [
            'head'=>$head,
            'posts'=>$posts
            ]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();

        $head = $this->seo->render(
            env('APP_NAME') . $post->title,
            $post->subtitle,
            url('/blog/'. $uri),
            asset(\App\Support\Cropper::thumb($post->cover, 800, 450))
        );

        return view('front.article', [
            'head'=>$head,
            'post'=>$post
            ]);
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
