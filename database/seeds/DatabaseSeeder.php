<?php

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Image;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
           ['id' => 1, 'code' => 'VN', 'name' => 'Vietnam', 'created_at' => now(), 'updated_at' => now()],
           ['id' => 2, 'code' => 'ML', 'name' => 'Malaysia', 'created_at' => now(), 'updated_at' => now()],
           ['id' => 3, 'code' => 'SG', 'name' => 'Singapore', 'created_at' => now(), 'updated_at' => now()],
           ['id' => 4, 'code' => 'JP', 'name' => 'Japan', 'created_at' => now(), 'updated_at' => now()],
           ['id' => 5, 'code' => 'ID', 'name' => 'Indonesia', 'created_at' => now(), 'updated_at' => now()],
           ['id' => 6, 'code' => 'ASIA', 'name' => 'Asia', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::insert([
            ['id' => 1, 'name' => 'user1', 'email' => 'user1@test.com', 'password' => Hash::make('user123'), 'birthday' => '1991-01-01', 'country_code' => 'ID', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'user2', 'email' => 'user2@test.com', 'password' => Hash::make('user123'), 'birthday' => '1991-01-02', 'country_code' => 'ML', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'user3', 'email' => 'user3@test.com', 'password' => Hash::make('user123'), 'birthday' => '1991-01-03', 'country_code' => 'SG', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'user', 'email' => 'user@user.com', 'password' => Hash::make('user123'), 'birthday' => '1991-01-04', 'country_code' => 'JP', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'thucle', 'email' => 'thucle@test.com', 'password' => Hash::make('thucle123'), 'birthday' => '1991-01-05', 'country_code' => 'VN', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Role::insert([
            ['id' => 1, 'code' => 'SUPER_ADMIN', 'name' => 'super admin', 'description' => 'Super Admin Role', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'code' => 'ADMIN', 'name' => 'admin', 'description' => 'Admin Role', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'code' => 'EDITOR', 'name' => 'editor', 'description' => 'Editor Role', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'code' => 'USER', 'name' => 'user', 'description' => 'User Role', 'created_at' => now(), 'updated_at' => now()],
        ]);

        RoleUser::insert([
            ['role_code' => 'ADMIN', 'user_id' => 1, 'description' => 'admin role description', 'created_at' => now(), 'updated_at' => now()],
            ['role_code' => 'EDITOR', 'user_id' => 1, 'description' => 'editor role description', 'created_at' => now(), 'updated_at' => now()],
            ['role_code' => 'SUPER_ADMIN', 'user_id' => 2, 'description' => 'supor admin role description', 'created_at' => now(), 'updated_at' => now()],
            ['role_code' => 'USER', 'user_id' => 3, 'description' => 'admin role description', 'created_at' => now(), 'updated_at' => now()],
            ['role_code' => 'EDITOR', 'user_id' => 4, 'description' => 'admin role description', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Book::insert([
            ['id' => 1, 'name' => 'Harry Potter 1', 'publish' => '2005-01-01', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Harry Potter 2', 'publish' => '2005-01-01', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Harry Potter 3', 'publish' => '2005-01-01', 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Harry Potter 4', 'publish' => '2005-01-01', 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Phone::insert([
            ['id' => 1, 'number' => '111', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'number' => '222', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'number' => '333', 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'number' => '444', 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Post::insert([
            ['id' => 1, 'title' => 'post title 1', 'content' => 'post content 1', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'title' => 'post title 2', 'content' => 'post content 2', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'title' => 'post title 3', 'content' => 'post content 3', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'title' => 'post title 4', 'content' => 'post content 4', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'title' => 'post title 5', 'content' => 'post content 5', 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Comment::insert([
            ['id' => 1, 'content' => 'my comment 1', 'parent_comment_id' => null, 'post_id' => 1, 'commenter_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'content' => 'my comment 2', 'parent_comment_id' => 1, 'post_id' => 1, 'commenter_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'content' => 'my comment 3', 'parent_comment_id' => null, 'post_id' => 1, 'commenter_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'content' => 'my comment 4', 'parent_comment_id' => null, 'post_id' => 1, 'commenter_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'content' => 'my comment 5', 'parent_comment_id' => 1, 'post_id' => 1, 'commenter_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'content' => 'my comment 6', 'parent_comment_id' => null, 'post_id' => 2, 'commenter_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'content' => 'my comment 7', 'parent_comment_id' => 6, 'post_id' => 2, 'commenter_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'content' => 'my comment 8', 'parent_comment_id' => null, 'post_id' => 3, 'commenter_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'content' => 'my comment 9', 'parent_comment_id' => 8, 'post_id' => 3, 'commenter_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'content' => 'my comment 10', 'parent_comment_id' => null, 'post_id' => 4, 'commenter_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
