@include('layouts.master')
<br>
<div class="container">
    <div class="row">
        <h4> Customer Order</h4>

    </div> 
<br>
 <form method="post" action="{{route('update_customer_order')}}">
  <input type="text" class="form-control" name="id" value="{{ $_GET['id'] }}" hidden="yes">
  <input type="text" class="form-control" name="ids" value="{{ $_GET['ids'] }}" hidden="yes">


  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Batch No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="batch" value="{{ $_GET['batch'] }}" disabled>
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="quantity" value="{{ $_GET['quantity'] }}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Trade Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="trade" value="{{ $_GET['trade'] }}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Retail Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="retail" value="{{ $_GET['retail'] }}">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Bonus</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="bonus" value="{{ $_GET['bonus'] }}">
    </div>
  </div>
  {{csrf_field()}}

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="more" value="yes" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>

</div>