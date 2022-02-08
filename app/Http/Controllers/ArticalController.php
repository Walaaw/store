<?php

namespace App\Http\Controllers;
use App\Models\Artical;

use Illuminate\Http\Request;

class ArticalController extends Controller
{
    public function list(){
        $articals= Artical::all();
        return view('articals.list',['articals'=> $articals]);
    }
    public function create(){
        return view('articals.create');
    }
    public function save(Request $request){
        $artical=new Artical;
        $artical->name=$request->name;
        $artical->slug=$request->slug;
        $artical->details=$request->details;
        $artical->category_id=$request->category_id;
        $artical->confirmed=$request->confirmed;
        $artical->save();
        return redirect('/art');
    }
    public function edit($id)  
    {  
     $artical= Artical::find($id);  
    return view('articals.edit',['artical'=>$artical]);  
    }  
    public function SaveEdit(Request $request,$id){
         $artical = Artical::find($id);  
         $artical->name= $request->name;
         $artical->save();
        return redirect('/art');
    }
    public function delete($id)  
    {  
        $artical = Artical::where('id','=', $id)->get(); 
     if($artical){
        $artical->each->delete();
         return redirect('/art');

     }
     return redirect('/art');
    } 
    public function show($id){
        $artical= Artical::find($id);  
        return view('articals.show', ['artical' =>  $artical]);

    } 
   
}
