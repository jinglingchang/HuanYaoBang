function operation() {


}

operation.prototype.submitInfo = function(type) {
    var title = $('#title').val();

    var article_content = $('#article_content').summernote('code');

    var img_file = document.getElementById('cover_pic_url').files[0];

    var formData = new FormData();

    var i = 0;

    if (base.checkImg('cover_pic_url', 1,type)) {

        formData.append('cover_pic_url', img_file)
        i++;
    } else if (type == 1) {

        i++;
    }

    if (base.checkString('title', 0, '文章标题必须填写') && article_content) {

        i++;

        formData.append('title', title)

        formData.append('article_content', article_content)
    }

    if (i == 2) {
        formData.append('operation_type', type);
        formData.append('article_type', 8);
        formData.append('id', $('#id').val());
        var url = base.getDomainUrl() + '/pageredirst.php?action=operation&functionname=add_operation_ajax';
        base.ajax(url, 'post', formData, function success(data) {
            var url = 'pageredirst.php?action=operation&functionname=operation_list';
            window.location.href = url;
        }, function error(error) {


        })

    }

};

var operation = new operation();