<?php
echo "Our CRM";
// include Yii:
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
// get config:
$config = require(__DIR__ . '/../config/web.php');
// create and run app:
(new yii\web\Application($confiig))->run();