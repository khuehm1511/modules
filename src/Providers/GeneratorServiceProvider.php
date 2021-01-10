<?php

namespace Khuehm1511\Modules\Providers;

use Illuminate\Support\ServiceProvider;

class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the provided services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the provided services.
     */
    public function register()
    {
        $generators = [
            'command.make.module'            => \Khuehm1511\Modules\Console\Generators\MakeModuleCommand::class,
            'command.make.module.controller' => \Khuehm1511\Modules\Console\Generators\MakeControllerCommand::class,
            'command.make.module.middleware' => \Khuehm1511\Modules\Console\Generators\MakeMiddlewareCommand::class,
            'command.make.module.migration'  => \Khuehm1511\Modules\Console\Generators\MakeMigrationCommand::class,
            'command.make.module.model'      => \Khuehm1511\Modules\Console\Generators\MakeModelCommand::class,
            'command.make.module.policy'     => \Khuehm1511\Modules\Console\Generators\MakePolicyCommand::class,
            'command.make.module.provider'   => \Khuehm1511\Modules\Console\Generators\MakeProviderCommand::class,
            'command.make.module.request'    => \Khuehm1511\Modules\Console\Generators\MakeRequestCommand::class,
            'command.make.module.resource'   => \Khuehm1511\Modules\Console\Generators\MakeResourceCommand::class,
            'command.make.module.seeder'     => \Khuehm1511\Modules\Console\Generators\MakeSeederCommand::class,
            'command.make.module.test'       => \Khuehm1511\Modules\Console\Generators\MakeTestCommand::class,
            'command.make.module.job'        => \Khuehm1511\Modules\Console\Generators\MakeJobCommand::class,
        ];

        foreach ($generators as $slug => $class) {
            $this->app->singleton($slug, function ($app) use ($slug, $class) {
                return $app[$class];
            });

            $this->commands($slug);
        }
    }
}
