@include('layouts.master')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>

<script type="text/javascript">
$(function()
{
$("#codex").autocomplete({
source: '{{route("search_batch")}}'
});
});

$(function()
{
$("#naam").autocomplete({
source: '{{route("search_batch")}}'
});
});

$(function()
{
$("#comp").autocomplete({
source: '{{route("search_batch")}}'
});
});
</script>

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
    <label for="inputEmail3" class="col-sm-2 col-form-label">Codex</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="codex" name="codex" placeholder="Name">
    </div>
  </div>



  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Batch_no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="batch" name="batch" placeholder="Batch">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Quantity" placeholder="Quantity">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Discount</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="Discount" placeholder="Discount">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Net</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="Net" placeholder="Net">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Expiry</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="Expiry" placeholder="Expiry">
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