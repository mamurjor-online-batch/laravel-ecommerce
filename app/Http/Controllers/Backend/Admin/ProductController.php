<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest('id')->paginate(20);
        return view('backend.pages.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status','=',1)->get();
        return view('backend.pages.products.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //validate rules
        $imageName = $this->imageUpload($request->file('feature_image'),'images/products/');

        // gallery image upload
        if($request->hasFile('gallery_image')){
            foreach ($request->file('gallery_image') as $value) {
                $fileEx = $value->getClientOriginalExtension();
                $imageName = rand().time().'.'.$fileEx;
                $value->move('images/products/gallery/',$imageName);
                $imageArray[] = 'images/products/gallery/'.$imageName;
                $imageNames = json_encode($imageArray);
            }
        }else{
            $imageNames = null;
        }

        Product::create([
            'user_id'        => Auth::id(),
            'category_id'    => $request->category,
            'name'           => $request->product_name,
            'slug'           => Str::slug($request->slug),
            'short_desc'     => $request->description,
            'long_desc'      => $request->content,
            'sku'            => $request->slug,
            'qty'            => $request->product_quantity,
            'regular_price'  => $request->regular_price,
            'discount_price' => $request->discount_price,
            'feature_image'  => $imageName,
            'gallery_image'  => $imageNames,
            'is_approved'    => $request->approved,
        ]);

        return redirect()->route('admin.products.index')->with('success','Product has been saved.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::where('status','=',1)->get();
        return view('backend.pages.products.form', compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //validate rules
        $imageName = $this->imageUpdate($request->file('feature_image'),'images/products/',$product->feature_image);

        if ($request->hasFile('gallery_image')) {
            // old image remove from storage
            foreach (json_decode($product->gallery_image) as $value) {
                file_exists($value) ? unlink($value) : false;
            }

            // gallery image update
            foreach ($request->file('gallery_image') as $value) {
                $fileEx = $value->getClientOriginalExtension();
                $imageName = rand().time().'.'.$fileEx;
                $value->move('images/products/gallery/',$imageName);
                $imageArray[] = 'images/products/gallery/'.$imageName;
                $imageNames = json_encode($imageArray);
            }
        }


        $product->update([
            'user_id'        => Auth::id(),
            'category_id'    => $request->category,
            'name'           => $request->product_name,
            'slug'           => Str::slug($request->slug),
            'short_desc'     => $request->description,
            'long_desc'      => $request->content,
            'sku'            => $request->slug,
            'qty'            => $request->product_quantity,
            'regular_price'  => $request->regular_price,
            'discount_price' => $request->discount_price,
            'feature_image'  => $imageName,
            'gallery_image'  => $imageNames,
            'is_approved'    => $request->approved,
        ]);

        return redirect()->route('admin.products.index')->with('success','Product has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->imageRemove($product->feature_image); //old file remove from storage

        $product->delete();

        return back()->with('success','Product has been removed.');;
    }

}
