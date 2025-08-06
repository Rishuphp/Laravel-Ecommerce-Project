<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;

class ProductImageController extends Controller
{
    public function update(Request $request){
 $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $sourcePath = $image->getPathName();

        $productImage = new ProductImage();
                    $productImage->product_id = $request->product_id;
                    $productImage->image = 'NUll';
                    $productImage->save();

                     $imageName = $request->product_id.'-'.$productImage->id.'-'.time().'.'.$ext;
                    $productImage->image= $imageName;
                    $productImage->save();

                    
                    $destPath = public_path().'/uploads/product/large/'.$imageName;
                    $iamge = Image::read($sourcePath);
                    $iamge->resize(1400,null,function($constraint){
                        $constraint->aspectRatio();
                    });
                    $iamge->save($destPath);

                   
                    $destPath = public_path().'/uploads/product/small/'.$imageName;
                    $iamge = Image::read($sourcePath);
                    $iamge->resize(300,300);
                       
                    $iamge->save($destPath);

                    return response()->json([
                        'status' =>true,
                        'image_id' =>$productImage->id,
                        'ImagePath' =>asset('uploads/product/small'.$productImage->image),
                        'message' =>'Image Saved Successfully'
                    ]);

    }

    public function destroy(Request $request) {
        $productImage = ProductImage::find($request->id);

        if(empty($productImage)){
             return response()->json([
            'status'=>false,
            'message'=>'Image Not Found'
        ]);
        }

        File::delete(public_path('uploads/product/large/'.$productImage->image));
        File::delete(public_path('uploads/product/small/'.$productImage->image));

        $productImage->delete();
        return response()->json([
            'status'=>true,
            'message'=>'Image Deleted Successfully'
        ]);
    }
}
