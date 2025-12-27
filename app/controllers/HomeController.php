<?php

class HomeController extends Controller
{
    public function index()
    {
        $this->view('public/home');
    }

    public function about()
    {
        $this->view('public/about');
    }

    public function rekomendasi()
    {
        $this->view('public/rekomendasi');
    }
}
