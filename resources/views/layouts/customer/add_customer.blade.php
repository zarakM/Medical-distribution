@include('layouts.master')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>

<script type="text/javascript">
$(function()
{
$("#type").autocomplete({
source: '{{route("search_type_cus")}}'
});
});


$(function()
{
$("#area").autocomplete({
source: '{{route("search_area")}}'
});
});
</script>

<br>
<div class="container">
    <div class="row">
        <h4> Add Customer</h4>
    </div>
    <div class="container">
 <br>

 <form method="post" action="{{ route('save_customer') }}">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Name" placeholder="Name">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Address" placeholder="Address">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone no</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="Phone" placeholder="Phone no">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="Mobile" placeholder="Mobile">
    </div>
  </div>

  
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Opening balance</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="opening" placeholder="Opening balance">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Area name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="area" name="Area" placeholder="Area">
    </div>
  </div>

      <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Customer Type</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="type" name="type" placeholder="Type">
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