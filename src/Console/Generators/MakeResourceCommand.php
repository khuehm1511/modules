<?php

namespace Khuehm1511\Modules\Console\Generators;


use Khuehm1511\Modules\Console\GeneratorCommand;

class MakeResourceCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module:resource
    	{slug : The slug of the module.}
    	{name : The name of the resource class.}
		{--collection : Create a resource collection}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new module resource class';

    /**
     * String to store the command type.
     *
     * @var string
     */
    protected $type = 'Module resource';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('collection')) {
            return __DIR__ . '/stubs/resource.collection.stub';
        }
		return __DIR__ . '/stubs/resource.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
		return module_class($this->argument('slug'), 'Http\\Resources');
    }
}