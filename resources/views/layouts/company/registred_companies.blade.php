
@include('layouts.master')
@yield('content')
<div class="container-fluid">
<br>
    <h4>List of Registered Companies</h4>
<br>
    <table class="table table-striped">
        <thead class="thead-default">
        <tr>
            <th>Company Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Mobile</th>
            <th>FAX</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
            @foreach($company as $data)
        <tr>
            <td style="text-transform:uppercase;">{{$data->name}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->phone_no}}</td>
            <td>{{$data->mobile_no}}</td>
            <td >{{$data->fax_no}}</td>
             <td style="width: 100px"><a class="btn btn-danger" href="{{route('destroy_company',['id'=>$data->id])}}">Delete</a></td>
            <td style="width: 100px">
                <form action="{{route('update_view_company')}}">
                <input type="text" name="id" hidden="yes" value="{{$data->id}}">
                <input type="text" name="name" hidden="yes" value="{{$data->name}}">
                <input type="text" name="address" hidden="yes" value="{{$data->address}}">
                <input type="text" name="phone" hidden="yes" value="{{$data->phone_no}}">
                <input type="text" name="mobile" hidden="yes" value="{{$data->mobile_no}}">
                <input type="text" name="fax" hidden="yes" value="{{$data->fax_no}}">
                <input class="btn btn-warning text-white" type="submit" value="Edit">
            </form></td></tr>
        @endforeach
        </tbody>
    </table>
</div>