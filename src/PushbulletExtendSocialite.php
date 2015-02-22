<?php
namespace SocialiteProviders\Pushbullet;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PushbulletExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('pushbullet', __NAMESPACE__.'\Provider');
    }
}
