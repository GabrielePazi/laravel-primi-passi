@php
    $inputName = $_GET['inputName'] ?? '';
    $inputLastname = $_GET['inputLastname'] ?? '';
    $inputEmail = $_GET['inputEmail'] ?? '';
    $inputAddress = $_GET['inputAddress'] ?? '';
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>HelloWorld</title>
</head>

<body>
    @include('Header')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="/login" method="get">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John"
                            name="inputName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="Smith"
                            name="inputLastname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="john.smith@gmail.com"
                            name="inputEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="Via Roma, 9"
                            name="inputAddress">
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>

                @if ($inputName != '')
                    <h2 class="my-3">Dati inseriti:</h2>

                    <h4>Name: <span class="text-secondary">{{ $inputName }}</span></h4>
                    <h4>Lastname: <span class="text-secondary">{{ $inputLastname }}</span></h4>
                    <h4>Email: <span class="text-secondary">{{ $inputEmail }}</span></h4>
                    <h4>Address: <span class="text-secondary">{{ $inputAddress }}</span></h4>
                @endif


            </div>
        </div>
    </div>
</body>
