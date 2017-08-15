<?php

namespace Deportes\Models;

use Illuminate\Database\Eloquent\Model;

class Evecom extends Model
{
    protected $table = 'inscribed';

    protected $fillable = ['events_id', 'competitor_id'];


}
