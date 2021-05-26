<?php include('header.php') ?>
<?php include('menu.php') ?>



<p>Drag the codegator image into the rectangle:</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="img.gif" draggable="true" ondragstart="drag(event)" width="336" height="69">


<?php include('footer.php') ?>
