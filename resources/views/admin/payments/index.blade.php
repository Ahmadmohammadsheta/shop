@extends('admin.layouts.index')
@section('content')
<a href="{{route('payments.create')}}" class="btn btn-success btn-lg">اضافة</a>
    <div>
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product_Id</th>
                <th scope="col">Client_Id</th>
                <th scope="col">Financy_Id</th>
                <th scope="col">sale_price</th>
                <th scope="col">paid</th>
                <th scope="col">payment_kind</th>
                <th scope="col">all_paid</th>
                <th scope="col">residual</th>
                <th scope="col">Delete & Edit</th>


              </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->product->name}}</td>
                <td>{{$item->client->name}}</td>
                <td>{{$item->finance->name}}</td>
                <td>{{$item->sale_price}}</td>
                <td>{{$item->paid}}</td>
                <td>{{$item->payment_kind}}</td>
                <td>{{$item->all_paid}}</td>
                <td>{{$item->residual}}</td>

                <td>
                    <a class="btn btn-info btn-sm" href="{{route('payments.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
                    <button form="delete{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    <form id="delete{{$item->id}}" action="{{route('payments.destroy',$item->id)}}" method="POST">@csrf @method('delete')</form>
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