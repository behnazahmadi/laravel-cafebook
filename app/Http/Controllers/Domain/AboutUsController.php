<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function show()
    {
        return view("domain.fa.pages.about.index");
    }
}
