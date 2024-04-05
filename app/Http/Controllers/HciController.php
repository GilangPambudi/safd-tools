<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HciController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'HCI',
            'list'  => ['Home', 'HCI']
        ];

        $activeMenu = 'hci';

        return view('hci.index', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
