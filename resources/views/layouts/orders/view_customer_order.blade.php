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
<table class="table table-striped">
  <thead class="thead-default">
    <tr>
        <th>Codex</th>
        <th>Product name</th>
        <th>Batch</th>
        <th>Expiry</th>
        <th>Trade Price</th>
        <th>Bonus</th>
        <th>Quantity</th>
        <th>Disc</th>
        <th>Net</th>
        <th>Total</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
     </thead>
     <tbody>
     @foreach($data->product_details as $dat)
<tr>
     <tr> 
      @foreach($product as $pro)
            @if($pro->id == $dat->pivot->product_detail_id)
            <td>{{$pro->code}}</td>
            <td>{{$pro->name}}</td>
            <td>{{$pro->batch_no}}</td>
            <td>{{$pro->product_details->expiry}}</td>
            <td>{{$pro->stock->trade_price}}</td>
            <td>{{$dat->pivot->bonus }}</td>
            <td>{{$dat->pivot->quantity}}</td>
            <td>{{$dat->pivot->disc }}</td>
            <td>{{$dat->pivot->net }}</td>
            <td>{{$dat->pivot->total }}</td>
       <td style="width: 150px">
        <form action="{{route('update_view_customer_order')}}">
          <input type="text" name="id" hidden="yes" value="{{$data->id}}">  
          <input type="text" name="ids" hidden="yes" value="{{$dat->id}}">
          <input type="text" name="quantity" hidden="yes" value="{{$dat->pivot->quantity}}">
          <input type="text" name="batch" hidden="yes" value="{{$dat->batch_no}}">
          <input type="text" name="trade" hidden="yes" value="{{$dat->pivot->trade_price }}">
          <input type="text" name="retail" hidden="yes" value="{{$dat->pivot->retail_price}}">
          <input type="text" name="bonus" hidden="yes" value="{{$dat->pivot->bonus}}">
          <input class="btn btn-warning text-white" type="submit" value="Edit">
        </form>
      </td>
      <td style="width: 150px">
              <form action="destroy_customer_order">
               <input type="text" hidden="yes" name="id" value="{{$data->id}}">
              <input type="text" hidden="yes" name="ids" value="{{$dat->id}}">
              <input class="btn btn-danger text-white" value="Delete" type="submit">
          </form>
      </td>
     @endif
     @endforeach
     @endforeach

   </tbody>
  </table>
  <br>
@endforeach

</div>
