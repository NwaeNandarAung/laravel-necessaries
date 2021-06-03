<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Image List  from the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $images = Image::paginate(6);
        return view('image.index',['images'=>$images]);
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */

    public function uploadImage(Request $request){
        $request->validate([
            'file' => 'required|unique:images,name|mimes:jpg,jpeg,png,gif,bmp|max:2048',
        ]);

        $image = new Image;
        if($request->file()) {
            $imageName = time().'-'.$request->file->getClientOriginalName();
            $path= $request->file->storeAs('/images',$imageName,['disk' => 'public_uploads']);

            $image->name = $imageName;
            $image->company_id = 1;
            $image->path = $path;
            $image->save();
            return back()->with('success','File has been uploaded.');
        }
    }

    /**
     * Search the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchImage(Request $request)
    {
        $search = $request->get('search');
        $images = Image::where('name', 'LIKE', "%" . $search . "%")->paginate(6);
        return view('image.index',['images'=>$images]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteImage($imageId)
    {
        $image = Image::find($imageId);
        $image->delete();
        return redirect('/image')->with('success', 'Image deleted successfully');
    }
}
