<?php
namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $customers = Customer::all();
        $items = Item::all();

        foreach ($customers as $customer) {
            $order = Order::factory()->create(['customer_id' => $customer->id]);

            $order->items()->attach($items->random(3)->pluck('id')->toArray()); // Attach 3 random items
        }
    }
}
