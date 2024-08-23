<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Muhammad Asfund Yar | +92 331 5690929 | mr.asfund@hotmail.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <header class="d-flex flex-md-row flex-column justify-content-between border-bottom align-items-center gap-3 pb-3 mb-3">
            <h1 class="text-md-left text-center">Candidate: Muhammad Asfund Yar</h1>
            <div class="text-md-end text-center">
                <p class="mb-0">
                    <strong>Phone: </strong>
                    <a href="https://wa.me/923315690929" target="_blank">+92 331 5690929</a>
                </p>
                <p class="mb-0">
                    <strong>Email: </strong>
                    <a href="mailto:mr.asfund@hotmail.com" target="_blank">mr.asfund@hotmail.com</a>
                </p>
                <p class="mb-0">
                    <strong>LinkedIn: </strong>
                    <a href="https://www.linkedin.com/in/asfund/" target="_blank">Asfund</a>
                </p>
            </div>
        </header>
        @yield('content')

        <footer class="text-md-start text-center mt-3 border-top pt-3 mb-5">
            <h3>Approach</h3>
            <div>
                To make the search work well, I used Eloquent relationships to find and get related data with as few queries as possible. 
                I have used whereHas method, So, I searched orders and items linked to each customer. 
                So, I only get the customer data with their orders and items.
                <br><br>
                To improve performance, I used eager loading (with) to reduce the number of database queries and avoid problems with too many queries. 
                Adding indexes to the search fields in the database (like email and order id) can also make searches faster, 
                especially with large amounts of data.
                <br><br>
                This was a simple task so I didn't go deep but we can also do other techniques for optimizations and performance, will discuss if selected for next round.
                
            </div>
        </footer>
    </div>
</body>
</html>
