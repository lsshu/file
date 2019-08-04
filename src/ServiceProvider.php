<?php
/**
 * Created by PhpStorm.
 * User: lsshu
 * Date: 2019/8/4
 * Time: 18:02
 */

namespace Lsshu\File;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;
    public function register()
    {
        $this->app->singleton(Server::class, function($path){
            return Server::init($path);
        });
        $this->app->alias(Server::class, 'file');
    }

    public function provides()
    {
        return [Server::class, 'file'];
    }
}