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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="my-4">Hello World</h1>

                <h3>Lista utenti:</h3>
                <ol class="list-group list-group-numbered">
                    @foreach ($users as $user)
                        <li class="list-group-item">
                            {{ $user['name'] }} {{ $user['lastname'] }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>



    <script src=""></script><!--  JS Custom Link -->
</body>

</html>
