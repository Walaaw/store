<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    public function show_categories(){
        $data=['phones','watches','sport wear','other'];
        $products=['iphoe1','iphoe2','iphoe3','iphoe4','iphoe5','iphoe6','iphoe7','iphoe8','iphoe9','iphoe10','iphoe11','iphoe12'];
        return view('categories',['name'=> $data],['product'=>$products]);
    }
    public function product_details($id){
        $products_detail = [
            [
            "name" => "iphone 1", 
            "id" => "1", 
            "price" => 100]
            ,
            [
            "name" => "iphone 2", 
            "id" => "2", 
            "price" => 30
            ],
            [
            "name" => "iphone 3", 
            "id" => "2", 
            "price" => 30
            ],
            [
                "name" => "iphone 4", 
                "id" => "2", 
                "price" => 30
            ],
            [
                "name" => "iphone 5", 
                "id" => "2", 
                "price" => 30
            ]
            ,
            [
                "name" => "iphone 6", 
                "id" => "2", 
                "price" => 30
            ],
            [
                "name" => "iphone 7", 
                "id" => "2", 
                "price" => 30
            ],
            [
                "name" => "iphone 8", 
                "id" => "2", 
                "price" => 30
            ],
            [
                "name" => "iphone 9", 
                "id" => "2", 
                "price" => 30
            ],
            [
                "name" => "iphone 10", 
                "id" => "2", 
                "price" => 30
            ],
            [
                "name" => "iphone 11", 
                "id" => "2", 
                "price" => 30
            ],
            [
                "name" => "iphone 12", 
                "id" => "2", 
                "price" => 30
            ]
        ]; 
        foreach ( $products_detail as $item ) {
            if ($item['id']==$id) {
                $product = $item;
            }
        }
        return view('products',['product'=>$product]);
    }
   
    

   
    
}
