<?php namespace Anomaly\FacebookProviderExtension;

use Anomaly\FacebookProviderExtension\Command\MakeFacebookAccessToken;
use Anomaly\FacebookProviderExtension\Command\MakeFacebookProvider;
use Anomaly\SocialModule\Provider\ProviderExtension;
use League\OAuth2\Client\Provider\AbstractProvider;

/**
 * Class FacebookProviderExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FacebookProviderExtension
 */
class FacebookProviderExtension extends ProviderExtension
{

    /**
     * This extension provides the facebook
     * oauth provider for the API module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.social::provider.facebook';

}
