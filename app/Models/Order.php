<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Order extends Model
{
    use HasFactory,Searchable;

     protected $fillable = [
        'details',
        'client',
        'is_fulfilled',
    ];

    public function toSearchableArray(){
        return [
            'details'=>$this->details,
            'client'=>$this->client
        ];
    }


}
