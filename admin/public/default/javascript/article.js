/**
 * Created by zxp on 16/8/25.
 */

function article(){


}

article.prototype.submit = function(type) {

    var title = $("#title").val();

    var auther = $('#auther').val();

    var content = $('#content').summernote('code');

    var article_type = sessionStorage.getItem("type_id_1");

    var digest = $('#digest').val();

    var fengmiantu = document.getElementById('fengmiantu').files[0];

    var chk_value = [];

    $('input[name="tag_array"]:checked').each(function() {

        chk_value.push($(this).val());

    });

    var formData = new FormData();

    var i = 0;

    if(chk_value.length > 0){

        formData.append('tag',chk_value);

    } else{

        formData.append('tag','');
    }

    if (base.checkString('title', 0, '请输入标题') && content) {

        i++;

        formData.append('title', title);

        formData.append('content', content);
    }

    if (base.checkString('auther', 0, '请输入作者')) {

        i++;

        formData.append('auther', auther)
    }


    if (base.checkString('digest', 0, '请输入文章摘要')) {

        i++;

        formData.append('digest', digest)
    }


    if (base.checkSession('type_id_1', 'type_1_div_name', '请选择文章类型')) {

        formData.append('type', article_type)

        i++;
    }

    if (base.checkImg('fengmiantu', 1, type)) {

        formData.append('fengmiantu', fengmiantu)
        i++;

    } else if (type == 1) {

        i++;
    }


    if (i == 5) {

        formData.append('id', $('#id').val());

        formData.append('operation_type', type);

        var url = base.getDomainUrl() + '/pageredirst.php?action=article&functionname=add_article_ajax';

        base.ajax(url, 'post', formData, function success(data) {

            var url = 'pageredirst.php?action=article&functionname=article_list';

            window.location.href = url;

        }, function error(error) {


        })

    }


}

function  delete_ar(id){

    formData.append('id', id);

    var url = base.getDomainUrl() + '/pageredirst.php?action=article&functionname=delete_article_ajax';

    base.ajax(url, 'post', formData, function success(data) {

        var url = 'pageredirst.php?action=article&functionname=article_list';

        window.location.href = url;

    }, function error(error) {


    })

}

var article = new article();