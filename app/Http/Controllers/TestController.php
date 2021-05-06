<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $collection = collect([
            ['name' => 'Desk', 'price' => 200],
            ['name' => 'Chair', 'price' => 100],
            ['name' => 'Bookcase', 'price' => 150],
        ]);

        $sorted = $collection->sortBy('price')->all();

        dd($sorted);

        $comments = Comment::whereNotNull('parent_comment_id')->get()->filter(function ($comment) {
            return $comment->id < 8;
        })->last();

        dd($comments);
        die;

        $collection = collect([
            ['product' => 'Desk', 'price' => 200],
            ['product' => 'Chair', 'price' => 100],
            ['product' => 'Bookcase', 'price' => 150],
            ['product' => 'Door', 'price' => 100],
        ]);

        $filtered = $collection->where('price', 100)->first();
        echo "<pre>";
        print_r($filtered);
        echo "<pre>";
        die();
    }

}
