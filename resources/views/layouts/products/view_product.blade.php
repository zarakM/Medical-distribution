
@Include('layouts.master')
@yield('content')


<div class="container">
    <div class="row">

        <h4> Add Products</h4>
    </div>
</div>

<form>

    <table class="table table-striped">
        <thead class="thead-default">
        <tr>
            <th>#</th>
            <th>Generic Name</th>
            <th>Strenght</th>
            <th>Pack</th>
            <th>Expiry</th>


        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>0321-8187324</td>



        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>0321-8187324</td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>0321-8187324</td>


        </tr>
        </tbody>
    </table>

</form>