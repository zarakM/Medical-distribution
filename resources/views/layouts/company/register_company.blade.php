@include('layouts.master')
    @yield('content')

<div class="container">
 <br>
   <div class="row">
        <h4> Add Company</h4>
    </div>

 <br>

 <form method="post" action="{{ route('save_company') }}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Name" placeholder="Name">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Address" placeholder="Address">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Phone" placeholder="Phone no">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Mobile" placeholder="Mobile">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Fax</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Fax" placeholder="Fax">
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







