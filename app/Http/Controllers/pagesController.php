<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getProducts(){
        return view("pages.products");
    }
    public function getDishwash(){
        return view("pages.dishwash");
    }
    public function getPowder(){
        return view("pages.powder");
    }
    public function getToilet(){
        return view("pages.toilet");
    }
    public function getContact(){
        return view("pages.contact");
    }
    public function getGallery(){
        return view("pages.gallery");
    }
}
