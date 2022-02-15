<!DOCTYPE html>
<html>
	<head>
		<title>mypage</title>
	</head>
		<body>
			<h1>Hello this is my page</h1>
			<p> {{$var1}} </p>
			<p> {{$var2}} </p>
			 @if($var2=='hotdog')
				same
			@endif
			<ul>
			@foreach ($orders as $order) 
				
					<li>{{ $order->name}}</li>
			@endforeach
			</ul>	
			
		</body>
</html>
