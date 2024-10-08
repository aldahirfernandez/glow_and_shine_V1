<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function CategoryButton() 
    {
        return view('components.CategoryButton');
    }

    public function CardSection()
    {
        return view('components.CardSection');
    }

    public function CardBrand() 
    {
        return view('components.CardBrand');
    }

    public function Button()
    {
        return view('components.Button');
    }

    public function CardReviews()
    {
        return view('components.CardReviews');
    }

    public function Banner()
    {
        return view('components.Banner');
    }

    public function TSubtitle() {
        return view('components.TSubtitle');
    }

    public function Footer() {
        return view('components.Aldahir.Footer');
    }
}
