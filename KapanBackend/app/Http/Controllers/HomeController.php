<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller {

    /**
     * go to Angular!
     *
     * @return mixed
     */
    public function index()
    {
        return File::get(base_path().'/public/index.html');
    }

}