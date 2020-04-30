<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Numeration extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'numerations';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sequence',
        'ref',
        'year',
        'ip',
        'description',
        'option_id'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sequence' => 'int',
        'ref' => 'int',
        'year' => 'int',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast to \Carbon.
     *
     * @var array
     */
    protected $dates = [];

    public function option() {
        return $this->belongsTo('App\Models\Option');
    }

}