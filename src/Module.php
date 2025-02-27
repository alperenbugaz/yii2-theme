<?php

namespace portalium\theme;

class Module extends \portalium\base\Module
{
    public static $name = 'theme';
    
    public static function moduleInit()
    {
        self::registerTranslation('theme','@portalium/theme/messages',[
            'theme/theme' => 'theme.php',
        ]);
    }

    public function registerComponents()
    {
        return [
            'theme' => [
                'class' => 'portalium\theme\Theme',
            ],
            'deviceDetector' => [
                'class' => 'portalium\theme\components\DeviceDetector',
            ],
        ];
    }

    public static function getLayouts()
    {
        return [
            [
                'layout' => 'main',
                'name' => self::t('Main'),
            ],
            [
                'layout' => 'dashboard',
                'name' => self::t('Dashboard'),
            ],
            [
                'layout' => 'login',
                'name' => self::t('Login'),
            ],
        ];
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('theme', $message, $params);
    }
}
