<?php

namespace App\Http\Controllers\Api;

use Attribute;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CategoryImages;
use App\Traits\ImageProcessing;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    use ImageProcessing;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('admin.categories.index',[
            "data" => CategoryResource::collection($categories),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        

        $cat = Category::query()->Create([
            'name'=>$request->name,
            'parent_id'=>$request->parent_id,
        ]);
        if($request->hasFile('img')){
            /**something error */
            // $cat->categoryImages()->createMany($this->setImage($request->file('img'), 'categories', 'img', 450, 450));
            foreach ($request->file('img') as $img) {
                # code...
                $image = new CategoryImages();
                        $image->category_id = $cat->id;
                        $image->img = $this->setImage($img, 'categories', 450, 450);
                        $image->save();
            }
            // $request['img'] = $request->file('img');
            // // dd($request['img'], $request->img, $request->file('img'));
            // $request['img'] = $this->setImage($request['img'], 'categories', 450, 450);
    
            // dd($this->setImage($request['img'], 'categories', 450, 450));
            // // $this->setImage($request['img'], 'categories', 450, 450);
             
            // CategoryImages::query()->create($request->all());
            
        }
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // $category = Category::with(['categoryImages'])->find($category->id);
        return view ('admin.categories.show', ['item'=>$category->load(['categoryImages'])]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view ('admin.categories.edit', ['item'=>$category]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        // $attributes=$request->validated();
        // if($request->hasFile('img')){
        //     $this->deleteImage($category->image);
        //     $attributes['img'] = $this->saveImage($request->file('img'));
        // }
        $category->update($request->validated());
        
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::query()->find($category->id)->delete();
        return redirect()->route('categories.index');
    }
}
