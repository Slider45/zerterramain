<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }
  $no_of_records_per_page = 6;
  $offset = ($page-1) * $no_of_records_per_page;

  $total_pages_sql = "SELECT COUNT(id) FROM approve_list";
  $result = mysqli_query($con,$total_pages_sql);
  $total_rows = mysqli_fetch_array($result)[0];
  $total_pages = ceil($total_rows / $no_of_records_per_page);

  
?>