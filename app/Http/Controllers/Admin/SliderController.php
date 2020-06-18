<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', ['title' => 'Slider', 'sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create', ['title' => 'Add Slider']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Tinify\setKey(env('TINIFY_KEY'));
        $data = $request->validate([
            'image' => 'required|file|between:0,2048|mimes:jpeg,jpg,png'
        ]);

        $filetype = $request->file('image')->extension();
        $source = \Tinify\fromFile($data['image']);
        $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
        $source->toFile($text);
        $data['image'] = Storage::putFile('sliderPhotos', new File(public_path($text)));
        FacadesFile::delete(public_path($text));

        Slider::create($data);
        return redirect('/admin/sliders')->with('status', 'Slider Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', ['title' => 'Add Slider', 'slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        \Tinify\setKey(env('TINFIY_KEY'));
        $data = $request->validate([
            'image' => 'file|between:0,2048|mimes:jpeg,jpg,png'
        ]);

        if ($request['image']) {
            Storage::delete($slider->image);
            $filetype = $request->file('image')->extension();
            $source = \Tinify\fromFile($data['image']);
            $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
            $source->toFile($text);
            $data['image'] = Storage::putFile('sliderPhotos', new File(public_path($text)));
            FacadesFile::delete(public_path($text));
        }

        $slider->update($data);
        return redirect('/admin/sliders')->with('status', 'Slider Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
