<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryImagesResource;
use App\Models\Category;
use App\Models\CategoryImages;
use Illuminate\Http\Request;
use App\Traits\ImageProcessing;

class CategoryImagesController extends Controller
{
    use ImageProcessing;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.imagescategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('img')){
        
            foreach ($request->file('img') as $img) {
                # code...
                
                $image = new CategoryImages();
                        $image->category_id = $request->category_id;
                        $image->img = $this->setImage($img, 'categories', 450, 450);
                        $image->save();
            }}
           
            return redirect()->route('categories.show',$request->category_id);
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryImages  $categoryImages
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryImages $categoryImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryImages  $categoryImages
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryImages $categoryImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryImages  $categoryImages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryImages $categoryImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryImages  $categoryImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , CategoryImages $categoryImages)
    {
        $categoryImages =CategoryImages::query()->find($request->images_id)->delete();
        // dd($categoryImages);
        // $categoryImages->delete();
        return redirect()->route('categories.show' , $request['category_id']);
    }
}
