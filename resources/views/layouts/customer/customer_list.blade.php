@include('layouts.master')

<br>
<div class="container-fluid">
<h4>Customers</h4>
<br>
<table class="table table-striped">
    <thead>
     <tr>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone no</th>
        <th scope="col">Mobile no</th>
        <th scope="col">Area</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customer as $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->phone_no}}</td>
        <td>{{$data->mobile_no}}</td>
        <td>{{$data->area->name}}</td>
        <td style="width: 100px"><a class="btn btn-danger" href="{{route('destroy_customer',['id'=>$data->id])}}">Delete</a></td>
        <td style="width: 100px">
            <form action="{{route('update_view_customer')}}">
            <input type="text" name="id" hidden="yes" value="{{$data->id}}">
            <input type="text" name="name" hidden="yes" value="{{$data->name}}">
            <input type="text" name="address" hidden="yes" value="{{$data->address}}">
            <input type="text" name="phone" hidden="yes" value="{{$data->phone_no}}">
            <input type="text" name="mobile" hidden="yes" value="{{$data->mobile_no}}">
            <input type="text" name="area" hidden="yes" value="{{$data->area->name}}">
            <input class="btn btn-warning text-white" type="submit" value="Edit">
        </form>
        </td>
     </tr>
    @endforeach
    </tbody>
</table>
</div>