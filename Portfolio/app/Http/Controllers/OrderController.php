<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\BubbleTea_Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store()
    {
        $order = Order::create([
            'user_id' => auth()->user()->id,
        ]);

        $cart = session()->get('cart');
        foreach($cart as $bubbleTea_id)
        {
            $bubbleTea_order = BubbleTea_Order::create([
                'order_id' => $order->id,
                'bubble_tea_id' => $bubbleTea_id,
            ]);
        }

        session()->forget('cart');

        return redirect('order/show');
    }

    public function show()
    {
        // $orders = DB::table('orders')
        //             ->join('bubble_tea_order', 'orders.id', '=', 'bubble_tea_order.order_id')
        //             ->join('bubble_teas', 'bubble_tea_order.bubble_tea_id', '=', 'bubble_teas.id')
        //             ->join('tastes', 'bubble_teas.taste_id', '=', 'tastes.id')
        //             ->join('toppings', 'bubble_teas.topping_id', '=', 'toppings.id')
        //             ->select('orders.id', 'tastes.taste as taste', 'toppings.topping as topping', 'bubble_teas.sugar', 'bubble_teas.price')
        //             ->where('orders.user_id', '=', auth()->user()->id)
        //             ->get();

        $orders = Order::where('user_id', '=', auth()->user()->id)->get();

        return view('order', ['orders' => $orders]);
    }

    public function details($id)
    {
        $bubbleTeas = DB::table('bubble_teas')
                        ->join('tastes', 'bubble_teas.taste_id', '=', 'tastes.id')
                        ->join('toppings', 'bubble_teas.topping_id', '=', 'toppings.id')
                        ->join('bubble_tea_order', 'bubble_teas.id', '=', 'bubble_tea_order.bubble_tea_id')
                        ->join('orders', 'bubble_tea_order.order_id', '=', 'orders.id')
                        ->select('bubble_teas.id', 'tastes.taste', 'toppings.topping', 'bubble_teas.sugar', 'bubble_teas.price')
                        ->where([
                                ['orders.id', '=', $id],
                                ['orders.user_id', '=', auth()->user()->id],
                        ])
                        ->get();
                    

        return view('order_details', ['bubbleTeas' => $bubbleTeas]);
    }
}
