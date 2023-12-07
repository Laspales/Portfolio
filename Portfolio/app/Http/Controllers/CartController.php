<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BubbleTea;
use App\Models\Taste;
use App\Models\Topping;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{

    public function store(Request $request, $id)
    {
        if(!Gate::allows('user', auth()->user()))
        {
            return redirect('login');
        }



        $sugar = $request->input('sugar');
        $topping = $request->input('topping');

        $tastePrice = Taste::findOrFail($id)->price;
        $toppingPrice = Topping::findOrFail($topping)->price;
        $price = $tastePrice + $toppingPrice;

        $bubbleTea = BubbleTea::create([
            'taste_id' => $id,
            'topping_id' => $topping,
            'sugar' => $sugar,
            'price' => $price,
        ]);        

        if($request->session()->has('cart'))
        {
            $cart = $request->session()->get('cart');
            $cart[] = $bubbleTea->id;
            $request->session()->put('cart', $cart);
        }
        else
        {
            $cart = array();
            $cart[] = $bubbleTea->id;
            $request->session()->put('cart', $cart);
        }

        return redirect('products/'.$id)->with('popup', 'open');
    }

    public function show(Request $request)
    {
        $bubbleTeas = array();
        $total = 0;
        $cart = $request->session()->get('cart');

        if($cart) {

            $bubbleTeas = DB::table('bubble_teas')
                            ->join('tastes', 'bubble_teas.taste_id', '=', 'tastes.id')
                            ->join('toppings', 'bubble_teas.topping_id', '=', 'toppings.id')
                            ->select('bubble_teas.id', 'tastes.taste', 'toppings.topping', 'bubble_teas.sugar', 'bubble_teas.price')
                            ->whereIn('bubble_teas.id', $cart)
                            ->get();

            // dd($bubbleTeas);

            foreach($bubbleTeas as $bubbleTea)
            {
                $total += $bubbleTea->price;
            }
        }


        return view('cart', ['items' => $bubbleTeas, 'total' => $total]);
    }

    public  function remove(Request $request, $id)
    {
        $cart = $request->session()->get('cart');
        if (($key = array_search($id, $cart)) !== false) {
            unset($cart[$key]);
            $bubbleTea = BubbleTea::destroy($id);
        }

        $request->session()->put('cart', $cart);   

        return redirect('cart');
    }

    public static function empty()
    {
        $cart = session('cart');
        if($cart) {
            foreach($cart as $id)
            {
                $bubbleTea = BubbleTea::destroy($id);
            }
            session('cart', array());
        }

        return redirect('cart');
    }

}
