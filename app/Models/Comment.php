<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forum;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = [
        "forum_id",
        "penulis",
        "comment"
    ];

    public function forum(){
        return $this->belongsTo(Forum::class, 'forum_id', 'id');
    }
}
