@extends('layouts.master')

@section('content')

{{-- 	<section class="hero" style="align-items: center;">
		<div class="hero-body">
			<img src="/images/hero.png">
		</div>
	</section> --}}

	<section style="padding-top: 5rem;">
		<h3 class="is-center" style="text-align: center; margin-bottom: 3em;">All products</h3>
		<div class="container">

			<!-- popular products -->
			@foreach($products->chunk(4) as $productCollection)
				<div class="columns" style="margin-bottom: 2em;">
					@foreach($productCollection as $product)
						<div class="column is-one-quarter">
							<div class="card product">
								<a style="color: inherit;" href="/products/{{$product->id}}">
									<div class="card-image">
										<img src="/{{ $product->image }}" style="width: 270px; height: 270px;">
									</div>
									<div class="card-content">
										<h3 class="is-bold" style="font-weight: bold;">{{ $product->name }}</h3>
										<span style="font-weight: bold; display: block; margin-bottom: 10px;">
											${{ number_format($product->price / 100, 2) }}
										</span>
										<a href="#" class="button is-info">
											Add to cart
										</a>
									</div>
								</a>
							</div>
						</div>
					@endforeach
					
				</div> <!--end of popular products -->
			@endforeach

		</div>
	</section>

	

@stop