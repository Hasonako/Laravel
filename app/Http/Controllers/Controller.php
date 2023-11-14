<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $result = DB::table('stories') -> where('moder', '1') ->get();
        return view('main', ['result' => $result]);
    }

    public function new()
    {
        return view('new');
    }

    public function log_in()
    {
        $published = DB::table('stories') -> where('moder', '1') -> get();
        $wait = DB::table('stories') -> where('moder', '0') -> get();
        return view('admin', ['published' => $published, 'wait' => $wait]);
    }

    public function delete($id)
    {
        $affected = DB::table('stories')
              ->where('id', $id)
              ->delete();
        return back();
    }

    public function update($id)
    {
        $affected = DB::table('stories')
              ->where('id', $id)
              ->update(['moder' => 1]);
        return back();
    }

    public function tags($tags)
    {
        $result = DB::table('stories') -> where('tags', $tags) -> where('moder', '1') -> get();

        return view('tags', ['result' => $result]);
    }
}