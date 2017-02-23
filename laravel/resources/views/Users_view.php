<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
    <div>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
         </tr>
         @endforeach
      </table>
    </div>
      <div>
      <a href="/insert">ComeBack!</a>
      </div>
   
   </body>
</html>
