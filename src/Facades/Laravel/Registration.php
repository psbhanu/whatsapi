<?php 
namespace psbhanu\Whatsapi\Facades\Laravel;

use Illuminate\Support\Facades\Facade;

class Registration extends Facade 
{
    protected static function getFacadeAccessor()
    {
        return 'psbhanu\Whatsapi\Contracts\WhatsapiToolInterface';
    }
}