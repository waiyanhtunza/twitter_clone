<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{ route('ideas.store') }}" method="post">
        @csrf
        @method('post')
        <div class="mb-3">
            <textarea name="content" class="form-control" id="idea" rows="3"></textarea>
        </div>
        @error('content')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="">
            <button class="btn btn-dark" type="submit"> Share </button>
        </div>
    </form>
</div>
