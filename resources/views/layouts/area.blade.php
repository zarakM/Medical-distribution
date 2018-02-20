@include('layouts.master')
<br>
<div class="container">
    <div class="row">
        <h4> Add Area</h4>
    </div>

    <div class="container">
 <br>

 <form method="post" action="{{ route('save_area') }}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Name" placeholder="Name">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">City name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="City_name" placeholder="City name">
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