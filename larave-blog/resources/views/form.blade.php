<form method="POST" action="http://localhost/laravel/larave-blog/form">
    {{ $name }}
    <label for="title">Post Title</label>

	<input id="title" type="text" class="@error('title') is-invalid @enderror">

	@error('title')
	    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
</form>