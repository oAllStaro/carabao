/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// JavaScript Document
$(document).ready(function () {
    // ��ǹ�ͧ�Ҥ������ա������¹�ŧ
    $("#Geography").change(function () {
        $("#Proviance").empty();//��ҧ������
        $("#Subdistrict").empty();//��ҧ������
        $("#District").empty()//��ҧ������
        $("#ProID").val("");//��ҧ������
        $("#DisID").val("");//��ҧ������
        $("#SubID").val("");//��ҧ������
        // alert( $(this).val());
        $.ajax({
            url: "GETFILTERDATA.php?TYPE=Proviance&ID=" + $(this).val(),
            success: function (jd) { //�ʴ�����������ͷӧҹ���� ���� each �ͧ jQuery
                var opt = "<option data-tokens='' value=\"0\" selected=\"selected\">---���͡�ѧ��Ѵ---</option>";
                jd = $.parseJSON(jd);
                var i = 0;
                $.each(jd, function (k, v) {
                    opt += "<option data-tokens='" + jd[i].PROVINCE_NAME + "' value='" + jd[i].PROVINCE_ID + "'>" + jd[i].PROVINCE_NAME + "</option>"
                    i++;
                });
                $("#Proviance").html(opt);//�������ŧ� Select �ѧ��Ѵ
                $('#Proviance').selectpicker('render').selectpicker('refresh');
            }
        });
        $("#GeoID").val($(this).val()); //��˹���� ID �ͧ�ѧ��Ѵ������͡���Ѻ Textfield �ͧ�ѧ��Ѵ
    });
    // ��ǹ�ͧ�ѧ��Ѵ������ա������¹�ŧ
    $("#Proviance").change(function () {
        $("#Subdistrict").empty();//��ҧ������
        $("#District").empty()//��ҧ������
        $("#DisID").val("");//��ҧ������
        $("#SubID").val("");//��ҧ������
        // alert( $(this).val());
        $.ajax({
            url: "GETFILTERDATA.php?TYPE=District&ID=" + $(this).val(),
            success: function (jd) { //�ʴ�����������ͷӧҹ���� ���� each �ͧ jQuery
                var opt = "<option data-tokens='' value=\"0\" selected=\"selected\">---���͡�����---</option>";
                jd = $.parseJSON(jd);
                var i = 0;
                $.each(jd, function (k, v) {
                    opt += "<option data-tokens='" + jd[i].AMPHUR_NAME + "' value='" + jd[i].AMPHUR_ID + "'>" + jd[i].AMPHUR_NAME + "</option>"
                    i++;
                });
                $("#District").html(opt);//�������ŧ� Select �ͧ�����
                $('#District').selectpicker('render').selectpicker('refresh');
            }
        });
        $("#ProID").val($(this).val()); //��˹���� ID �ͧ�ѧ��Ѵ������͡���Ѻ Textfield �ͧ�ѧ��Ѵ
    });
    // ��ǹ�ͧ�����������ա������¹�ŧ
    $("#District").change(function () {
        $("#Subdistrict").empty();
        $("#SubID").val("");
        $.ajax({
            url: "GETFILTERDATA.php?TYPE=Subdistrict&ID=" + $(this).val(),
            success: function (jd) {
                var opt = "<option data-tokens='' value=\"0\" selected=\"selected\">---���͡�Ӻ�---</option>";
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
    // ��ǹ�ͧ�Ӻ�������ա������¹�ŧ
     $("#Subdistrict").change(function () {
         $("#SubID").val($(this).val());
    });
     
});
//��ǹ�ͧ function ���������������Ҥ���仡�͹
function Add() {
    $.ajax({
        url: "GETFILTERDATA.php?TYPE=Geography",
        success: function (jd) {
            //alert("Data Call : " + jd);
            var opt = "<option data-tokens='' value=\"0\" selected=\"selected\">---���͡�Ҥ---</option>"
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


