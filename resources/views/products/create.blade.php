<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>create a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div>
                <label>Qty</label>
                <input type="text" name="qty" placeholder="Qty">
            </div>
            <div>
                <label>Price</label>
                <input type="text" name="price" placeholder="Price">
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="Description">
            </div>
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>

    <script src="" async defer></script>
</body>

</html>