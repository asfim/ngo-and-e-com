<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Display the application homepage.
     */
    public function index(): View
    {
        return view('frontend.home');
    }

    /**
     * Display the Approach page.
     */
    public function approach(): View
    {
        return view('frontend.pages.approach');
    }

    /**
     * Display the Projects page.
     */
    public function projects(): View
    {
        return view('frontend.pages.projects');
    }

    /**
     * Display the Impact page.
     */
    public function impact(): View
    {
        return view('frontend.pages.impact');
    }

    /**
     * Display the About page.
     */
    public function about(): View
    {
        return view('frontend.pages.about');
    }

    /**
     * Display the Donate / Give page.
     */
    public function donate(): View
    {
        return view('frontend.pages.donate');
    }

    /**
     * Display the Contact page.
     */
    public function contact(): View
    {
        return view('frontend.pages.contact');
    }
}
