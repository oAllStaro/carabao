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

$strExcelFileName = "CR003.xls";
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
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">รหัสจุดรวมพล</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"  rowspan="2">ประเภทสถาที่</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">ชื่อสถานที่</th>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">ตำบล</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">อำเภอ</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">จังหวัด</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">เข้า</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">ออก</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">Visit time</td>
                                <td nowrap class="preview" style="background-color: #66CD00" colspan="5">ประชาสัมพันธ์</td>
                                <td nowrap class="preview" style="background-color: #66CD00" colspan="13">เชียร์ดื่ม/แจกรางวัล/วางกล่อง</td>
                                <td nowrap class="preview" style="background-color: #66CD00" colspan="7">สะสมฝาแลกซื้อ(จำนวน)</td>
                                <td nowrap class="preview" style="background-color: #66CD00" colspan="16">พบโชค</td>
                                <td nowrap class="preview" style="background-color: #66CD00" colspan="5">ติดสื่อ(จำนวน)</td>
                                <td nowrap class="preview" style="background-color: #66CD00" colspan="3">สมัครสมาชิก(จำนวน)	</td>
                                <td nowrap class="preview" style="background-color: #66CD00" rowspan="2">อื่นๆ</td>
                            </tr>
                            <tr>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สมุดโน๊ต(เล่ม)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ตีฟู</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">มอบรางวัล</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แห่ผู้โชคดี</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แจกชิม</div></td>

                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เชียร์ดื่ม(ขวด)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แลกฝา</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">มีกล่องเก็บฝา</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เก็บฝา(จำนวนฝา)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สติ๊กเกอร์(ชิ้น)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สมุดโน๊ต(เล่ม)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">พวงกุญแจ(อัน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ไฟแช๊ค(อัน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แก้วน้ำ(ใบ)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ผ้าขนหนู(ผืน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เสื้อยืด(ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เสื้อแจ็คเก็ต (ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เงินรางวัล(บาท)</div></td>

                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เสื้อยืดแขนสั้น(ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เสื้อยืดแขนยาว(ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แจ็คเก็ตยีนส์(ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แจ็คเก็ตดำ(ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">กระเป๋าหิ้ว(ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">หมวกกันน็อค(อัน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ร่ม(คัน)</div></td>

                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สติ๊กเกอร์(ชิ้น)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สมุดโน๊ต (เล่ม)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">พวงกุญแจ(อัน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ไฟแช๊ค(อัน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แก้วน้ำ(ใบ)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ผ้าขนหนู(ผืน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เสื้อยืด(ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เสื้อแจ็คเก็ต (ตัว)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ป้ายผ้าดิบ(ผืน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">เงินรางวัล(บาท)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ค่าของรางวัล/บาท</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ค่าจัดกิจกรรม บาท/ครั้ง</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ค่าเช่าสถานที่บาท/ครั้ง</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">แลกฝา</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ฝาในงาน(ฝา)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ผู้มาร่วมงาน(คน)</div></td>

                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ค่าเช่าแบนเนอร์ (ต่อเดือน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ป้าย (Sigh Board)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ค่าเช่าป้าย (ต่อเดือน)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">Wrap ตู้แช่</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ค่า wrap ตู้แช่ (ต่อเดือน)</div></td>

                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สมาชิกแท็กซี่บาวแดง</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สมาชิกวินมอเตอร์ไซค์</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">สมาชิกเพื่อนบาวแดง</div></td>
                            </tr>
                            <?php
                            $num = 1;
                            $sql = "select * from VIEW_CR003";
                            $query = sqlsrv_query($conn, $sql);
                            while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                                ?>
                                <tr>
                                    <td  nowrap  class="preview"><?php echo $num; ?></td> 
                                    <td  nowrap  class="preview"><?php echo $result["name"]; ?></td> 
                                    <td  nowrap  class="preview"><?php echo $result["assembly_id"]; ?></td> 
                                    <td  nowrap  class="preview"><?php echo $result["type_name"]; ?></td> 
                                    <td  nowrap  class="preview"><?php echo $result["assembly_name"]; ?></td> 
                                    <td  nowrap  class="preview"><?php echo $result["district_name"]; ?></td> 
                                    <td  nowrap  class="preview"><?php echo $result["amphur_name"]; ?></td> 
                                    <td  nowrap  class="preview"><?php echo $result["province_name"]; ?></td> 
                                    <td  nowrap  class="preview"><?php echo $result["date_in"]; ?></td>
                                    <td  nowrap  class="preview"><?php echo $result["date_out"]; ?></td> 
                                    <td  nowrap  class="preview"><?php echo $result["visittime"]; ?></td> 
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
                                <td nowrap class="preview" style="background-color: #F5F5F5">รวม</td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td> 
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"></td>
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