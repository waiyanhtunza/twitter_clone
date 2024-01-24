@extends('layouts.layout')
@section('content')
    <div class="container py-4">
        <div class="row">
            @include('layouts.left-side')
            <div class="col-6">
                @include('layouts.delete-box')
                @include('layouts.success-box')
                @include('shared.share-idea-box')
                <hr>
                @forelse ($ideas as $idea)
                    @include('shared.share-card')
                @empty
                    <p class="text-center">No Result found {{ request()->search }}</p>
                @endforelse
                <div class="mt-2">
                    {{ $ideas->links('pagination::bootstrap-5') }}
                </div>
            </div>
            <div class="col-3">
                @include('layouts.search-box')
                @include('layouts.follow-side')
            </div>
        </div>
    </div>
@endsection
