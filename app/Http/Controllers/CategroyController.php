<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategroyController extends Controller
{
    protected $categories;
    protected $products;
    protected $results = [];

    public function showCategory()
    {
        $this->categories = Category::allCategory();


        return view('showCategory.showCategory', ['categories' => $this->categories]);
    }

    public function allProducts()
    {
        $this->products = Product::products();


        return view('allProducts.allProducts', ['allProducts' => $this->products]);
    }

    public function categoryWiseProduct($id)

    {
        $this->products = Product::products();
        foreach ($this->products as $product) {
            if (($product['category_id']) == $id) {

                array_push($this->results, $product);

            }
        }
        return view('allProducts.allProducts', ['allProducts' => $this->results]);


    }


}
