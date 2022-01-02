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
<hr>
<b><i>button[id^='simple']</i></b>
<h6>using below locator you will be able to select a button whose <code>id</code> attribute value starts from <code>simple</code></h6>
<code>driver.findElement(By.cssSelector(“button[id^='simple']”));</code>

<hr>
<b><i>button[id$='Btn']</b></i>
<h6>using below locator you will be able to select a button whose <code>id</code> attribute value ends at <code>Btn</code></h6>
<code>driver.findElement(By.cssSelector(“button[id$='Btn']”));</code>

<hr>
<b><i>button[id*='ple']</b></i>
<h6>using below locator you will be able to select a button whose <code>id</code> attribute value contains a <code>ple</code> string.</h6>
<code>driver.findElement(By.cssSelector(“button[id*='ple']”));</code>
<hr>
<h5><u>Using XPATH </u></h5>
<b><ul>Native or Absolute XPATH (Not Recommended)</ul></b>
<code>/html/body/div/form/div[1]/div[1]/input</code>
<b><ul>Relative XPATH (Recommended)</ul></b>
<code>//tag[@attribute=’attribute value’]</code>