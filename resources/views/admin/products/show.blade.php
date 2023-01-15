@extends('admin.layouts.index')
@section('content')
{{-- <div style=" border: 5px outset rgb(0, 255, 55);background-color: lightblue;width:88px;" class="row"><a href="{{route('imagesproducts.create' ,$item->id)}}" class="btn btn-success btn-lg">اضافة</a></div> --}}
<div class="card-body">
    <form id="storeForm"    action="{{ route('imagesproducts.store') }}"  method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6 form-group">
                <input hidden name="product_id" value="{{$item->id}}" >
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
    @forelse ($item->productImages as $productImage)
    <div style=" border: 3px outset ;width:auto;"  class="col-6 col-md-3">
        <p style="color: black;font-size: 50px;text-align: center"> {{$item->name}}</p>
    <img height="300px" width="300px" src="{{asset('storage/images/products/'.$productImage->img)}}">
   
      <div class="row"><button form="delete{{$productImage->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
        <form id="delete{{$productImage->id}}" action="{{route('imagesproducts.destroy',$productImage->id)}}" method="POST">@csrf @method('delete')
          <input hidden name="images_id" value="{{$productImage->id}}" >
          <input hidden name="product_id" value="{{$item->id}}" >

        </form>
      </div>
    </div>
    @empty
    <h1>لايوجد صور</h1>
      @endforelse
  </div>



@endsection