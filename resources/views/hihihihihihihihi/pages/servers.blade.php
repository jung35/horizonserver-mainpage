@extends('hihihihihihihihi/layout')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-push-4 col-sm-8 col-md-push-3 col-md-9">
        <h3 class="title">Server List</h3>
        <div class="servers">
            @foreach($servers as $server)
            <div class="item">
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="header">
                            <span class="small-title">Surf {!! $server['title'] !!}</span>
                        </div>
                        <div class="desc">
                            <p>{!! $server['desc'] !!}</p>
                        </div>
                        <img class="img-responsive" src="{!! $server['img'] !!}" alt="{!! $server['alt'] !!}">
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <a href="{!! $server['conn'] !!}" class="btn btn-custom">Join {!! $server['title'] !!}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-pull-8 col-sm-4 col-md-pull-9 col-md-3">
        <h3 class="title">Ranks</h3>
        <ul class="ranks">
            @foreach($ranks as $rank)
            <li style="color:{!! $rank['color'] !!}">{!! $rank['rank'] !!}</li>
            @endforeach
        </ul>
    </div>
</div>

@stop
