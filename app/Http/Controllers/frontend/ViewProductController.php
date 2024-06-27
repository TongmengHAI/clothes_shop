<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ViewProductController extends Controller
{
    public function Home()
    {
        $products = Product::orderBy("id", "desc")->limit(4)->get();
        $population_product = Product::orderBy("viewer", "desc")->limit(4)->get();

        return view("frontend.home", compact("products", 'population_product'));
    }
    public function ProductDetail($id)
    {
        $product = Product::find($id);
        $update_viwer = Product::where("id", $product->id)->update(["viewer" => ($product->viewer + 1)]);
        $relate_product = Product::where("category_id", $product->category_id)
            ->whereNot("id", $id)
            ->orderBy("id", "desc")
            ->limit(4)->get();

        $words = $product->size;
        $product->size = explode(',', $words);
        return view("frontend.product-detail", compact("product", "relate_product"));
    }

    public function Shop(request $request)
    {
        $cateID = $request->cat;
        $price = $request->price;
        if ($request->page) {
            $page = $request->page;
        } else {
            $page = 1;
        }

        $allProduct = Product::all();
        if (!empty($cateID)) {

            $total_products = Product::where('category_id',$cateID)->count();
            $total_page = ceil($total_products / 3);
            $rs_page = ($page - 1) * 3;
            $products = Product::where('category_id', $cateID)->orderBy("id", "desc")->limit(3)->offset($rs_page)->get();
        }else if($price == 'max'){

            $total_products = Product::count();
            $total_page = ceil($total_products / 3);
            $rs_page = ($page - 1) * 3;
            $products = Product::orderBy("reqular_price", "desc")->limit(3)->offset($rs_page)->get();

        }else if($price == 'min'){

            $total_products = Product::count();
            $total_page = ceil($total_products / 3);
            $rs_page = ($page - 1) * 3;
            $products = Product::orderBy("reqular_price", "asc")->limit(3)->offset($rs_page)->get();

        }else if($price == 'promotion'){

            $total_products = Product::count();
            $total_page = ceil($total_products / 3);
            $rs_page = ($page - 1) * 3;
            $products = Product::whereNot('sale_price','0')->limit(3)->offset($rs_page)->get();
        }
        else {
            $total_products = Product::count();
            $total_page = ceil($total_products / 3);
            $rs_page = ($page - 1) * 3;
            $products = Product::orderBy("id", "desc")->limit(3)->offset($rs_page)->get();

        }
        $category = Category::all();

        return view("frontend.shop", compact("products", "total_page", 'category','cateID','price'));
    }


}
