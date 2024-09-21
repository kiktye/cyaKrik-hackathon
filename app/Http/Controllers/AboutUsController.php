<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Faq;


class AboutUsController extends Controller
{
   /**
     * Display the About Us page.
     */
    public function index()
    {
        $about = AboutUs::first();  // Fetch the first row of AboutUs
        $faqs = Faq::all();

        return view('about.index', compact('about', 'faqs'));
    }
}
