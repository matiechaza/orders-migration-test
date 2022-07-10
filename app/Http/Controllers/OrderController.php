<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function show(string $id): Response|Application|ResponseFactory
    {
        $order = Order::find($id);

        return response([
            'id' => $order->id,
            'store_id' => $order->store_id,
            'subtotal' => $order->subtotal,
            'total' => $order->total,
            'customer_firstname' => $order->customer_firstname,
            'customer_lastname' => $order->customer_lastname,
            'customer_phone' => $order->customer_phone,
            'payment_status' => $order->payment_status,
            "payment_details" => [
                'payment_method' => $order->payment_method,
                'payment_credit_card_company' => $order->payment_credit_card_company,
                'payment_installments' => $order->payment_installments,
            ],
        ]);
    }
}
