<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">Searh</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard')}}" method="get">
            @csrf
            @method('get')
            <input placeholder="..." class="form-control w-100" type="text" name="search">
            <button class="btn btn-dark mt-2" type="submit"> Search</button>
        </form>
    </div>
</div>
