<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Blog Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="blog.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">

        <div class="col-12 text-center">
          <a class="blog-header-logo text-dark" href="#">Codegator Practice Site </a>
        </div>

      </div>
  
    </header>
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
    <hr>
    </div>
    <script>
      function confirmAlertBtn() {
        confirm("Press a button!");
      }
    </script>
    <script>
      function inputBtn() {
        var person = prompt("Please enter your name", "Harry Potter");
        if (person != null) {
          document.getElementById("demo").innerHTML =
            "Hello " + person + "! How are you today?";
        }
      }
    </script>

    <script>
      function myFunction() {
        alert("Hello! I am an alert box!");
      }
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
</body>

</html>