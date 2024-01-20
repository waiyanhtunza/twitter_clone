<div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 2000)">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="hello">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session()->has('delete-success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('delete-success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session()->has('update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="hello">
            {{ session('update') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
