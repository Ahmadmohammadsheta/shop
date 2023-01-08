@extends('admin.layouts.index')
@section('content')
<a href="{{ route('payments.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">تعديل</div>
        <div class="card-body">
       <form id="updateForm" action="{{ route('payments.update', $item->id) }}" method="POST" >
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-6 form-group">
                <label for="">االمنتج</label>
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
                <label for="">العميل</label>
                <select name="client_id" class="form-control">
                    @foreach (\App\Models\Client::all() as $client_id)
                        <option {{ old('client_id',$item->client_id== $client_id->id ? 'selected' : '') }} value="{{ $client_id->id }}">
                            {{ $client_id->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">نظام الدفع</label>
                <select name="finance_id" class="form-control">
                    @foreach (\App\Models\Finance::all() as $finance_id)
                        <option {{ old('finance_id',$item->finance_id== $finance_id->id ? 'selected' : '') }} value="{{ $finance_id->id }}">
                            {{ $finance_id->name }}</option>
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
                <label for="">Paid</label>
                <input class="form-control"  name="paid" value="{{ old('paid',$item->paid) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Payment_Kind</label>
                <input class="form-control"  name="payment_kind" value="{{ old('payment_kind',$item->payment_kind) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">All_Paid</label>
                <input class="form-control"  name="all_paid" value="{{ old('all_paid',$item->all_paid) }}">
            </div>
        </div>

        <div class="row">
            <div class="col-6 form-group">
                <label for="">Residual</label>
                <input class="form-control"  name="residual" value="{{ old('residual',$item->residual) }}">
            </div>
        </div>
           
    </form>
 
     
        </div>
   

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="updateForm">حفظ</button>
        </div>
    </div>
@endsection
