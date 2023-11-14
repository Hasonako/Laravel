<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function create(Request $request){
        $tags = $request->input('tags');
        $text = $request->input('text');
        $data = array('tags'=>$tags, 'text'=>$text);
        DB::table('stories')->insert($data);
        return redirect('/');
    }
}
