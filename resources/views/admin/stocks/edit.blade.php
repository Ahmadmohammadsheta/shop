@extends('admin.layouts.index')
@section('content')
<a href="{{ route('stocks.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">تعديل</div>
        <div class="card-body">
       <form id="updateForm" action="{{ route('stocks.update', $item->id) }}" method="POST" >
        @csrf
        @method('PUT')
        

        <div class="row">
            <div class="col-6 form-group">
                <label for="">Product_ID</label>
                <select name="product_id" class="form-control">
                    @foreach (\App\Models\Product::all() as $product_id)
                        <option {{ old('product_id',$item->product_id== $product_id->id ? 'selected' : '') }} value="{{ $product_id->id }}">
                            {{ $product_id->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-6 form-group">
                <label for="">Color-ID</label>
                <select name="color_id" class="form-control">
                    @foreach (\App\Models\Color::all() as $color_id)
                        <option {{ old('color_id',$item->color_id== $color_id->id ? 'selected' : '') }} value="{{ $color_id->id }}">
                            {{ $color_id->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Size-ID</label>
                <select name="size_id" class="form-control">
                    @foreach (\App\Models\Size::all() as $size_id)
                        <option {{ old('size_id',$item->size_id== $size_id->id ? 'selected' : '') }} value="{{ $size_id->id }}">
                            {{ $size_id->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-6 form-group">
                <label for="">Quantity</label>
                <input class="form-control"  name="quantity" value="{{ old('quantity',$item->quantity) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Over_price</label>
                <input class="form-control"  name="over_price" value="{{ old('over_price',$item->over_price) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Min_Quantity</label>
                <input class="form-control"  name="min_quantity" value="{{ old('min_quantity',$item->min_quantity) }}">
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-6 form-group">
                <label for="">Trader_Id</label>
                <input class="form-control"  name="trader_id" value="{{ old('trader_id') }}">
            </div>
        </div> --}}
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Stock_Code</label>
                <input class="form-control"  name="stock_code" value="{{ old('stock_code',$item->stock_code) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">BarCode</label>
                <input class="form-control"  name="barcode" value="{{ old('barcode',$item->barcode) }}">
            </div>
        </div>
       
       

    </form>
 
     
        </div>
   

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="updateForm">حفظ</button>
        </div>
    </div>
@endsection
