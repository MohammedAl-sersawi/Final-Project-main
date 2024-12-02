<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return view('web.index', compact('departments'));
    }
}
