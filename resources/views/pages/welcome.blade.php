@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-nowrap text-left">@lang('content.welcome_title')</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <p>@lang('content.welcome')</p>
            <a href="{{ route('pages.about') }}">@lang('content.about_link')</a>
        </div>
    </div>
@endsection