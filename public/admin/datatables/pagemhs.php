<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
<body>

  <?php
  include 'koneksidb.php';
  ?>

  <div class="col-sm-6" style="padding-top: 20px; padding-bottom: 20px;">
    <h3>DataTabels dengan PHP dan Bootstrap</h3>
    <hr>

    
      <table class="table table-stripped table-hover datatab">
        <thead>
          <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Fakultas</th>                         
          </tr>
        </thead>  
        <tbody>
          <?php 
          $query = mysql_query("SELECT * FROM mhs");
          $no = 1;
          while ($data = mysql_fetch_assoc($query)) 
          {
          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['id']; ?></td>         
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['fakultas']; ?></td>
            </tr>
          <?php               
          } 
          ?>
        </tbody>
      </table>          
  </div> 
</body>
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.datatab').DataTable();
  } );
  </script>
</html>