<?php

namespace App\Http\Controllers;
use App\Models\Artical;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;


class ArticalController extends Controller
{
    public function list(){
        $articals= Artical::all();
        return view('articals.list',['articals'=> $articals]);
    }
    public function create(){
        return view('articals.create');
    }
    public function save(StoreArticleRequest $request){
        $validatedData = $request->validated();
        $artical=new Artical;
        $artical->name=$validatedData['name'];
        $artical->slug=$validatedData['slug'];
        $artical->details=$validatedData['details'];
        $artical->category_id=$validatedData['category_id'];
        $artical->confirmed=$validatedData['confirmed'];
        $artical->save();
        return redirect('/art');
    }
    public function edit($id)  
    {  
     $artical= Artical::find($id);  
    return view('articals.edit',['artical'=>$artical]);  
    }  
    public function SaveEdit(StoreArticleRequest $request,$id){
        $validatedData = $request->validated(); 
        $artical = Artical::find($id);  
        $artical->name=$validatedData['name'];
        $artical->slug=$validatedData['slug'];
        $artical->details=$validatedData['details'];
        $artical->category_id=$validatedData['category_id'];
        $artical->confirmed=$validatedData['confirmed'];
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
        $data =Artical ::join('categories', 'articals.category_id', '=', 'categories.id')
        ->where('categories.id','=', $artical->category_id)
        ->get();
        return view('articals.show', ['artical' => $artical],['data' =>$data]);

    } 
   
   
}
