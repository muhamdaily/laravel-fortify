<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $site = Site::first();
        return view('admin.setting.index', compact('site'));
    }
}
