@include('layouts.master')

<br>
<div class="container">
<h4> Customer Order</h4> 
<br>

 <form method="post" action="{{route('save_customer_order')}}">

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Batch No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="batch" placeholder="batch">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="quantity" placeholder="Quantity">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Trade Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="trade" placeholder="Trade">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Retail Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="retail" placeholder="Retail">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Bonus</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="bonus" placeholder="Bonus">
    </div>
  </div>
  {{csrf_field()}}
  <br>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="more" value="yes" class="btn btn-primary">Add More</button>
      <button type="submit" name="more" value="no" class="btn btn-success">Completed</button>
    </div>
  </div>

</form>
