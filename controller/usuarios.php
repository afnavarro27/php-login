<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <h1>usuarios</h1>  
  <?php  
    include('conect.php');
    $query="SELECT * FROM usuarios";
    echo '<table border="0" cellspacing="2" cellpading="2">
    <tr>  
      <td><font face="aria">Codigo  </font></td>
      <td><font face="aria">Nombre  </font></td>
      <td><font face="aria">Correo  </font></td>
      <td><font face="aria">NickName  </font></td>
      <td><font face="aria">Clave  </font></td>
    </tr>';

    if ($result = $con->query($query)) {
      while($row = $result->fetch_assoc()){
          $field1name=$row["idUsuario"];
          $field2name=$row["Name"];
          $field3name=$row["Email"];
          $field4name=$row["Nickname"];
          $field5name=$row["Contrasena"];
      
          echo '<tr>
        <td>'.$field1name.'</td>
        <td>'.$field2name.'</td>
        <td>'.$field3name.'</td>
        <td>'.$field4name.'</td>
        <td>'.$field5name.'</td>
        </tr>';
      } 
    }

   
  ?>
</body>
</html>