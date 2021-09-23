<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return ([
            'NIS'=> '3103119027',
            'Nama' => 'Arban Rezky Ramadan',
            'Gender' => 'laki-laki',
            'Phone' => '087712354749',
            'Class' => 'XII RPL 1'
        ]);
}
}