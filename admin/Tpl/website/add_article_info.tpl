<!DOCTYPE html>
<html lang="zh-CN">

<head>
    {include file="../public/_default.tpl"} {include file="../public/_editor.tpl"}
    <script src="{$MAINPUBLIC}/javascript/config/agreement.js"></script>
    <script src="{$MAINPUBLIC}/javascript/article.js"></script>
    <script src="{$MAINPUBLIC}/javascript/jquery.cityselect.js"></script>
    <script>
        $(function () {

            var operation_type = '{$operation_type}'

            $('#content').summernote({

                height: 669

            });

            sessionStorage.clear();
        })
    </script>
</head>

<body>
<div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
    <input type='hidden' id='id' name='id' value='{$data.id}'>
    <div class="form-group">
        <label for="hospital">标题</label>
        <input type="text" class="form-control" id="title" placeholder="请输入标题" style='
            width:500px;' value='{$data.title}'>
        <p style='color: red;font-size: 14px;' id='title_error'></p>
    </div>

    <div class="form-group">
        <label for="hospital">作者</label>
        <input type="text" class="form-control" id="auther" placeholder="请输入作者" style='
            width:500px;' value='{$data.auther}'>
        <p style='color: red;font-size: 14px;' id='auther_error'></p>
    </div>

    <div class="form-group">
        <label for="auther">类型</label>
        <div>
            {if $operation_type == 1}
                <script>
                    $(function () {

                        var type_id_1 = '{$data.type.id}';

                        sessionStorage.setItem("type_id_1", type_id_1);
                    })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(3,1)'
                        id='type_1_div_name'>{$data.type.name}</button>
            {else}
                <button class="btn btn-default" type="submit" onclick='base.getType(3,1)' id='type_1_div_name'>请选择类型
                </button>
            {/if}
        </div>
        <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
    </div>

    <div class="form-group">
        <label for="fengmiantu">封面图</label>
        <input id='fengmiantu' name='fengmiantu' type="file" >
        {if $operation_type == 1}
            <img src="http://localhost/HuanYaoBang/web/Public/upload/{$data.logo_name}" alt="..." class="img-thumbnail" style='width:150px;'>
        {/if}
        <p style='color: red;font-size: 14px;' id='fengmiantu_error'></p>
    </div>

    <div class="form-group">
        <label for="doctor_type">标签&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="cursor: pointer;"
                                                                    onclick="$('#addTagModal').modal()">添加标签</a></label>
        <div style="width:300px;" id="tag_div">

            {foreach from=$type_list item=lists}

                {if $operation_type == 1}

                <label class="checkbox-inline" style="margin-left:0px;">
                    <input type="checkbox" id="tag_array" value="{$lists.id}" name='tag_array' {if {$lists.id}|in_array:$data.tag_array}checked="checked" {/if}>{$lists.name}
                </label>

                {else}

                    <label class="checkbox-inline" style="margin-left:0px;">
                        <input type="checkbox" id="tag_array" value="{$lists.id}" name='tag_array' >{$lists.name}
                    </label>

                {/if}

            {/foreach}


        </div>


        <p style='color: red;font-size: 14px;' id='tag_array_error'></p>
    </div>

    <div class="form-group" style='width:375px;'>
        <label for="digest">文章摘要</label>

        <textarea style="width: 400px;height: 300px;" id="digest">{$data.digest}</textarea>

        <p style='color: red;font-size: 14px;' id='digest_error'></p>
    </div>

    <div class="form-group" style='width:375px;'>
        <label for="article_content">文章内容</label>
        {if $operation_type == 1}
            <div class="content" id='content' style='width:300px;'>{$data.content}</div>
        {else}
            <div class="content" id='content' style='width:300px;'>请输入文章内容</div>
        {/if}
        <p style='color: red;font-size: 14px;' id='content_error'></p>
    </div>
    <button type="submit" class="btn btn-default" onclick='article.submit({$operation_type})'>保存</button>

    <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
</div>
<div style='height:50px;'></div>
</body>

</html>

<div class="modal fade" id='addTagModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加标签</h4>
            </div>


            <div class="modal-body" id='preview_body'>


                <div class='form-inline'>
                    <div class="form-group">
                        <label for="tag_name">标签名称</label>
                        <input type="text" class="form-control" id="tag_name" placeholder="请输入标签名称" style='width:100%;'>
                        <p style='color: red;font-size: 14px;' id='tag_name_error'></p>
                    </div>

                </div>

            </div>
            <!-- /.modal-content -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick='submitTag()'>确定
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>

        </div>
        <!-- /.modal-dialog -->
    </div>

</div>


<script>

    $(function () {
        $('#addTagModal').on('hidden.bs.modal', function (e) {

            $('#addTagModal').modal('hide');
        })
    });

    function submitTag() {

        var tag_name = $('#tag_name').val();

        if (tag_name) {

            $('#tag_name_error').html('');

            var formData = new FormData();

            formData.append('name', tag_name);

            formData.append('type', 4);

            formData.append('level', 1);

            var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=add_type_ajax';

            base.ajax(url, 'post', formData, function success(data) {

                var dataObj = eval("(" + data + ")");

                if (dataObj['id'] > 0) {

                    var html = "<label class='checkbox-inline' style='margin-left:0px;'>";

                    html += '<input type="checkbox" id="tag_array" value="' + dataObj['id'] + '" name="tag_array" checked>' + tag_name;

                    html += "</label>";

                    $('#tag_div').append(html);

                    $('#addTagModal').modal('hide');
                }

            }, function error(error) {


            })

        } else {

            $('#tag_name_error').html('请输入标签名称');
        }
    }

</script>