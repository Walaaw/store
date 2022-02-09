<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
class CategoryController extends Controller
{
    public function list(){
        $categories= Category::all();
        return view('categories.list',['categories'=> $categories]);
    }
    public function create(){
        return view('categories.create');
    }
    public function save(StoreCategoryRequest $request){
        $validatedData = $request->validated();
        $category=new Category;
        $category->name= $validatedData['name'];
        $category->save();
        return redirect('/cat');
    }
    public function edit($id)  
    {  
     $category= Category::find($id);  
    return view('categories.edit',['category'=> $category]);  
    }  
    public function SaveEdit(StoreCategoryRequest $request,$id){
        $validatedData = $request->validated();       
        $category = Category::find($id);  
        $category->name= $validatedData['name'];
        $category->save();
        return redirect('/cat');
    }
    public function delete($id)  
    {  
    $category = Category::where('id','=', $id)->get(); 
     if($category){
         $category->each->delete();
         Session::flash('flash_message', 'Task successfully deleted!');
         return redirect('/cat');

     }
     return redirect('/cat');
    } 
    public function show($id){
        $category= Category::find($id); 
        $data = Category::join('articals', 'categories.id', '=', 'articals.category_id')
               ->where('categories.id','=', $category->id)
               ->get();
        return view('categories.show', ['category' =>  $category],['data' =>  $data]);

    } 
   
}
