<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testDatabase(){
        $this->assertDatabaseHas('users',[
            'email' => 'F0264wvm2Z@gmail.com'
        ]);

        $users=factory(App\User::class,3)->make();
    }
}
