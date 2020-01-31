<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">

		 <form method="POST" action="{{URL('/registerpage') }}">
                        @csrf
		<h2 class="text-center"> Register Form </h2>
		<h3 class="text-right"><a href="{{URL('/show')}}" >Show Data</a></h3> 
		@if (count($errors) > 0)
      <div class="alert alert-danger">

          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>

    @endif


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

	  <div class="form-group">
	    <label for="name">First Name</label>
	    <input type="text" class="form-control" name="fname" required="required">
	  </div>

  	  <div class="form-group">
	    <label for="name">Last Name</label>
	    <input type="text" class="form-control" name="lname" required="required">
	  </div>

	  <div class="form-group">
	    <label for="name">Email</label>
	    <input type="email" class="form-control" name="email" required="required" >
	  </div>

	  <div class="form-group">
	    <label for="name">Address</label>
	    <input type="text" class="form-control" name="address" required="required" >
	  </div>

	  <div class="form-group">
	    <label for="name">Profile Image</label>
	    <input type="file" class="form-control" name="image" >
	  </div>

	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" name="password" required="required">
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>


</div>

</body>
</html>