<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Member;
use App\Group;
use App\Http\Requests;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'members',
            'view'
        ]]);
    }

    public function index()
    {
        $teams = Group::all();
    	return view('members.new', compact( 'teams' ));
    }

    public function members()
    {
        $members = Member::orderBy('created_at', 'desc')->get();
        $teams = Group::all();
        return view('members', compact('members', 'teams'));
    }

    public function nate()
    {
        return view('members-demo');
    }

    public function view(Member $member)
    {
        return view('members.member', compact('member'));
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'group_id' => 'required',
            'position' => 'required',
            'joined' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/member')
                ->withInput()
                ->withErrors($validator);
        }

        if( empty($request->image) ) {
            $request->image = 'http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg';
        }

        $task = new Member;
        $task->username = $request->username;
        $task->position = $request->position;
        $task->group_id = $request->group_id;
        $task->joined = $request->joined;
        $task->image = $request->image;
        $task->save();

        return redirect('teams');
	}

    public function delete(Member $member)
    {
        $member->delete();
        return redirect('teams');
    }
}
