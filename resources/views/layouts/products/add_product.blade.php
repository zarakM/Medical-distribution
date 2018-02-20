@include('layouts.master')

@yield('content')
<br>
<div class="container">

    <div class="row">
        <h4> Add Products here</h4>
    </div>
<br>
<div class="container">
 

 <form method="post" action="{{route('save_product')}}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Name" placeholder="Name">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Batch no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Batch" placeholder="Batch">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Strength</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Strength" placeholder="Strength">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Pack</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Pack" placeholder="Pack">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Expiry</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Expiry" placeholder="Expiry">
    </div>
  </div>
  {{csrf_field()}}

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </div>
</form>

</div>

