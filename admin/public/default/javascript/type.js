function websiteType() {


}

websiteType.prototype.addType = function(type, level) {


    var type_id = $('input[name="inlineRadioOptions"]:checked ').val();

    var main_type_name = $('#main_type_' + type_id).text();

    if (main_type_name) {

        sessionStorage.setItem("type_id_" + level, type_id);

        base.removeMainType('mainTypeModal');

        $('#type_' + level + '_div_name').text(main_type_name);

        if(level == 1){

            $('#type_99_div_name').text('请输入二级科室');
        }
    }
};

var websiteType = new websiteType();