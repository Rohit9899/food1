
<html>
<title>Forget Passsword Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
<body class="container">
<h1>Forget Password</h1>

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

<form action="{{route('admin.password_submit')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn-solid theme-primary">Email Password Reset Link</button>
</form>
</body>
</html>

