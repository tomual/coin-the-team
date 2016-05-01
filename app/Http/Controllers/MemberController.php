<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Member;
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
    	return view('members.new');
    }

    public function members()
    {
        $members = Member::orderBy('created_at', 'desc')->get();
        return view('members', compact('members'));
    }

    public function view(Member $member)
    {
        return view('members.member', compact('member'));
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
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

        return redirect('team');
	}

    public function delete(Member $member)
    {
        $member->delete();
        return redirect('/team');
    }
}
