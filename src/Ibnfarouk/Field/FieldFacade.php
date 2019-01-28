<?php
namespace Ibnfarouk\Field;
use Illuminate\Support\Facades\Facade;
class FieldFacade extends Facade{
    protected static function getFacadeAccessor() { return 'field'; }
}