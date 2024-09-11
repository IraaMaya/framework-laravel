<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderBaruController extends Controller
{
    protected $filePath = 'data/orders.json';

    public function index()
    {
        if (Storage::exists($this->filePath)) {
            $ordersJson = Storage::get($this->filePath);
            $orders = json_decode($ordersJson, true);
            if (!is_array($orders)) {
                $orders = $this->getDefaultOrders();
            }
        } else {
            $orders = $this->getDefaultOrders();
        }

        return view('orders.index', compact('orders'));
    }

    public function destroy($id)
    {
        $ordersJson = Storage::get($this->filePath);
        $orders = json_decode($ordersJson, true);
        if (!is_array($orders)) {
            $orders = $this->getDefaultOrders();
        }
        $orders = array_filter($orders, fn($order) => $order['id'] != $id);
        Storage::put($this->filePath, json_encode(array_values($orders)));

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }

    private function getDefaultOrders()
    {
        return [
            ['id' => 1, 'customer_name' => 'Alice Johnson', 'total_amount' => 99.99],
            ['id' => 2, 'customer_name' => 'Bob Smith', 'total_amount' => 149.50],
        ];
    }
}

