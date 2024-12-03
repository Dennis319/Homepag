<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="/icon/milky-way16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/icon/milky-way32x32.png" sizes="32x32">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <title>Velkommen til undersiden, Autocentrum</title>
    <style>
            header{
              background: url(img/coolcar.jpg);
              background-size: cover;
              background-position: center;
              min-height: 1000px;
            }
            .section{
              padding-top: 4vw;
              padding-bottom: 4vw;
            }
            .tabs .indicator{
              background-color: #1a237e;
            }
            .tabs .tab a:focus, .tabs .tab a:focus.active{
              background: transparent;
            }
            @media screen and (max-width: 670px){
              header{
                min-height: 500px;
              }
            }
            </style>
          </head>
          <body>
          
            <!-- navbar -->
            <header>
          <nav class="nav-wrapper transparent">
            <div class="container">
              <a href="" class="brand-logo">Autocentrum</a>
              <a href="" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right hide-on-med-and-down">
                <li><a href="../index.html">Abenettets forside</a></li>
                <li><a href="autocentrum.html">Autocentrum</a></li>
                <li><a href="liste.html">Liste</a></li>                
                <li><a href="biler.html">Biler</a></li>
                <li><a href="film.html">Film</a></li>                
                <li><a href="galleri.html">Galleri</a></li>
                <li><a href="rente.html">Rente</a></li>
                <li><a href="php.php">PHP</a></li>
                <li><a href="nyhedsbrev.php">Nyhedsbrev</a></li>
                <li><a href="mailto:dennis@abenettet.dk" class="tooltipped btn-floating btn-small indigo darken-4" data-tooltip="Send en mail">
                  <i class="material-icons prefix">email</i>
                </a></li>
              </ul>
              <ul class="sidenav grey ligten-2" id="mobile-menu">
                    <li><a href="../index.html">Forside</a></li>
                    <li><a href="autocentrum.html">Autocentrum</a></li>
                    <li><a href="liste.html">Liste</a></li>                
                    <li><a href="biler.html">Biler</a></li>
                    <li><a href="film.html">Film</a></li>                
                    <li><a href="galleri.html">Galleri</a></li>
                    <li><a href="rente.html">Rente</a></li>
                    <li><a href="php.php">PHP</a></li>
                    <li><a href="nyhedsbrev.php">Nyhedsbrev</a></li>
              </ul>
            </div>
          </nav>
            </header>
</head>
<body>

      <!-- photo / grid -->
  <section class="container section scrollspy" id="photos">
    <div class="row">
      <div class="col s12 l4 push-l7 offset-l1">
        <img src="img/city.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col s12 l12">
        <h2 class="indigo-text text-darken-4" >Nyhedsbrev</h2>
        <?php
if (isset($_POST['submit']))
{	
$servername = "mysql85.unoeuro.com";
$username = "abenettet_dk";
$password = "Zap1Uocc";
$dbname = "abenettet_dk_db";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$knavn = $_POST['knavn'];
$kalder = $_POST['kalder'];
$kmail = $_POST['kmail'];
$ktlfnr = $_POST['ktlfnr'];

$sql = "INSERT INTO Kunder (knavn, kalder, kmail, ktlfnr) VALUES ('$knavn', '$kalder', '$kmail', '$ktlfnr')";



if ($conn->query($sql) === TRUE) {
    echo 'New record created successfully';
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
} 

$conn->close();
}
?>

<p>Udfyld felterne med dine informationer for at skrive dig op til et nyhedsbrev..</p>

<form method="post" action="nyhedsbrev.php">
<h2>Bruger Information</h2>

<div><label>Navn:<br></label>
<input type="text" name="knavn"></div>
<br>
<br>
<div><label>Alder:<br></label>
<input type="text" name="kalder"></div>
<br>
<br>
<div><label>E-mail:<br></label>
<input type="text" name="kmail"></div>
<br>
<br>
<div><label>Tlfnr:<br></label>
<input type="text" name="ktlfnr"></div>
<br>
<button class="btn" name="submit">Registrér</button>

        </form>
      </div>
    </div>
      </section>
    
  <!-- footer -->
  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col s12 l6">
          <h5>Om mig</h5>
            <p>
                Denne side er et hobbyprojekt i hjemmesidedesign, som jeg er ved at lave.

                <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
            </p>
        </div>
        <div class="col s12 l4 offset-l2">
          <h5>Forbind - Under udvikling</h5>
          <ul>
            <li><a href="#" class="grey-text text-lighten-3">Facebook</a></li>
            <li><a href="#" class="grey-text text-lighten-3">Twitter</a></li>
            <li><a href="#" class="grey-text text-lighten-3">Linked in</a></li>
            <li><a href="#" class="grey-text text-lighten-3">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright grey darken-4">
      <div class="container center-align">&copy; 2018 Abenettet.dk</div>
    </div>
  </footer>

  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.datepicker').datepicker({
        disableWeekends: true
      });
      $('.tooltipped').tooltip();
      $('.scrollspy').scrollSpy();
    });
  </script>
</body>
</html>