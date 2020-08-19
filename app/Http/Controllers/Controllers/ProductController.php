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

        $products = Product::paginate(6);
        $lowpriceProduct = Product::inRandomOrder()->where("price", "<=", 8000)->limit(4)->get();
        return view('pages.home', ['products' => $products, 'lowpriceProduct' => $lowpriceProduct]);
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
