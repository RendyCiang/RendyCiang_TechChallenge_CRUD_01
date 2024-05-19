<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/ProductPage.css') }}">
    <title>Home Page</title>
</head>
<body>
    <div class="addButton">
        <a href="/add-product"><button type="button" class="btn btn-outline-dark">Create New Product</button></a>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Type</th>
                <th scope="col">Model Number</th>
                <th scope="col">Price</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        @forelse ($Product as $item)
        <tbody>
          <tr>
            <th scope="row"> <p>{{ $item->id }}</p></th>
            <td>{{ $item->Product_Name }}</td>
            <td>{{ $item->Product_Type }}</td>
            <td>{{ $item->Model_Number }}</td>
            <td>{{ $item->Price }}</td>
            <td>
                <button type="submit" class="btn btn-outline-dark">
                    <a href="/edit-product/{{ $item->id }}">Edit</a>
                </button>   
            </td>
            <td>
                <form action="/delete-product/{{ $item->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-dark">Delete</button>
                </form>
                
            </td>
            </tr>
          <tr>
        @empty
            <div class="empty-center">
                <p>Your Data Is Empty</p>
            </div>
        @endforelse
</body>
</html>