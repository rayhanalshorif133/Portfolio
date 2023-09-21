<?php

namespace App\Http\Controllers;

use App\Models\SiteAsset;
use Illuminate\Http\Request;

class SiteAssetController extends Controller
{
    public function index()
    {
        $site = SiteAsset::first();
        return view('admin.site.index', compact('site'));
    }
}
