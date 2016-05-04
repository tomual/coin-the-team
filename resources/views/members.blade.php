@extends('layout.page')

@section('title')
    Team
@stop

@section('content')
<div class="row members" data-spy="scroll" data-target=".teams" data-offset="50">
    <nav class="col-sm-3" id="teams">
        <ul class="">
            <li><a href="#staff">Staff</a></li>
            <li><a href="#league-of-legends-a">League of Legends A</a></li>
            <li><a href="#league-of-legends-b">League of Legends B</a></li>
            <li><a href="#call-of-duty">Call of Duty</a></li>
            <li><a href="#super-smash-bros">Super Smash Bros</a></li>
        </ul>
    </nav>
    <div class="col-md-8 col-md-offset-4">
        @if( Auth::check() )
        <a href="/member" class="btn btn-primary"><i class="fa fa-file-o" aria-hidden="true"></i>New Member</a>
        @endif

        <a id="staff"></a>
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


        <a id="league-of-legends-a"></a>
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



        <a id="league-of-legends-b"></a>
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


        <a id="call-of-duty"></a>
        <h2>Call of Duty</h2>
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


        <a id="super-smash-bros"></a>
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
    </div>
</div>
@stop