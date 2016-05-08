@extends('layout.page')

@section('title')
    Team
@stop

@section('content')
<div class="row teams">
    <nav class="col-md-2" id="teams">
        <ul class="nav nav-pills nav-stacked">
            <li class="nav-item"><a class="nav-link active" href="#staff">Staff</a></li>
            <li class="nav-item"><a class="nav-link" href="#league-of-legends-a">League of Legends A</a></li>
            <li class="nav-item"><a class="nav-link" href="#league-of-legends-b">League of Legends B</a></li>
            <li class="nav-item"><a class="nav-link" href="#csgo">CS:GO</a></li>
            <li class="nav-item"><a class="nav-link" href="#super-smash-bros">Super Smash Bros</a></li>
        </ul>
        @if( Auth::check() )
            <a href="/member" class="btn btn-primary add-member"><i class="fa fa-user" aria-hidden="true"></i>New Member</a>
            <a href="/team" class="btn btn-primary add-team"><i class="fa fa-users" aria-hidden="true"></i>New Team</a>
        @endif
    </nav>
    <div class="col-md-8 col-md-offset-4 members" data-spy="scroll" data-target="#teams" data-offset="200">


        <div id="staff" class="team">
        <h2>Staff</h2>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        </div>

        <div id="league-of-legends-a" class="team">
        <h2>League of Legends A</h2>        
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        </div>


        <div id="league-of-legends-b" class="team">
        <h2>League of Legends B</h2>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        </div>

        <div id="csgo" class="team">
        <h2>CS:GO</h2>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        </div>

        <div id="super-smash-bros" class="team">
        <h2>Super Smash Brothers</h2>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        <div class="member">
            <div class="image"><img src="http://news.cdn.leagueoflegends.com/public/images/articles/2015/march_2015/upn/ghost.jpg"></div>
            <div class="member-text">
                <div class="username">DPSGroundz</div>
                <div class="position">Co-founder. Likes computers and stuff.</div>
                <div class="joined">Joined Jun 2016</div>
            </div>
        </div>
        </div>
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