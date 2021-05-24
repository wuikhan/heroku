<?php include('header.php') ?>
<?php include('menu.php') ?>


<div class="row">
  <div class="col-sm">
    <h1> Alert Practice </h1>
    <p>Below button is an example of simple alert button.</p>
    <button type="button" class="btn btn-outline-primary" onclick="myFunction()" id="simpleBtn">Simple Alert</button>
  </div>
</div>
<div class="row">
  <div class="col-sm">
    <p>Click the button to display a confirm box.</p>
    <button type="button" class="btn btn-outline-primary" onclick="confirmAlertBtn()" id="confirmBtn">Confirm Alert</button>
  </div>
</div>
<div class="row">
  <div class="col-sm">
    <p>Click the button to demonstrate the prompt box.</p>
    <button type="button" class="btn btn-outline-primary" onclick="inputBtn()" id="promptBtn">Prompt Alert</button>
  </div>
</div>
<div class="row">
  <div class="col-sm">
    <p id="demo">Below is an example for the disable button.</p>
    <button type="button" class="btn btn-lg btn-primary" id="buttonOne" onclick="submitPoll()">Primary button</button>
    <button type="button" class="btn btn-secondary btn-lg" id="buttonTwo" >Disable Button</button>
  </div>
</div>


<?php include('footer.php') ?>