@include('layouts.master')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>

<script type="text/javascript">
$(function()
{
$("#batch").autocomplete({
source: '{{route("search_batch")}}'
});
});
</script>


<br>
<div class="container">
    <div class="row">
        <h4> Purchase Order</h4>

    </div> 
<br>
 <form method="post" action="{{route('save_purchase_order')}}">

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Codex</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="batch" name="code" placeholder="batch">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="quantity" placeholder="Quantity">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Batch_no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="batch_no" name="batch_no" placeholder="Batch">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Expiry</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="expiry" name="expiry" placeholder="Expiry">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Disc%</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="trade" placeholder="Trade">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Net</label>
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
      <button type="submit" name="more" value="yes" class="btn btn-primary">Add More</button>
      <button type="submit" name="more" value="no" class="btn btn-primary">Completed</button>
    </div>
  </div>
</form>

</div>