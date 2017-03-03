<?php
include("../assets/include/connection.php");
//$stmt = "SELECT * FROM ";
// $query = sqlsrv_query($conn, $stmt);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Preview</title>
        <?php include("../assets/include/includeMeta.php"); ?>
        <?php include("../assets/include/includeCSS.php"); ?>

    </head>
    <body>
        <div class="container">
            <table>
                <tr>
                    <th width="91"> <div align="center">CustomerID </div></th>
                </tr>
                <?php
                //while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td width="91"><?php //echo $result["CustomerID"];?></td>
                    </tr>
                    <?php
               // }
                ?>
        </div>
    </body>
    <footer>
        <?php include("../assets/include/includeJS.php"); ?>
        <script type="text/javascript">

        </script>
    </footer>
</html>

