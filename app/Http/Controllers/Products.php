<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class Products extends Controller
{
     //Home page show active and inactive product
      public function index()
      {
               return view('prouduts.index');
      }
     //Create view
      public function create()
      {
        return view('prouduts.create');
      }
      public function store(Request $request):RedirectResponse
      {
         dd($request->all());
      }
     //Show
     //Edit And update
     //Status off on
     //Delete Operation
}
