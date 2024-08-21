<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
         return view('index');
     }

     public function about()
     {
          return view('about');
      }


      public function contact()
      {
           return view('contact');
       }
       public function chocolate()
       {
            return view('chocolate');
        }


        public function testimonial()
        {
             return view('testimonial');
         }

}
