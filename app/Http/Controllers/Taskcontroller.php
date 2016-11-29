<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

/**
 * Class Taskcontroller
 * @package App\Http\Controllers
 */
class Taskcontroller extends Controller {

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $urlTodosBackend='http://localhost:8000/api/v1/task';

    /**
     * Taskcontroller constructor.
     * @param Client $client
     */
    public function __construct(Client $client) {
        $this->client = $client;
    }

    /**
     * @return $this
     */
    public function task() {
        $tasks = \GuzzleHttp\json_decode($this->client->request('GET',$this->urlTodosBackend)->getBody())->data;
//        dd($tasks);
        return view('tasks')->with('tasks', $tasks);
    }


}
