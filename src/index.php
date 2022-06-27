<?php
include_once("function.php");
$insertdata = new DB_con();
$list = $insertdata->showRecords();
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Report </title>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

</head>

<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Father Name</th>
      <th>Mother Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row = mysqli_fetch_array($list)) {
    ?>
      <tr class="dt-row">
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['father_name']; ?></td>
        <td><?php echo $row['mother_name']; ?></td>
      </tr>
    <?php
    } ?>
  </tbody>
</table>


</html>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>