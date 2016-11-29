<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Taskcontroller extends Controller {

    public function task() {
        return view('tasks')->with('tasks',[ ]);

    }


}
