@extends('layout.page')

@section('title')
    Team
@stop

@section('content')
<div class="row teams">
    <nav id="teams">
        <ul class="nav nav-pills nav-stacked hidden-sm-down">
            @foreach($teams as $team)
                <li class="nav-item">
                @if( Auth::check() )            
                    <form action="{{ url('team/' . $team->id) }}" method="POST">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <!-- <a href="/team/edit/{{ $team->id }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> -->
                        <button type="submit" class="delete-team" onclick="return confirm('Delete group {{ $team->name }} and its members?')"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </form>
                @endif
                <a class="nav-link" href="#{{ $team->slug }}">{{ $team->name }}</a>
                </li>
            @endforeach
        </ul>
        @if( Auth::check() )
            <a href="/member" class="btn btn-primary add-member"><i class="fa fa-user" aria-hidden="true"></i>New Member</a>
            <a href="/team" class="btn btn-primary add-team"><i class="fa fa-users" aria-hidden="true"></i>New Team</a>
        @endif
    </nav>
    <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-23 members" data-spy="scroll" data-target="#teams" data-offset="200">

        @foreach($teams as $team)
            <div id="{{ strtolower(preg_replace('/[^A-Za-z0-9]/', '', $team->name)) }}" class="team">
            <h2>{{ $team->name }}</h2>
            @foreach(explode(",", $team->order) as $id)
                @foreach($members as $member)
                    @if($member->id == $id)
                        <div class="member" data-team="{{ $team->slug }}" data-id="{{ $member->id }}">
                            <div class="image"><img src="{{ $member->image }}"></div>
                            <div class="member-text">
                                <div class="username">{{ $member->username }}</div>
                                <div class="position">{{ $member->position }}</div>
                                <div class="joined">Joined {{ date("M Y", strtotime($member->joined)) }}</div>
                                @if( Auth::check() )
                                    <a href="/member/edit/{{ $member->id }}" class="edit-member"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <button class="move-member up"><i class="fa fa-caret-up" aria-hidden="true"></i></button>
                                    <button class="move-member down"><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                    <form action="{{ url('member/' . $member->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
                                        <button type="submit" class="delete-member" onclick="return confirm('Delete member {{ $member->username }}?')"><i class="fa fa-times" aria-hidden="true"></i></button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
            </div>
        @endforeach
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
        var ordering = {
            @foreach($teams as $team)
                {{ $team->slug }} : "{{ $team->order }}",
            @endforeach
        };

        $('.move-member').on( 'click', function() {
            $member = $(this).parent().parent();
            if($(this).hasClass('up'))
            {
                if(!$member.prev().is('h2'))
                {
                    $member.prev().before($member);
                    saveOrder($member.data('team'));
                }
            }
            else
            {
                if( $member.next().is('div') )
                {
                    $member.next().after($member);
                    saveOrder($member.data('team'));
                }
            }
            // if( $(this).hasClass('up'))
            // {

            // }
        });

        function saveOrder(team)
        {
            var csrf = $('meta[name="csrf-token"]').attr('content');
            members = $('[data-team="' + team + '"]');
            ordering = '';
            $.each(members, function( i, member ) {
                ordering += $( member ).data('id') + ",";
            });
            data = {};
            data[team] = ordering;
            data['_token'] = csrf;
            $.post( "/team/order", data)
            .done(function( result ) {
            });

        }
    </script>
@stop