<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use App\Models\Products as ProductModel;

class Products extends Controller
{
     //Home page show active and inactive product
      public function index()
      {
              //Show list of products

               return view('prouduts.index',["items"=>ProductModel::get()]);
      }
     //Create view
      public function create()
      {
        return view('prouduts.create');
      }
      public function store(Request $request):RedirectResponse
      {
        // dd($request->all());
         //Validation Rules
         $rules=[
          "title"=>"required|max:255|min:5",
          "desc"=>"required",
          "image"=>"nullable|image|mimes:jpg,png|max:1000",
          "status"=>"required"
         ];

         //Validation Message
        $messages=[
            "title.required"=>"Products title missing!",
            "title.max"=>"Too long title",
            "title.min"=>"Too short title",
            "desc.required"=>'Description is missing',
            "image.image"=>"Provide valid image file",
            "image.mimes"=>"Provide JPG or PNG image file",
            "image.max"=>"Maximum 1000kb size image can be uploaded!"
        ];

        Validator::make($request->all(),$rules,$messages)->validate();
        //Save Product
        if($request->hasFile('image'))
        {
              $imageName=time().'.'.$request->image->extension();

              $request->image->storeAs('/public/images',$imageName);
              $data=[
                "title"=>$request->title,
                "desc"=>$request->desc,
                "image"=>$imageName,
                "status"=>$request->status,
              ];
              ProductModel::create($data);
              return redirect()->route('home')->with('success','Product Added');
        }else{
            ProductModel::create($request->all());
            return redirect()->route('home')->with('success','Product Added');
        }


      }
     //Show
     public function show($product_id)
     {
        return view('prouduts.show',['item'=>ProductModel::findOrFail($product_id)]);
     }
     //Edit And update
     //Status off on
     //Delete Operation
}
