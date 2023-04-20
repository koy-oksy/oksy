<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'meta' => [
                'title' => 'Блог',
                'description' => '',
                'tags' => '',
            ]
        ];
        return view('blog', $data);
    }
}