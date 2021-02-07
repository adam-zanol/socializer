<?php
/**
 * Socializer plugin for Craft CMS 3.x
 *
 * @link      https://enupal.com/
 * @copyright Copyright (c) 2019 Enupal LLC
 */

namespace enupal\socializer\events;


use enupal\socializer\elements\Provider;
use yii\base\Event;

/**
 * AfterLoginEvent class.
 */
class BeforeProviderConfigEvent extends Event
{
    /**
     * @var Provider
     */
    public $provider;

    /**
     * @var array
     */
    public $config;
    
}
