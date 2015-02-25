<?php
namespace SocialiteProviders\Pushbullet;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PushbulletExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'pushbullet', __NAMESPACE__.'\Provider'
        );
    }
}
