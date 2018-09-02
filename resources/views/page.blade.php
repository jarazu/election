<!DOCTYPE html>
<html>
    <body>
    <div class="">
        @foreach($data as $per)
        <div class="">
            <span style="background: skyblue;padding: 5px;display: inline-block;width: 100px;">
                {{$per -> name}}
            </span>
            <span style="background: orange;padding: 5px;display: inline-block;width: 150px;">
                {{$per -> email}}
            </span>
        </div>
        @endforeach
    </div>
    <div class="">
        {{$data->links()}}
    </div> 
    </body>
</html>