/**
 * Created by zxp on 16/8/25.
 */
function hospital(){


}

hospital.prototype.submit = function (type) {

    console.log(type)

    var hospital = $("#hospital").val();

    var prov = $('#prov').val();

    var city = $('#city').val();

    var fengmiantu = document.getElementById('fengmiantu').files[0];

    var zishitu = document.getElementById('zishitu').files[0];

    var address = $('#address').val();

    var phone = $('#phone').val();

    var hospital_type = $('#hospital_type').val();

    var miaoshu = $('#miaoshu').val();

    var formData = new FormData();

    var i = 0;

    if (base.checkString('miaoshu', 0, '请输入描述')) {

        i++;

        formData.append('introduce', miaoshu);
    }

    if (base.checkString('hospital', 0, '请输入医院名称')) {

        i++;

        formData.append('name', hospital);
    }

    if (base.checkString('phone', 0, '请输入联系电话')) {

        i++;

        formData.append('phone', phone);
    }

    if (base.checkString('address', 0, '请选择地址')) {

        i++;

        formData.append('address', address);
    }

    if (base.checkString('prov', 0, '请选择省')) {

        i++;

        formData.append('province', prov);
    }

    if (base.checkString('city', 0, '请选择市')) {

        i++;

        formData.append('city', city)
    }


    if (base.checkString('hospital_type', 0, '请选择类型')) {

        i++;

        formData.append('hospital_type', hospital_type)
    }

    if (base.checkImg('fengmiantu', 1, type)) {

        formData.append('fengmiantu', fengmiantu)
        i++;

    } else if (type == 1) {

        i++;
    }


    if (base.checkImg('zishitu', 1, type)) {

        formData.append('zishitu', zishitu)
        i++;

    } else if (type == 1) {

        i++;
    }


    if (i == 9) {

        formData.append('id', $('#id').val());

        formData.append('operation_type', type);

        var url = base.getDomainUrl() + '/pageredirst.php?action=hospital&functionname=add_hospital_ajax';

        base.ajax(url, 'post', formData, function success(data) {

            var dataObj=eval("("+data+")");

            if(dataObj['code'] != 0){

                $('#'+dataObj['object']+'_error').html(dataObj['status'])

            } else{

                var url = 'pageredirst.php?action=hospital&functionname=hospital_list';

                window.location.href = url;
            }


        }, function error(error) {


        })

    }
}

var hospital = new hospital();