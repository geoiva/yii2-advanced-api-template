<?php
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require(__DIR__ . '/../protected/vendor/autoload.php');
require(__DIR__ . '/../protected/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../protected/common/config/bootstrap.php');
require(__DIR__ . '/../protected/backend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../protected/common/config/main.php'),
    require(__DIR__ . '/../protected/common/config/main-local.php'),
    require(__DIR__ . '/../protected/api/config/main.php'),
    require(__DIR__ . '/../protected/api/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
