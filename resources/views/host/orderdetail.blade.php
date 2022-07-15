<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	<title></title>
</head>
<body class="body">
	<div class="container">
		<div class="orderdetails">
			<div class="logo">
				<img src="{{ url('upload/bigballoonlogo.png')}}">
			</div>
			<form action="#" method="post" style="margin-top:50px">
				<div class="show-order-detail">
					@foreach($user_info as $user_data)
						<div class="ordered-user-detail">
							<span>Name :</span>
							<h5>{{ $user_data->name }}</h5>
							<span>Balance :</span>
							<h5>500</h5>
						</div>
					@endforeach
					
						<div class="user-order-detail">
							<ol class="user-order">
								@foreach($order_info as  $order_detail)
								@php
									$names =  explode(',',$order_detail->order_name);
								@endphp  							  
								@foreach($names as $name)	  	
								  	<li>
								  		<div class="d-flex">
											<label for="ordername">
												{{$name}}
											</label>
											<input type="checkbox" name="ordername" id="ordername" value="{{$name}}" checked>							
										</div>
									</li>
								@endforeach  									@endforeach	
							</ol>						
						</div>			
				</div>
				<div class="btn-container">
					<button type="submit" class="btn btn-block submit-btn">SUBMIT</button>
				</div>	
			</form>
		</div>
	</div>
</body>
</html>