@extends('hihihihihihihihi/layout')

@section('content')

<div class="player_stats">
    <div class="row">
        <div class="col-xs-12">
            <form class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon pull">SteamID<span class="hidden-xs"> / CustomURL :</span></div>
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-search" type="button">Submit</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if($user)
    <div class="row text-center">
        <div class="col-xs-12">
            <div class="userinfo">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="server-ranking text-center">
                            <div>#{!! $user['rank'] !!}</div>
                            <small>({!! $user['percent'] !!}%)</small>
                        </div>
                        <div class="avatar">
                            <img src="{!! $user['avatar'] !!}" alt="player avatar">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <h3 class="title">{!! $user['name'] !!}</h3>
                        <div class="details">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="type">Rank Tag:</div>
                                            <div class="data" style="color:{!! $user['tag_color'] !!}"><strong>{!! $user['tag'] !!}</strong></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="type">Highest Tier:</div>
                                            <div class="data">{!! $user['mapstats']['highest_tier'] !!}</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="type">Maps Beaten:</div>
                                            <div class="data">{!! $user['mapstats']['num_beaten'] !!}
                                                <span style="color:red">({!! $user['mapstats']['percent_completion'] !!}%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="type">Play Time:</div>
                                            <div class="data">{!! $user['playtime'] !!}</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="type">Last Seen:</div>
                                            <div class="data">{!! $user['lastseen'] !!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-completed-details">
        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive">
                    <h2>Maps Completed</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="tier">Tier</th>
                                <th class="map">Map</th>
                                <th class="time">Time</th>
                                <th class="rank">Rank</th>
                                <th class="comp">Completions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user['mapstats']['maps'] as $map)
                            <tr>
                                <td class="tier">{!! $map['tier'] !!}</td>
                                <td class="map">surf_{!! $map['name'] !!}</td>
                                <td class="time">{!! $map['time'] !!}</td>
                                <td class="rank">{!! $map['rank'] !!}</td>
                                <td class="comp">{!! $map['num_completed'] !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@stop
