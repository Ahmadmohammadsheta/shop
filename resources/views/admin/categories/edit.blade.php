@extends('admin.layouts.index')
@section('content')
<a href="{{ route('categories.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">تعديل</div>
        <div class="card-body">
       <form id="updateForm" action="{{ route('categories.update', $item->id) }}" method="POST" >
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
                <label for="">Parent_id</label>
                <input class="form-control" type="number" name="parent_id" value="{{ old('parent_id',$item->parent_id) }}">
            </div>
        </div>
           
    </form>
 
     
        </div>
   

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="updateForm">حفظ</button>
        </div>
    </div>
@endsection
