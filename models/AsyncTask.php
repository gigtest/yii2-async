<?php
namespace bazilio\async\models;

use yii\base\Model;

abstract class AsyncTask extends Model
{
    static $queueName = 'tasks';
    public $message;
    public $params = null;

    abstract public function execute();
}
