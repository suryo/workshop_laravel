<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      </head>    
<body>
    <h1>Selamat datang di Web Suryo</h1>
    <h2>List Product</h2>
    <p>Workshop Laravel, Koneksi Ke Database</p>

<a href="/">home</a>  
<a href="/category">Category</a>
<a href="/product">Product</a>


<table class="table">
    <tr>
        <th>Id</th>
        <th>Product</th>
    </tr>
    @for ($i=0; $i<count($response_tbl_product); $i++)
    <tr>
        <td>{{ $response_tbl_product[$i]->id }}</td>
        <td>{{ $response_tbl_product[$i]->product }}</td>
    </tr> 
    @endfor
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>