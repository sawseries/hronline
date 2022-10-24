$(document).ready(function () {
    $("#frm_page1").validate();
});


function Address() {
    if ($('#chk_address').is(':checked')) {
        $("#txtbuilding").val($("#txthse_building").val());
        $("#txtaddress").val($("#txthse_address").val());
        $("#txtmoo").val($("#txthse_moo").val());
        $("#txtsoi").val($("#txthse_soi").val());
        $("#txtroad").val($("#txthse_road").val());
        $("#txttambon").val($("#txthse_tambon").val());
        $("#txtdistrinct").val($("#txthse_distrinct").val());
        $("#txtprovince").val($("#txthse_province").val());
        $("#txtpost").val($("#txthse_post").val());

        $("#txtbuilding").css({"background-color": "#F5F5F5"});
        $("#txtaddress").css({"background-color": "#F5F5F5"});
        $("#txtmoo").css({"background-color": "#F5F5F5"});
        $("#txtsoi").css({"background-color": "#F5F5F5"});
        $("#txtroad").css({"background-color": "#F5F5F5"});
        $("#txttambon").css({"background-color": "#F5F5F5"});
        $("#txtdistrinct").css({"background-color": "#F5F5F5"});
        $("#txtprovince").css({"background-color": "#F5F5F5"});
        $("#txtpost").css({"background-color": "#F5F5F5"});
    } else {
        $("#txtbuilding").val("");
        $("#txtaddress").val("");
        $("#txtmoo").val("");
        $("#txtsoi").val("");
        $("#txtroad").val("");
        $("#txttambon").val("");
        $("#txtdistrinct").val("");
        $("#txtprovince").val("");
        $("#txtpost").val("");

        $("#txtbuilding").css({"background-color": "#FFF"});
        $("#txtaddress").css({"background-color": "#FFF"});
        $("#txtmoo").css({"background-color": "#FFF"});
        $("#txtsoi").css({"background-color": "#FFF"});
        $("#txtroad").css({"background-color": "#FFF"});
        $("#txttambon").css({"background-color": "#FFF"});
        $("#txtdistrinct").css({"background-color": "#FFF"});
        $("#txtprovince").css({"background-color": "#FFF"});
        $("#txtpost").css({"background-color": "#FFF"});

    }
}

function add_child() {

    var no = $("#txtchild_no").val();
    var fname = $("#txtchild_fname").val();
    var lname = $("#txtchild_lname").val();
    var child_sex = $("#child_sex").val();
    var child_alive = $("#child_alive").val();
    var birthdate = $("#txtchild_birthdate").val();


    var x = {1: "หญิง", 2: "ชาย"};
    var lv = {1: "มีชีวิต", 0: "ไม่มีชีวิต"};

    var cnt = $("#cnt_child").val();

    var html = "<tr id='tr_child_display_" + cnt + "'>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_childno_" + cnt + "'>" + no + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_child_fname_" + cnt + "'>" + fname + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_child_lname_" + cnt + "'>" + lname + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_child_sex_" + cnt + "'>" + sex(child_sex) + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_child_alive_" + cnt + "'>" + alive(child_alive) + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_child_birthdate_" + cnt + "'>" + birthdate + "</span></td>";
    html += "<td style='padding:0.5em;'><a onclick='showchildele(" + cnt + ");'>แก้ไข</a></td>";
    html += "<td style='padding:0.5em;text-align:center;color:red;'><a onclick='remove_child(" + cnt + ")'>ลบ</a></td>";
    html += "</tr>";

    html += "<tr id='tr_child_ele_" + cnt + "' style='display:none;'>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_child_no_" + cnt + "' name='txt_child_no[]'  value='" + no + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_child_fname_" + cnt + "' name='txt_child_fname[]'  value='" + fname + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_child_lname_" + cnt + "' name='txt_child_lname[]'  value='" + lname + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'>";
    html += "<select id='txt_child_sex_" + cnt + "' name='txt_child_sex[]'>";
    $.each(x, function (key, value) {
        if (key == sex) {
            html += "<option value='" + key + "' selected>" + value + "</option>";
        } else {
            html += "<option value='" + key + "'>" + value + "</option>";
        }
    });
    html += "</select>";
    html += "</td>";
    html += "<td style='text-align:center;'>";
    html += "<select   id='txt_child_alive_" + cnt + "'  name='txt_child_alive[]''>";
    $.each(lv, function (key, value) {
        if (key == alive) {
            html += "<option value='" + key + "' selected>" + value + "</option>";
        } else {
            html += "<option value='" + key + "'>" + value + "</option>";
        }
    });
    html += "</select>";
    html += "</td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='date' style='width:90%;text-align:center;'  id='txt_child_birthdate_" + cnt + "' name='txt_child_birthdate[]'  value='" + birthdate + "'></td>";
    html += "<td><a onclick='save_child(" + cnt + ");'>บันทึก</a></td>";
    html += "<td><a onclick='hidechildele(" + cnt + ");'>ยกเลิก</a></td>";
    html += "</tr>";

    $("#tbl_child").append(html);
    cnt++;
    var cnt = $("#cnt_child").val(cnt);

    $("#txtchild_no").val("");
    $("#txtchild_fname").val("");
    $("#txtchild_lname").val("");
    $("#child_sex").val("");
    $("#child_alive").val("");
    $("#txtchild_birthdate").val("");

}

