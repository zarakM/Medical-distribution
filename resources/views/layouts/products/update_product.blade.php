@include('layouts.master')

@yield('content')
<br>
<div class="container">

    <div class="row">
        <h4> Add Products here</h4>
    </div>
<br>
<div class="container">
 

 <form method="post" action="{{route('update_product')}}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" value="{{$_GET['name']}}" disabled>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Batch no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="batch" value="{{$_GET['batch']}}" disabled>
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Strength</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="strength" value="{{$_GET['strength']}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Pack</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pack" value="{{$_GET['pack']}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Expiry</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="expiry" value="{{$_GET['expiry']}}">
    </div>
  </div>
  <input type="text" name="id" value="{{$_GET['id']}}" hidden="yes">
  {{csrf_field()}}

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>

</div>

