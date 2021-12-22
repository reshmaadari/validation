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


<center><br><h2>login form</h2><br></center><a style="margin-left:820px" href="{{url('/regform')}}">Logout</a><br><br>
        <form method="POST" action="">
        
        @csrf
        
            <label>email: </label><input style="margin-left:22px" type="email" name="email">
            <span style="color:red" >@error('email'){{$message}}@enderror</span><br><br>
            <label>password:</label><input type="text" name="password">
            <span style="color:red" >@error('password'){{$message}}@enderror</span><br>
            <br><button formaction="{{url('/show')}}">Login</button>
    </form>
    <center><table>
    <tr><td><a href="{{ url('regform') }}">already registered?</a></td></tr>
    </table>
    <div  style="color:red" >
                {{ session('status') }}
             </div>
</center>
    
</body>
</html>