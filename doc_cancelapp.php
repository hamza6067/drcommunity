<?php
$doc_id=$_REQUEST['id'];
//echo $doc_id;
include("connection.php");
$query="delete from tbl_doctor where doc_id='$doc_id'";
mysqli_query($query);
?>