function add_edu() {

    var edu = $("#txtedu").val();
    var school = $("#txtschool").val();
    var faculty = $("#txtfaculty").val();
    var magor = $("#txtmagor").val();
    var gpa = $("#txtgpa").val();
    var start = $("#txtstart").val();
    var end = $("#txtend").val();
    var country = $("#txtcountry").val();
    var degree = $("#txtdegree").val();
    var bref = $("#txtbref").val();

    var lv = {1: "ป.6", 2: "ม.ต้น", 3: "ม.ปลาย", 4: "ปวช.", 5: "ปวส", 6: "ป.ตรี", 7: "ป.โท", 8: "ป.เอก"};
    var cnt = $("#cnt_edu").val();
    var html = "<tr id='tr_display_" + cnt + "'>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_edu_" + cnt + "'>" + level(edu) + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_school_" + cnt + "'>" + school + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_faculty_" + cnt + "'>" + faculty + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_magor_" + cnt + "'>" + magor + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_scholar_" + cnt + "'>" + bref + "</span></td>";

    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_gpa_" + cnt + "'>" + gpa + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_start_" + cnt + "'>" + start + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_end_" + cnt + "'>" + end + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_country_" + cnt + "'>" + country + "</span></td>";
    html += "<td style='text-align:center;padding:0.5em;overflow-wrap: break-word;'><span id='text_degree_" + cnt + "'>" + degree + "</span></td>";

    html += "<td style='padding:0.5em;'><a onclick='showele(" + cnt + ");'>แก้ไข</a></td>";
    html += "<td style='padding:0.5em;text-align:center;color:red;'><a onclick='remove_edu(" + cnt + ")'>ลบ</a></td>";
    html += "</tr>";

    html += "<tr id='tr_ele_" + cnt + "' style='display:none;'>";
    html += "<td style='text-align:center;padding:0.5em;'>";
    html += "<select id='txt_in_edu_" + cnt + "' name='txt_in_edu[]'>";
    $.each(lv, function (key, value) {
        if (key == edu) {
            html += "<option value='" + key + "' selected>" + value + "</option>";
        } else {
            html += "<option value='" + key + "'>" + value + "</option>";
        }
    });
    html += "</select>";
    html += "</td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_in_school_" + cnt + "' name='txt_in_school[]'  value='" + school + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_in_faculty_" + cnt + "' name='txt_in_faculty[]'  value='" + faculty + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_in_magor_" + cnt + "' name='txt_in_magor[]'  value='" + magor + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_in_bref_" + cnt + "' name='txt_in_bref[]'  value='" + bref + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_in_gpa_" + cnt + "'  name='txt_in_gpa[]''  value='" + gpa + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_in_start_" + cnt + "' name='txt_in_start[]'  value='" + start + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_in_end_" + cnt + "' name='txt_in_end[]'  value='" + end + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_in_country_" + cnt + "' name='txt_in_country[]'  value='" + country + "'></td>";
    html += "<td style='text-align:center;padding:0.5em;'><input type='text' style='width:90%;text-align:center;'  id='txt_in_degree_" + cnt + "' name='txt_in_degree[]'  value='" + degree + "'></td>";

    html += "<td><a onclick='save_edu(" + cnt + ");'>บันทึก</a></td>";
    html += "<td ><a onclick='hideele(" + cnt + ");'>ยกเลิก</a></td>";
    html += "</tr>";

    $("#tbl_edu").append(html);
    cnt++;
    var cnt = $("#cnt_edu").val(cnt);

    $("#txtschool").val("");
    $("#txtmagor").val("");
    $("#txtfaculty").val("");
    $("#txtgpa").val("");
    $("#txtstart").val("");
    $("#txtend").val("");
    $("#txtcountry").val("");
    $("#txtdegree").val("");
    $("#txtbref").val("");
}

