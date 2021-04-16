<?php
/**
 * This file is part of the NetSuitePHP library.
 *
 * @package    netsuitephp/netsuite-php
 * @author     James Gilliland <neclimdul@gmail.com>
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 * created:    2020-02-19  11:02 AM
 */

namespace NetSuite\Providers;

use Illuminate\Support\ServiceProvider;
use NetSuite\NetSuiteService;

class NetSuiteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // In most cases, using the default config is probably sufficient
        $this->mergeConfigFrom(
            __DIR__.'/../../config/netsuite.php',
            'netsuite'
        );

        // If this is laravel and not lumen, publish config.
        if (function_exists('config_path')) {
            $this->publishes([
                __DIR__.'/../../config/netsuite.php' => config_path(
                    'netsuite.php'
                ),
            ], 'config');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(NetSuiteService::class, function ($app) {
                $config = config('netsuite');
                $svcConfig = [
                    'endpoint'  => $config['endpoint'],
                    'host'      => $config['host'],
                    'account'   => $config['account'],
                    'app_id'    => $config['app_id'],
                    'logging'   => $config['logging'],
                    'log_path'  => $config['log_path'],
                ];
                // Prefer token-based auth, per NetSuite recommendations
                if ($config['token']) {
                    $svcConfig += [
                        'consumerKey'           => $config['consumerKey'],
                        'consumerSecret'        => $config['consumerSecret'],
                        'token'                 => $config['token'],
                        'tokenSecret'           => $config['tokenSecret'],
                        'signatureAlgorithm'    => $config['signatureAlgorithm'],

                    ];
                } else {
                    // Otherwise, try to use email/password auth
                    $svcConfig += [
                        'email'     => $config['email'],
                        'password'  => $config['password'],
                        'role'      => $config['role'],
                    ];
                }
                $options = [];
                if ($config['soap_options']) {
                    $options = $config['soap_options'];
                }

                return new NetSuiteService($svcConfig, $options);
        });

        $this->app->alias(NetSuiteService::class, 'netsuite');
    }
}
