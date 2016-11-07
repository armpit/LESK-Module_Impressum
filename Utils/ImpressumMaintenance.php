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

namespace App\Modules\Impressum\Utils;

use DB;
use Sroutier\LESKModules\Contracts\ModuleMaintenanceInterface;
use Sroutier\LESKModules\Traits\MaintenanceTrait;
use App\Models\Permission;
use App\Models\Menu;

class ImpressumMaintenance implements ModuleMaintenanceInterface
{

    use MaintenanceTrait;


    static public function initialize()
    {
        DB::transaction(function () {
            $permOpenToAll = Permission::where('name', 'open-to-all')->first();
            $menuHome = Menu::where('name', 'home')->first();

            $routeHome = self::createRoute( 'impressum.home',
                'impressum',
                'App\Modules\Impressum\Http\Controllers\ImpressumController@home',
                $permOpenToAll );

            // Create menu system for the module
            self::createMenu( 'impressum.home', 'Impressum', 999, 'fa fa-file', $menuHome, false, $routeHome );
        }); // End of DB::transaction(....)
    }


    static public function unInitialize()
    {
        DB::transaction(function () {
            self::destroyMenu('impressum.home');
            self::destroyRoute('impressum.home');
        }); // End of DB::transaction(....)
    }


    static public function enable()
    {
        DB::transaction(function () {
            self::enableMenu('impressum.home');
        });
    }


    static public function disable()
    {
        DB::transaction(function () {
            self::disableMenu('impressum.home');
        });
    }

}
