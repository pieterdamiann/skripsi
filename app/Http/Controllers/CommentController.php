<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forum;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;


class CommentController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'forum_id' => ['required', 'string', 'max:255'],
            'penulis' => ['required', 'string', 'max:255'],
            'comment' => ['required', 'string'],
        ]);

        
        $comment = new Comment();
        $comment->forum_id = $request->forum_id;
        $comment->penulis = $request->penulis;
        $comment->comment = $request->comment;

        $comment->save();
        return redirect()->back();
    }

    public function destroy($id): RedirectResponse
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back();
    }
}
