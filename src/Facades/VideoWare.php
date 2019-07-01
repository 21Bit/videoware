<?php

namespace Bernas\VideoWare\Facades;

use Illuminate\Support\Facades\Facade;

class VideoWare extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'videoware';
    }
}
