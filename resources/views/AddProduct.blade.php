<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/AddProduct.css') }}">
    <title>Add Product Page</title>
</head>
<body>
    <form action="/add-product1" method="POST">
        @csrf
        {{-- Input Product Name --}}
        <label for="Product_Name">Product Name</label>
        <input type="text" name="Product_Name" id="Product_Name" value="{{ old('Product_Name') }}"">
        @error('Product_Name')
            <p>{{ $message }}</p>
        @enderror

        {{-- Input Product Type --}}
        <label for="Product_Type">Product Type</label>
        <input type="text" name="Product_Type" id="Product_Type" value="{{ old('Product_Type') }}">
        @error('Product_Type')
            <p>{{ $message }}</p>
        @enderror

        {{-- Input Model Number --}}
        <label for="Model_Number">Model Number</label>
        <input type="text" name="Model_Number" id="Model_Number" value="{{ old('Model_Number') }}"">
        @error('Model_Number')
            <p>{{ $message }}</p>
        @enderror

        {{-- Input Price --}}
        <label for="Price">Price</label>
        <input type="text" name="Price" id="Price" value="{{ old('Price') }}"">
        @error('Price')
            <p>{{ $message }}</p>
        @enderror 

        <button type="submit" class="btn btn-outline-dark">Submit</button>
    </form>
</body>
</html>