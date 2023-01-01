@extends('admin.layouts.index')
@section('content')
<a href="{{ route('colors.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">تعديل</div>
        <div class="card-body">
       <form id="storeForm" action="{{ route('colors.update',$item->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6 form-group">
                <label for="">Name</label>
                <input class="form-control" name="name" value="{{ old('name',$item->name) }}">
            </div>
        </div>
           
    </form>
 
     
        </div>
   

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="storeForm">حفظ</button>
        </div>
    </div>
@endsection
