<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $request->user()->members()->create([
            'username' => $request->username,
            'description' => $request->description,
            'group_id' => $request->group_id,
            'image' => $request->image,
        ]);

        return redirect('members');
	}

    public function delete(Member $member)
    {
        $member->delete();
        return redirect('/members');
    }
}
