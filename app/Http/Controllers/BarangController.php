<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BarangController extends Controller
{
    function show(){
        $data['product'] = Product::all();
        return view('beranda',$data);
   }

   function detail($id){
    $data ['product'] = Product::find($id);
    return view('detail_product',$data);
   }

    //
}
