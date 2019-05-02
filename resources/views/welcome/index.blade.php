@extends('layouts.master')

@section('content')

	<section class="hero" style="align-items: center;">
		<div class="hero-body">
			<img src="/images/hero.png">
		</div>
	</section>

	<section style="padding-bottom: 1rem;">
		<h3 class="is-center" style="text-align: center; margin-bottom: 3em;">Featured products</h3>
		<div class="container">

			<!-- popular products -->
			<div class="columns" style="margin-bottom: 2em;">
				@foreach($popularProducts as $product)
					<div class="column is-one-quarter">
						<div class="card product">
							<a href="/products/{{$product->id}}" style="color: inherit;">
								<div class="card-image">
									<img src="{{ $product->image }}" style="width: 270px; height: 270px;">
								</div>
								<div class="card-content">
									<h3 class="is-bold" style="font-weight: bold;">{{ $product->name }}</h3>
									<span style="font-weight: bold; display: block; margin-bottom: 10px;">
										${{ number_format($product->price / 100, 2) }}
									</span>
									<form method="post" action="/cart/{{ $product->id }}">
										@csrf
										<button class="button is-info">
											Add to cart
										</button>
									</form>
								</div>
							</a>
						</div>
					</div>
				@endforeach
				
			</div> <!--end of popular products -->
			
			<h1 style="text-align: center; margin-bottom: 2em;">New Products</h1>
			<!-- new products -->
			<div class="columns" style="margin-bottom: 2em;">
				@foreach($newProducts as $product)
					<div class="column is-one-quarter">
						<div class="card product">
							<a href="/products/{{$product->id}}" style="color: inherit;">
								<div class="card-image">
									<img src="{{ $product->image }}" style="width: 270px; height: 270px;">
								</div>
								<div class="card-content">
									<h3 class="is-bold" style="font-weight: bold;">{{ $product->name }}</h3>
									<span style="font-weight: bold; display: block; margin-bottom: 1em;">
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
				
			</div> <!-- end of new products -->

		</div>
	</section>

	<section style="padding-bottom: 2rem;">
		<div class="container">
			<div class="columns">
				<div class="column">
					<img src="/images/3.png">
				</div>
				<div class="column">
					<img src="/images/1.png" style="margin-bottom: 2em;">
					<div>
						<img src="/images/2.png">
					</div>
				</div>
			</div>
		</div>
	</section>

@stop