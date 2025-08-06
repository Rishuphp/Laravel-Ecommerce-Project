<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
public function index(Request $request){
    $brands = Brand::latest('id');

     if($request->get('keyword')){
            $brands =$brands->where('name','like','%'.$request->get('keyword').'%');
        }
    $brands = $brands->paginate(10);
    return view('admin.brands.list',compact('brands'));
}
    
    public function create() {
        return view('admin.brands.create');
    }

    public function store(Request $request) {
         $validator = Validator::make($request->all(),[
            'name' =>'required',
            'slug' =>'required|unique:brands'
         ]);
         if($validator->passes()){
            $brand = new Brand();
            $brand->name = $request->name;
            $brand->slug = $request->slug;
            $brand->status = $request->status;
            $brand->save();

             $request->session()->flash('success','Brand Added Successfully');

            return response()->json([
                'status'=>true,
                'message'=>'Brand Added Successfully'
            ]);
         }else{
            return response()->json([
                'status'=>false,
                'errors'=>$validator->errors()
            ]);
         }
    }

    public function edit($id,Request $request)  {
       
         $brand = Brand::find($id);
         if(empty($brand)){
            $request->session()->flash('error','Record Not Found');
            return redirect()->route('brands.index');
         }
        
        return view('admin.brands.edit',compact('brand'));
    }

    public function update($id, Request $request) {

    $brand = Brand::find($id);
    if (empty($brand)) {
        $request->session()->flash('error', 'Record Not Found');
        return response()->json([
            'status' => false,
            'notFound' => true,
            'message' => 'Record Not Found'
        ]);
    }

    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'slug' => 'required|unique:brands,slug,' . $brand->id.'id',
    ]);

    if ($validator->passes()) {

        $brand->name = $request->name;
        $brand->slug = $request->slug;
        $brand->status = $request->status;
        $brand->save();

        $request->session()->flash('success', 'Brand Updated Successfully');

        return response()->json([
            'status' => true,
            'message' => 'Brand Updated Successfully'
        ]);
    } else {
        return response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ]);
    }
}
 public function destroy($id, Request $request) {
        $brand = Brand::find($id);

        if(empty($brand)){
            $request =session()->flash('error','Record Not Found');
            return response([
                'status' =>false,
                'notFound' =>true
            ]);
        }

        $brand->delete();

         $request->session()->flash('success','Brand Deleted Successfully');

        return response([
            'status'=>true,
            'message'=>'Brand Deleted Successfully'
            
        ]);
    }

}
