<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requestform extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'requestforms';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date_of_request', 'status', 'type_of_absence', 'hr_status', 'status_changed_by', 'user_id','username'];

    public function user (){        
        return $this->belongsTo('App\User');
    }

    public function entries() {
        return $this->hasMany(Entry::class);
    }
}
