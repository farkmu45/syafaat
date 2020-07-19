<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItems;
use App\Payment;
use App\QurbanItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class NewController extends Controller
{
    public function index()
    {
        $qurban = QurbanItem::all();
        return view('new.index', compact('qurban'));
    }

    public function show($name)
    {
        $qurban = QurbanItem::where('name', $name)->first();
        return view('new.detail', compact('qurban'));
    }

    public function cart(Request $request)
    {
        $temp = [];

        $payments = Payment::all();

        if ($request->has('order_id')) {
            $data = json_decode(Cookie::get('qurban'), true);

            foreach ($data as $key => $value) {
                if ($key != $request->cart_id) {
                    array_push($temp, $value);
                }
            }

            if (sizeof($temp) == 0) {
                Cookie::queue(Cookie::forget('qurban'));
                return redirect('/baru/keranjang');
            }

            Cookie::queue('qurban',json_encode($temp));

            return redirect('/baru/keranjang');
        }


        $total_price = 0;
        $data = json_decode(Cookie::get('qurban'), true);

        if (!Cookie::get('qurban')) {
            return view('new.cart');
        }

        foreach ($data as $key => $data) {
            $total_price += $data['total_price'];
        }

        $data =
            json_decode(Cookie::get('qurban'));

        return view('new.cart', compact('payments'))->withData($data)->withTotal($total_price);
    }

    public function checkout(Request $request)
    {

        if (!Cookie::get('qurban')) {
            return redirect('/qurban');
        }


        $payments = Payment::all();
        $total_price = 0;
        $data = json_decode(Cookie::get('qurban'), true);

        foreach ($request->behalf_of as $key => $value) {
            $data[$key]['behalf_of'] = $value;
        }

        foreach ($request->quantity as $key => $value) {
            $data[$key]['quantity'] = $value;
            $data[$key]['total_price'] = $data[$key]['price'] * $data[$key]['quantity'];
        }
        
        Cookie::queue('qurban', json_encode($data));

        foreach ($data as $key => $data) {
            $total_price += $data['total_price'];
        }
        $data = json_decode(Cookie::get('qurban'));

        if (!Cookie::get('qurban')) {
            return redirect('/qurban');
        }
        
        
        $total_price = 0;
        $data = json_decode(Cookie::get('qurban'), true);

        foreach ($data as $key => $data) {
            $total_price += $data['total_price'];
        }


        $data = json_decode(Cookie::get('qurban'), true);

        $code = 'OR' . random_int(10000, 99999);

        $order = $request->validate([
            'email' => 'required',
            'username' => 'required',
            'payment_id' => 'exists:payments,id',
            'phone' => 'required',
        ]);

        $unique = random_int(10, 999);
        $order['code'] = $code;
        $order['total'] = $total_price + $unique;
        $order['status'] = 1;

        $result = Order::create($order);

        foreach ($data as $item) {
            OrderItems::create([
                'qurban_item_id' => $item['qurban_id'],
                'quantity' => $item['quantity'],
                'order_id' => $result->id,
                'behalf_of' => $item['behalf_of']
            ]);
        }

        return ['data' => $data, 'total' => $total_price, 'payments' => $payments];

        // return view('checkout')->withData($data)->withTotal($total_price)->withPayments($payments);
    }

    public function saveToCart(Request $request)
    {
        // return Cookie::queue(Cookie::forget('qurban'));

        $temp = [];

        if (Cookie::get('qurban')) {
            $data = [
                'qurban_id' => $request->qurban_id,
                'name' => $request->name,
                'quantity' => $request->quantity,
                'price' => (int) $request->qurban_price,
                'photo' => $request->photo,
                'behalf_of' => $request->behalf_of,
                'total_price' => $request->quantity * $request->qurban_price
            ];

            $temp = json_decode(Cookie::get('qurban'));

            array_push($temp, $data);

            $temp = json_encode($temp);
        } else {
            $data = [[
                'qurban_id' => $request->qurban_id,
                'name' => $request->name,
                'quantity' => $request->quantity,
                'price' => (int) $request->qurban_price,
                'photo' => $request->photo,
                'behalf_of' => $request->behalf_of,
                'total_price' => $request->quantity * $request->qurban_price
            ]];

            $temp = json_encode($data);
        }

        Cookie::queue('qurban', $temp);

        return redirect('baru/keranjang');
    }
}
