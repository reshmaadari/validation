<h1>hello {{session('username')}}</h1>
<a href="{{url('/logout')}}">Logout</a><br><br>
<a href="{{url('/list')}}">list</a><br><br>
<p style="color:red">{{session('status')}}</p>

