<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

trait HasUuid
{
    public static function bootHasUuid():void {
        static::creating(function (Model $model):void{
            $model->uuid = Uuid::uuid4()->toString();
        });
        /*TODO: Check on update if uuid is empty, and if it is, add a new uuid*/
    }
}
