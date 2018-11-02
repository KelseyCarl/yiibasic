<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/2
 * Time: 16:23
 */

namespace app\models;

use yii\base\Model;//与数据表无关的模型类
use yii\db\ActiveRecord;//与数据表有关的模型类

/**
 * 模型类，用于接收用户提交的数据
 * Class GetFormData
 * @package app\models
 */
class GetFormData extends Model
{
    public $name;//存储用户输入的数据
    public $email;
    public $error="验证成功";

    public function rules()
    {
        return array(
            [array('name','email'), 'required'],//表示两个字段必须
            ['email','email']//表示邮箱必须符合有效的邮箱的格式
        );
    }
}