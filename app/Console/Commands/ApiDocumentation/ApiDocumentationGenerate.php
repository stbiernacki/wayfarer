<?php

namespace App\Console\Commands\ApiDocumentation;

use Illuminate\Console\Command;

class ApiDocumentationGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:doc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates documentation for the \'app/\' directory or selected subdirectories.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Sami 4.0.14-DEV by Fabien Potencier');
        $this->info('===================================');
        $directories = [
            'app/',
            'app/Http/',
            'app/Http/Controllers/',
            'app/Models/',
            'app/Repository/',
        ];
        $directory = $this->choice('Choose for which directory you want to generate the documentation', $directories);
        if ($this->confirm('Do you wish to create documentation for ' . $directory . '?')) {
            echo `rm -rf storage/apiDocumentation/docs/`;
            switch ($directory) {
                case 'app/':
                    echo `php app/Repository/Sami/sami.phar update app/Repository/Sami/config/configApp.php`;
                    break;

                case 'app/Http/':
                    echo `php app/Repository/Sami/sami.phar update app/Repository/Sami/config/configAppHttp.php`;
                    break;

                case 'app/Http/Controllers/':
                    echo `php app/Repository/Sami/sami.phar update app/Repository/Sami/config/configAppHttpControllers.php`;
                    break;

                case 'app/Models/':
                    echo `php app/Repository/Sami/sami.phar update app/Repository/Sami/config/configAppModels.php`;
                    break;

                case 'app/Repository/':
                    echo `php app/Repository/Sami/sami.phar update app/Repository/Sami/config/configAppRepository.php`;
                    break;
            }
            $this->info("\n");
        }
        $this->info('To use the documentation it is a good idea to start the server');
        if ($this->confirm('Do you wish to start serve?')) {
            $this->info('========================================================================');
            $this->info('Listening on http://localhost:8888/');
            $this->info('Document root is: /storage/apiDocumentation/docs/build/');
            $this->info('Press Ctrl-C to quit.');
            $this->info('========================================================================');
            $serve = `php -S localhost:8888 -t storage/apiDocumentation/docs/build/`;
            print $serve;
        }
    }
}
