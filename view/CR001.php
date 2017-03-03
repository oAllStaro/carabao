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
        <title>��§ҹ�����ҹ���</title>
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
                            <h1 id="container">��§ҹ�����ҹ���</h1>
                        </div>
                        <div class="jumbotron">
                            <form class="form-horizontal" name="carabao" id="carabao">
                                <fieldset>
                                    <legend>Filter</legend>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">�ѹ��� *</label>
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
                                        <div class="col-lg-1"  align="center"><label class="control-label">�֧</label></div>
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
                                        <label class="col-lg-1 control-label">�ʹҸԡ��</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- ���͡ --</option><!--data-tokens ��� key word �Ӥ�Ѻ search -->
                                            </select>
                                        </div>
                                        <label class="col-lg-1 control-label">��������</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- ���͡ --</option>
                                            </select>
                                        </div>
                                        <label class="col-lg-1 control-label">�ع�֡</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- ���͡ --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">�Ҥ</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="Geography" id="Geography">

                                            </select>
                                            <input type="hidden" name="GeoID" id="GeoID" />
                                        </div>
                                        <label class="col-lg-1 control-label">�ѧ��Ѵ</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="Proviance" id="Proviance">

                                            </select>
                                            <input type="hidden" name="ProID" id="ProID" />
                                        </div>
                                        <label class="col-lg-1 control-label">�����</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="District" id="District">

                                            </select>
                                            <input type="hidden" name="DisID" id="DisID" />
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">�Ӻ�</label>
                                        <div class="col-lg-3">
                                            <select class="selectpicker show-tick" data-live-search="true" name="Subdistrict" id="Subdistrict">

                                            </select>
                                            <input type="hidden" name="SubID" id="SubID" />
                                        </div>
                                        <label class="col-lg-1 control-label">������</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- ���͡������ --</option>
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
                                        <label class="col-lg-1 control-label">ʶҹ���</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- ����ʶҹ��� --</option>
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
                                <a class="btn btn-success btn-lg" onclick="goPage('CR001_EX')">Export</a>
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
                        url: "GETDATA.php?page=CR001&filter="+setFilter(),
                        success: function (jd) {
                            $("#test").empty();
                            var data = " <table id=\"previewTable\" class=\"preview\"> <tr>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">�ӴѺ</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">��ѡ�ҹ���Ǩ</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">������ҹ���</th>"
                                    + "<th nowrap class=\"preview ghostwhite\"  rowspan=\"2\">������ҹ</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">������Ңͧ��ҹ</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">�������</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">��ҹ�Ţ���</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">������</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">���</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">�͡</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">Visit time</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">Tool Checkin</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">������ҧ<br/>(����)</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"2\">ʵ�͡㹵�������<br/>(�Ǵ)</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"2\">�ӹǹ��㹵�������<br/>(��)</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"2\">ʵ�͡�͡�����<br/>(�Ǵ)</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">��������<br/>(�Ǵ)</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">�������<br/>(�Ǵ)</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">�š��</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">�ա��ͧ�纽�</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" rowspan=\"2\">�纽�<br/>(�ӹǹ��)</th>"
                                    + "<th nowrap class=\"preview green\" colspan=\"9\">ᨡ�ҧ���</th>"
                                    + "<th nowrap class=\"preview ghostwhite\" colspan=\"4\">����</th>"
                                    + "</tr>";
                            data += "  <tr>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">���ᴧ</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">����</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">���ᴧ</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">����</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">���ᴧ</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">����</div></th>"

                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">ʵ������(���)</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">��ش��(����)</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">�ǧ�ح�(�ѹ)</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">���(�ѹ)</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">��ǹ��(�)</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">��Ң�˹�(�׹)</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">������Դ(���)</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">���������(���)</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">�Թ�ҧ���(�ҷ)</div></th>"

                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">ẹ�����ù��</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">ẹ�������</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">ʵ�������ù��</div></th>"
                                    + "<th nowrap  class=\"preview ghostwhite\"><div class=\"verticaltext-green\">ʵ���������</div></th>"
                                    + "</tr>";
                             console.log( "jd: " + jd  );
                            jd = $.parseJSON(jd);
                            var i = 1;
                            $.each(jd, function (k, v) {/*ǹ��� record (TR)*/
                                data += " <tr>"
                                data += " <td  nowrap  class=\"preview\">" + i + "</td> ";
                                var j = 0;
                                for (var prop in v) {/*ǹ��� column (TD)*/
                                    console.log('obj.' + prop, '=', v[prop]);
                                    data += " <td  nowrap  class=\"preview\">" + v[prop] + "</td> ";
                                    j++;
                                }
                                data += "</tr>"
                                i++;
                            });
                           /* data += " <tr><td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td> "
                                    + "<td nowrap  class=\"preview ghostwhite\">���</td>"
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
                                    + "</tr>";*/
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

