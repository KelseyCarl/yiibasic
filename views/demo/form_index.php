<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/2
 * Time: 17:09
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>服务器端设置Cookie</title>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>

<div class="login-box-body">
    <p>用户登录</p>
    <div>
        <input id="name" name="name" placeholder="姓名" maxlength="100" type="tel" required>
    </div>
    <div class="">
        <input id="email" name="email" placeholder="邮箱" maxlength="80" type="email" required>
    </div>
    <div class="small-12 columns">
        <input value="提交" id="login_btn" class="button radius success" maxlength="100" type="submit">
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $("#login_btn").click(function(){
            login();
        });
    });

    function login(){
        var data={
            "data":{
                "name":$("#name").val(),
                "email":$("#email").val()
            }
        };
        var name = $("#name").val();
        var email = $("#email").val();
        var url = "http://192.111.111.221/basic/web/index.php?r=demo/form&name="+name+"&email="+email;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            data: JSON.stringify(data),
            async: true,
            cache: false,
            success: function(data) {
                console.log(data);
                alert("1998");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(url);
                alert('error');
//                alert(JSON.stringify(errorThrown));
            }
        });
    }
</script>
</body>
</html>
