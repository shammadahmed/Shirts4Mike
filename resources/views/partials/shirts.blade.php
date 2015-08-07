@foreach($shirts as $shirt)

	<li>
		<a href="{{ url('shirts', ['id' => $shirt->sku]) }}">
		    <img src="{{ asset($shirt->img) }}" alt="{{ $shirt->name }}">
		    <p>View Details</p>
		</a>
	</li>

@endforeach