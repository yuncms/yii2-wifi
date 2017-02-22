<?php
/**
 * @link https://github.com/Chiliec/yii2-vote
 * @author Vladimir Babin <vovababin@gmail.com>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace yuncms\wifi;

use Yii;
use yii\base\InvalidConfigException;

/**
 * Class Module
 * @package yuncms\wifi
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'yuncms\wifi\controllers';

    /**
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();
        if (!isset(Yii::$app->i18n->translations['wifi*'])) {
            Yii::$app->i18n->translations['wifi*'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath' => __DIR__ . '/messages',
            ];
        }
    }
}
