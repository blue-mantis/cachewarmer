<?php
/**
 * Cache Warmer plugin for Craft CMS 3.x
 *
 * A plugin for running a series of cache warming tasks
 *
 * @link      https://bluemantis.com
 * @copyright Copyright (c) 2020 Bluemantis
 */

use Codeception\Actor;
use Codeception\Lib\Friend;

/**
 * Inherited Methods
 *
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
 *
 */
class FunctionalTester extends Actor
{
    use _generated\FunctionalTesterActions;

}
