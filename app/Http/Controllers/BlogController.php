<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function getBlog($id)
        {
             $blog = Blog::find($id);
             return $blog;
        }
    
    public function addBlog(Request $request)
       {
        
           $blog = new Blog;
           $blog->title = $request ->title;
           $blog->details = $request ->details;
           $blog->save();
        
       }

       public function updateBlog(Request $request)
       {
        
           $blog = Blog::find($request->id);
           $blog->title = $request ->title;
           $blog->details = $request ->details;
           $blog->save();
        
       }   

       public function deleteBlog($id)
       {
        
            $blog = Blog::find($id);
            $blog ->delete();
           
       }   
       
       public function searchBlog($param)
       {
        
            $blog = Blog:: where('title',$param) ->get();
            return $blog;
           
       } 

       public function validateDate(Request $req)
       {
           $rules = array(
                'title' => "required",
                'details' => "required"
           );

           $validator = Validator::make($req->all(),$rules);
           if($validator->fails()){
               return $validator->errors();
           }else{
               return["result" => "Valid Request"];
           }

       }
}
