<h4> Share yours ideas </h4>
<div class="row">
    <div class="mb-3">
        <form action="{{ route('idea.create') }}" method="post">
            @csrf
            <textarea class="form-control" id="idea" name="idea" rows="3"></textarea>
            @error('idea')
                <span class=" d-block fs-6 text-danger mt-2"> {{$message}} </span>
            @enderror
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark"> Share </button>
    </div>
    </form>
</div>
