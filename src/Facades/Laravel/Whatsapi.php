<?php 
namespace psbhanu\Whatsapi\Facades\Laravel;

use Illuminate\Support\Facades\Facade;

class Whatsapi extends Facade 
{
    protected static function getFacadeAccessor()
    {
        return 'psbhanu\Whatsapi\Contracts\WhatsapiInterface';
    }
}