<?php

namespace App\Controllers;

class Single extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'meta' => [
                'title' => 'Blogdetails',
                'description' => '',
                'tags' => '',
            ]
        ];
        return view('single', $data);
    }
}
