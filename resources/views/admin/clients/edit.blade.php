@extends('admin.layouts.index')
@section('content')
<a href="{{ route('clients.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">تعديل</div>
        <div class="card-body">
       <form id="updateForm" action="{{ route('clients.update', $item->id) }}" method="POST" >
        @csrf
        @method('PUT')
       
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Name</label>
                <input class="form-control"  name="name" value="{{ old('name',$item->name) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Phone</label>
                <input class="form-control"  name="phone" value="{{ old('phone',$item->phone) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Email</label>
                <input class="form-control"  name="email" value="{{ old('email',$item->email) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="">National_id</label>
                <input class="form-control"  name="national_id" value="{{ old('national_id',$item->national_id) }}">
            </div>
        </div>
       

    </form>
 
     
        </div>
   

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="updateForm">حفظ</button>
        </div>
    </div>
@endsection
