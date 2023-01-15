@extends('admin.layouts.index')
@section('content')
    <a href="{{ route('products.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">اضافة</div>
        <div class="card-body">
            <form id="storeForm"    action="{{ route('products.store') }}"  method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Name</label>
                        <input class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">القسم</label>
                        <select name="category_id" class="form-control">
                            <option style="display: none">اختر القسم</option>
                            @foreach (\App\Models\Category::all() as $cat)
                                <option {{ old('category_id' == $cat->id ? 'selected' : '') }}
                                    value="{{ $cat->id }}">
                                    {{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Sale_price</label>
                        <input class="form-control"  name="sale_price" value="{{ old('sale_price') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Bay_Price</label>
                        <input class="form-control"  name="bay_price" value="{{ old('bay_price') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Bay_Discount</label>
                        <input class="form-control"  name="bay_discount" value="{{ old('bay_discount') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Dscription</label>
                        <input class="form-control"  name="description" value="{{ old('description') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Product_code</label>
                        <input class="form-control"  name="product_code" value="{{ old('product_code') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Photo</label>
                        <input class="form-control" type="file" name="img[]" >
                    </div>
                </div>
               
               
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="storeForm">ارسال</button>
        </div>
    </div>
@endsection


{{-- ///////////////////////////////////////// --}}
