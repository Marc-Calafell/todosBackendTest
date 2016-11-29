<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;



class TaskControllerTest extends TestCase {
    use DatabaseMigrations;

    /**
     * A basic test example.
     * @group todo
     * @return void
     */
    public function testExample()  {

        $this->login();


        //$this->assertTrue(true);
        $response = $this -> call('GET','/tasques');
        $this->assertEquals(200,$response->status());
        $this->assertViewHas('tasks');
    }

    protected function login(){
        $user = factory(\App\User::class)->create();
        $this->actingAs($user);

    }

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Http\Kernel::class);

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
}
