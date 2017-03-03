<?php include("../assets/include/includeJS.php"); ?>
<script type="text/javascript">
    $(document).ready(function () {
        var data = +"["
            +"{"
             +"   \"us_name\": \"กรรณิการ์\","
                +"\"custnum\": \"V70-04347\""

           +" }"
        +"]"



        alert($.parseJSON(data));
    })

</script>
