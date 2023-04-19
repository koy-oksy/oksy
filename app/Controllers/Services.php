<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'meta' => [
                'title' => 'Послуги',
                'description' => '',
                'tags' => '',
            ]
        ];
        return view('services', $data);
    }
}
