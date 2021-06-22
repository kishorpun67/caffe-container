<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Admin\Item;
use App\Admin\Category;


class HomeController extends Controller
{
    public function home()
    {
        // $category= Category::with('items')->get();
        return view('front.home');
    }

    public function price(Request $request)
    {
        $data = $request->all();
        // echo $data['item_no'];
        $size = 0;
        $addons = 0;
        if (isset($data['size'])&& !empty($data['size'])) {
            $size = $data['size'][0];
        }
        // echo($size);
        if (isset($data['addon'])&& !empty($data['addon'])) {
            foreach ($data['addon'] as $addon) {
                $addons =$addons+ $addon;
            }
        }
        $result = ($size + $addons);

        return response()->json($result, 200);

    }

    public function calculate(Request $request)
    {
        $data = $request->all();
        $result = $data['total_price']*$data['item_no'];
        return response()->json($result, 200);

    }

}
