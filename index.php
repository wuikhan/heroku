<?php include('header.php') ?>
<?php include('menu.php') ?>
<hr>
<h1> Alert Practice </h1>
<p>Below button is an example of simple alert button.</p>
<button type="button" class="btn btn-outline-primary" onclick="myFunction()" id="simpleBtn">Simple Alert</button>
<hr>
<p>Click the button to display a confirm box.</p>
<button type="button" class="btn btn-outline-primary" onclick="confirmAlertBtn()" id="confirmBtn">Confirm
  Alert</button>
<hr>
<p>Click the button to demonstrate the prompt box.</p>
<button type="button" class="btn btn-outline-primary" onclick="inputBtn()" id="promptBtn">Prompt Alert</button>
<p id="demo"></p>

<button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
<button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
<hr>

<?php include('footer.php') ?>