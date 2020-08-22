<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Cart;
use App\Model\Product;
use App\Model\Profile;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function getAllProduct()
    {
        //
        $lowpriceProduct = Product::inRandomOrder()->where("price", "<=", 5000)->limit(4)->get();
        $shoes = Product::inRandomOrder()->where("category_id", "=", "5bafc310-c2b5-4135-909a-3f44aa3f1461")->limit(4)->get();
        $cloths = Product::inRandomOrder()->where("category_id", "=", "a2309dab-fc1b-4ca6-8810-82ed24233842")->with('category')->limit(4)->get();
        // dd($cloths->category);
        return view('pages.home', ['cloths' => $cloths, 'lowpriceProduct' => $lowpriceProduct, 'shoes' => $shoes]);
    }

    public function particularProduct($id)
    {
        //
        $all_product = Product::where("category_id", "=", $id)->paginate(6);
        // dd($all_product);
        return view('pages.particular', ['all_product' => $all_product]);
    }

    public function adminPage()
    {
        return view('admin.pages.index');
    }

    public function getCartItems(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($cart->totalQuantity);
        return response()->json(['qty' => $cart->totalQuantity]);
        // return redirect()->route('product.index');
    }

    public function showCartItems()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // dd($cart->totalQuantity);
        if ($oldCart === null) {

            return response()->json(['qty' => '0']);
        }
        return response()->json(['qty' => $oldCart->totalQuantity]);
        // return redirect()->route('product.index');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('pages.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Auth::check()) {
            return redirect()->route('user.login');
        }
        if (!Session::has('cart')) {
            return redirect()->route('product.listCartItem')->with('toast_error', 'You Have No Item in Cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $user_id = Auth::user()->id;
        $user = Profile::where('user_id', "=", $user_id)->get();
        return view('pages.checkout', ['totalQuantity' => $cart->totalQuantity, 'totalPrice' => $cart->totalPrice, 'profile' => $user]);
    }

    public function getSingleProduct($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('pages.single', ['product' => $product]);
    }
}
