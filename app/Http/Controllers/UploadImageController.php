<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;


    class UploadImageController extends Controller
    {
                public function Image()
                    {
                        return view('image');
                    }

            //This is image uploading section 
 
                public function store(Request $request)
                {
                    $image = new Image;

                    $image->photoname = $request->input('photoname');
                    $image->description = $request->input('description');
                    $image->photographer = $request->input('photographer');
                    $image->floorprice = $request->input('floorprice');

                    if ($request->hasFile('file')) {
                        $imagePath = $request->file('file')->store('public/images');
                        $imageUrl = Storage::url($imagePath);
                        $image->imagePath = $imageUrl;
                    }

                    $image->save();

                    return redirect()->back()->with('success', 'Image successfully uploaded.');
                }
                            
    



    }
    

