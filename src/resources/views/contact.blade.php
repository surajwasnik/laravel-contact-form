<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<title>Contact Us</title>
	</head>
    <body>
      <div style="width: 500px; margin: 0 auto; margin-top: 90px;">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

      	<h3>Contact Us</h3>
      	@if(Session::has('message'))
	       {{Session::get("message")}}
	    @endif
      	<form action="{{route('contact')}}" method="POST">
			@csrf
			<div class="form-group">
			<label for="name">Your name</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="John Doe" required>
			</div>
			<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
			</div>

			<div class="form-group">
			<label for="message">Enter Your Message</label>
			<textarea class="form-control"name="message" id="message" rows="3" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
    </div>
</body>
</html>