<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Store</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
		
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

        <style>
        	.product:hover {
        		transform: scale(1.1);
    			transition: all 0.3s ease;
    			cursor: pointer;
        	}

        	.flex {
        		display: flex;
        		justify-content: space-between;
        	}

        	.link {
        		color: black;
        		margin-right: 3em;
        		text-transform: uppercase;
        	}
        </style>
    </head>
    <body>

    	<header class="container" style="padding-top: 2em;">
    		<div class="flex">
				<div>
					<h2>
						<a href="/"  style="color: inherit;">Shop store</a>
					</h2>
				</div>
				<ul class="flex">

					@foreach(\App\Category::all() as $category)
						<li>
							<a href="/categories/{{ $category->id }}" class="link">{{$category->name}}</a>
						</li>
					@endforeach
					<li style="margin-bottom: 10px;">
						<a href="/cart" class="link">Cart</a>
					</li>
					<li>
						<a href="/products" class="link">Shop</a>
					</li>
					
				</ul>
    		</div>
    	</header>
		
		<div id="app">
    		@yield('content')
    	</div>
      

       <footer class="footer">
			<div class="container">
				<div class="columns">
					<div class="column">
						<h2 style="color: grey; margin-bottom: 8px;">CATEGORIES</h2>
						<ul>
							<li style="margin-bottom: 10px;">
								<a href="/cart" style="color: black; text-transform: uppercase;">Cart</a>
							</li>
							<li style="margin-bottom: 10px;">
								<a href="/products" style="color: black; text-transform: uppercase;">Shop</a>
							</li>
			
							@foreach(\App\Category::all() as $category)
								<li>
									<a href="/categories/{{ $category->id }}" class="link">{{$category->name}}</a>
								</li>
							@endforeach
						</ul>
					</div>
					<div class="column">
						<h2 style="color: grey; margin-bottom: 8px;">QUICK LINKS</h2>
						<ul>
							<li style="margin-bottom: 10px;">
								<a href="#" style="color: black; text-transform: uppercase;">About Us</a>
							</li>
							<li style="margin-bottom: 10px;">
								<a href="#" style="color: black; text-transform: uppercase;">Our Policy</a>
							</li>
							<li style="margin-bottom: 10px;">
								<a href="#" style="color: black; text-transform: uppercase;">Contact Us</a>
							</li>
					
						</ul>
					</div>
					<div class="column">
						<h2 style="color: grey; margin-bottom: 8px;">CONNECT WITH US</h2>
						<ul>
							<li style="margin-bottom: 10px;">
								<a href="#" style="color: black; text-transform: uppercase;">Twitter</a>
							</li>
							<li style="margin-bottom: 10px;">
								<a href="#" style="color: black; text-transform: uppercase;">Facebook</a>
							</li>
							<li style="margin-bottom: 10px;">
								<a href="#" style="color: black; text-transform: uppercase;">Snapchat</a>
							</li>
							<li style="margin-bottom: 10px;">
								<a href="#" style="color: black; text-transform: uppercase;">Whatsapp</a>
							</li>
							<li>
								<a href="#" style="color: black; text-transform: uppercase;">Instagram</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
       </footer>

       @stack('beforeScript')
       <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>