<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return ([
            'NIS'=> '3103119048',
            'Nama' => 'Daffa Abhi Nandarifka',
            'Gender' => 'Pria',
            'Phone' => '085601387927',
            'Class' => 'XII RPL 2'
        ]);
}
}