<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteAssetController extends Controller
{
    public function index()
    {
        return view('admin.site.index');
    }
}
