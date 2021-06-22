<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Admin\Item;
use App\Admin\AddOn;
class AddOnController extends Controller
{
    public function addOn($id)
    {
        $addon = Item::with('addon')->find($id);
        Session::flash('page', 'item');
        return view('admin.item.addon', compact('addon'));
    }
    public function addAddOn(Request $request, $id)
    {
        if($request->isMethod('post')) {
            $data = $request->all();
            foreach($data['add_on'] as $key => $val) {
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
                    $addon = new AddOn;
                    $addon->item_id = $id;
                    $addon->add_on = $val;
                    $addon->price = $data['price'][$key];
                    // $addon->status=1;
                    $addon->save();
                }
            }
            return redirect()->back()->with('success_message', 'Add-Ons has been added successfully!');
        }
    }
    public function editAddOn(Request $request, $id)
    {
        if($request->isMethod('post')) {
            $data = $request->all();
            foreach($data['add_on'] as $key => $val) {
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
                    $addon =  AddOn::find($data['idAttr'][$key]);
                    $addon->add_on = $val;
                    $addon->price = $data['price'][$key];
                    // $addon->status=1;
                    $addon->save();
                }
            }
            return redirect()->back()->with('success_message', 'Add-Ons has been added successfully!');
        }
    }
    public function delete($id)
    {
        AddOn::where('id', $id)->delete();
        return redirect()->back()->with('success_message', 'Add-Ons has been deleted successfully!');

    }


}
