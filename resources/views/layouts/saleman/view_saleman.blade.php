@Include('layouts.master')

<div class="container-fluid">
    <br>
<h4>Salesman</h4>
<br>
    <table class="table table-striped">
        <thead class="thead-default">
        <tr>
            <th>Name</th>
            <td>Mobile no</td>
            <th>Area</th>
                        <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
            @foreach($salesman as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->mobile_no}}</td>
            <td>{{$data->area->name}}</td>
                         <td style="width: 100px"><a class="btn btn-danger" href="{{route('destroy_salesman',['id'=>$data->id])}}">Delete</a></td>
            <td style="width: 100px">
                <form action="{{route('update_view_salesman')}}">
            <input type="text" name="id" hidden="yes" value="{{$data->id}}">
            <input type="text" name="name" hidden="yes" value="{{$data->name}}">
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