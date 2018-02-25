@include('layouts.master')
<br>
<div class="container">
    <div class="row">
        <h4> Add Salesman</h4>

    </div>
<br>
<div class="container">
 

 <form method="post" action="{{ route('update_salesman') }}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Name" value="{{$_GET['name']}}" disabled>
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Mobile" value="{{$_GET['mobile']}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Area name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Area" value="{{$_GET['area']}}">
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
