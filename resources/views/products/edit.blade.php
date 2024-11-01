<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Product</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffe6f0;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    h1 {
        text-align: center;
        color: #ff4d88;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 100%;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #ff4d88;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ffb3cc;
        border-radius: 5px;
        outline: none;
        color: #333;
    }

    input[type="submit"] {
        background-color: #ff4d88;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #ff6688;
    }

    div {
        margin-bottom: 15px;
    }
</style>
</head>
<body>

<h1>Update Product</h1>
<form method="post" action="{{route('products.update', ['product' => $product])}}">
    @csrf
    @method('put')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" value="{{$product->name}}"/>
    </div>
    <div>
        <label>Qty</label>
        <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}"/>
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price" value="{{$product->price}}"/>
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="Description" value="{{$product->description}}"/>
    </div>
    <div>
        <input type="submit" value="Update" />
    </div>
</form>

</body>
</html>
