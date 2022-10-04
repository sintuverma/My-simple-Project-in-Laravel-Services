<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function myfile()
    {
        return view('upload');
    }
    public function uploadFile(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        // hum log filename me  time()function har samay naya timestamp(time bana kar deta hai) aur apna name concatinate kara rahe hai and getClientOriginalExtension() ye image ka original extension nikal kar de dega 

        $filename = time()."-vinod.".$request->file('uploadfile')->getClientOriginalExtension();
        echo $filename;
        
    //    echo $request->file('uploadfile')->store('uploads');

       //echo $request->file('uploadfile')->storeAs('uploads',$filename);

       //after creating a new foder storage->app->public->images {store method apko public folder tak le jayega bas uske baad aap apne accoding folder path dekar image store karwa skate hai ek storeAs method tab use karna hai jab apko apna file name dekar file save karani hai other vise store method use kare dono example comment kiye hai read carefully.

       //echo $request->file('uploadfile')->storeAs('public/images',$filename);

       //echo $request->file('uploadfile')->store('public/images');we can make new folder for store files
       return view('upload');
    }
}
