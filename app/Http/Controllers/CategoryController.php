<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
           // echo "<pre>";print_r($data);die;  
        $category=new Category;
        $category->brand_name=$data['bname'];
        $category->products_num=$data['pname'];
        $category->descrption=$data['description'];

        $category->save();
        return redirect('/admin/view-categories')->with('flash_message_success','Brand Added Successfully');
          }
        return view('admin.categories.add_category');
    }
    public function editCategory(Request $request,$id=null){
       // echo "test";die;
       if($request->ismethod('post')){
           $data=$request->all();
           Category::where(['id'=>$id])->update(['brand_name'=>$data['bname'],'products_num'=>$data['pname'],'descrption'=>$data['description']]);
return redirect('/admin/view-categories')->with('flash_message_success','Brand Update Successfully');;
       }
       $categorydetails= Category::where(['id'=>$id])->first();
        return view('admin.categories.edit_category')->with(compact('categorydetails'));
    }
    public function viewCategory(){
        $categories =Category::get();
        $categories=json_decode(json_encode($categories));

        return view('admin.categories.view_categories')->with(compact('categories'));

    }
    
}
