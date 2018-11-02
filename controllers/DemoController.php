<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/2
 * Time: 15:37
 */

namespace app\controllers;

use Yii;
use app\models\GetFormData;
use yii\web\Controller;

class DemoController extends Controller
{
    /**
     * Yii 使用 action 前缀区分普通方法和操作。 action 前缀后面的名称被映射为操作的 ID
     * @param string $param
     * @return string
     */
    public function actionTest($param='test')
    {
        return $this->render('test',['data'=>$param]);
    }

    public function getData()
    {
        $arr = array("name"=>"carl","email"=>"11111222@111");
        $dataValidate = new GetFormData();
        $dataValidate->name = $arr['name'];
        $dataValidate->name = $arr['email'];
        if ($dataValidate->validate()) {
            //数据验证成功
        } else {
//            $dataValidate->getErrors();//获取错误详情
        }
        return json_encode($arr);
    }

    /**
     * 加载表单页面
     */
    public function actionFormPage()
    {
        return $this->render('form_index',[]);
    }

    public function actionForm($name,$email)
    {
        $form = new GetFormData();
        $form->name = $name;
        $form->email = $email;
        # 收集用户post的数据
//        $data = Yii::$app->request->post();
//        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
        if ($form->validate()) {
            # 数据验证成功
            return $this->render('form',["data"=>$form]);
        } else {
            $err = $form->getErrors();
            $error = $err['email'][0];
            $form->error = $error;
//            echo json_encode($form);
//            return;
            return $this->render('form_error',["data"=>$form]);
        }
    }
}