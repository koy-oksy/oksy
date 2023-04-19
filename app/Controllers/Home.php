<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'meta' => [
                'title' => 'Головна',
                'description' => '',
                'tags' => '',
            ]
        ];
        return view('home', $data);
    }
}
