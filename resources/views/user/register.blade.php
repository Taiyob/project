<h2 style="text-align:center;">Register</h2>
<table style="margin:0 auto;">
    @include ('errors.error')
    <form action="{{route('user.register')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="f_name"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="l_name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="number" name="phone"></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><input type="text" name="location"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Register"></td>
        </tr>
    </form>
</table>

