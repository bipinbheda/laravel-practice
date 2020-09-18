<?php $i = 3; ?>

@switch($i)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch

@for ($i = 0; $i <= 10; $i++)
    The current value is {{ $i }} <br />
    {{-- Here we can use both <?= $i ?> and {{ $i }} --}}
@endfor
<?php 
$users = array(
	array('name' => 'Bipin'),
	array('name' => 'parth'),
	array('name' => 'Ghano')
);
?>
@foreach ($users as $user)
    {{-- {{$user['name']}} --}}
@endforeach

<?php 
$users = array(array('name' => 'Bipin'),
	array('name' => 'parth'),
	array('name' => 'Ghano'));
?>
@forelse($users as $user)
	@if($loop->first)
		This is first
	@endif
	{{$user['name']}} <br />
	{{$loop->depth}} <br />
	@if($loop->last)
		This is last
	@endif	
	
@empty
	<p>No users</p>
@endforelse

@php
    echo 'asdas';
    echo 'bipin'
@endphp