<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItems;
use App\Payment;
use App\Qurban;
use App\QurbanItem;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class FrontEndController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('index')->withList(QurbanItem::all())->withSlider($slider);
    }

    public function list(Request $request)
    {
        $qurban = Qurban::withCount('items')->get();

        $list = QurbanItem::where('id', '!=', 0);

        $countItem = QurbanItem::all()->count();

        if ($request->has('type')) {
            $list->where('qurban_id', $request->type);
        }

        if ($request->has('sort_price')) {
            if ($request->sort_price == '1') {
                $list->orderBy('price', 'desc');
            } else {
                $list->orderBy('price', 'asc');
            }
        }

        $list->orderBy('price','desc');

        return view('category')->withList($list->paginate(9))->withQurban($qurban)->withCount($countItem);
    }

    public function show(QurbanItem $qurban)
    {
        $items = QurbanItem::all()->random(2);
        return view('single-product')->withQurban($qurban)->withItems($items);
    }

    public function cart(Request $request)
    {
        $temp = [];

        if ($request->has('order_id')) {
            $data = json_decode(Cookie::get('qurban'), true);

            foreach ($data as $key => $value) {
                if ($key != $request->cart_id) {
                    array_push($temp, $value);
                }
            }

            if (sizeof($temp) == 0) {
                Cookie::queue(Cookie::forget('qurban'));
                return redirect('/cart');
            }
            Cookie::queue('qurban',json_encode($temp));

            return redirect('/cart');
        }


        $total_price = 0;
        $data = json_decode(Cookie::get('qurban'), true);

        if (!Cookie::get('qurban')) {
            return view('cart');
        }

        foreach ($data as $key => $data) {
            $total_price += $data['total_price'];
        }

        $data =
            json_decode(Cookie::get('qurban'));

        return view('cart')->withData($data)->withTotal($total_price);
    }

    public function checkout()
    {

        if (!Cookie::get('qurban')) {
            return redirect('/qurban');
        }


        $payments = Payment::all();
        $total_price = 0;
        $data = json_decode(Cookie::get('qurban'), true);

        foreach ($data as $key => $data) {
            $total_price += $data['total_price'];
        }
        $data =
            json_decode(Cookie::get('qurban'));
        return view('checkout')->withData($data)->withTotal($total_price)->withPayments($payments);
    }

    public function processCheckout(Request $request)
    {

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

        Cookie::queue(Cookie::forget('qurban'));
        return view('/confirmation')->withResult($result)->withUnique($unique);
    }

    public function check(Request $request)
    {
        if ($request->has('order_id')) {
            return view('check')->withOrder(Order::where('code', $request->order_id)->first());
        } else {
            return view('check')->withOrder(0);
        }
        
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

        return redirect('cart');
    }

    public function editCart(Request $request)
    {
        $data = [];
        $data = json_decode(Cookie::get('qurban'), true);
        
        foreach ($request->behalf_of as $key => $value) {
            $data[$key]['behalf_of'] = $value;
        }

        foreach ($request->quantity as $key => $value) {
            $data[$key]['quantity'] = $value;
            $data[$key]['total_price'] = $data[$key]['price'] * $data[$key]['quantity'];
        }
        
        Cookie::queue('qurban', json_encode($data));
        if ($request->checkout == "true") {
            return redirect('/checkout');
        }
        return redirect()->back();
    }
}
