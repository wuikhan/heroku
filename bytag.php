<?php include('header.php') ?>
<?php include('menu.php') ?>
<hr>
<div>
    <p>driver.findElement(By.tagName("id/classname/etc"));</p>
</div>
<div class="container">
    <div class="row">
        <h1> Find Element by tag name </h1>
        <div class="col-sm">
            <select class="custom-select custom-select-lg mb-3">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <label for="cars">Choose a car:</label>
            <select id="cars" multiple>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>
        </div>
    </div>

    <?php include('footer.php') ?>