<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller {

    public function index()
    {
        return File::get(base_path().'/public/index.html');
    }

}