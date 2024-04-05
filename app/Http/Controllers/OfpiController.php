<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfpiController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'OFPI',
            'list'  => ['Home', 'OFPI']
        ];

        $activeMenu = 'ofpi';

        return view('ofpi.index', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}