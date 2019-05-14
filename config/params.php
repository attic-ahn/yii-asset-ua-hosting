<?php
/**
 * ua-hosting.org asset files: images, configs and more
 *
 * @link      https://github.com/ahnames/yii-asset-ua-hosting
 * @package   yii-asset-ua-hosting
 * @license   proprietary
 * @copyright Copyright (c) 2018, AHnames (https://ahnames.com/)
 */

$supportEmail = 'admin@my.ua-hosting.org';

return [
    'favicon.ico'       => '@ahnames/assets/uahosting/assets/images/favicon.ico',

    'organization.name'     => 'UA-Hosting',
    'organization.url'      => 'https://ua-hosting.org/',
    'organization.termsUrl' => 'https://evo.ua-hosting.org/rules',

    'supportEmail'      => $supportEmail,
    'adminEmail'        => 'admin@my.ua-hosting.org',
    'abuseEmail'        => 'admin@my.ua-hosting.org',
    'salesEmail'        => 'admin@my.ua-hosting.org',
    'gdprEmail'         => $supportEmail,

    'legals.privacyPolicyUrl' => 'https://evo.ua-hosting.org/rules/privacy',

    'copyright.year'    => 2015,

    'logo.image'                => '@ahnames/assets/uahosting/assets/images/logo.jpg',
    'logo.smallImage'           => '@ahnames/assets/uahosting/assets/images/logo.jpg',
    'logo.smallImageOptions'    => ['style' => 'width: 50px'],

    'socialLinks.links' => [
        'email'     => 'mailto:' . $supportEmail,
    ],
];
