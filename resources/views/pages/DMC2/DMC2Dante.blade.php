@extends('Layout')
@section('title', 'Dante (DMC2)')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCCharacterInformation.css')}}">
<link rel="stylesheet" href="{{asset('css/MarathonTable.css')}}">
<link rel="stylesheet" href="{{asset('css/CSSModal.css')}}">

<div id = "content">
    <div id = "right">
        <table class="infobox">
          <tbody><tr>
          <th colspan="2" style="text-align: center;"><i><b>Dante</b></i>
          </th></tr>
          <tr>
          <th colspan="2"> 
            <img src="{{asset('images/DMC2Files/Character/DMC2Dante.png')}}" width="270" height="206" />
          </th></tr>
          <tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b>Categories</b>
          </td></tr>
          <tr><td colspan="2" style="text-align: center;"><b>NG Dante</b></td></tr>
          <tr><td colspan="2" style="text-align: center;"><b>NG+ Dante</b></td></tr>
        </tbody></table>
    </div>
    <div id ="left">
        <h1>Dante (Devil May Cry 2)</h1>
        {{ Breadcrumbs::render('DMC2Dante') }}
        <div id="toc_container">
            <p class="toc_title">Contents</p>
            <ul class="toc_list">
              <li><a href="#Character_Information">Character Information</a></li>
              <li><a href="#Move_List">Move List</a></li>
              <li><a href="#Techniques">Techniques</a></li>
              <li><a href="#Categories">Categories</a></li>
              <li><a href="#Video_Tutorials">Video Tutorials</a></li>
            </ul>
            </div>
        <dl id="extralinks"><b>Dante</b> runs feature the most risky playstyle as well as the most heavy use of various combats.
            Extremely punishable due to tightness of the orb route. This page provides information on the character mechanics.</dl>
        <h2 id="Character_Information">Character Information</h2>
        <ul>
            <li>Dante's Amulet start is Electro Heart.</li>
            <li>Has the best front roll in the game.</li>
            <li>The only character that utilizes orb manipulation mechanic.</li>
            <li>Has second form that requires HP to be at red state before transform.</li>
        </ul>
        <h2 id="Move_List">Move List</h2>

        <h3>Regular Moves</h3>
        <ul class="line">
            <li><label class="btn" for="modal-1">Combo</label></li>	
            <li><label class="btn" for="modal-2">Belvedere</label></li>
            <li><label class="btn" for="modal-3">Stinger</label></li>
            <li><label class="btn" for="modal-4">High Time</label></li>
            <li><label class="btn" for="modal-5">Helm Breaker</label></li>
            <li><label class="btn" for="modal-6">Air Combo</label></li>
            <li><label class="btn" for="modal-7">Ebony and Ivory</label></li>
            <li><label class="btn" for="modal-8">Shotgun</label></li>
            <li><label class="btn" for="modal-9">SMG</label></li>
            <li><label class="btn" for="modal-10">Missile launcher</label></li>
        </ul>
        <h3> Devil Trigger Moves </h3>
        <ul class="line">
            <li><label class="btn" for="modal-11">Million Stabs</label></li>
            <li><label class="btn" for="modal-12">Thrust Kick</label></li>
            <li><label class="btn" for="modal-13">Round Trip</label></li>
            <li><label class="btn" for="modal-14">Smash / Gravedigger</label></li>
            <li><label class="btn" for="modal-15">Elemental Damage</label></li>
            <li><label class="btn" for="modal-16">Caligula</label></li>
        </ul>
        <h3>Majin Form</h3>
        <ul class="line">
            <li><label class="btn" for="modal-17">Combo</label></li>
            <li><label class="btn" for="modal-18">Air Raid Combo</label></li>
            <li><label class="btn" for="modal-19">Archivolt</label></li>
            <li><label class="btn" for="modal-20">Whirlwind</label></li>
            <li><label class="btn" for="modal-21">Crimson Bolide</label></li>
            <li><label class="btn" for="modal-22">Doomsday</label></li>
            <li><label class="btn" for="modal-23">Laevateinn</label></li>
        </ul>
      </p>

      @include('pages.DMC2.DMC2DanteMoveList')

        <h2 id="Techniques">Techniques</h2>
        <ul>
            <li>Turnaround Stinger - links to new page.</li>
            <li>Rocket Launcher aim maniplutation</li>
            <li>E&I Shotgun cancel</li>
            <li>Stinger/Roll cancel into Air Raid</li>
            <li>Kick Cancel</li>
            <li>DT and Human combo mix ups</li>
            <li>One-on-one Twosome Time</li>
        </ul>
        <h2 id="Categories">Categories</h2>
        <ul>
        <li>NG Dante</li>
        <li>NG+ Dante</li>
        </ul>
        <h2 id="Video_Tutorials">Video Tutorials</h2>
    <ul id="extralinks">
        <li><a href="https://www.youtube.com/watch?v=X4tPgGLmCvk&list=PL5iFYeD1oFEKO-4YxCqHoJ4CjWH1cfl8j">LonerHero : Complete NG Dante Playlist</a></li>
    </ul>
    </div>
    <div id="clearit"></div>
</div>
@endsection