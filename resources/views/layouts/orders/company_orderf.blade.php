@include('layouts.master')
<br>
<div class="container">
    <div class="row">
        <h4> Purchase Order</h4>

    </div> 
<br>
 <form method="post" action="{{route('save_purchase_order')}}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="company_name" placeholder="company">
    </div>
  </div>

  {{csrf_field()}}

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="more" value="details" class="btn btn-primary">Add Products</button>
    </div>
  </div>
</form>

</div>