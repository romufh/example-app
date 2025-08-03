<x-layouts.default>
<div class="space-y-3">
@foreach ( $tweets as $tweet )
<x-tw :tweet=" $tweet"/>
@endforeach


</div>
</x-layouts.default>