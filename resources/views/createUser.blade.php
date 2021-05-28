<!DOCTYPE html>
<html>
<head>
    <title>Tugas Validasi Form</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
  
        <h1>Tugas Validasi Form</h1>
   
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
   
        <form method="post" action="/user/create">
            
            @csrf
  
            <div class="form-group">
                <label>Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ old('name')}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
   
            <div class="form-group">
                <label>Password:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="{{ old('password')}}">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email')}}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <input type="submit" value="Submit" class="btn btn-submit"/>
   
            {{-- <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div> --}}
        </form>
    </div>
</body>
</html>