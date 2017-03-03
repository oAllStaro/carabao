/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// JavaScript Document
$(document).ready(function () {
    // ส่วนของภาคเมื่อมีการเปลี่ยนแปลง
    $("#Geography").change(function () {
        $("#Proviance").empty();//ล้างข้อมูล
        $("#Subdistrict").empty();//ล้างข้อมูล
        $("#District").empty()//ล้างข้อมูล
        $("#ProID").val("");//ล้างข้อมูล
        $("#DisID").val("");//ล้างข้อมูล
        $("#SubID").val("");//ล้างข้อมูล
        // alert( $(this).val());
        $.ajax({
            url: "GETFILTERDATA.php?TYPE=Proviance&ID=" + $(this).val(),
            success: function (jd) { //แสดงข้อมูลเมื่อทำงานเสร็จ โดยใช้ each ของ jQuery
                var opt = "<option data-tokens='' value=\"0\" selected=\"selected\">---เลือกจังหวัด---</option>";
                jd = $.parseJSON(jd);
                var i = 0;
                $.each(jd, function (k, v) {
                    opt += "<option data-tokens='" + jd[i].PROVINCE_NAME + "' value='" + jd[i].PROVINCE_ID + "'>" + jd[i].PROVINCE_NAME + "</option>"
                    i++;
                });
                $("#Proviance").html(opt);//เพิ่มค่าลงใน Select จังหวัด
                $('#Proviance').selectpicker('render').selectpicker('refresh');
            }
        });
        $("#GeoID").val($(this).val()); //กำหนดค่า ID ของจังหวัดที่เลือกให้กับ Textfield ของจังหวัด
    });
    // ส่วนของจังหวัดเมื่อมีการเปลี่ยนแปลง
    $("#Proviance").change(function () {
        $("#Subdistrict").empty();//ล้างข้อมูล
        $("#District").empty()//ล้างข้อมูล
        $("#DisID").val("");//ล้างข้อมูล
        $("#SubID").val("");//ล้างข้อมูล
        // alert( $(this).val());
        $.ajax({
            url: "GETFILTERDATA.php?TYPE=District&ID=" + $(this).val(),
            success: function (jd) { //แสดงข้อมูลเมื่อทำงานเสร็จ โดยใช้ each ของ jQuery
                var opt = "<option data-tokens='' value=\"0\" selected=\"selected\">---เลือกอำเภอ---</option>";
                jd = $.parseJSON(jd);
                var i = 0;
                $.each(jd, function (k, v) {
                    opt += "<option data-tokens='" + jd[i].AMPHUR_NAME + "' value='" + jd[i].AMPHUR_ID + "'>" + jd[i].AMPHUR_NAME + "</option>"
                    i++;
                });
                $("#District").html(opt);//เพิ่มค่าลงใน Select ของอำเภอ
                $('#District').selectpicker('render').selectpicker('refresh');
            }
        });
        $("#ProID").val($(this).val()); //กำหนดค่า ID ของจังหวัดที่เลือกให้กับ Textfield ของจังหวัด
    });
    // ส่วนของอำเภอเมื่อมีการเปลี่ยนแปลง
    $("#District").change(function () {
        $("#Subdistrict").empty();
        $("#SubID").val("");
        $.ajax({
            url: "GETFILTERDATA.php?TYPE=Subdistrict&ID=" + $(this).val(),
            success: function (jd) {
                var opt = "<option data-tokens='' value=\"0\" selected=\"selected\">---เลือกตำบล---</option>";
                jd = $.parseJSON(jd);
                var i = 0;
                $.each(jd, function (k, v) {
                    opt += "<option data-tokens='" + jd[i].DISTRICT_NAME + "' value='" + jd[i].DISTRICT_ID + "'>" + jd[i].DISTRICT_NAME + "</option>"
                    i++;
                });
                $("#Subdistrict").html(opt);
                $('#Subdistrict').selectpicker('render').selectpicker('refresh');
            }
        });
        $("#DisID").val($(this).val());
    });
    // ส่วนของตำบลเมื่อมีการเปลี่ยนแปลง
     $("#Subdistrict").change(function () {
         $("#SubID").val($(this).val());
    });
     
});
//ส่วนของ function เพื่อเพิ่มข้อมูลภาคเข้าไปก่อน
function Add() {
    $.ajax({
        url: "GETFILTERDATA.php?TYPE=Geography",
        success: function (jd) {
            //alert("Data Call : " + jd);
            var opt = "<option data-tokens='' value=\"0\" selected=\"selected\">---เลือกภาค---</option>"
            jd = $.parseJSON(jd);
            var i = 0;
            $.each(jd, function (k, v) {
                opt += "<option data-tokens='" + jd[i].GEO_NAME + "' value='" + jd[i].GEO_ID + "'>" + jd[i].GEO_NAME + "</option>"
                i++;
            });
            $("#Geography").html(opt);
            $('#Geography').selectpicker('render').selectpicker('refresh');
        }
    });
 
}


