<?php include('header.php') ?>
<?php include('menu.php') ?>

<h2>Input Fields</h2>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" id="username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2">@example.com</span>
  </div>
</div>

<label for="basic-url">Your vanity URL</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  </div>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">With textarea</span>
  </div>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<br>
<h2>Checkbox</h2>
<div class="checkbox-group">
  <form>
    <input type="checkbox" id ="v1" name="vehicle1" value="Bike" > I have a bike<br>
    <input type="checkbox" id ="v2" name="vehicle2" value="Car" > I have a car<br>
    <input type="checkbox" id ="v3" name="vehicle3" value="Boat" checked> I have a boat<br><br>
  </form>
</div>
<br>
<h2>Radio button</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>

</style> 
<div class="hidden">

<form id="form1" name="form1" method="post" action="">
  <p>
    <label>
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" onchange="disable_link();" />
      Radio</label>
    <br />
    <label>
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" onchange="enable_link();" />
      Radio</label>
    <br />
  </p>
  <a id="testlink" href="http://www.yahoo.com"> test </a>
</form>

</div> 
<script type="text/javascript">

    var link,color;

 function disable_link() { 

  document.getElementById('testlink').disabled=true;

  link = document.getElementById('testlink').href;

  document.getElementById('testlink').removeAttribute('href');
  //document.getElementById('testlink').style.color = "grey";

   } 


 function enable_link() { 

  document.getElementById('testlink').setAttribute("href",link);
  setTimeout(function(){document.getElementById("testlink").disabled = false;},5000);


   } 


</script>

<?php include('footer.php') ?>