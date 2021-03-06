<?php

/**
 * OneDriveFly
 * @author 风铃
 * @see https://github.com/Tai7sy/OneDriverFly
 */

class Config
{
    public static $config = [
        'name' => 'yes',
        'platform' => 'Normal',
        'multi' => 0,
        'accounts' => [
            [
                'name' => 'disk_1',
                'path' => '',
                'path_image' => ['/some_public/image'],
                'refresh_token' => '',
            ],
        ],
        'debug' => true,
        'proxy' => '',
        'password_file' => 'password',
        'admin_password' => '123456',
    ];
}