<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Database\Model\Food\Order as Order;

class ApiOrder extends Controller
{
    /**
     * @param Request $request
     * @return Order[]|\Illuminate\Database\Eloquent\Collection
     */
	public function showAllOrders(Request $request)
    {
        if ($email = $request->input('email')) {
            return Order::where('ordered_by', $email)->get();
        }
        return Order::all();
    }
    /**
     * @param Request $request
     * @return string
     */
    public function showOneOrder($id)
    {
        return Order::find($id);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
//        $this->validate($request, [
//            'total_cost' => 'required',
//            'ordered_by' => 'required',
//        ]);
        $order = Order::create($request->all());
        return response()->json($order, 201);
    }
}