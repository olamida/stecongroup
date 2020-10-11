<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('frontend.about');
    }


    /**
     * @return \Illuminate\View\View
     */
	public function partner()
    {
        return view('frontend.partners');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function services()
    {
        return view('frontend.services');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function shop()
    {
        return view('frontend.shop');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function blog()
    {
        return view('frontend.blog');
    }


}
