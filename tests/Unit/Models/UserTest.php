<?php

namespace Tests\Unit\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_has_many_repositories()
    {
        $user = new User;

        $this->assertInstanceOf(Collection::class, $user->repositories);
    }
}
