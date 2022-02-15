<!DOCTYPE HTML>
<html>
	<head>
		<title>
			</title>
</head>
			<body>
				
					{{$customer->name}}
					
					<ul>
					@foreach ($customer->orders as $order) 
						<li>{{$order->name}}</li>
					@endforeach	
					</ul>			
			</body>
		
	
</html>
	