<h2 style="text-align:center;">Update</h2>
<table style="margin:0 auto;">
    @include ('errors.error')
    <form action="{{route('user.update',[$users->id])}}" method="post">
        {{csrf_field()}}
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="{{$users->username}}"></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="f_name" value="{{$users->f_name}}"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="l_name" value="{{$users->l_name}}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="{{$users->email}}"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="number" name="phone" value="{{$users->phone}}"></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><input type="text" name="location" value="{{$users->location}}"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="{{$users->gender}}">Male
                <input type="radio" name="gender" value="{{$users->gender}}">Female
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </form>
</table>


