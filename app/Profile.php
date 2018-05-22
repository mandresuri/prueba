<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model

{
     /**
     * Get the user that owns the profile.
     *
     * @return User
     */
    public function user(){
        return $this->BelongsTo('App\User');
    }
}
