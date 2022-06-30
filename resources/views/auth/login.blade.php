<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-=equiv="X-UA-Compatible" content="ie=edge">
    <title>LOG IN</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>LOG IN NOW</h4>
                <hr>
                <form action="{{route('login-user')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" value=""> 
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password" name="password" value=""> 
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group" align="center">
                        <button class="btn btn-block btn-primary" type="submit">LOG IN</button>
                    </div>
                    <div align="center">
                    <a href="registration">Create Account</a>
                    </div>
                </form>



            </div> 
        </div>
    </div>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>