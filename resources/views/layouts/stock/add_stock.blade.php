@include('layouts.master')
<br>
<div class="container">
    <div class="row">
     <h4> Add Stocks</h4>
    </div>
</div>
<br>
<div class="container">
 

 <form method="post" action="{{route('save_stock')}}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Batch no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Batch" placeholder="Name">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Quantity" placeholder="Quantity">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Trade price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Trade" placeholder="Trade">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Retail Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Retail" placeholder="Retail">
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