<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href=""> <!--  CSS Custom Link -->
    <title>HelloWorld</title>
</head>

<body>
    @include('Header')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3>Lista Prodotti:</h3>

                <div class="cards-container d-flex gap-3">
                    @foreach ($productsList as $product)
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $product['image'] }}" class="card-img-top" alt="..."
                                style="aspect-ratio:1/1; object-fit:contain">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['name'] }}</h5>
                                <p class="card-text">Price: {{ $product['price'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
