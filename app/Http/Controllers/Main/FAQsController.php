<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FAQsController extends Controller
{
    
    public function index()
    {

        // Pass products to the view
        return view('main.pages.faqs');
    }
}