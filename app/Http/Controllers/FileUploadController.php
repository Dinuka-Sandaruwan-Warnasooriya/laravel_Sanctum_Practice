<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class FileUploadController extends Controller
{
    public function FileUpload(Request $req)
    {
        $uploaded_files = $req-> file -> store('public/uploads');

        $blog = new Blog;
        $blog->title = $req->title;
        $blog->details = $req->details;
        $blog->document = $req->file->hashName();
        $results= $blog->save();
        if($results){
            return["result"=>"Added"];
        }else{
            return["result" => "Blog Not Added"];
        }

        
    }
}
