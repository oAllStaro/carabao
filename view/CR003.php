<?php header('Content-Type: text/html; charset=TIS-620'); ?>
<?php
include("../assets/include/connection.php");
$cmd = '';
if (isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>รายงานกิจกรรมจุดรวมพล</title>
        <?php include("../assets/include/includeMeta.php"); ?>
        <?php include("../assets/include/includeCSS.php"); ?>
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
        </style>
    </head>
    <body onload="Add();">
        <div class="container">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 id="container">รายงานกิจกรรมจุดรวมพล</h1>
                        </div>
                        <div class="jumbotron">
                            <form class="form-horizontal" method="POST" name="carabao" id="carabao">
                                <input type="hidden" name="cmd" id="cmd">
                                <fieldset>
                                    <legend>Filter</legend>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">วันที่ *</label>
                                        <div class="col-lg-3">
                                            <div class="">
                                                <div class='input-group' id='datetimepicker2' data-date-format="dd-mm-yyyy">
                                                    <input type="text" class="form-control" name="startdate" id="startdate" size="10" placeholder="DD-MM-YYYY" value="<?php //echo $_REQUEST['startdate'];                      ?>">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"  align="center"><label class="control-label">ถึง</label></div>
                                        <div class="col-lg-3">
                                            <div class="">
                                                <div class='input-group' id='datetimepicker2' data-date-format="dd-mm-yyyy">
                                                    <input type="text" class="form-control" name="enddate" id="enddate" size="10" placeholder="DD-MM-YYYY" value="<?php //echo $_REQUEST['startdate'];                      ?>">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-lg-1 control-label">PDCA</label>
                                        <div class="col-lg-3">
                                            <input type="checkbox" name="pdca" id="pdac" value="1">
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">เสนาธิการ</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- เลือก --</option><!--data-tokens คือ key word สำครับ search -->
                                            </select>
                                        </div>
                                        <label class="col-lg-1 control-label">ทหารเสือ</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- เลือก --</option>
                                            </select>
                                        </div>
                                        <label class="col-lg-1 control-label">ขุนศึก</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- เลือก --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">ภาค</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="Geography" id="Geography">

                                            </select>
                                            <input type="hidden" name="GeoID" id="GeoID" />
                                        </div>
                                        <label class="col-lg-1 control-label">จังหวัด</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="Proviance" id="Proviance">

                                            </select>
                                            <input type="hidden" name="ProID" id="ProID" />
                                        </div>
                                        <label class="col-lg-1 control-label">อำเภอ</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="District" id="District">

                                            </select>
                                            <input type="hidden" name="DisID" id="DisID" />
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">ตำบล</label>
                                        <div class="col-lg-3">
                                            <select class="selectpicker show-tick" data-live-search="true" name="Subdistrict" id="Subdistrict">

                                            </select>
                                            <input type="hidden" name="SubID" id="SubID" />
                                        </div>
                                        <label class="col-lg-1 control-label">ประเภท</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- เลือกประเภท --</option>
                                                <?php
                                                $sqlg = "select * from st_OPT_Master_Assembly_Type";
                                                $queryg = sqlsrv_query($conn, $sqlg);
                                                while ($resultg = sqlsrv_fetch_array($queryg, SQLSRV_FETCH_ASSOC)) {
                                                    ?>
                                                    <option data-tokens="<?php echo $resultg["Type_Name"]; ?>" value="<?php echo $resultg["Type_Id"]; ?>"><?php echo $resultg["Type_Name"]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <label class="col-lg-1 control-label">สถานที่</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- ชื่อสถานที่ --</option>
                                                <?php
                                                $sqlg = "select * from st_OPT_Assembly_Point";
                                                $queryg = sqlsrv_query($conn, $sqlg);
                                                while ($resultg = sqlsrv_fetch_array($queryg, SQLSRV_FETCH_ASSOC)) {
                                                    ?>
                                                    <option data-tokens="<?php echo $resultg["Assembly_Name"]; ?>" value="<?php echo $resultg["Assembly_Id"]; ?>"><?php echo $resultg["Assembly_Name"]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>

                            <p align = "center">
                                <a class="btn btn-primary btn-lg" onclick="preview()">Preview</a>&nbsp;
                                <a class="btn btn-success btn-lg" onclick="goPage('CR003_EX')">Export</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div id="test"></div>
        </div>
    </body>
    <footer>
        <?php include("../assets/include/includeJS.php"); ?>
        <script type="text/javascript">
            $(document).ready(function () {
                var satrtdate_input = $('input[name="startdate"]');
                var enddate_input = $('input[name="enddate"]');
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                satrtdate_input.datepicker({
                    format: 'dd-mm-yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                    language: 'th',
                    clearBtn: true,
                    keyboardNavigation: true,
                })
                enddate_input.datepicker({
                    format: 'dd-mm-yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                    language: 'th',
                    clearBtn: true,
                    keyboardNavigation: true,
                })
            })

            function preview() {
                with (document.carabao) {
                    //cmd.value = "search";
                    //submit();
                    $.ajax({
                        url: "GETDATA.php?page=CR003&filter="+setFilter(),
                        success: function (jd) {
                            $("#test").empty();
                            var data = " <table id=\"previewTable\" class=\"preview\"> <tr>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">ลำดับ</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">พนักงานสำรวจ</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">รหัสจุดรวมพล</th>"
                                    + "<th nowrap class=\"preview ghostwhite\"  rowspan=\"2\">ประเภทสถาที่</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">ชื่อสถานที่</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">ตำบล</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">อำเภอ</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">จังหวัด</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">เข้า</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">ออก</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">Visit time</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"5\">ประชาสัมพันธ์</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"13\">เชียร์ดื่ม/แจกรางวัล/วางกล่อง</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"7\">สะสมฝาแลกซื้อ(จำนวน)</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"16\">พบโชค</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"5\">ติดสื่อ(จำนวน)</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"3\">สมัครสมาชิก(จำนวน)	</th>"
                                    + "<th nowrap class=\"preview green\" rowspan=\"2\">อื่นๆ</th>"
                                    + "</tr>";
                            data += "  <tr>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">สมุดโน๊ต(เล่ม)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ตีฟู</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">มอบรางวัล</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">แห่ผู้โชคดี</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">แจกชิม</div></th>"

                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เชียร์ดื่ม(ขวด)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">แลกฝา</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">มีกล่องเก็บฝา</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เก็บฝา(จำนวนฝา)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">สติ๊กเกอร์(ชิ้น)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">สมุดโน๊ต(เล่ม)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">พวงกุญแจ(อัน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ไฟแช๊ค(อัน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">แก้วน้ำ(ใบ)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ผ้าขนหนู(ผืน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เสื้อยืด(ตัว)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เสื้อแจ็คเก็ต (ตัว)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เงินรางวัล(บาท)</div></th>"

                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เสื้อยืดแขนสั้น(ตัว)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เสื้อยืดแขนยาว(ตัว)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">แจ็คเก็ตยีนส์(ตัว)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">แจ็คเก็ตดำ(ตัว)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">กระเป๋าหิ้ว(ตัว)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">หมวกกันน็อค(อัน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ร่ม(คัน)</div></th>"

                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">สติ๊กเกอร์(ชิ้น)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">สมุดโน๊ต (เล่ม)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">พวงกุญแจ(อัน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ไฟแช๊ค(อัน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">แก้วน้ำ(ใบ)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ผ้าขนหนู(ผืน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เสื้อยืด(ตัว)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เสื้อแจ็คเก็ต (ตัว)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ป้ายผ้าดิบ(ผืน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">เงินรางวัล(บาท)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ค่าของรางวัล/บาท</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ค่าจัดกิจกรรม บาท/ครั้ง</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ค่าเช่าสถานที่บาท/ครั้ง</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">แลกฝา</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ฝาในงาน(ฝา)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ผู้มาร่วมงาน(คน)</div></th>"

                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ค่าเช่าแบนเนอร์ (ต่อเดือน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ป้าย (Sigh Board)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ค่าเช่าป้าย (ต่อเดือน)</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">Wrap ตู้แช่</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">ค่า wrap ตู้แช่ (ต่อเดือน)</div></th>"

                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">สมาชิกแท็กซี่บาวแดง</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">สมาชิกวินมอเตอร์ไซค์</div></th>"
                                    + "<th nowrap  class=\"preview green\"><div class=\"verticaltext-green\">สมาชิกเพื่อนบาวแดง</div></th>"
                                    + "</tr>";
                            jd = $.parseJSON(jd);
                            var i = 1;
                            $.each(jd, function (k, v) {/*วนค่า record (TR)*/
                                data += " <tr>"
                                data += " <td  nowrap  class=\"preview\">" + i + "</td> ";
                                var j = 0;
                                for (var prop in v) {/*วนค่า column (TD)*/
                                    console.log('obj.' + prop, '=', v[prop]);
                                    data += " <td  nowrap  class=\"preview\">" + v[prop] + "</td> ";
                                    j++;
                                }
                                while(j<60){/*ใส่มาเพราะยังคิวรี่ค่าได้ไม่ครบเลยวนใส่ตารางว่างไว้ด่อน*/
                                    data += " <td  nowrap  class=\"preview\"></td> ";
                                    j++;
                                }
                                data += "</tr>"
                                i++;
                            });
                            data += " <tr><td></td><td></td><td></td> <td></td><td></td><td></td><td></td> <td></td><td></td> "
                                    + "<td nowrap  class=\"preview ghostwhite\">รวม</td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "<td nowrap  class=\"preview ghostwhite\"></td>"
                                    + "</tr>";
                            data += " </table >"
                            $("#test").html(data);
                        }
                    });
                }
            }
            function setFilter() {
                var filter = "1=1";
                return filter;
            }
            function goPage(page) {
                var param = setFilter();
                var win = window.open(page + '?cmd=export' + param, '_blank');
                win.focus();
            }

        </script>
    </footer>
</html>

