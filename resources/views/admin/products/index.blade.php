@extends('admin.layouts.index')
@section('content')
<a href="{{route('products.create')}}" class="btn btn-success btn-lg">اضافة</a>
    <div>
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category_id</th>
                <th scope="col">Sale_Price</th>
                <th scope="col">Bay_Price</th>
                <th scope="col">Bay_Discount</th>
                <th scope="col">Description</th>
                <th scope="col">Product_code</th>
                <th scope="col">Delete & Edit</th>


              </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    
              <tr>
                <td>{{$item->id}}</td>
                <td> <a href="{{route('products.show', $item->id)}}"> {{$item->name}} </a></td> 
                <td>{{$item->Category->name}}</td>
                <td>{{$item->sale_price}}</td>
                <td>{{$item->bay_price}}</td>
                <td>{{$item->bay_discount}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->product_code}}</td>

                <td>
                    <a class="btn btn-info btn-sm" href="{{route('products.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
                    <button form="delete{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    <form id="delete{{$item->id}}" action="{{route('products.destroy',$item->id)}}" method="POST">@csrf @method('delete')</form>
                </td>
              </tr>
              @empty
              <tr>
                <th colspan="12">لايوجد بيانات</th>
              
              </tr>
             
              @endforelse
            </tbody>
          </table>
          
         
    </div>
@endsection