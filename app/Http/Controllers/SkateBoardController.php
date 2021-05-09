<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\SkateBoard;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SkateBoardController extends Controller
{
    public function skateboard()
    {
        $skateboards = SkateBoard::paginate(15);

       // return view('skateboards')->with(compact('skateboards')); view-da vizual gorunush ucun
        return response()->json(['Skateboards'=>$skateboards],200);
    }

    public function get_order_details($id)
    {
        $skateboard_details = SkateBoard::where(['id' => $id])->first();

      //  return view('order')->with(compact('skateboard_details')); view-da vizual gorunush ucun
        return response()->json($skateboard_details,200);
    }

    public function order(Request $request, $id = null)
    {
        $validator = Validator::make($request->all(),[
            'product_id' => 'required|max:255|numeric',
            'color_id' => 'required|max:255|numeric',
            'amount' => 'required|numeric|min:1|max:10',
            'address' => 'required|max:255|min:3',
            'phone' => 'required_without:email',
            'email' => 'required_without:phone',
            'image' => 'sometimes|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/orders'), $imageName);
            $image = asset('/images/orders/' . $imageName);   //seklin tam ünvani
        } else {
            $image = '';
        }
        try {
            Orders::create
            ([
                'product_id' => "dmkfmf",
                'color_id' => $request->color_id,
                'amount' => $request->amount,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'image' => $image,
            ]);
                $message = "Sifarişiniz uğurla verilmişdir !!";
                return response()->json(['message' => $message], 200);

        } catch (QueryException $e) {

            $message = "Uğursuz cəhd !!";
            return response()->json(['message' => $message], 403);
        }

    }

    public function show_orders()
    {
        $orders = Orders::orderBy('id', 'desc')->paginate(15);

        // return view('orders_list')->with(compact('orders')); view-da vizual gorunush ucun

        return response()->json(['Skateboards'=>$orders],200);
    }

    public function set_delivery_and_preparation_date(Request $request, $id = null)
    {
        $order = Orders::where(['id' => $id])->first();

        $validator = Validator::make($request->all(),[
            'preparation_date' => 'required|date|after:' . substr($order->created_at, 0, 10),
            'delivery_date' => 'required|date|after:' . $request->preparation_date
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        try {
            Orders::where(['id' => $id])->update
            ([
                'preparation_date' => $request->preparation_date,
                'delivery_date' => $request->delivery_date,
            ]);
          //  return back()->with('success', 'Uğurlu Əməliyyat !!'); view-da vizual gorunush ucun

            $message = "Uğurlu Əməliyyat !!";
            return response()->json(['message' => $message], 200);

        } catch (QueryException $e) {

           // return back()->with('error', 'Uğursuz cəhd!'); view-da vizual gorunush ucun
            $message = "Uğursuz cəhd !!";
            return response()->json(['message' => $message], 403);

        }
    }
}
