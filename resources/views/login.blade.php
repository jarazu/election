<!DOCTYPE html>
<html>
    <body>
    <!-- <form class="" action={{URL::to('/about')}} method="post"> -->
        <form class="" action={{URL::to('/store')}} method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" name="name" value="" placeholder="Enter your name">
            <input type="text" name="email" value="" placeholder="Enter your email">
            <!-- <input type="password" name="password" value=""> -->
            <button type="submit" name="button">Register</button>
        </form>

    </body>
</html>