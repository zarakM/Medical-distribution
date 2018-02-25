
@include('layouts.master')
@yield('content')
<div class="container-fluid">
<br>
        <h4>Customer Orders</h4>
<br>
@foreach($order as $data) 
Company Name:<h5 style="text-transform: uppercase;">{{$data->customer_order->customer->name}}</h5>
Salesman name:<h6>{{$data->customer_order->salesman->name}}</h6>
<p>{{$data->created_at}}</p>

<br>
<table class="table table-striped">
  <thead class="thead-default">
    <tr>
        <th>Batch no</th>
        <th>Quantity</th>
        <th>Retail Price</th>
        <th>Trade Price</th>
        <th>Bonus</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
     </thead>
     <tbody>
     @foreach($data->product_details as $datas)
     <tr>
        <td>{{$datas->batch_no }}</td>
        <td>{{$datas->pivot->quantity }}</td>
        <td>{{$datas->pivot->retail_price }}</td>
        <td>{{$datas->pivot->trade_price }}</td>
        <td>{{$datas->pivot->bonus }}</td>
       <td style="width: 150px">
        <form action="{{route('update_view_customer_order')}}">
          <input type="text" name="id" hidden="yes" value="{{$data->id}}">
          <input type="text" name="ids" hidden="yes" value="{{$datas->id}}">
          <input type="text" name="quantity" hidden="yes" value="{{$datas->pivot->quantity}}">
          <input type="text" name="batch" hidden="yes" value="{{$datas->batch_no}}">
          <input type="text" name="trade" hidden="yes" value="{{$datas->pivot->trade_price }}">
          <input type="text" name="retail" hidden="yes" value="{{$datas->pivot->retail_price}}">
          <input type="text" name="bonus" hidden="yes" value="{{$datas->pivot->bonus}}">
          <input class="btn btn-warning text-white" type="submit" value="Edit">
        </form>
      </td>
      <td style="width: 150px">
              <form action="destroy_customer_order">
               <input type="text" hidden="yes" name="id" value="{{$data->id}}">
              <input type="text" hidden="yes" name="ids" value="{{$datas->id}}">
              <input class="btn btn-danger text-white" value="Delete" type="submit">
          </form>
      </td>
     </tr>
    @endforeach
   </tbody>
  </table>
@endforeach
</div>