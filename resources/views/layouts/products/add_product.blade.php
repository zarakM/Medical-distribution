@include('layouts.master')  

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>

<script type="text/javascript">
$(function()
{
$("#name").autocomplete({
source: '{{route("search_productN")}}'
});
});


$(function()
{
$('#click').click(function(){
  var name = document.getElementById("name").value();
  
});
});

$(document).ready(function(){
     $("butt").click(function(){
     $.getJSON("{{'search_company_o'}}", function(result){
        $.each(result, function(i, field){
            $("company").val(field[0]);//name is database field name such as id,name,address etc
        });
    });
    });
});

</script>

<br>
<div class="container">
  <p>h</p>

    <div class="row">
        <h4 id="hello"> Add Products here</h4>
    </div>
<br>
<div class="container">
 

 <form method="post" action="{{route('save_product')}}">

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="company" name="company_name" placeholder="company">
      <button type="button" id="butt" class="btn btn-primary">Add</button>
    </div>
  </div>

   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="code" name="code" placeholder="Codex for med">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="Name" placeholder="Name">  
    </div>
  </div>



  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Trade Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="trade" placeholder="Trade Price">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Retail Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="retail" placeholder="Retail Price">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Strength</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="stren" name="Strength" placeholder="Strength">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Pack</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Pack" placeholder="Pack">
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
