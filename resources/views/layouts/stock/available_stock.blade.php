@include('layouts.master')

@yield('content')
<div class="container">
    <div class="row">

        <h4>Remaining Stocks</h4>

        <table class="table table-striped">
            <thead class="thead-default">
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Trade Price</th>
                <th>Retail Price</th>
                <th>Edit/Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>0321-8187324</td>
                <td><button type="button" class="btn btn-danger">X</button> <button type="button" class="btn btn-secondary">Edit</button></td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>0321-8187324</td>
                <td><button type="button" class="btn btn-danger">X</button> <button type="button" class="btn btn-secondary">Edit</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>0321-8187324</td>
                <td><button type="button" class="btn btn-danger">X</button> <button type="button" class="btn btn-secondary">Edit</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>