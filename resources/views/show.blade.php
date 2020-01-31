<html>
   <head>
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Users Table Records</title>
   </head>
   
   <body>
   	<h1>Welcome to your view Pages </h1>
      <h3 class="text-right">  <a href="{{URL('/regis')}}"> Go Registor Page </a></h3>
      <table border="1">
         <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Image</th>
            <th>Action</th>
         </tr>
         @foreach ($users as $user)
           <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->lname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->image }}</td>
            <td>
            	<a href="{{URL('editdata',$user->id )}}"><i class="fa fa-edit"></i> </a> 
            	&nbsp&nbsp&nbsp
            	<a href="{{URL('/deletedata',$user->id )}}" > <i class="fa fa-trash"></i> </a>
            </td>
        </tr>
         @endforeach
      </table>
   </body>
</html>