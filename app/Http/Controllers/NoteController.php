<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = DB::table('note')->get();
        return View('note/index', ['notes' => $notes]);
    }

    public function add()
    {
        return View('note/add');
    }

    public function save()
    {
        $validator = Validator::make(Input::all(), [
            'subject' => 'required|max:20',
            'email' => 'required|email|unique:note',
            'content' => 'required:max:200',
        ]);

        if ($validator->fails()) {

            return Redirect::action('NoteController@add')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $note = Note::create(Input::all());
            return Redirect::action('NoteController@index');
        }
    }
}
