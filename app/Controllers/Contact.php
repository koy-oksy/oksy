<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        helper(['html', 'form']);
        $data = [
            'meta' => [
                'title' => 'Контакти',
                'description' => '',
                'tags' => '',
            ]
        ];
        return view('contact', $data);
    }
}
