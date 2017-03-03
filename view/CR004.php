<!DOCTYPE html>
<html lang="en">
    <head>
        <title>รายงานการทำงานประจำวัน</title>
        <?php include("../assets/include/includeMeta.php"); ?>
        <?php include("../assets/include/includeCSS.php"); ?>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 id="container">รายงานการทำงานประจำวัน</h1>
                        </div>
                        <div class="jumbotron">
                            <form class="form-horizontal">
                                <fieldset>
                                    <legend>Filter</legend>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">วันที่ *</label>
                                        <div class="col-lg-3">
                                            <div class="">
                                                <div class='input-group' id='datetimepicker2' data-date-format="dd-mm-yyyy">
                                                    <input type="text" class="form-control" name="startdate" id="startdate" size="10" placeholder="DD-MM-YYYY">
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
                                                    <input type="text" class="form-control" name="enddate" id="enddate" size="10" placeholder="DD-MM-YYYY">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">เสนาธิการ</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- เลือก --</option>
                                            </select>
                                        </div>
                                        <label class="col-lg-1 control-label">ทหารเสือ</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- เลือก --</option>
                                            </select>
                                        </div>
                                        <label class="col-lg-1 control-label">ประเภท</label>
                                        <div class="col-lg-3">
                                            <select class=" selectpicker show-tick" data-live-search="true" name="" id="">
                                                <option data-tokens="" value="">-- เลือกประเภท --</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>

                            <p align = "center">
                                <a class="btn btn-primary btn-lg" onclick="setFilter('PV')">Preview</a>&nbsp;
                                <a class="btn btn-success btn-lg" onclick="setFilter('EX')">Export</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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

            function setFilter(type) {
                var filter = "";
                goPage('CR004_' + type + '.php', filter);
            }
        </script>
    </footer>
</html>

