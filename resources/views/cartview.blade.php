<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Cart View</h4>
    <div class="container">
        <div class="row">
            <div class="col">
            @foreach($data as $d)
            <img width="150" height="100" src="{{ URL ::asset('assets/book_img/'.$d->bimage) }}">
            <h2>{{ $d->bname }}</h2>
            <h2>{{ $d->bauthor }}</h2>
            @endforeach
            </div>
        </div>
    </div>
</body>
</html>