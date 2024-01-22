@include('ideas.add-comment')
<hr>

@foreach ($idea->comments as $comment)
    <div class="d-flex align-items-start">

        <img style="width:35px" class="me-2 avatar-sm rounded-circle"
            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="Luigi Avatar">

        <div class="w-100">

            <div class="d-flex justify-content-between">
                <h6 class="">{{ $comment->id }}
                </h6>
                <small class="fs-6 fw-light text-muted"> {{ $comment->created_at }}</small>
            </div>
            <p class="fs-6 mt-3 fw-light">
                {{ $comment->comment }}
            </p>


        </div>

    </div>
@endforeach
