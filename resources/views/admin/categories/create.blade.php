@extends('admin.layouts.index')
@section('content')
    <a href="{{ route('categories.index') }}" class="btn btn-success btn-sm">الكل</a>
    <div class="card">
        <div class="card-header">اضافة</div>
        <div class="card-body">
            <form id="storeForm"    action="{{ route('categories.store') }}"  method="POST"
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
                        <label for="">Parent_id</label>
                        <input class="form-control" type="number" name="parent_id" value="{{ old('name') }}">
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-6 form-group">
                        <label for="">القسم</label>
                        <select name="category_id" class="form-control">
                            <option style="display: none">اختر القسم</option>
                            @foreach (\App\Models\Category::all() as $cat)
                                <option {{ old('category_id' == $cat->id ? 'selected' : '') }}
                                    value="{{ $cat->id }}">
                                    {{ $cat->title_en }} - {{ $cat->title_ar }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                </div> --}}
               
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="storeForm">ارسال</button>
        </div>
    </div>
@endsection


{{-- ///////////////////////////////////////// --}}
