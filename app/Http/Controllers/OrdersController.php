<?php

namespace App\Http\Controllers;

use App\Order;
use App\Customer;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __invoke(Request $request)
    {
        $orderId = 1;
        $lastOrder = Order::latest()->first();

        if ($lastOrder) {
            $orderId = $lastOrder->order_id + 1;
        }

        $customer = Customer::create([
            'name'   => $request->customer['name'],
            'lname'  => $request->customer['lname'],
            'address'    => $request->customer['address'],
            'phone'  => $request->customer['phone'],
            'message'    => $request->customer['message'] ?: null,
            'order_id'   => $orderId
        ]);

        foreach ($request->order as $order) {
            Order::create([
                'order_id' => $orderId,
                'user_id' => $customer->id,
                'pizza_id' => $order->pizza->id
            ]);
        }
        
        return response()->json([
                'message' => 'Order Placed!',
            ], 200);
    }
}
