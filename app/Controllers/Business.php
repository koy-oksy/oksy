<?php

namespace App\Controllers;

class Business extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'meta' => [
                'title' => 'Бізнес',
                'description' => '',
                'tags' => '',
            ]
        ];
        return view('business', $data);
    }
}
