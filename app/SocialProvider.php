<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    protected $table = 'social_providers';
    protected $fillable = ['user_id', 'provider', 'provider_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
