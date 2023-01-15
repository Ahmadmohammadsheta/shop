@extends('admin.layouts.index')
@section('content')
{{-- <div style=" border: 5px outset rgb(0, 255, 55);background-color: lightblue;width:88px;" class="row"><a href="{{route('imagescategories.store',$item->id)}}" class="btn btn-success btn-lg">اضافة</a></div> --}}
<form id="storeForm"    action="{{ route('imagescategories.store') }}"  method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6 form-group">
                        <input hidden name="category_id" value="{{$item->id}}" >
                        <label for="">Add New Photo</label>
                        <input class="form-control" type="file" name="img[]" >
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="storeForm">ارسال</button>
        </div>

<br>
<div style=" border: 5px outset ;width:auto;" class="row">
    @forelse ($item->categoryImages as $categoryImage)
    <div style=" border: 3px outset ;width:auto;"  class="col-6 col-md-3">
        <h3 style="color: black;font-size: 50px;text-align: center"> {{$item->name}}</h3>
    <img height="300px" width="300px"   src="{{asset('storage/images/categories/'.$categoryImage->img)}}">
      <div class="row"><button form="delete{{$categoryImage->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
      <form id="delete{{$categoryImage->id}}" action="{{route('imagescategories.destroy',$categoryImage->id)}}" method="POST">@csrf @method('delete')
        <input hidden name="images_id" value="{{$categoryImage->id}}" >
        <input hidden name="category_id" value="{{$item->id}}" >
      </form></div>
     
    </div>
     @empty
      <h1>لايوجد صور</h1>
      @endforelse
   
  </div>



@endsection