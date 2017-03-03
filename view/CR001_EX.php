<?php header('Content-Type: text/html; charset=TIS-620'); ?>
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

$strExcelFileName = "CR001.xls";
header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
header("Pragma:no-cache");

$cmd = '';
if (isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
}
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=TIS-620" />
            <style>
            table.preview {
                border-collapse: collapse;
                width: 100%;
            }

            th.preview , td.preview  {
                text-align: center;
                text-valign: middle;
                padding: 8px;
                color: blask;
            }

            tr.preview :nth-child(even){background-color: #f2f2f2}

            td.preview, th.preview {
                border: 1px solid black;
            }
            .green { 
                background-color: #66CD00;
            }
            .ghostwhite { 
                background-color: #F5F5F5;
            }
            .gray { 
                background-color: #E8E8E8;
            }
            .verticaltext-green { 
                display:block;
                writing-mode: tb-rl;
                filter: flipv fliph;
                -webkit-transform: rotate(-180deg); 
                -moz-transform: rotate(-180deg); 
                transform: rotate(-180deg); 
                position:relative; 
                width:20px;
                white-space:nowrap;
                margin-bottom:10px;
            }
            div.preview{
               display:block;
                writing-mode: tb-rl;
                filter: flipv fliph;
                -webkit-transform: rotate(-180deg); 
                -moz-transform: rotate(-180deg); 
                transform: rotate(-180deg); 
                position:relative; 
                width:20px;
                white-space:nowrap;
                margin-bottom:10px;
            }
        </style>
        </head>
        <body>
            <br>
                <div id="SiXhEaD_Excel" align=center x:publishsource="Excel">
                    <table x:str width=100%   class="preview">
                        <thead>
                            <tr>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">ลำดับ</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">พนักงานสำรวจ</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">รหัสร้านค้า</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"  rowspan="2">ชื่อร้าน</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">ชื่อเจ้าของร้าน</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">ชื่อเล่น</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">บ้านเลขที่</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">หมู่ที่</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">เข้า</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">ออก</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">Visit time</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">Tool Checkin</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">ระยะห่าง<br/>(เมตร)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="2">สต๊อกในตู้แช่เย็น<br/>(ขวด)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="2">จำนวนขาในตู้แช่เย็น<br/>(ขา)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="2">สต๊อกนอกตู้แช่<br/>(ขวด)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">เชียร์ดื่ม<br/>(ขวด)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">เชียร์ขาย<br/>(ขวด)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">แลกฝา</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">มีกล่องเก็บฝา</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">เก็บฝา<br/>(จำนวนฝา)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="9">แจกรางวัล</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="4">สื่อ</td>
                            </tr>
                            <tr>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">บาวแดง</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เอ็ม</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">บาวแดง</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เอ็ม</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">บาวแดง</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เอ็ม</div></td>

                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สติ๊กเกอร์(ชิ้น)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สมุดโน๊ต(เล่ม)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">พวงกุญแจ(อัน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ไฟแช๊ค(อัน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แก้วน้ำ(ใบ)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ผ้าขนหนู(ผืน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เสื้อยิด(ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เสื้อแจ็คเก็ต(ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เงินรางวัล(บาท)</div></td>

                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แบนเนอร์แบรนด์</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แบนเนอร์โปรฯ</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สติ๊กเกอร์แบรนด์</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สติ๊กเกอร์โปรฯ</div></td>
                            </tr>
                            <?php
                                $num = 1;
                                $sql = "select * from VIEW_CR001";
                                $query = sqlsrv_query($conn, $sql);
                                while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                            ?>
                            <tr>
                                <td  nowrap  class="preview"><?php echo $num; ?></td> 
                                <td  nowrap  class="preview"><?php echo $result["us_name"]; ?></td> 
                                <td  nowrap  class="preview"><?php echo $result["custnum"]; ?></td> 
                                <td  nowrap  class="preview"><?php echo $result["custname"]; ?></td> 
                                <td  nowrap  class="preview"><?php echo $result["name"]+" "+$result["surname"]; ?></td> 
                                <td  nowrap  class="preview"><?php echo $result["nickname"]; ?></td> 
                                <td  nowrap  class="preview"><?php echo $result["AddressNum"]; ?></td> 
                                <td  nowrap  class="preview"><?php echo $result["AddressMu"]; ?></td> 
                                <td  nowrap  class="preview"><?php echo $result["date_in"]; ?></td>
                                <td  nowrap  class="preview"><?php echo $result["date_out"]; ?></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td>
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td>
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td>
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td>
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td>
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                                <td  nowrap  class="preview"></td> 
                            </tr>
                            <?php
                                    $num++;
                                }
                            ?>
                            <tr>
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td nowrap  class="preview ghostwhite">รวม</td> 
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td> 
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td> 
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                                <td nowrap  class="preview ghostwhite"></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            <script>
                window.onbeforeunload = function () {
                    return false;
                };
                setTimeout(function () {
                    window.close();
                }, 10000);
            </script>
        </body>
    </html>

