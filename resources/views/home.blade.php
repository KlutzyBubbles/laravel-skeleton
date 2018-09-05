@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('content.home_title')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @lang('content.home')
                    <br>
                    @if (Auth::user())
                        @lang('content.logged_in')
                    @else
                        @lang('content.logged_out')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
