@extends('layouts.master')


@section('content')

	
	<div class="container" style="padding-top: 4em; height: 100vh; padding-bottom: 8rem;">

		<div class="columns">
			<div class="column">

				@if (Cart::content()->count() > 0)
					<table class="table">
					   	<thead class="thead">
					       	<tr class="tr">
					           	<th class="th">Product</th>
					           	<th class="th">Qty</th>
					           	<th class="th">Price</th>
					       	</tr>
					   	</thead>

			   			<tbody class="tbody">
							
							@foreach(Cart::content() as $row)
			       				<tr class="tr">
					           		<td class="td">
					               		<p><strong>{{ $row->name }}</strong></p>
					           		</td>
					           		<td class="td"><input type="text" value="{{ $row->qty }}"></td>
					           		<td class="td">${{ $row->price }}</td>
					       		</tr>

				   			@endforeach

			   			</tbody>
			   	
			  
					</table>
				@else
					The cart is empty
				@endif

			</div>

			<div class="column">
				@if(Cart::content()->count() > 0)
					<div class="box" style="width: 60%;">
						<div class="flex items-center mb-3">
							<p class="font-bold">SubTotal</p>
							<p><strong>${{ Cart::subTotal() }}</strong></p>
						</div>
						<div class="flex items-center mb-3">
							<p class="font-bold">Tax</p>
							<p><strong>${{ Cart::Tax() }}</strong></p>
						</div>
						<div class="flex items-center mb-3">
							<p class="font-bold">Shipping</p>
							<p class="font-bold">$10</p>
						</div>
						<div class="flex items-center mb-8">
							<p class="font-bold">Total</p>
							<p class="font-bold">${{Cart::total()}}</p>
						</div>

						<div class="block w-full">
							<checkout :amount="{{ Cart::content()->sum('price') * 100 }}"></checkout>
							
						</div>
					</div>
				@endif
			</div>

		</div>
	</div>
@stop


@push('beforeScript')

<script src="https://checkout.stripe.com/checkout.js"></script>

@endpush
