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
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">�ӴѺ</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">��ѡ�ҹ���Ǩ</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">������ҹ���</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5"  rowspan="2">������ҹ</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">������Ңͧ��ҹ</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">�������</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">��ҹ�Ţ���</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">������</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">���</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">�͡</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">Visit time</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">Tool Checkin</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">������ҧ<br/>(����)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="2">ʵ�͡㹵�������<br/>(�Ǵ)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="2">�ӹǹ��㹵�������<br/>(��)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="2">ʵ�͡�͡�����<br/>(�Ǵ)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">��������<br/>(�Ǵ)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">�������<br/>(�Ǵ)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">�š��</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">�ա��ͧ�纽�</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" rowspan="2">�纽�<br/>(�ӹǹ��)</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="9">ᨡ�ҧ���</td>
                                <td nowrap class="preview" style="background-color: #F5F5F5" colspan="4">����</td>
                            </tr>
                            <tr>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">���ᴧ</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">����</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">���ᴧ</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">����</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">���ᴧ</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">����</div></td>

                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ʵ������(���)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">��ش��(����)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">�ǧ�ح�(�ѹ)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">���(�ѹ)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">��ǹ��(�)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">��Ң�˹�(�׹)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">������Դ(���)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">���������(���)</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">�Թ�ҧ���(�ҷ)</div></td>

                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ẹ�����ù��</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ẹ�������</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ʵ�������ù��</div></td>
                                <td nowrap class="preview" style="background-color: #66CD00"><div class="preview">ʵ���������</div></td>
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
                                <td nowrap  class="preview ghostwhite">���</td> 
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

