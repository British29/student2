<!DOCTYPE HTML>
<html lang="en-US">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</head>
	<title></title>
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#connexion').click(function() {
      var connexion = true;
      $.ajax({
        type: "POST",
        url: 'logckeekAdmin.php',
        data: {
          connexion: connexion,
          email: $("#email").val(),
          password: $("#password").val()
        },
        success: function(data)
        {
          if (data === 'success') {

            alert("Vous etes connecté")
            
            window.location.assign('dashbord.php');
          }
          else {
            alert("Mauvaise combinaison d'email et de mot de passe!!");
          }
        }
      });
    });
  });
  </script>
</head>
<body>	



<center>

<div class="container col-sm-3 border">

    <center><h3>CONNECTEZ-VOUS</h3></center>
    <img src="liste-de-présence-18898174.jpg">

    <form>

        <div class="form-group">
       <br>   <label class="nu">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Entre votre email" required>
      </div>

      <div class="form-group">
           <label class="nu">Mot de Passe</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Entrer votre mot de passe" required>
      </div>
          
            
       <center><button class="btn btn-lg btn-primary" id="connexion">Connexion</button></center><br> 



       
   </form>
   </div>
   </center>
</div>



</body>
</html> 