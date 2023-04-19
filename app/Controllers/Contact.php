<?php

namespace App\Controllers;

class Contact extends BaseController
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
        return view('contact', $data);
    }
}
