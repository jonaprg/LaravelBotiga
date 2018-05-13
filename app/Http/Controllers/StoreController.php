<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('store.index', compact('products'));
    }
    public function show($slug) {
        $product =  Product::where('slug', $slug)->first();
        return view('store.show', compact('product'));
    }

    public function search(Request $request)
    { 
        //!$name ?? '';
       //, $name = null
         $allAlumnes = DB::table('products')->get();
        if($request->ajax()) {
           
            $output = '';
            $alumnes = DB::table('products')-where('name', 'LIKE', '%'.$request->search.'%')->orderBy('name', 'desc')->get();
            
            if($alumnes) {
                foreach ($alumnes as $key => $alumne) {
                     $output .= "
                                <div class='product white-panel'>
                        <h3>$alumne->name</h3>
                        <img src='$alumne->image' alt=''>
                        <div class='product-info panel'>
                            <p>$alumne->extract</p>
                            <h4><span>Preu: {{number_format($alumne->price,2)}}</span>€</h4>
                            <p>
                                
                                <a class='btn btn-warning' href='" . \Request::route('cart-add', $alumne->slug) . "'>
                                    Comprar
                                </a>
                                <a class='btn btn-primary' href='" . \Request::route('product-detail', $alumne->slug) . "'>
                                    <i class='fa fa-chevron-circle-right'></i> Detall
                                </a>
                            </p>
                        </div>
                    </div>";
                }
               
            }
            else {
                foreach ($allAlumnes as $key => $alumne) {
                    $output .= "
                    <div class='product white-panel'>
                        <h3>$alumne->name</h3>
                        <img src='$alumne->image' alt=''>
                        <div class='product-info panel'>
                            <p>$alumne->extract</p>
                            <h4><span>Preu: {{number_format($alumne->price,2)}}</span>€</h4>
                            <p>
                                
                                <a class='btn btn-warning' href='" . \Request::route('cart-add', $alumne->slug) . "'>
                                    Comprar
                                </a>
                                <a class='btn btn-primary' href='" . \Request::route('product-detail', $alumne->slug) . "'>
                                    <i class='fa fa-chevron-circle-right'></i> Detall
                                </a>
                            </p>
                        </div>
                    </div>";
               }
            }
            return Response($output);
        }
        
    }

}
