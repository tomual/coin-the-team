@extends('layout.page')

@section('title')
    Team
@stop

@section('content')
<div class="row teams">
    <nav class="col-md-2" id="teams">
        <ul class="nav nav-pills nav-stacked">
            @foreach($teams as $team)
                <li class="nav-item">
                @if( Auth::check() )            
                    <form action="{{ url('team/' . $team->id) }}" method="POST">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <!-- <a href="/team/edit/{{ $team->id }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> -->
                        <button type="submit" class="delete-team"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </form>
                @endif
                <a class="nav-link" href="#{{ strtolower(preg_replace('/[^A-Za-z0-9]/', '', $team->name)) }}">{{ $team->name }}</a>
                </li>
            @endforeach
        </ul>
        @if( Auth::check() )
            <a href="/member" class="btn btn-primary add-member"><i class="fa fa-user" aria-hidden="true"></i>New Member</a>
            <a href="/team" class="btn btn-primary add-team"><i class="fa fa-users" aria-hidden="true"></i>New Team</a>
        @endif
    </nav>
    <div class="col-md-8 col-md-offset-4 members" data-spy="scroll" data-target="#teams" data-offset="200">

        @foreach($teams as $team)
            <div id="{{ strtolower(preg_replace('/[^A-Za-z0-9]/', '', $team->name)) }}" class="team">
            <h2>{{ $team->name }}</h2>
            @foreach($members as $member)
                @if($member->group_id == $team->id)
                    <div class="member">
                        <div class="image"><img src="{{ $member->image }}"></div>
                        <div class="member-text">
                            <div class="username">{{ $member->username }}</div>
                            <div class="position">{{ $member->position }}</div>
                            <div class="joined">Joined {{ $member->joined }}</div>

                            @if( Auth::check() )            
                                <form action="{{ url('member/' . $member->id) }}" method="POST">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <!-- <a href="/member/edit/{{ $member->id }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> -->
                                    <button type="submit" class="delete-member"><i class="fa fa-times" aria-hidden="true"></i></button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
            </div>
        @endforeach
    </div>
</div>
@stop

@section('script')
    <script>
        $('body').scrollspy({ target: '#teams' });
        $(window).scroll(function() {
            if(!$('.nav-link.active').length)
            {
                $('.nav-item:first-child > .nav-link').addClass('active');
            }
        });
    </script>
@stop