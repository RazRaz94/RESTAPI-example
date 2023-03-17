@extends('Layout')
@section('title', 'Griffon')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/DMC1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bossdatatable.css') }}">

    <div id="content">
        <div id="right">
            <img src="{{ asset('images/DMC1Files/Bosses/Griffon.png') }}" width="270" height="206" />
        </div>
        <div id="left">
            <h1>Griffon</h1>
            <dl id="extralinks"><b>Griffon</b> is a boss which encountered first in Mission 9. The actual
                mandatory fight starts from Mission 12 and it's final encounter in 15. It's infamously remarked that it
                kills the player run if:
                <ul>
                    <li>Player gets caught on it's kite pattern in Mission 12.</li>
                    <li>Taking waay to long to get knocked down in Mission 15 for the second phase</li>
                    <li>Being forced to fight in M18 after <a href="/DMC1:Nightmare">Nightmare</a> drags you into his space
                    </li>
                </ul>
            </dl>
            <table id="bossdata">
                <caption style="background-color:rgba(77, 14, 30);">
                    <b>HP Value</b>
                </caption>
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">M9</th>
                        <th scope="col">M12</th>
                        <th scope="col">M15</th>
                        <th scope="col">M18</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Easy</th>
                        <td>6000</td>
                        <td>4000</td>
                        <td>10000</td>
                        <td>2000</td>
                    </tr>
                    <tr>
                        <th>Standard</th>
                        <td>8000</td>
                        <td>4000</td>
                        <td>10000</td>
                        <td>4000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" colspan="2">Note:</th>
                        <td colspan="2">on DMD Dante Deals 1/3 of Normal damage even in DT.</td>
                    </tr>
                </tfoot>
            </table>

            <h2>Strategy</h2>
            {{ 'On many occasions the strategy kept changing for M12. Currently, there are 3 different approaches:' }}
            <ul>
                <li>The hardest one to pull is the Ifrit glitch (also known as Maxy punch), where you can replace bullet
                    damage with melee the moment it hits.</li>
                <li>The standard is the Alastor Stinger after 2 Grenade Shots in DT.</li>
                <li>The safest is doing 3 lightning strike during air raid after after 2 Grenade Shots in DT.</li>
            </ul>
            {{ "You use the Holy Water after you do any of the approaches above. The most important part of this fight is not get caught on Griffon's kite. You also need to
                    watch out for it's lightning after death which will cost you S rank if you got hit." }}
            <table>
                <tr>
                    <td>
                        <video width="480" height="360" controls>
                            <source src="{{ asset('video/DMC1Boss/Griffon/MaxyPunch.mp4') }}" type="video/mp4">
                        </video>
                    </td>
                    <td>
                        <video width="480" height="360" controls>
                            <source src="{{ asset('video/DMC1Boss/Griffon/AlastorStinger.mp4') }}" type="video/mp4">
                        </video>
                    </td>
                </tr>
            </table>
            <video style="display: block; margin: 0 auto;" width="480" height="360" controls>
                <source src="{{ asset('video/DMC1Boss/Griffon/AirRaidGriff.mp4') }}" type="video/mp4">
            </video><br>
            <table id="Steps">
                <tr>
                    <td>
                        <dl id="extralinks">
                            {{ 'For the last encounter session, you need 3 Holy Waters. The biggest issue with that fight specifically in ' }}
                            <a href="/DMC1:Any">Any%</a> {{ ' or ' }} <a href="/DMC1:Low">Low%</a>
                            {{ 'is to knock down Griffon. You will have to time and make note of the two shots:' }}
                            <br><br>
                            <ul>
                                <li>The first shot is when Griffon stops descending.</li>
                                <li>The second is when Griffon stops flying upwards.</li>
                            </ul>
                            {{ "Ideally, it's better to do these shots on DT state. Because sometimes he will have pixel hp left after popping 2 Holy Waters." }}
                    </td>
                    <td>
                        <video width="480" height="360" controls>
                            <source src="{{ asset('video/DMC1Boss/Griffon/Griff3.mp4') }}" type="video/mp4">
                        </video>
                    </td>
                </tr>
            </table>
            <h2>DMD</h2>
            <dl id="extralinks">
                {{ "Luckily for M12, there is AI manip where you can loop DT Pistol shooting. However, M15 needs a lot of work and luck. Because a well-timed
                        meteor is the name of the fight. Example: If the attack hits the head, you are going to deal 3/4 damage. If it hits anything other than the core and head you
                        get 1/2 damage." }}
            </dl>
            <table id="Steps">
                <tr>
                    <td>
                        <h3 style="color:#ff3333;">Mission 12</h3>
                        {{"If you get the set up right then you will be able to loop him other than that you will have to wait it out."}}<br><br>
                        {{"Make straight-line jump on the back then start shooting until you hit Griffon once. Avoid the kite with raw jump and
                        before you start shooting make sure that dante is aiming at the kite first not Griffon."}}<br><br>
                        {{"You need to stay in the same position without moving the character. After you get rid of the kite, shoot Griffon to get on the ship."}}
                    </td>
                    <td>
                        <video width="480" height="360" controls>
                            <source src="{{ asset('video/DMC1Boss/Griffon/Griffon2DMDSetup.mp4') }}" type="video/mp4">
                        </video>
                    </td>
                </tr>
                <tr>
                    <td>
                        {{"You have to be wary of the timing on when to jump after Griffon's Landing. Because dante will take damage and get stunned for brief second, if
                        you are not in the air state."}}<br><br>
                        {{"Once you reach at the foremast, run to the right side where Griffon's core is exposed then start shooting till you have 1 DT rune left."}}<br><br>
                    </td>
                    <td>
                        <video width="480" height="360" controls>
                            <source src="{{ asset('video/DMC1Boss/Griffon/Griffon2DMDCycle1.mp4') }}" type="video/mp4">
                        </video>
                    </td>
                </tr>
                <tr>
                    <td id="extralinks">
                        {{"You may accidentally land on Griffon or vortex. Make sure you are on the far right and disabled DT before you HB."}}<br><br>
                        {{"Taunt 2x times to restore the DT runes in full then wait for Griffon's stomp again before you climb to the foremast and repeat the sequence."}}<br><br>
                        {{"He will keep switching sides for each cycle, so this time you will run to the left side where his core is exposed. With "}}<a href="/DMC1:Turbo">turbo</a>
                        {{" and decent mashing, you will get this cycle in two. Otherwise, you repeat this 3 or 4 times."}}<br><br>
                    </td>
                    <td>
                        <video width="480" height="360" controls>
                            <source src="{{ asset('video/DMC1Boss/Griffon/Griffon2DMDCycle2.mp4') }}" type="video/mp4">
                        </video>
                    </td>
                </tr>
            </table>
        </div>
    </div>
