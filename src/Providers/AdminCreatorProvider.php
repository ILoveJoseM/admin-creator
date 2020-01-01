<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 2019-12-03
 * Time: 18:08
 */

namespace JoseChan\AdminCreator\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AdminCreatorProvider extends ServiceProvider
{
    /** 定义命名空间 **/
    protected $namespace = "JoseChan\AdminCreator\Controllers";

    public function boot()
    {
        $this->publishes([__DIR__ . '/../../config/admin_creator.php' => config_path("admin_creator.php")], "admin-creator");
        $this->publishes([__DIR__ . '/../stubs' => public_path("stubs")], "admin-creator");
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        Route::prefix('admin')
            ->middleware(['web', 'admin'])
            ->namespace($this->namespace)
            ->group(__DIR__ . "/../../routes/routes.php");

    }


}