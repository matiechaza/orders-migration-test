<?php

declare(strict_types=1);

namespace App\Services;

final class OrderMicroservice
{
    public function get(string $id)
    {
        return [
            'id' => 987654678,
            'store_id' => 7856412,
            'subtotal' => 100.00,
            'total' => 100.00,
        ];
    }
}
