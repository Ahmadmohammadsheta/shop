@extends('admin.layouts.index')
@section('content')
    <a href="{{ route('finances.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">اضافة</div>
        <div class="card-body">
            <form id="storeForm"    action="{{ route('finances.store') }}"  method="POST"
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
                        <label for="">Months_Count</label>
                        <input class="form-control" name="months_count" value="{{ old('months_count') }}">
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
