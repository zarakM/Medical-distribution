@include('layouts.master')
    @yield('content')

<div class="container">
 <br>
   <div class="row">
        <h4> Add Company</h4>
    </div>

 <br>

 <form method="post" action="{{ route('update_company') }}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" value="{{$_GET['name']}}" disabled>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" value="{{$_GET['address']}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" value="{{$_GET['phone']}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mobile" value="{{$_GET['mobile']}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Fax</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fax" value="{{$_GET['fax']}}">
    </div>
  </div>
      <input type="text" name="id" hidden="yes" value="{{$_GET['id']}}">
  {{csrf_field()}}

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </div>
</form>

</div>







