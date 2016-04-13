<?php
namespace Sichikawa\LaravelLineBot;

use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class LineBotServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('line', function(){
            $config = $this->app['config']->get('services.line', []);

            $client = new Client(Arr::get($config, 'guzzle', []));
            
            return new LineBotClient($client);
        });
    }
}