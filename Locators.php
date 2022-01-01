<?php include('header.php') ?>
<?php include('menu.php') ?>


<h5>CSS Selector Example </h5>
<b><i>tag#id</i></b>
<h6>if you have id attribute present you can combine with the tag and id like e.g: tag#id and it will find that element.</h6>
<p id="line1" style="text-decoration:blink"> Capture this text and print it in the console. (using tag#id) </p>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
<code>driver.findElement(By.cssSelector(“p#line1”));</code>
<br>
<hr>
<b><i>tag.class</i></b>
<h6>if you have class attribute present you can combine with the tag and class like e.g: tag.class and it will find that element.</h6>
<p class="example line2" style="text-decoration:blink"> Capture this text and print it in the console. (using tag.class) </p>
<code>driver.findElement(By.cssSelector(“p.example”));</code><br>
<code>driver.findElement(By.cssSelector(“p.example.line2”));</code><br>
<code>driver.findElement(By.cssSelector(“p.line2));</code>
<br>
<hr>



<?php include('footer.php') ?>