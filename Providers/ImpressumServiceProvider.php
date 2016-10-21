<?php
/**
 * Impressum Module
 *
 * Copyright (c) 2016, armpit <armpit@rumpigs.net>
 *
 * Permission to use, copy, modify, and distribute this software for any
 * purpose with or without fee is hereby granted, provided that the above
 * copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
 * ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
 * WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
 * ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
 * OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 *
 */

namespace App\Modules\Impressum\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class ImpressumServiceProvider extends ServiceProvider
{
	/**
	 * Register the Impressum module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Impressum\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Impressum module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('impressum', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('impressum', base_path('resources/views/vendor/impressum'));
		View::addNamespace('impressum', realpath(__DIR__.'/../Resources/Views'));
	}

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
		// $this->addMiddleware('');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('impressum.php'),
        ], 'config');

        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php', 'impressum'
        );
    }

	/**
     * Register the Middleware
     *
     * @param  string $middleware
     */
	protected function addMiddleware($middleware)
	{
		$kernel = $this->app['Illuminate\Contracts\Http\Kernel'];
        $kernel->pushMiddleware($middleware);
	}
}
