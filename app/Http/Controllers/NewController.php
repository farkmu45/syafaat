<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItems;
use App\Payment;
use App\Qurban;
use App\QurbanItem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class NewController extends Controller
{
    public function index()
    {
        $qurban = QurbanItem::all();
        return view('new.index', compact('qurban'));
    }

    public function faq()
    {
        return view('new.faq');
    }

    public function show($name)
    {
        $qurban = QurbanItem::where('name', $name)->first();
        return view('new.detail', compact('qurban'));
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

        return view('new.product')->withList($list->paginate(9))->withQurban($qurban)->withCount($countItem);
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
                return redirect('/cart');
            }

            Cookie::queue('qurban',json_encode($temp));

            return redirect('/cart');
        }

        $data = json_decode(Cookie::get('qurban'), true);
        
        if (!Cookie::get('qurban')) {
            return view('new.cart');
        }

        $total_price = 0;

        foreach ($data as $key => $data) {
            $total_price += $data['total_price'];
        }

        $data = json_decode(Cookie::get('qurban'));

        return view('new.cart', compact('payments'))->withData($data)->withTotal($total_price);
    }

    public function checkout(Request $request)
    {
        // return $request->all();
        $qurban_id = $request->qurban_id;
        $qty = $request->qty;
        $nama_pembeli = $request->nama_pembeli;
        $val = [];
        $total_price = 0;



        for ($i=0; $i < count($qurban_id); $i++) { 
            $val[] = [
                'qurban_id' => $qurban_id[$i],
                'qty' => $qty[$i],
                'nama_pembeli' => $nama_pembeli[$i],
            ];

            $cekdata = QurbanItem::where('id', $qurban_id[$i])->first();
            $total_price += $cekdata->price * (int)$qty[$i];
        }

        // return $total_price;

        
        
        // return $val;

        
        // if (!Cookie::get('qurban')) {
        //     return redirect('/qurban');
        // }


        $payments = Payment::all();
        // $total_price = 0;
        // $data = json_decode(Cookie::get('qurban'), true);

        // foreach ($request->behalf_of as $key => $value) {
        //     $data[$key]['behalf_of'] = $value;
        // }

        // foreach ($request->quantity as $key => $value) {
        //     $data[$key]['quantity'] = $value;
        //     $data[$key]['total_price'] = $data[$key]['price'] * $data[$key]['quantity'];
        // }

        // // return $data;
        
        // // Cookie::queue('qurban', json_encode($data));

        // if (!Cookie::get('qurban')) {
        //     return redirect('/qurban');
        // }
        
        
        // $total_price = 0;

        // foreach ($data as $key => $val) {
        //     $total_price += $val['total_price'] * $val['quantity'];
        // }
        

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

        for ($i=0; $i < count($qurban_id); $i++) { 
            $val[] = [
                'qurban_id' => $qurban_id[$i],
                'qty' => $qty[$i],
                'nama_pembeli' => $nama_pembeli[$i],
            ];

            OrderItems::create([
                'qurban_item_id' => $qurban_id[$i],
                'quantity' => (int)$qty[$i],
                'order_id' => $result->id,
                'behalf_of' => $nama_pembeli[$i]
            ]);

            $cekdata = QurbanItem::where('id', $qurban_id[$i])->first();
            $total_price += $cekdata->price * (int)$qty[$i];
        }

        // foreach ($data as $item) {
        //     OrderItems::create([
        //         'qurban_item_id' => $item['qurban_id'],
        //         'quantity' => $item['quantity'],
        //         'order_id' => $result->id,
        //         'behalf_of' => $item['behalf_of']
        //     ]);
        // }

        Cookie::queue(Cookie::forget('qurban'));

        // return ['data' => $data, 'total' => $total_price, 'payments' => $payments];
        return view('new.confirmation')->withResult($result)->withUnique($unique);
        // return view('checkout')->withData($val)->withTotal($total_price)->withPayments($payments);
        // redirect('/detail', ['order_id' => $result->id, 'unik' => $unique]);
    }

    // public function detail($id, $unique)
    // {
    //     $item = OrderItems::where('order_id', $id);

    //     return view('c')
    // }



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

        return redirect('/cart');
    }

    public function updatecart(Request $request)
    {
        // return response()->json(['data' => $request->data]);
        $data = $request->data;
        // $temp = [];
        //     $data = json_decode(Cookie::get('qurban'), true);

        //     foreach ($data as $value) {
        //             array_push($temp, $value);
                
        //     }
        // return response()->json(['data' => Cookie::get('qurban')]);
        return response()->json(['data' => json_decode(Cookie::make('tess', json_encode($data)))]);
        // echo json_encode($temp);
        // $temp = [];
        // $data = $request->data;
        // foreach ($data as $val) {
        //     // echo json_encode($val);
        //     // $temp = $data;
        //     array_push($temp, $val);
        // }
        // $temp = json_encode($temp);
        // // Cookie::queue(Cookie::forget('qurban'));
        // Cookie::queue(Cookie::make('qurban', $temp));
        // return $temp;
        // Cookie::queue('qurban', $temp, 1);
        // return Cookie::get('qurban');
        // $data = Cookie::get('qurban');
        // echo $data;
        // echo json_encode($temp);
        // Cookie::queue('qurban', json_encode($data));
        // return json_decode(Cookie::get('qurban'), true);
        // return true;
        
    //   $response = new Response('Hello World');
    //   $response->withCookie(cookie('name', $temp));
    //   $value = $request->cookie('name');
    //   echo $value;
    }
}
