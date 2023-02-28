<?php

namespace App\Models;

class Model extends \Illuminate\Database\Eloquent\Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public static function model(...$args): Model
    {
        return new static($args);
    }
}
