<?php include('header.php') ?>
<?php include('menu.php') ?>
<hr>
<div>
    <h1> Drop down & Multi Select field </h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <label for="cars">Choose a fruit:</label>
        </div>
        <div class="col-sm">
            <select class="custom-select custom-select-lg mb-3 fruits">
                <option selected>Select a fruit from the list :</option>
                <option value="1">Apple</option>
                <option value="2">Banana</option>
                <option value="3">Grape</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <label for="cars">Choose a car:</label>
            <select id="cars" class="custom-select custom-select-lg mb-3" multiple>
                <option value="car1">Volvo</option>
                <option value="car2">Saab</option>
                <option value="car3">Opel</option>
                <option value="car4">Audi</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <label for="states">Choose a state:</label>
            <select class="ui fluid search dropdown custom-select custom-select-lg mb-3" multiple="">
                <option value="">State</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>
    </div>
</div>

<?php include('footer.php') ?>