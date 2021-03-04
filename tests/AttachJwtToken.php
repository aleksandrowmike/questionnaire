<?php

namespace Tests;

use Tymon\JWTAuth\Facades\JWTAuth;

trait AttachJwtToken
{
    public function actingAs(\Illuminate\Contracts\Auth\Authenticatable $user)
    {
        $token = JWTAuth::fromUser($user);
        $this->withHeader('Authorization', 'Bearer ' . $token);
        return $this;
    }
}
