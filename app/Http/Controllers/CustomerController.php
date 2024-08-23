<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $query = Customer::query();

        if ($request->has('search')) {
            $search = trim($request->input('search'));

            $query->where(function ($query) use ($search) {
                $query->where('email', 'like', "%$search%")
                      ->orWhereHas('orders', function ($query) use ($search) {
                          $query->where('id', (int) $search)
                                ->orWhereHas('items', function ($query) use ($search) {
                                    $query->where('name', 'like', "%$search%");
                                });
                      });
            });
        }

        $customers = $query->with(['orders.items'])->get();

        return view('customers.index', compact('customers'));
    }
}
