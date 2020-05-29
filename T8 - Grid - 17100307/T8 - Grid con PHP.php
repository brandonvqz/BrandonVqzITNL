<html>
    <head>
        <title>T8 - Grid con PHP | 17100307</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
      <table class="table table-borderless">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Habilidad</th>
          </tr>
        </thead>
        <tbody>
          
          <?php
          
          include 'db_connection.php';
          
          $conn = OpenCon();
          
          date_default_timezone_set('America/Chicago');
          
          $sql = "SELECT * FROM Leyendas";
          $result = mysqli_query($conn,$sql);
          
          while($row = mysqli_fetch_assoc($result))
          {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['Nombre']."</td>";
            echo "<td>".$row['Tipo']."</td>";
            echo "<td>".$row['Habilidad']."</td>";
            echo "</tr>";
          }     
            ?>
            
        </tbody>
      </table>
    </body>
</html>