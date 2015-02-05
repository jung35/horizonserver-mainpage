@extends('hihihihihihihihi/layout')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center title">Montly Giveaways</h1>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <div class="content text-center">
            <p>
                As a thank you gift to all our players, we will be giving away at least one item monthly. Items can be skins, games, or even a server perks such as donator.
            </p>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-xs-12">
        <div class="text-center">
            <div class="this-month-giveaway">
                <h3 style="title">This Month's Giveaway:</h3>
                <a href="http://store.steampowered.com/app/271590/" target="_blank">
                    <img src="http://cdn.akamai.steamstatic.com/steam/apps/271590/header.jpg">
                </a>
            </div>
        </div>
    </div>
    <div class="steps-to-enter">
        <div class="col-xs-8 col-xs-offset-2">
            <h3 class="title">Steps to enter:</h3>
            <ol>
                <li class="inc">
                    <a href="http://www.horizonservers.net/forums" target="_blank">Make a forum account</a>
                </li>
                <li class="inc">
                    <a href="http://www.horizonservers.net/login2.php?do=login" target="_blank">Link your steam</a>
                </li>
                <li class="inc">
                    <a href="http://www.horizonservers.net/?page=servers" target="_blank">Have at least 6 hours logged on any of our servers</a>
                </li>
                <li class="li">
                    <a href="http://steamcommunity.com/groups/Horizon-Servers" target="_blank">Join our steam group</a>
                </li>
            </ol>
            <p><small><strong>When completed, please refresh the page once again.</strong></small></p>
        </div>
        <div class="col-xs-12">
            <div class="text-center"><img src="http://i.imgur.com/pRRJjKz.png"></div>
        </div>
        <div class="col-xs-8 col-xs-offset-2">
            <p>The winner will be choosen randomly by our random number generator system.</p>
            <p>Since this wouldn't be possible without our donators, we decided to give them some extra luck.</p>
            <ul>
                <li>Advanced Donators get <a>3 entries</a>.</li>
                <li>Donators get <a>2 entries</a>.</li>
                <li>All other members get <a>1 entry</a>.</li>
            </ul>
        </div>
    </div>
</div>

@stop
