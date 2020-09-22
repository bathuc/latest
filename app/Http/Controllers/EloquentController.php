<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class EloquentController extends Controller
{
    public function eloquent()
    {
        $users = User::with([
            'phone',
            'roles',
            'posts.comments'
        ])->get();
        $user = User::find(1);
        $user->roles()->toggle(['EDITOR' => ['description' => 'my custom']]);die;
        $posts = Post::with('user')->get();
        $phones = Phone::with('user')->get();
        echo "<pre>";
        print_r($phones);
        echo "<pre>";
        die();
    }
}
