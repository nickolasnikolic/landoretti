@extends('layouts.main')

@section('title', trans('isearch.isearch'))

@section('content')
    <div class="isearch">
        <h1>{{ trans('isearch.isearch') }}</h1>
        @include('includes.search')
        <h2>{{ trans('isearch.overview') }}</h2>
        @include('includes.auction_table', ['auctions' => $searchResults])
    </div>
    @include('includes.scripts.remaining_time')
@endsection
