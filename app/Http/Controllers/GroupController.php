<?php

namespace App\Http\Controllers;

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
            'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/team')
                ->withInput()
                ->withErrors($validator);
        }

        $team = new Group;
        $team->name = $request->name;
        $team->save();

        return redirect('teams');
	}

    public function delete(Group $group)
    {
        $group->delete();
        return redirect('teams');
    }

    public function setOrder(Group $group, Request $request)
    {
        dd($request);
    }
}
