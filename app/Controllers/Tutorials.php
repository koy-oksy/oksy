<?php

namespace App\Controllers;

class Tutorials extends BaseController
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
        return view('tutorials', $data);
    }
}
