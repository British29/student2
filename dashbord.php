<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

	<title>La liste des eleves present</title>


</head>
<body>

	<style>

body {font-family: "Lato", sans-serif;
font-size: 15px;
}

.sidebar {
  height: 100%;
  width: 230px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: darkgray;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}


@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

nav{font-family: "lato", cooper;

      background: black;


}

h1{
	width: 800px;
	height: 50px;
  color: white;

}
th{

  color: red;
}

td{

  color: blue;
}


</style>

<div class="sidebar ">
  <a href="logout.php"><i class="fas fa-sign-in" style="font-size:60px "></i> Deconnexion</a>
</div>


<center>

  <nav>

 	    <h1>LA LISTE DES ELEVES PRESENT</h1>

  </nav><br><br>
 
        <form name="frmSearch" method="post" action="">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"><br><br>

<?php

 include 'conn.php';
  
      $sql = "select username, datesign, time from attendance";
   
      $result = mysqli_query($conn,$sql);
      
      mysqli_close($conn);

 ?>


<?php if(!empty($result))  { ?>
<div class="container sm-3">
<table class="table table-bordered table-hovered" id="myTable">
          <thead>
        <tr>
                             
          <th>Nom et prenoms</th>    
          <th>Date de signature</th>    
          <th>Heure de signature</th>    
        </tr>
      </thead>
    <tbody>
  <?php

    while($row = mysqli_fetch_array($result)) {
  ?>
    <tr>
      <td><?php echo $row["username"]; ?></td>
      <td><?php echo $row["datesign"]; ?></td>
      <td><?php echo $row["time"]; ?></td>

    </tr>
   <?php
    }
   ?>
   <tbody>
  </table>
<?php } ?>
  </form>
  </div>
  </div>


<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <script>
        // Fonction pour rechercher nom
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

 </center>
</body>
</html>