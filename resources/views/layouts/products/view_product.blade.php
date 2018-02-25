@Include('layouts.master')

<div class="container-fluid">
    <br>
<h4>Add Products</h4>
<br>
    <table class="table table-striped">
        <thead class="thead-default">
        <tr>
            <th>Name</th>
            <td>Batch no</td>
            <th>Strenght</th>
            <th>Pack</th>
            <th>Expiry</th>
            <th>Delete</th>
            <th>Edit</th>

        </tr>
        </thead>
        <tbody>
            @foreach($product as $data)
        <tr>
            <td>{{$data->product->name}}</td>
            <td>{{$data->batch_no}}</td>
            <td>{{$data->strength}}</td>
            <td>{{$data->pack}}</td>
            <td>{{$data->expiry}}</td>
                         <td style="width: 100px"><a class="btn btn-danger" href="{{route('destroy_company',['id'=>$data->id])}}">Delete</a></td>
            <td style="width: 100px"><form action="{{route('update_view_product')}}">
            <input type="text" name="id" hidden="yes" value="{{$data->id}}">
            <input type="text" name="name" hidden="yes" value="{{$data->product->name}}">
            <input type="text" name="batch" hidden="yes" value="{{$data->batch_no}}">
            <input type="text" name="strength" hidden="yes" value="{{$data->strength}}">
            <input type="text" name="pack" hidden="yes" value="{{$data->pack}}">
            <input type="text" name="expiry" hidden="yes" value="{{$data->expiry}}">
            <input class="btn btn-warning text-white" type="submit" value="Edit">
        </form></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>