
        <?php
        ini_set('display_errors', 1);
        error_reporting(~0);
        $serverName = "58.82.137.41";
        $userName = "oa_outsource";
        $userPassword = "$%oUt5ou6>3";
        $dbName = "Outsourced";

        $connectionInfo = array("Database" => $dbName, "UID" => $userName, "PWD" => $userPassword, "MultipleActiveResultSets" => true);

        $conn = sqlsrv_connect($serverName, $connectionInfo);

        if ($conn === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        //sqlsrv_close($conn);
        ?>
