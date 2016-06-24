<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use Validator;
use App\Group;
use App\Http\Requests;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('groups.new');
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/team')
                ->withInput()
                ->withErrors($validator);
        }

        $team = new Group;
        $team->name = $request->name;
        $team->slug = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $request->name));

        if(!empty(DB::table('groups')->where('slug', $team->slug)->first()))
        {
            return redirect('/team')
                ->withInput()
                ->withErrors(array('message' => 'Team name is too similar to an existing team.'));
        }

        $team->save();

        return redirect('teams');
	}

    public function delete(Group $group)
    {
        $group->delete();
        return redirect('teams');
    }

    public function setOrder(Request $request)
    {
        $array = array();
        parse_str($request->getContent(), $array);
        unset($array['_token']);
        reset($array);
        $name = key($array);
        $group = Group::where('slug', $name)->first();
        $group->order = $array[$name];
        $group->save();
    }
}
