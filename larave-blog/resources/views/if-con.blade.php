<?php 
	$records = array('first' => 'Bipin','second'=>'Parth' );
?>


@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 2)
    I have multiple records!
@else
    I don't have any records!
@endif

@unless (Auth::check())
    You are not signed in.
@endunless

@isset($records1)
	Yes, This is seted
@else
	This is not seted
@endisset

{{-- @empty(!$records) ! for negative return --}}
@empty($records)
	This is empty
@endempty

@auth
    The user is authenticated...
@else
	The user is not authenticated...
@endauth

@guest
    The user is not authenticated...
@endguest

@hasSection('navigation')
    <div class="pull-right">
        @yield('navigation')
    </div>

    <div class="clearfix"></div>
@endif

@env(['local','production'])
    The application is running in "local"...
@endenv