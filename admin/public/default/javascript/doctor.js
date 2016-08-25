function doctor() {


}

doctor.prototype.submitDoctor = function (type) {

    var doctor_name = $("#doctor_name").val();

    var hospital_name = $('#hospital_name').val();

    var phone = $('#phone').val();

    var img_file = document.getElementById('cover_pic_url').files[0];

    var department_id = sessionStorage.getItem("type_id_1");

    var department_detail_id = sessionStorage.getItem("type_id_99");

    var check_status = $('#check_status').val();

    var sex_id = $('#sex_id').val();

    var formData = new FormData();

    var i = 0;

    if (base.checkString('check_status', 0, '请选择审核状态')) {

        i++;

        formData.append('check_status', check_status);
    }

    if (base.checkString('phone', 0, '请输入手机')) {

        i++;

        formData.append('phone', phone);
    }

    if (base.checkString('hospital_name', 0, '请输入医院名称')) {

        i++;

        formData.append('hospital_name', hospital_name);
    }

    if (base.checkString('doctor_name', 0, '请输入医生名称')) {

        i++;

        formData.append('name', doctor_name)
    }


    if (base.checkString('sex_id', 0, '请选择性别')) {

        i++;

        formData.append('sex_id', sex_id)
    }

    if (base.checkSession('type_id_1', 'type_1_div_name', '请选择一级科室')) {

        formData.append('department_id', department_id)

        i++;
    }

    if (base.checkSession('type_id_99', 'type_99_div_name', '请选择二级科室')) {

        formData.append('department_detail_id', department_detail_id)

        i++;
    }

    if (base.checkImg('cover_pic_url', 1, type)) {

        formData.append('cover_pic_url', img_file)
        i++;

    } else if (type == 1) {

        i++;
    }


    if (i == 8) {

        formData.append('id', $('#id').val());

        formData.append('operation_type', type);

        var url = base.getDomainUrl() + '/pageredirst.php?action=doctor&functionname=add_doctor_ajax';

        base.ajax(url, 'post', formData, function success(data) {

            var url = 'pageredirst.php?action=doctor&functionname=doctor_list';

            window.location.href = url;

        }, function error(error) {


        })

    }


}

var doctor = new doctor();