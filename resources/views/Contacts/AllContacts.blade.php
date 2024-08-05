<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Contacts</title>

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body style="background-color: #F2F3F4;">
    <nav>
        @include('Layout/Navigation')
        <div class="contact-menu">
            <ul class="d-flex justify-content-between">
                <div class="main-list d-flex">
                    <li class="contact-header">Contacts</li>
                    <li class="contact-list"><a href="#">All</a></li>
                    <li class="contact-list"><a href="#">Customer</a></li>
                    <li class="contact-list"><a href="#">Suppliers</a></li>
                    <li class="contact-list"><a href="#">Archieved</a></li>
                    <li class="contact-list"><a href="#">Groups</a></li>
                    <li class="contact-list"><a href="#">Smart lists</a></li>
                </div>
                <div class="right-list">
                    <button class="btn btn-success me-4">New Contacts</button>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>

            </ul>



        </div>
    </nav>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>