function remove_edu(id) {

    $("#tr_display_" + id).remove();
    $("#tr_ele_" + id).remove();
}

function remove_child(id) {
    $("#tr_child_display_" + id).remove();
    $("#tr_child_ele_" + id).remove();
}

function save_edu(id) {

    $("#text_edu_" + id).text(level($("#txt_in_edu_" + id).val()));
    $("#text_school_" + id).text($("#txt_in_school_" + id).val());
    $("#text_faculty_" + id).text($("#txt_in_faculty_" + id).val());
    $("#text_magor_" + id).text($("#txt_in_magor_" + id).val());
    $("#text_gpa_" + id).text($("#txt_in_gpa_" + id).val());
    $("#text_bref_" + id).text($("#txt_in_bref_" + id).val());
    $("#text_start_" + id).text($("#txt_in_start_" + id).val());
    $("#text_end_" + id).text($("#txt_in_end_" + id).val());
    $("#text_country_" + id).text($("#txt_in_country_" + id).val());
    $("#text_degree_" + id).text($("#txt_in_degree_" + id).val());
    $("#tr_display_" + id).show();
    $("#tr_ele_" + id).hide();

}


function save_child(id) {

    $("#text_childno_" + id).text($("#txt_child_no_" + id).val());
    $("#text_child_fname_" + id).text($("#txt_child_fname_" + id).val());
    $("#text_child_lname_" + id).text($("#txt_child_lname_" + id).val());
    $("#text_child_sex_" + id).text(sex($("#txt_child_sex_" + id).val()));
    $("#text_child_alive_" + id).text(alive($("#txt_child_alive_" + id).val()));
    $("#text_child_birthdate_" + id).text($("#txt_child_birthdate_" + id).val());

    $("#tr_child_display_" + id).show();
    $("#tr_child_ele_" + id).hide();

}


function showchildele(id) {
    $("#tr_child_display_" + id).hide();
    $("#tr_child_ele_" + id).show();
}

function showele(id) {
    $("#tr_display_" + id).hide();
    $("#tr_ele_" + id).show();

}

function hideele(id) {
    $("#tr_display_" + id).show();
    $("#tr_ele_" + id).hide();
}

function hidechildele(id) {
    $("#tr_child_display_" + id).show();
    $("#tr_child_ele_" + id).hide();
}

function level(id) {
    switch (id) {
        case '1':
            return "ป.6";
        case '2':
            return "ม.ต้น";
        case '3':
            return "ม.ปลาย";
        case '4':
            return "ปวช.";
        case '5':
            return "ปวส.";
        case '6':
            return "ป.ตรี";
        case '7':
            return 'ป.โท';
        case '8':
            return 'ป.เอก';
        default:
            return '';
    }
}

function sex(id) {
    switch (id) {
        case '1':
            return "ชาย";
        case '2':
            return "หญิง";
    }
}

function alive(id) {
    switch (id) {
        case '1':
            return "มีชีวิต";
        case '0':
            return "ไม่มีชีวิต";
    }
}

