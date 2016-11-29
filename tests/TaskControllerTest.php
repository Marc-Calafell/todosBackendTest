<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskControllerTest extends TestCase
{
    /**
     * A basic test example.
     * @group todo
     * @return void
     */
    public function testExample()
    {
        //$this->assertTrue(true);
        $response = $this -> call('GET','/tasques');
        $this->assertEquals(200,$response->status());
        $this->assertViewHas('tasks');
    }
}
