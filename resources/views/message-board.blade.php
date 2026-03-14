<!doctype html>
<html lang="en">

<head>
<title>Session Message Board</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>

<div class="container mt-5">

<h1 class="text-center mb-4">Session Message Board</h1>

<form method="POST" action="{{ route('submit') }}">
@csrf

<div class="form-group">
<label>Name</label>
<input
type="text"
name="name"
class="form-control"
placeholder="Enter your name"
value="{{ old('name') }}">
</div>

<div class="form-group">
<label>Number</label>
<input
type="text"
name="number"
class="form-control"
placeholder="Enter your number"
value="{{ old('number') }}">
</div>

<div class="form-group">
<label>Message</label>
<textarea
name="message"
class="form-control"
placeholder="Enter your message">{{ old('message') }}</textarea>
</div>

<button type="submit" class="btn btn-primary">
Submit
</button>

</form>


<br>

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif


<hr>

<h3 class="mt-4">Messages (Array Format)</h3>

@if(!empty($messages))

<pre>
{{ print_r($messages, true) }}
</pre>

@else

<p>No messages yet.</p>

@endif

</div>

</body>
</html>