@extends('layouts.master')


@section('content')

	
	<div class="container" style="padding-top: 4em; padding-bottom: 8rem;">
		<div class="columns">
			<div class="column is one-third">
				<figure class="card" style="margin-bottom: 1em;">
					<p class="image" style="width: 500px;">
	      				<img class="card-image" src="/{{ $product->image }}">
	    			</p>
	    			
				</figure>
				<h1 style="font-weight: bold; margin-bottom: 8px;">
					{{ $product->name }}
				</h1>
				<p style="margin-bottom: 8px;">
					from <span style="font-weight: bold;">${{ number_format($product->price / 100, 2) }}</span>
				</p>
				<span class="rating-static rating-35" style="margin-bottom: 1em;"></span>

				<div style="display: flex;">
					<form method="post" class="mr-8">
						@csrf
						<a href="/cart/{{$product->id}}}" class="button is-info">
							Add to cart
						</a>
					</form>

					<checkout :amount="{{ $product->price }}"></checkout>
				</div>
				
			</div>
	
			<div class="column is-two-third">
				<div class="content">
					{!! $product->description !!}
				</div>
			</div>
		</div>
	</div>
	
@stop



@push('beforeScript')

<script src="https://checkout.stripe.com/checkout.js"></script>

@endpush

