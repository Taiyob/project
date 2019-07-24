<h2 style="text-align:center;">Register</h2>
<table style="margin:0 auto;" border="1">
    <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Location</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->username}}</td>
        <td>{{$user->f_name}}</td>
        <td>{{$user->l_name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->location}}</td>
        <td>{{$user->gender}}</td>
        <td><a href="{{route('user.edited',[$user->id])}}">Edit</a>||<a href="">Delete</a></td>
    </tr>
        @endforeach
</table>


