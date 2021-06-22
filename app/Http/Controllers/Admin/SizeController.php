<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Admin\Item;
use App\Admin\Size;

class SizeController extends Controller
{
    public function size($id)
    {
        $size = Item::with('addon')->find($id);
        Session::flash('page', 'item');
        return view('admin.item.size', compact('size'));
    }
    public function addSize(Request $request, $id)
    {
        if($request->isMethod('post')) {
            $data = $request->all();
            foreach($data['size'] as $key => $val) {
                if(!empty($val)) {
                    // // Prevent duplicate sku check
                    // $attrCount = AddOn::where('sku',$val)->count();
                    // if($attrCount>0){
                    //     return redirect()->back()->with('error_message', 'SKU already exits! Please another SKU.');
                    // }
                    //   // Prevent duplicate sku check
                    //   $attrCount = Productsaddon::where(['product_id'=>$id,  'size'=>$data['size'][$key]])->count();
                    //   if($attrCount>0){
                    //       return redirect()->back()->with('error_message', $data['size'][$key]."\n".'fSize already exits! Please another SKU.');
                    //   }
                    $addon = new Size;
                    $addon->item_id = $id;
                    $addon->size = $val;
                    $addon->price = $data['price'][$key];

                    // $addon->status=1;
                    $addon->save();
                }
            }
            return redirect()->back()->with('success_message', 'Sizehas been added successfully!');
        }
    }
    public function editSize(Request $request, $id)
    {
        if($request->isMethod('post')) {
            $data = $request->all();
            foreach($data['size'] as $key => $val) {
                if(!empty($val)) {
                    // // Prevent duplicate sku check
                    // $attrCount = AddOn::where('sku',$val)->count();
                    // if($attrCount>0){
                    //     return redirect()->back()->with('error_message', 'SKU already exits! Please another SKU.');
                    // }
                    //   // Prevent duplicate sku check
                    //   $attrCount = Productsaddon::where(['product_id'=>$id,  'size'=>$data['size'][$key]])->count();
                    //   if($attrCount>0){
                    //       return redirect()->back()->with('error_message', $data['size'][$key]."\n".'fSize already exits! Please another SKU.');
                    //   }
                    $addon =  Size::find($data['idAttr'][$key]);
                    $addon->size = $val;
                    $addon->price = $data['price'][$key];

                    // $addon->status=1;
                    $addon->save();
                }
            }
            return redirect()->back()->with('success_message', 'Size has been added successfully!');
        }
    }
    public function delete($id)
    {
        Size::where('id', $id)->delete();
        return redirect()->back()->with('success_message', 'Size has been deleted successfully!');
    }

}
