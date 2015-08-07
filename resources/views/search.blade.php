@extends('master')

@section('content')

	<div class="section shirts search page">

		<div class="wrapper">

			<h1>Search</h1>

			@include('partials.search')

			@if (session('status'))

			    <p>{{ session('status') }}</p>

			@endif
			
			@if(isset($shirts))

				<ul class="products">

					@include('partials.shirts')

				</ul>

			@endif

		</div>

	</div>

@endsection