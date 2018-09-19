    @include('layouts.master')
<br>
@yield('content')
<div class="container-fluid">
    <h4>Remaining Stocks</h4>
<br>    <table class="table table-striped">
        <thead class="thead-default">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Batch</th>
            <th>Quantity</th>
            <th>Trade Price</th>
            <th>Retail Price</th>
        <th>Delete</th>
        <th>Edit</th>            </tr>
        </thead>
        <tbody>
            @foreach($stock as $data)
        <tr>
            <td>{{$data->product->code}}</td>
            <td>{{$data->product->name}}</td>
            <td>{{$data->product->batch_no}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->trade_price}}</td>
            <td>{{$data->retail_price}}</td>
            <td style="width: 100px"><a class="btn btn-danger" href="{{route('destroy_stock',['id'=>$data->id])}}">Delete</a></td>
        <td style="width: 100px">
            <form action="{{route('update_view_stock')}}">
                <input type="text" name="id" hidden="yes" value="{{$data->id}}">
                <input type="text" name="batch" hidden="yes" value="{{$data->product->code}}">
                <input type="text" name="quantity" hidden="yes" value="{{$data->quantity}}">
                <input type="text" name="trade" hidden="yes" value="{{$data->trade_price}}">
                <input type="text" name="retail" hidden="yes" value="{{$data->retail_price}}">
                <input class="btn btn-warning text-white" type="submit" value="Edit">
            </form></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>