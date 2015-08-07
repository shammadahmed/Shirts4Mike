@extends('master')

@section('content')

	<div class="section shirts page">

		<div class="wrapper">

			<h1>Mike&rsquo;s Full Catalog of Shirts</h1>

			{!! $shirts->render() !!}

			<ul class="products">

				@include('partials.shirts')

			</ul>

			{!! $shirts->render() !!}

		</div>

	</div>

@endsection
