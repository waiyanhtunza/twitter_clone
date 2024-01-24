@extends('layouts.layout')
@section('content')
    <div class="container py-4">
        <div class="row">
            @include('layouts.profile')
            <div class="col-6">
                @include('layouts.success-box')
                {{-- @include('shared.share-idea-box') --}}
                @include('shared.share-card')
                <hr>

            </div>
            <div class="col-3">
                @include('layouts.search-box')
                @include('layouts.follow-side')
            </div>
        </div>
    </div>
@endsection
