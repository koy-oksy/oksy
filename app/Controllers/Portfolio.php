<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'meta' => [
                'title' => 'Портфоліо',
                'description' => '',
                'tags' => '',
            ]
        ];
        return view('portfolio', $data);
    }
}
