<?php

namespace App\Http\Controllers;

class ElementController extends Controller
{
    public function showElements()
    {
        $elements = [
            [
                'tagname' => 'h1',
                'text' => 'Hello world H1',
                'class' => '',
            ],
            [
                'tagname' => 'p',
                'text' => 'Hello world P',
                'class' => '',
            ],
            [
                'tagname' => 'span',
                'text' => 'Hello world Span',
                'class' => '',
            ],
            [
                'tagname' => 'img',
                'src' => 'https://community-cdn-digitalocean-com.global.ssl.fastly.net/o4oPb4LjSJsiP6bjSfyxanKe',
                'class' => '',
            ],
        ];

        return view('elements.index', compact('elements'));
    }
}
