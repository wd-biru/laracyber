<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">

		 <form method="POST" action="{{URL('/registerpage') }}">
                        @csrf
		<h2 class="text-center"> Updated Form </h2>
		@if (count($errors) > 0)
         <div class="alert alert-danger">
           <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>

    @endif

<!-- 
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
 -->
	  <div class="form-group">
	    <label for="name">First Name</label>
	    <input type="text" class="form-control" name="fname" value="{{ $users->name }} " required="required">
	  </div>

  	  <div class="form-group">
	    <label for="name">Last Name</label>
	    <input type="text" class="form-control" name="lname" value="{{ $users->lname }} " required="required">
	  </div>

	  <div class="form-group">
	    <label for="name">Email</label>
	    <input type="email" class="form-control" name="email" value="{{ $users->email }} " required="required" >
	  </div>

	  <div class="form-group">
	    <label for="name">Address</label>
	    <input type="text" class="form-control" name="address" value="{{ $users->address }} " required="required" >
	  </div>

	  <div class="form-group">
	    <label for="name">Profile Image</label>
	    <input type="file" class="form-control" name="image" value="{{ $users->image }} " >
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>


</div>

</body>
</html>