<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Qurban;
use App\QurbanItem;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FacadesFile;

class QurbanItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qurbanItems = QurbanItem::all();
        return view('admin.qurbanItems.index', ['title' => 'Qurbans Items', 'qurbanItems' => $qurbanItems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $qurbans = Qurban::all();
        return view('admin.qurbanItems.create', ['title' => 'Add Qurbans Items', 'qurbans' => $qurbans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Tinify\setKey("9krHPgyjMb8GlwyZlzjnTNWMfvSbdSxq");
        $data = $request->validate([
            'name' => 'required',
            'qurban_id' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'required|file|between:0,2048|mimes:jpeg,jpg,png',
        ]);

        $filetype = $request->file('photo')->extension();
        $source = \Tinify\fromFile($data['photo']);
        $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
        $source->toFile($text);
        $data['photo'] = Storage::putFile('qurbanItemPhotos', new File(public_path($text)));
        FacadesFile::delete(public_path($text));

        QurbanItem::create($data);
        return redirect('/admin/qurbans')->with('status', 'Qurban Item Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QurbanItem  $qurbanItem
     * @return \Illuminate\Http\Response
     */
    public function show(QurbanItem $qurbanItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QurbanItem  $qurbanItem
     * @return \Illuminate\Http\Response
     */
    public function edit(QurbanItem $qurbanItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QurbanItem  $qurbanItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QurbanItem $qurbanItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QurbanItem  $qurbanItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(QurbanItem $qurbanItem)
    {
        //
    }
}
