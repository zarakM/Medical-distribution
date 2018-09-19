@include('layouts.master')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>

<script type="text/javascript">
$(function()
{
$("#company").autocomplete({
source: '{{route("search_customer")}}'
});
});
</script>
<script type="text/javascript">
$(function()
{
$("#salesman").autocomplete({
source: '{{route("search_salesman")}}'
});
});
</script>
<br>
<div class="container">
<h4> Customer Order</h4> 
<br>

 <form method="post" action="{{route('save_customer_order')}}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Customer Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="company" name="customer_name" placeholder="Customer">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Salesman Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="salesman" name="salesman_name" placeholder="Salesman">
    </div>
  </div>
  {{csrf_field()}}
  <br>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="more" value="details" class="btn btn-primary">Add Products</button>
    </div>
  </div>

</form>
