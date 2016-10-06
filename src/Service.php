<?php
namespace Veksa\Carrot\Yii2;

use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\base\UnknownMethodException;
use Veksa\Carrot\Api;

/**
 * Class Service
 *
 * @package Veksa\Yii2\Carrot
 */
class Service extends Component
{
    /**
     * Carrot app id
     *
     * @var string
     */
    public $appId;

    /**
     * Carrot token
     *
     * @var string
     */
    public $token;

    /**
     * Api interface
     *
     * @var \Veksa\Carrot\Api
     */
    private $api;

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after the object is initialized with the
     * given configuration.
     */
    public function init()
    {
        if (empty($this->appId)) {
            throw new InvalidConfigException('AppId is not set');
        }
        if (empty($this->token)) {
            throw new InvalidConfigException('Token is not set');
        }

        $this->api = new Api($this->appId, $this->token);

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function __call($name, $params)
    {
        if (!method_exists($this->api, $name)) {
            throw new UnknownMethodException('Calling unknown method: ' . get_class($this) . "::$name()");
        }

        return $this->api->$name($params);
    }
}