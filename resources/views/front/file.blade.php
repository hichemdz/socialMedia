<form action="/profile" method='POST' enctype="multipart/form-data" >
    @csrf
    @error('file')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <input type="file" class="@error('file') is-invalid @enderror" name="cover" id="">
    <button type="submit">upload</button>
</form>