@include('layouts.master')
<br>
<div class="container">
    <div class="row">
        <h4> Company Order</h4>

    </div> 
<br>
 <form method="post" action="{{route('save_purchase_order')}}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="company_name" placeholder="company">
    </div>
  </div>

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

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </div>
</form>

</div>