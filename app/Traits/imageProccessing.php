<?php
namespace App\Traits;
use Illuminate\Http\Request;
trait imageProccessing{
    public function uploadeImage(Request $request,$foldarname){
        $image=$request->file('image')->getClientOriginalName();
        $path=$request->files('image')->storeAS($foldarname,$image, 'imagesfb');
        return $path;
    }
}
