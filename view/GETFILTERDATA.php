
<?php

require("sql2json.class.php");
include("../assets/include/connection.php");

$ID = '';
$type = '';
if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
}
if (isset($_GET['TYPE'])) {
    $type = $_GET['TYPE'];
}
//echo $_GET['TYPE'];
if($type!=''){
    if ($type == 'Proviance') {
        $query = "select * from dc_province where GEO_ID='" . $ID . "' ORDER BY PROVINCE_NAME ASC ";
    } else if ($type == 'District') {
        $query = "Select * from dc_amphur WHERE PROVINCE_ID='" . $ID . "'";
    } else if ($type == 'Subdistrict') {
        $query = "SELECT * FROM dc_district WHERE AMPHUR_ID='" . $ID . "'";
    } else if ($type == 'Geography') {
        $query = "SELECT * FROM dc_geography ";
    }
    $result = sqlsrv_query($conn, $query);
    $num = sqlsrv_rows_affected($result);

    $json = new sql2json;
    $data = $json->getJSON($result, $num);/*convert data to json*/
    echo $data;
    sqlsrv_close($conn);
}
?>
