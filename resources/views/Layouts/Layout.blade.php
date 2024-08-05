<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @section('links')
        <link rel="stylesheet" href="../css/style.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

        {{-- DataTables --}}
        <link href="../DataTables/datatables.min.css" rel="stylesheet">
        <link href="../DataTables/datatables.css" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">
    @show
</head>

<body style="background-color: #F2F3F4;">
    @include('Layouts/Navigation')
    @section('main')
        @yield('content')
    @show

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script src="../DataTables/datatables.min.js"></script>
        <script src="../DataTables/datatables.js"></script>
    @show
</body>

</html>
