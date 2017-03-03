<?php header('Content-Type: text/html; charset=TIS-620'); ?>
<?php

class mysql2json {
    function getJSON($resultSet, $affectedRecords) {
        $numberRows = 0;
        $arrfieldName = array();
        $i = 0;
        $json = "";
        foreach (sqlsrv_field_metadata($resultSet) as $fieldMetadata) {
            $arrfieldName[$i] = $fieldMetadata['Name'];
            $i++;
        }
        $i = 0;
        $json = "[\n";
        while ($row = sqlsrv_fetch_array ($resultSet)) {
            $i++;
            $json .= "{\n";
            for ($r = 0; $r < count($arrfieldName); $r++) {
               // echo $row[$r] ;
                $json .= " \"$arrfieldName[$r]\" :	\"$row[$r]\"";
                if ($r < count($arrfieldName) - 1) {
                    $json .= ",\n";
                } else {
                    $json .= "\n";
                }
            }
            $json .= "\n},\n";
        }
        $json = substr($json, 0, -2);
        $json .= "\n]";

        return $json;
    }

}

?>
