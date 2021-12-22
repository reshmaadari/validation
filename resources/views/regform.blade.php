<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label,button{
            margin-left:630px;
        }
       </style>
</head>
<body>

    <center><br><br><b>REGISTRATION</b><br><br></center>
        <form method="POST" action="save">
        @csrf
            <label >username:</label><input  type="text" name="username">
            <span style="color:red" >@error('username'){{$message}}@enderror</span><br><br>
            <label>email: </label><input style="margin-left:22px" type="email" name="email">
            <span style="color:red" >@error('email'){{$message}}@enderror</span><br><br>
            <label>password:</label><input type="text" name="password">
            <span style="color:red" >@error('password'){{$message}}@enderror</span><br>
            <br><button >register</button>
    </form>
    <center><table>
    <tr><td><a href="{{ url('login') }}">already registered?</a></td></tr>
    </table></center>
</body>
</html>