<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reply;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','body'];

    public function routePath($page)
    {
      return route("threads.$page",$this->id);
    }
    
    public function path()
    {
      return "/threads/{$this->channel->slug}/{$this->id}";
    }

    public function replies()
    {
      return $this->hasMany(Reply::class);
    }

    public function creator()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function addReply($reply)
    {
        return $this->replies()->create($reply);
    }

    public function channel()
    {
      return $this->belongsTo(Channel::class);
    }


  }
