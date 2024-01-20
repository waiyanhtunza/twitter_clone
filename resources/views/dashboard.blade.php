@extends('layouts.layout')
@section('content')
    <div class="container py-4">
        <div class="row">
            @include('layouts.left-side')
            <div class="col-6">


                @include('layouts.delete-box')
                @include('layouts.success-box')
                @include('shared.share-idea-box')
                @foreach ($ideas as $idea)
                    @include('shared.share-card')
                @endforeach
                <div class="mt-2">

                    {{ $ideas->links('pagination::bootstrap-5') }}
                </div>

                <hr>

            </div>
            <div class="col-3">
                @include('layouts.search-box')
                @include('layouts.follow-side')
            </div>
        </div>
    </div>
@endsection