function spouse_skip() {

    if ($('#chk_spouse').is(':checked')) {
        //   alert("chk_spouse");
        $("#txtspouse_fname").val("-");
        $("#txtspouse_lname").val("-");
        $("#txtspouse_occup").val("-");
        $("#txtspouse_phone").val("-");
        $("#txtspouse_address").val("-");
        $("#txtspouse_fname").prop("readonly", true);
        $("#txtspouse_lname").prop("readonly", true);
        $("#txtspouse_occup").prop("readonly", true);
        $("#txtspouse_phone").prop("readonly", true);
        $("#txtspouse_address").prop("readonly", true);

        $("#spouse_alive1").prop("disabled", true);
        $("#spouse_alive0").prop("disabled", true);
        $("#spouse_alive2").prop("checked", true);

        $("#txtspouse_fname").css({"background-color": "#F5F5F5"});
        $("#txtspouse_lname").css({"background-color": "#F5F5F5"});
        $("#txtspouse_occup").css({"background-color": "#F5F5F5"});
        $("#txtspouse_phone").css({"background-color": "#F5F5F5"});
        $("#txtspouse_address").css({"background-color": "#F5F5F5"});

    } else {
        $("#txtspouse_fname").val("");
        $("#txtspouse_lname").val("");
        $("#txtspouse_occup").val("");
        $("#txtspouse_phone").val("");
        $("#txtspouse_address").val("");
        $("#txtspouse_fname").prop("readonly", false);
        $("#txtspouse_lname").prop("readonly", false);
        $("#txtspouse_occup").prop("readonly", false);
        $("#txtspouse_phone").prop("readonly", false);
        $("#txtspouse_address").prop("readonly", false);

        $("#spouse_alive1").prop("disabled", false);
        $("#spouse_alive0").prop("disabled", false);
        $("#spouse_alive2").prop("checked", false);
        $("#spouse_alive1").prop("checked", false);
        $("#spouse_alive0").prop("checked", false);

        $("#txtspouse_fname").css({"background-color": "#FFF"});
        $("#txtspouse_lname").css({"background-color": "#FFF"});
        $("#txtspouse_occup").css({"background-color": "#FFF"});
        $("#txtspouse_phone").css({"background-color": "#FFF"});
        $("#txtspouse_address").css({"background-color": "#FFF"});


    }


}


function child_skip() {
    if ($('#child').is(':checked')) {
        $("#txtchild_fname").val("-");
        $("#txtchild_no").val("-");
        $("#txtchild_lname").val("-");
        $("#txtchild_birthdate").val("-");
        $("#txtchild_fname").prop("readonly", true);
        $("#txtchild_no").prop("readonly", true);
        $("#txtchild_lname").prop("readonly", true);
        $("#txtchild_birthdate").prop("readonly", true);

        $("#child_sex").prop("disabled", true);
        $("#child_alive").prop("disabled", true);

        $("#txtchild_fname").css({"background-color": "#F5F5F5"});
        $("#txtchild_no").css({"background-color": "#F5F5F5"});
        $("#txtchild_lname").css({"background-color": "#F5F5F5"});
        $("#txtchild_birthdate").css({"background-color": "#F5F5F5"});
        $("#txtchild_fname").css({"background-color": "#F5F5F5"});
    } else {
        $("#txtchild_fname").val("");
        $("#txtchild_no").val("");
        $("#txtchild_lname").val("");
        $("#txtchild_birthdate").val("");
        $("#txtchild_fname").prop("readonly", false);
        $("#txtchild_no").prop("readonly", false);
        $("#txtchild_lname").prop("readonly", false);
        $("#txtchild_birthdate").prop("readonly", false);

        $("#child_sex").prop("disabled", false);
        $("#child_alive").prop("disabled", false);

        $("#txtchild_fname").css({"background-color": "#FFF"});
        $("#txtchild_no").css({"background-color": "#FFF"});
        $("#txtchild_lname").css({"background-color": "#FFF"});
        $("#txtchild_birthdate").css({"background-color": "#FFF"});
        $("#txtchild_fname").css({"background-color": "#FFF"});
    }
}
