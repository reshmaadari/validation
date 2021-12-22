<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td{
        border:2px solid black;
        padding:3px;
    }
    </style>
</head>
<body>
<a style="margin-left:820px" href="{{url('/regform')}}">register</a><br><br>
<center>
<table >
    <th >
        <tr>
            <td>Id</td>
            <td>UserName</td>
            <td>Email</td>
        </tr>
    <th>
    <tbody>
  @foreach($data as $dataa)
        <tr>
            <td>{{$dataa->id}}</td>
            <td>{{$dataa->username}}</td>
            <td>{{$dataa->email}}</td>
        </tr>
        @endforeach
  </tbody>
</table>
</center></form>
</body>
</html>