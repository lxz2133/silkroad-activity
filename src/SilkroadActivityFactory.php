<?php
/**
 * Created by PhpStorm.
 * User: lxz
 * Date: 2018/9/6
 * Time: 16:05
 */

namespace ICCGame\SilkroadActivity;

use ICCGame\ICCActivity\ICCActivityFactoryInterface;

class SilkroadActivityFactory implements ICCActivityFactoryInterface
{
    public function createICCActivity()
    {
        return new SilkroadActivity();
    }
}