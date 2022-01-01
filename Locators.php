<?php include('header.php') ?>
<?php include('menu.php') ?>


<h5><u>Using CSS Selector </u></h5>
<b><i>tag#id</i></b>
<h6>if you have <code>id</code> attribute present you can combine with the tag and id like e.g: tag#id and it will find that element.</h6>
<code>driver.findElement(By.cssSelector(“p#line1”));</code>
<hr>
<b><i>tag.class</i></b>
<h6>if you have <code>class</code> attribute present you can combine with the tag and class like e.g: tag.class and it will find that element.</h6>
<code>driver.findElement(By.cssSelector(“p.example”));</code><br>
<code>driver.findElement(By.cssSelector(“p.example.line2”));</code><br>
<code>driver.findElement(By.cssSelector(“p.line2));</code>
<hr>
<b><i>tag[attribute=’attribute value’]</i></b>
<h6>if you dont have any <code>id</code> or <code>class</code> present in the webelement, you can create custom cssSelector</h6>
<code>driver.findElement(By.cssSelector(“input[placeholder='First name']”));</code>

<script id="template1" type="text/template">
    <h2>{title}</h2>
    <input type="text" name="field{id}_1">
    <input type="text" name="field{id}_2">
    <input type="text" name="field{id}_3">
</script>

<?php include('footer.php') ?>