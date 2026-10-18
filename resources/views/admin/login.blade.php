
<html>
<title>Admin Login Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
<body class="container">
<h1>Admin Login</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif

@if(Session::has('error'))
    <li>{{Session::get('error')}}</li>
@endif
@if(Session::has('success'))
    <li>{{Session::get('success')}}</li>
@endif

<form action="{{route('admin.login_submit')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-field">
        <input type="checkbox" id="exampleCheck1" class="check">
        <label for="exampleCheck1">Forget Password</label>
    </div>
    <button type="submit" class="btn-solid theme-primary">Login</button>
</form>
</body>
</html>
