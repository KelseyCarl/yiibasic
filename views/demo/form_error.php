<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/2
 * Time: 16:41
 */
use yii\helpers\html;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>错误页面</title>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>

<div class="login-box-body">
    <p>数据未被提交或数据验证错误!</p>
    <div>
        <p>收集到的数据为：</p>
        <p>姓名：<?= Html::encode($data->name)?></p>
        <p>邮箱：<?= Html::encode($data->email)?></p>
        <p>错误信息：<?= Html::encode($data->error)?></p>
    </div>
    <!--<div>
        <input id="name" name="name" placeholder="姓名" maxlength="100" type="tel" required>
    </div>
    <div class="">
        <input id="email" name="email" placeholder="邮箱" maxlength="80" type="email" required>
    </div>
    <div class="small-12 columns">
        <input value="提交" id="login_btn" class="button radius success" maxlength="100" type="submit">
    </div>-->
</div>
</body>
</html>
