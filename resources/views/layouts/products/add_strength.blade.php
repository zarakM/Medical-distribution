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

</script>

<br>
<div class="container">

    <div class="row">
        <h4 id="hello"> Add Strength here</h4>
    </div>
<br>
<div class="container">
 

 <form method="post" action="{{route('save_strength')}}">

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Codex</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="codex" name="codex" placeholder="Codex">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Strength</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="strength" name="strength" placeholder="Strength">
    </div>
  </div>  

    
  {{csrf_field()}}

  <div class="form-group row">
    <div class="col-sm-10">
      <button name="add" value="hello" class="btn btn-primary">Add Strength</button>
    </div><br>
   
  </div>
</form>
</div>
