<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/2
 * Time: 15:46
 */
use yii\helpers\html;
$title = 'Local YII Demo Test';
//解析控制器传递过来的数据
//global $data = Html::encode($data);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Local YII Demo Test</title>
</head>
<body>
    <h1><?= Html::encode($data)?></h1>
<script type="text/javascript">

    $(document).ready(function(){
        // $("#list tr").eq(0).focus();//默认将第1行获取到焦点
        var tabs_ele = $("#list tr");
        alert(tabs_ele);
        var values = "";
        tabs_ele.each(function(index,element) {
            $(document).off("keydown.s").on('keydown.s',function(event){
                event = window.event||event;
                var code = event.keyCode||event.which;
                if(code == '9'){
                    // event.preventDefault();
                    stopDefault(event);//阻止；浏览器的默认行为及事件
                    if(index == tabs_ele.length-1){
                        index = 0;
                    }else{
                        index++;
                    }
                    //聚集焦点
                    $("#list tr").eq(index).focus();
                }
                if(code == '13'){//如果按下了enter键，则获取整行的数据
                    var cuurent_focus = document.activeElement;// 获取焦点对象
                    // console.log(cuurent_focus);
                    // 获取整行的值
                    var childs = $("#list tr").eq(index).children("td");
                    values = "";
                    childs.each(function(){
                        values += $(this).text();
                    });
                    console.log(values);
                }

            });
        });

    });

    function stopDefault(e) {
        //如果提供了事件对象，则这是一个非IE浏览器
        if(e && e.preventDefault) {
            //阻止默认浏览器动作(W3C)
            e.preventDefault();
        } else {
            //IE中阻止函数器默认动作的方式
            window.event.returnValue = false;
        }
        return false;
    }
</script>
</body>
</html>
