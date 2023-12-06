    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Document</title>
        @vite('resources/js/app.js')
    </head>
    @foreach($datas as $data)
        <a href="{{ route('Note_update', ['id' => $data->id]) }}">
            <p>{{ $data->user_name }}</p>
        </a>
    @endforeach

{{--       <div id="app">--}}
{{--           <example ></example>--}}
{{--       </div>--}}
    <form action="/create_notes" method="post" enctype="multipart/form-data">
        @csrf
        date <input type="date" name="date" ><br><br>
        houres<input type="text" name="houres" ><br><br>
        minute<input type="text" name="minute" ><br><br>
        user_name <input type="text" name="user_name" ><br><br>
        user_phone<input type="text" name="user_phone" ><br><br>
        user_img <input type="file" name="user_img" ><br><br>
        work_type <input type="text" name="work_type" ><br><br>
        description<input type="text" name="description" ><br><br>
        admin_notefication <input type="checkbox" name="admin_note" ><br><br>
        user_notefication<input type="checkbox" name="user_note" ><br><br>
        <input type="hidden" name="user_id" >

        <input type="submit" name="submit" >



    </form>



{{--       <script type="module"  src="{{ mix('js/app.js') }}"></script>--}}
    </body>
    </html>
