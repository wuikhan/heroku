<?php include('header.php') ?>
<?php include('menu.php') ?>


<h5>CSS Selector Example </h5>
<h6>if you have id attribute present you can combine with the tag and id like e.g: tag#id and it will find that element.</h6>
<p id="line1"> in this example we are learning css selector using tag & id </p>
<code>driver.findElement(By.cssSelector(“p#line1”));</code>
<br>
<hr>
<h6>if you have class attribute present you can combine with the tag and class like e.g: tag.class and it will find that element.</h6>
<p class="example line2"> in this example we are learning css selector using tag & class name </p>
<code>driver.findElement(By.cssSelector(“p.example”));</code><br>
<code>driver.findElement(By.cssSelector(“p.example.line2”));</code><br>
<code>driver.findElement(By.cssSelector(“p.line2));</code>
<br>



<?php include('footer.php') ?>