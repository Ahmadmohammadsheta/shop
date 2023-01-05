@extends('admin.layouts.index')
@section('content')
    <a href="{{ route('clients.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">اضافة</div>
        <div class="card-body">
            <form id="storeForm"    action="{{ route('clients.store') }}"  method="POST"
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
                        <label for="">Phone</label>
                        <input class="form-control" name="phone" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">Email</label>
                        <input class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="">National_Id</label>
                        <input class="form-control" name="national_id" value="{{ old('national_id') }}">
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
