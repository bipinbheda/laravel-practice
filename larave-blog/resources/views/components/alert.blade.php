{{-- @props(['type' => 'info']) --}}

<span class="alert-title">Test</span>

<div>
	<div {{ $attributes->merge(['data' => 'alert alert-'.$alertType,'data' => 'bbbk ']) }}>
</div>
	{{-- <div class="alert alert-{{ $alertType }}">
	    @if($message)
	    <p class="message">{{ $message }}</p>
		@endif
	</div> --}}
</div>