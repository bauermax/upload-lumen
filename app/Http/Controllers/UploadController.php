<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{



    public function uploadFile(Request $request){

      for($i=0;$i<10000000;$i++){}

      $base  = "http://dev.localhost/upload/public/uploads/";

      //TODO ADD CONTROLS
      $file = $request->file('file');

      $path = $file->getClientOriginalName();

      $resp = $file->move('uploads',$path);

      return response()->json(['serverMessage' => 'UPLOAD SUCCESS','url' => $base.$path]);
    }

}
