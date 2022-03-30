<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Package;
use App\Appliance;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        $categories = Category::all();
        return view('categories',compact('categories'));
    }
    public function storeCategory(Request $request)
    {
        $category = Category::updateOrCreate(['name'=> $request->name],['details'=> $request->details]);
        return redirect()->back();
    }
    public function deleteCategory(Request $request){
        $category = Category::where('id',$request->category_id)->delete();
        return redirect()->back();
    }

    public function items()
    {
        $items = Item::all();
        $categories = Category::all();
        return view('items',compact('items','categories'));
    }
    public function storeItem(Request $request)
    {
        $item = Item::updateOrCreate(['sku'=> $request->sku],['name'=> $request->name,'details'=>$request->details,'category_id'=> $request->category_id,'rating'=> $request->rating,'amount'=> $request->amount]);
        return redirect()->back();
    }
    public function deleteItem(Request $request){
        $item = Item::where('id',$request->item_id)->delete();
        return redirect()->back();
    }

    public function appliances()
    {
        $appliances = Appliance::all();
        return view('appliances',compact('appliances'));
    }
    public function storeAppliance(Request $request)
    {
        $appliance = Appliance::updateOrCreate(['name'=> $request->name],['power_unit'=> $request->power_unit]);
        return redirect()->back();
    }
    public function deleteAppliance(Request $request){
        $appliance = Appliance::where('id',$request->appliance_id)->delete();
        return redirect()->back();
    }
    public function packages()
    {
        $packages = Package::all();
        $items = Item::all();
        return view('packages',compact('packages','items'));
    }
    public function storePackage(Request $request)
    {
        return redirect()->back();
    }
    public function deletePackage(Request $request){
        $package = Package::where('id',$request->package_id)->delete();
        return redirect()->back();
    }


}
