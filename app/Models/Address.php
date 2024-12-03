<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'street',
        'internal_num',
        'external_num',
        'neighborhood',
        'town',
        'state',
        'country',
        'postal_code',
        'references',
        'client_id'
    ];

    public function client():BelongsTo{
        return $this->belongsTo(Client::class, 'client_id');
    }
}
