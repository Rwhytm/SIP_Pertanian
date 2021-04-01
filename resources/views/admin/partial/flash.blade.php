@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oppppssss</strong>
        Ada yang salah dalam proses penginputan <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$errors}}</li>
                
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-succes">{{session ('success')}}</div>
@endif
@if (session('errors'))
    <div class="alert alert-danger">{{session ('errors')}}</div>
@endif