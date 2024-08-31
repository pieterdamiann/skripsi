<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Comment;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;

class ForumController extends Controller
{

    public function create(): View
    {
        return view('tambahforum');
    }

    public function show(): View
    {
        $forum = Forum::all();
        return view('homeforum', compact('forum'));
    }

    public function detail($id): View
    {
        $forum = Forum::find($id);
        $comments = Comment::where('forum_id', $id)->get();
        return view('forumsatu', compact('forum', 'comments'));
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'penulis' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
        ]);

        
        $forum = new Forum();
        $forum->judul = $request->judul;
        $forum->penulis = $request->penulis;
        $forum->deskripsi = $request->deskripsi;

        $forum->save();

        return redirect(route('forum'));   
    }

    public function destroy($id): RedirectResponse
    {
        $forum = Forum::find($id);
        $forum->delete();
        return redirect(route('forum'));
    }
}
