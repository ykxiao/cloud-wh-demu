<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 09:42
 * Description: 配置文件发布
 */

namespace CloudWhDemu;

use Illuminate\Support\ServiceProvider;

class HttpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/cloud.php' => base_path('config/cloud.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLaravelBindings();
    }


    /**
     * Register Laravel bindings.
     *
     * @return void
     */
    protected function registerLaravelBindings()
    {
        $this->app->singleton(CloudService::class, function ($app) {
            return new CloudService($app['config']['cloud']);
        });
    }
}