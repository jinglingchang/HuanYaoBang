var check = 0

var formData = new FormData;

function base() {


}

base.prototype.getDomainUrl = function() {

    return 'http://localhost/HuanYaoBang/admin';

}

base.prototype.ajax = function(url, method, params, success, error) {

    var oReq = new XMLHttpRequest();

    oReq.open(method, url, true);  
    oReq.onload = function(oEvent) {    
        success(oEvent.target.responseText);  
    };   
    oReq.send(params);

};

base.prototype.log = function(content) {

    console.log(content)
}

base.prototype.preview = function(name) {

    var text = $('#' + name).summernote('code');

    $('#previewModal').find('#preview_body').html(text);

    $('#previewModal').find('img').css('max-width', '100%');

    $('#previewModal').find('img').css('width', '100%');

    $("#previewModal").modal();

};

base.prototype.edit = function() {

    var readerObject = $('#readerModal');

    readerObject.modal();

};

base.prototype.getMainType = function(type) {

    var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=getMainType';

    var formData = new FormData();

    formData.append('belog_type', type);

    base.ajax(url, 'post', formData, function success(data) {

        $('body').append(data)

        $('#mainTypeModal').modal();

    }, function error(error) {


    })

};

base.prototype.addType = function(type, level) {

    var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=add_type';

    var formData = new FormData();

    formData.append('belog_type', type);

    formData.append('level', level);

    if(level == 99){

        var type_id = sessionStorage.getItem('type_id_1');

        formData.append('type_1',type_id);
    }

    base.ajax(url, 'post', formData, function success(data) {

        base.removeMainType('mainTypeModal');

        $('body').append(data)

        $('#mainTypeModal').modal();

    }, function error(error) {


    })

}

base.prototype.getType = function(type, level) {

    var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=getType';

    var formData = new FormData();

    formData.append('belog_type', type);

    //level等于99

    if(level == 99){

        var type_id = sessionStorage.getItem('type_id_1');

        if(!type_id){

            $('#type_99_div_name_error').html('请选择1级科室');

            return false;

        } else{

            $('#type_99_div_name_error').html('');
        }

        formData.append('type_1',type_id);
    }

    formData.append('level', level);

    base.ajax(url, 'post', formData, function success(data) {

        $('body').append(data)

        $('#mainTypeModal').modal();

    }, function error(error) {


    })

};


base.prototype.removeMainType = function(name) {

    $('#' + name).modal('hide');

    $('.modal-backdrop').remove();

    $('#' + name).remove();

    $('.modal-open').removeClass('modal-open');

}

base.prototype.saveMainType = function(type) {

    var main_type_name = $('#addMainTypeName').val()

    if (main_type_name && type) {

        var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=addMainType';

        var formData = new FormData();

        formData.append('belog_type', type);

        formData.append('main_type_name', $('#addMainTypeName').val());

        base.ajax(url, 'post', formData, function success(data) {

            base.removeMainType('mainTypeModal');

            base.getMainType(type)

        }, function error(error) {


        })
    }
};

base.prototype.saveType = function(type, level) {

    var add_name = $('#name').val();

    var formData = new FormData;

    var i = 0;

    formData.append('type', type)

    formData.append('level', level)

    if(level == 99){

        var type_id = sessionStorage.getItem('type_id_1');

        formData.append('type_1',type_id);
    }

    if (add_name) {

        i++;

        $('#name_error').html('');

        formData.append('name', add_name)

    } else {

        $('#name_error').html('分类名称必须填写');
    }

    if (i == 1) {

        var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=add_type_ajax';

        base.ajax(url, 'post', formData, function success(data) {

            base.removeMainType('mainTypeModal');

            base.getType(type, level)

        }, function error(error) {


        })

    }


}


base.prototype.submitMainType = function() {

    var main_type_id = $('input[name="inlineRadioOptions"]:checked ').val();

    var main_type_name = $('#main_type_' + main_type_id).text();

    sessionStorage.setItem("main_type_id", main_type_id);

    sessionStorage.setItem("main_type_name", main_type_name);

    base.removeMainType('mainTypeModal');

    $('#main_type_div_name').text(main_type_name);

};

base.prototype.jumpSymptom = function(first_argument) {
    
    var url = 'pageredirst.php?action=symptom&functionname=add_symptom_info';

    window.location.href = url;

};

base.prototype.jumpAddShop = function() {

    var url = 'pageredirst.php?action=shop&functionname=addShop';

    window.location.href = url;
};

base.prototype.jumpChannel = function() {

    var url = 'pageredirst.php?action=channel&functionname=add_channel_info';

    window.location.href = url;

};

base.prototype.jumpCollge = function() {

    var url = 'pageredirst.php?action=college&functionname=add_college_info';

    window.location.href = url;

};


base.prototype.jumpDoctor = function() {

    var url = 'pageredirst.php?action=doctor&functionname=add_doctor_info';

    window.location.href = url;

};

base.prototype.setShopValue = function() {

    var shop_name = $('#shop_name').val()

    var shop_price = $('#shop_price').val()

    var shop_describe = $('#shop_describe').summernote('code');

    var main_type_id = sessionStorage.getItem('type_id_1');

    var branch_type_id = sessionStorage.getItem('type_id_2');

    var shop_type = $("#shop_type option:selected").val();

    var logo = document.getElementById('logo').files[0];

    var shop_content = document.getElementById('shop_content').files[0];

    var params = {};

    params['shop_name'] = shop_name;

    params['shop_price'] = shop_price;

    params['shop_describe'] = shop_describe;

    params['type_id_1'] = main_type_id;

    params['type_id_2'] = branch_type_id;

    params['shop_type'] = shop_type;

    params['logo'] = logo;

    params['shop_content'] = shop_content;

    return params
};


//file_name  文件对象     is_img_file_check  int 1时候 代表需要验证图片格式 否则 不验证 是判断非空 

base.prototype.checkImg = function(file_name, is_img_file_check, type) {

    var img_file = document.getElementById(file_name).files[0];

    console.log(img_file)

    if (img_file) {

        filepath = img_file.name;

        if (is_img_file_check == 1) {

            var extStart = filepath.lastIndexOf('.');

            var ext = filepath.substring(extStart, filepath.length).toUpperCase();

            if (ext != '.BMP' && ext != '.PNG' && ext != '.GIF' && ext != '.JPG' && ext != '.JPEG') {

                $('#' + file_name + '_error').html('封面图限于png, gif, jpeg, jpg格式');

                return false;

            } else {

                $('#' + file_name + '_error').html('');

                return true;
            }

        } else {

            return true;
        }

    } else {

        if (type != 1) {

            $('#' + file_name + '_error').html('图片必须上传');
        }

        return false;

    }
};

base.prototype.checkString = function(string, is_check, error_info) {

    var values = $('#' + string).val();

    if (values && values != '') {

        $('#' + string + '_error').html('');

        if (is_check == 1) {

            if (!isNaN(values) && values > 0) {

                return true;

            } else {

                $('#' + string + '_error').html('请输入数字格式或数字大于0');
            }

        } else {

            return true;
        }

    } else {

        $('#' + string + '_error').html(error_info);

        return false;
    }

};

base.prototype.checkSession = function(string, value, error_info) {

    var values = sessionStorage.getItem(string);

    console.log(values)

    if (values) {

        $('#' + value + '_error').html('');

        return true;

    } else {

        $('#' + value + '_error').html(error_info);

        return false;
    }

};

var base = new base();