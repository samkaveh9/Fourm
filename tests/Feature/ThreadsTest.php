<?php

namespace Tests\Feature;

use App\Models\Channel;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations, RefreshDatabase;

    /** @test  */
    public function test_a_user_can_view_all_threads()
    {
        $thread = create(Thread::class);

        $response = $this->get(route('threads.index'));

        $response->assertSee($thread->title);
    }

    /*@test */
    public function test_a_user_can_read_a_single_thread()
    {
      $thread = create(Thread::class);

      $this->get($thread->path())
           ->assertSee($thread->title);
    }

    public function test_a_user_can_replies_that_are_associated_with_a_thread()
    {
      $thread = create(Thread::class);

      $reply = Reply::factory(['thread_id' => $thread->id])->create();

      $this->get($thread->path())
           ->assertSee($reply->body);
    }

    public function test_a_user_has_a_creator()
    {
      $thread = create(Thread::class);

      $this->assertInstanceOf(User::class, $thread->creator);
    }

    // public function test_unauthenticated_users_may_not_add_replies()
    // {
    //   $this->withExceptionHandling()
    //        ->post('threads/some-channel/1/replies',[])
    //        ->assertRedirect('/login');
    // }

    public function test_an_authenticated_user_can_create_new_forum_threads()
    {
      $this->signIn();
      
      $thread = create(Thread::class);
      $this->post(route('threads.store'));

      $this->get($thread->path())
           ->assertSee($thread->title)
           ->assertSee($thread->body);
      
    }

    public function test_an_authenticated_user_may_participle_in_forum_threads()
    {
      $this->withoutExceptionHandling();
      $this->signIn();
      
      $thread = create(Thread::class);
      $reply = make(Reply::class);

      $this->post($thread->path() . '/replies', $reply->toArray());

      $this->get($thread->path())
           ->assertSee($reply->body);
    }

    public function test_guest_may_not_create_thread()
    {
      $this->withoutExceptionHandling();
      
      $this->expectException('Illuminate\Auth\AuthenticationException');

      make(Thread::class);

      $this->post(route('threads.store'));
    }

    public function test_guests_cannot_see_the_create_thread_page()
    {
        $this->get(route('threads.create'))
             ->assertRedirect('login');
    }

    public function test_a_thread_can_add_a_reply()
    {
      $thread = create(Thread::class);
      $thread->addReply([
        'body' => 'test',
        'user_id' => 1
      ]);

      $this->assertCount(1, $thread->replies);
    }

    public function test_a_thread_has_a_creator()
    {
      $thread = create(Thread::class);
      
      $this->assertInstanceOf(User::class, $thread->creator);
    }


    public function test_a_thread_has_replies()
    {
      $thread = create(Thread::class);
      
      $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);
    }

    public function test_a_thread_belongs_to_a_channel()
    {
      $thread = create(Thread::class);

      $this->assertInstanceOf(Channel::class, $thread->channel);
    }

    public function test_a_thread_can_make_a_string_path()
    {
      $thread = create(Thread::class);
      
      $this->assertEquals("/threads/{$thread->channel->slug}/{$thread->id}",$thread->path());
    }

}
