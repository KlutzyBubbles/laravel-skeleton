@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-nowrap text-left">@lang('content.')</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <p>@lang('content.about')</p>
            <a href="{{ route('pages.index') }}">@lang('content.list_link')</a>
        </div>
    </div>
@endsection