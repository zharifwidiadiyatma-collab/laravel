<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello()
    {
       // return view('blog.hello', ['name' => 'Andi']);
        
        return view ('blog.hello')
        ->with('name', 'Andi')
        -> with('age', 99);
    }
}

?>
