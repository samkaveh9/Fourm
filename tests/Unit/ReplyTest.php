<?php

namespace Tests\Unit;

use App\Models\Reply;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReplyTest extends TestCase
{

    use DatabaseMigrations, RefreshDatabase;

    /*@test */
    public function test_it_has_an_owner()
    {
      $reply = Reply::factory()->create();
    
      $this->assertInstanceOf(User::class, $reply->owner);
        
    }




}
