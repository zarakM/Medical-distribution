@Include('layouts.master')
<div class="container-fluid">
    <br>
<h4>Cities with their corresponding areas</h4>
<br>
    <table class="table table-striped">
        <thead class="thead-default">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Area</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach($area as $data)
            @foreach($data->areas as $datas)

        <tr>
            <td>{{$datas->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$datas->name}}</td>
            <td style="width: 200px"><a class="btn btn-danger" href="{{route('destroy_area',['id'=>$data->id])}}">Delete</a></td>
        </form>
            </td>
        </tr>
        @endforeach
        @endforeach
            </tbody>
    </table>
</div>