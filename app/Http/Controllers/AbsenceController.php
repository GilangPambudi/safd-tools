<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Absence',
            'list'  => ['Home', 'Absensi']
        ];

        $activeMenu = 'absence';

        return view('absences.index', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function generator()
    {
        $breadcrumb = (object) [
            'title' => 'Absence Generator',
            'list'  => ['Home', 'Absensi', 'Generator']
        ];

        $activeMenu = 'absence';

        return view('absences.generator', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function finder()
    {
        $breadcrumb = (object) [
            'title' => 'Absence Finder',
            'list'  => ['Home', 'Absensi', 'Finder']
        ];

        $activeMenu = 'absence';

        return view('absences.finder', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
