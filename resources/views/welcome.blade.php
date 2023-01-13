@extends('Layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/Home.css')}}">
<div id = "content">
	<div id = "banner">
        <img alt = "Home banner" src="{{asset('images/DMCLogo.png')}}">
    </div> <!-- this is the end of headers and banners -->
	
    <div id = "left">
    	<h1>For all your DMC Speedrunning needs!</h1>
		<p> Welcome to the brand new DMC Speedruns Archive</p>
        <dl>
        <dt>Refrencees</dt>
        <dd>All of the refrencees will be displayed on the bottom of page such as copyrights</dd>
        <dt>Events</dt>
        <dd>The DMC3 Peak of Darkness Speedrun Tournament on November 13-14, 2021 </dd>
        </dl>
        <img id="icon" alt="issue" src="images/race-runner.png">
        <h2>Games List</h2>
        <ul>
        <li><a href="/DMC1">Devil May Cry</a></li>
        <li><a>Devil May Cry 2</a></li>
        <li><a>Devil May Cry 3</a></li>
        <li><a>Devil May Cry 4</a></li>
        <li><a>Devil May Cry 5</a></li>
        <li><a>DmC: Devil May Cry</a></li>
        </ul>
	</div> <!-- the end of left div -->
	<div id = "right">
    	<h1><span></span>Devil May Run</h1>
        <img class="photo" src="images/DMC twitch icon.png">
        <p> Make sure you follow the twitch page and Discord for DMCSpeedruns! </p>
        <p class="link"><a href="#">Discord</a> <a href="#">Twitch</a></p>
        <h1>  Weekly Race Schedule </h1>
        <p>If you have plan organize events. Feel free to join the Discord </p>
        <div id = "box">
        	<span></span>We need your Feedback!! for improving this site!! We need your help!!
        </div> <!-- end of box -->
        <form method="post" action="Feedback/index.html">
        <input type="submit" value="Fill it out >>">
        </form>
        <div id = "clean"></div> <!-- clean div -->
        <img src="images/bull.png">
        <h3>Calendar</h3>
        <p>Important dates for the DMCSpeedruns</p>
        <p class="link"><a href="#">Click here</a></p>
        </div> <!-- the end of right div -->
<div id="clearit"></div>
</div> <!-- this is the end of content -->
@endsection