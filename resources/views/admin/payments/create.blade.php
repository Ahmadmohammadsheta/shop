@extends('admin.layouts.index')
@section('content')
    <a href="{{ route('payments.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">اضافة</div>
        <div class="card-body">
            <form id="storeForm"    action="{{ route('payments.store') }}"  method="POST"
                enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">المنتح</label>
                        <select name="product_id" class="form-control">
                            <option style="display: none">اختر المنتج</option>
                            @foreach (\App\Models\Product::all() as $product)
                                <option {{ old('product_id' == $product->id ? 'selected' : '') }}
                                    value="{{ $product->id }}">
                                    {{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">العميل</label>
                        <select name="client_id" class="form-control">
                            <option style="display: none">اختر العميل</option>
                            @foreach (\App\Models\Client::all() as $client)
                                <option {{ old('client_id' == $client->id ? 'selected' : '') }}
                                    value="{{ $client->id }}">
                                    {{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">نظام الدفع</label>
                        <select name="finance_id" class="form-control">
                            <option style="display: none">اختر نظام الدفع</option>
                            @foreach (\App\Models\Finance::all() as $finance)
                                <option {{ old('finance_id' == $finance->id ? 'selected' : '') }}
                                    value="{{ $finance->id }}">
                                    {{ $finance->name }}</option>
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
                        <label for="">Paid</label>
                        <input class="form-control"  name="paid" value="{{ old('paid') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Payment_Kind</label>
                        <input class="form-control"  name="payment_kind" value="{{ old('payment_kind') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">All_Paid</label>
                        <input class="form-control"  name="all_paid" value="{{ old('all_paid') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Residual</label>
                        <input class="form-control"  name="residual" value="{{ old('residual') }}">
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
