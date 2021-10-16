<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="/form">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="exampleInputEmail1">Apartment Name</label>
            <input name ="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">Address</label>
            <input name ="address" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
            @error('address')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail3">Price</label>
            <input  name ="price" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp">
            @error('price')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail4">Description</label>
            <input  name ="description" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp">
            @error('description')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail5">Detail</label>
            <input  name ="detail" class="form-control" id="exampleInputEmail5" aria-describedby="emailHelp">
            @error('detail')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail6">Thumbnail</label>
            <input  name ="thumbnail" class="form-control" id="exampleInputEmail6" aria-describedby="emailHelp">
            @error('thumbnail')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputState">Status</label>
            <select id="inputState" class="form-control" name="status">
                <option selected>Choose...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            @error('status')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="/js/app.js"></script>
</body>
</html>
