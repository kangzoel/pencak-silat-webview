<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $forms = Form::where('parent_id', NULL)->get();

        return view('homepage', compact('forms'));
    }
}
