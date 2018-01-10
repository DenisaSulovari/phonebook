<?php

namespace Dena\Phonebook;

use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'surname',
        'type',
        'number',
    ];

    public $timestamps = true;
}
