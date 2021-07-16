<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Thread;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations, RefreshDatabase;


    /** @test  */
    public function test_a_user_can_view_all_threads()
    {
        $thread = Thread::factory()->create();

        $response = $this->get(route('threads.index'));

        $response->assertSee($thread->title);
    }

    /*@test */


    public function test_a_user_can_read_a_single_thread()
    {
      $thread = Thread::factory()->create();

      $response = $this->get(route('threads.show' ,$thread->id));

      $response->assertSee($thread->title);
    }
}
