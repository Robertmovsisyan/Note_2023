<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{--<div id="app1">--}}
{{--    <example ></example>--}}
{{--</div>--}}

<form action="/update_note" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}" >

    <input type="hidden" name="user_id" >
    date <input type="date" name="date"  value="{{  $user->date }}"><br><br>
    houres<input type="text" name="houres" value="{{$user->houres}}"><br><br>
    minute<input type="text" name="minute" value="{{$user->minute}}"><br><br>
    user_name <input type="text" name="user_name" value="{{$user->user_name}}"><br><br>
    user_phone<input type="text" name="user_phone" value="{{$user->user_phone}}"><br><br>
    <img src="{{$user->user_img}}" alt=""><br>
    user_img <input type="file" name="user_img" ><br><br>
    work_type <input type="text" name="work_type" value="{{$user->work_type}}"><br><br>
    description<input type="text" name="description" value="{{$user->description}}"><br><br>
    admin_notefication <input type="checkbox" name="admin_note" {{ $user->admin_note ? 'checked' : '' }} ><br><br>
    user_notefication <input type="checkbox" name="user_note" {{ $user->user_note ? 'checked' : '' }} ><br><br>

    <input type="submit" name="update"  value="update">



</form>
<form method="post"  action='{{route('note_delete')}}'>
    @csrf
    <input name="id" type="hidden" value="{{$user->id}}">
    <input name="delete" type="submit" value="Delete">
</form>
{{--<script type="module" src="{{ mix('resources/js/app.js') }}"></script>--}}
</body>
</html>
