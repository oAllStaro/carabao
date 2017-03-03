<?php
require("sql2json.class.php");
include("../assets/include/connection.php");

$page = '';
$filter = '1=1';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
}
if($page!=''){
    if ($page == 'CR003') {
        $query = "select * from VIEW_CR003  ";
    }elseif ($page == 'CR001') {
         $query = "select * from VIEW_CR001  ";
    } 
    $result = sqlsrv_query($conn, $query);
    $num = sqlsrv_rows_affected($result);

    $json = new sql2json;
    $data = $json->getJSON($result, $num);/*convert data to json*/
    echo $data;
    sqlsrv_close($conn);
}

?>