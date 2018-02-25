@include('layouts.master')
<br>
<div class="container">
    <div class="row">
        <h4> Add Customer</h4>
    </div>

    <div class="container">
 <br>

 <form method="post" action="{{ route('update_customer') }}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Name" value="{{$_GET['name']}}" disabled>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" placeholder="Address" value="{{$_GET['address']}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" placeholder="Phone no" value="{{$_GET['phone']}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="{{$_GET['mobile']}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Area name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="area" placeholder="Area" value="{{$_GET['area']}}" disabled>
    </div>
  </div>
  <input type="text" name="id" value="{{ $_GET['id'] }}" hidden="yes">
  {{csrf_field()}}

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </div>
</form>
</div>