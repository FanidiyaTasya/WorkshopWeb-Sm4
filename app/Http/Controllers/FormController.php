<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {
    
    public function index() {
        return view('form', [
            "title" => "Form",
            "name" => "Fanidiya Tasya"
        ]);
    }
}
