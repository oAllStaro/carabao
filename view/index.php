<?php header('Content-Type: text/html; charset=TIS-620'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=TIS-620" />
        <title>jquery use json data</title>
        <?php include("../assets/include/includeMeta.php"); ?>
        <?php include("../assets/include/includeJS.php"); ?>
        <script type="text/javascript" src="ajax.js" ></script>
    </head>

    <body onload="Add();">
        <label for="Geography">�Ҥ</label>
        <select name="Geography" id="Geography">
        </select>
        <label for="GeoID">�����Ҥ</label>
        <input type="text" name="GeoID" id="GeoID" />
        <p>
            <label for="Proviance">�ѧ��Ѵ</label>
            <select name="Proviance" id="Proviance">
            </select>
            <label for="ProID">���ʨѧ��Ѵ</label>
            <input type="text" name="ProID" id="ProID" />
            <p>
                <label for="District">�����</label>
                <select name="District" id="District">
                </select>
                <label for="DisID">���������</label>
                <input type="text" name="DisID" id="DisID" />
            </P>
            <p>
                <label for="Subdistrict">�Ӻ�</label>
                <select name="Subdistrict" id="Subdistrict">
                </select>
                <label for="SubID">���ʵӺ�</label>
                <input type="text" name="SubID" id="SubID" />
            </P>

    </body>
</html>
