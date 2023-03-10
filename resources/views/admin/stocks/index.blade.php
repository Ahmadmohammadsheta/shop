@extends('admin.layouts.index')
@section('content')
<a href="{{route('stocks.create')}}" class="btn btn-success btn-lg">اضافة</a>
    <div>
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Product_Id</th>
                <th scope="col">Color_Id</th>
                <th scope="col">Size_Id</th>
                <th scope="col">Quantity</th>
                <th scope="col">Min_Quantity</th>
                <th scope="col">Trader_Id</th>
                <th scope="col">Stock_Code</th>
                <th scope="col">Barcode</th>
                <th scope="col">Over_Price</th>
                <th scope="col">Delete & Edit</th>


               

              </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->product->name}}</td>
                <td>{{$item->color->name}}</td>
                <td>{{$item->size->name}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->over_price}}</td>
                <td>{{$item->min_quantity}}</td>
                <td>{{$item->trader_id}}</td>
                <td>{{$item->stock_code}}</td>
                <td>{{$item->barcode}}</td>
                <td>{{$item->over_price}}</td>
               
                <td>
                    <a class="btn btn-info btn-sm" href="{{route('stocks.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
                    <button form="delete{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    <form id="delete{{$item->id}}" action="{{route('stocks.destroy',$item->id)}}" method="POST">@csrf @method('delete')</form>
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