
{{ __('messages.welcome') }}

@lang('messages.welcome')
@admin(!'bipin')
    test
@else
    fail
@endadmin

@unlessadmin('bipin')
    this is not bipin
@endadmin
<?php $message ?? ''; 
echo date("l jS \of F Y h:i:s A"); 
echo '<br />'; 

echo '<br />';  ?>
{{ $message ?? '' ?? 'test' }} <?php 
$some = array('bipin','parth');
?>
@push('scripts')
    This will be second...
@endpush

@prepend('scripts')
    This will be first...
@endprepend
<div>
    {{-- @include('shared.errors',['some' => 'data']) --}}
    {{-- @includeIf('view.name', ['some' => 'data']) --}}
    {{-- @includeUnless(false, 'shared.errors', ['some' => 'data']) --}}

    <?php $type = 'email'; ?>
    <form>
        <input type="{{ $type ?? 'text' }}">

        <!-- Form Contents -->
    </form>
</div>


<x-alert alert-type="error" :msg="$message ?? ''" class="mt-4" id="aaaa">
        <x-slot name="title">
            Server Error
        </x-slot>
        
        <strong>Whoops!</strong> Something went wrong!
</x-alert>


The current UNIX timestamp is {{ time() }}.

Hello, {{ $name }}
Hello, @{{ name }}.

<?php 

$array = array('name'=> 'Bipin','lname'=>'Bheda');

?>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
@verbatim
<div id="app">
  {{ message }}
</div>
@endverbatim
<script>
    {{--  
    // var app = <?php echo json_encode($array); ?>;
    We can use @json directive instead of json_encode php function
    // var app = @json($array);
    --}}
    var app = new Vue({
	  el: '#app',
	  data: {
	    message: 'Hello Vue!'
	  }
	})
    var app = @json($array, JSON_PRETTY_PRINT);
    console.log(app)
</script>
    @stack('scripts')
