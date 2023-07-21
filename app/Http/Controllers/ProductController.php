<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Session;

class ProductController extends Controller
{

    //protectd for sell route
    public function __construct()
    {
        $this->middleware('auth')->except('home','show');  // except function use for show spacic page
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $product= Product::orderBy('created_at','desc')->paginate(5);
        return view('welcome', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }


    public function list()
    {
        return view('list');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'details'=>'required',
            'image'=>'required|image||mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);
      
        $image=$request->file('image');
        $fileName=time().'.'.$image->getClientOriginalExtension();
        Storage::disk('public')->put($fileName, File::get($image));

        $product= new Product();
        $product->title= $request->input('title');
        $product->price= $request->input('price');
        $product->description= $request->input('details');
        $product->seller_id=Auth::user()->id;
        $product->image= $fileName;
        $product->save();

        return redirect('/details/'.$product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return view('details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     return view('edit');
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    static function cartItem(){
        $user_id= Session::get('user');
        return Product::where('id', $user_id)->count();
    }
}
