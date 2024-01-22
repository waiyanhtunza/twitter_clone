<div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 2000)">
    @if (session()->has('addcomment'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="hello">
            {{ session('addcomment') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
