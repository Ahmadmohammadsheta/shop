@extends('admin.layouts.index')
@section('content')
<a href="{{ route('products.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">تعديل</div>
        <div class="card-body">
       <form id="updateForm" action="{{ route('products.update', $item->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Name</label>
                <input class="form-control" name="name" value="{{ old('name',$item->name) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">القسم</label>
                <select name="category_id" class="form-control">
                    @foreach (\App\Models\Category::all() as $cat)
                        <option {{ old('category_id',$item->category_id== $cat->id ? 'selected' : '') }} value="{{ $cat->id }}">
                            {{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Sale_price</label>
                <input class="form-control"  name="sale_price" value="{{ old('sale_price',$item->sale_price) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Bay_Price</label>
                <input class="form-control"  name="bay_price" value="{{ old('bay_price',$item->bay_price) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Bay_Discount</label>
                <input class="form-control"  name="bay_discount" value="{{ old('bay_discount',$item->bay_discount) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Description</label>
                <input class="form-control"  name="description" value="{{ old('description',$item->description) }}">
            </div>
        </div>

        <div class="row">
            <div class="col-6 form-group">
                <label for="">Product_Code</label>
                <input class="form-control"  name="product_code" value="{{ old('product_code',$item->product_code) }}">
            </div>
        </div>
           
    </form>
 
     
        </div>
   

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="updateForm">حفظ</button>
        </div>
    </div>
@endsection
