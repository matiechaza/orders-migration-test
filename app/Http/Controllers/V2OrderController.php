<?php

declare(strict_types=1);

namespace App\Http\Controllers;


use App\Services\OrderMicroservice;

final class V2OrderController extends Controller
{
    public function show(string $id)
    {
        $service = new OrderMicroservice();
        $order = $service->get($id);

        return response([
            'id' => $order['id'],
            'store_id' => $order['store_id'],
            'subtotal' => $order['subtotal'],
            'total' => $order['total'],
        ]);
    }
}
