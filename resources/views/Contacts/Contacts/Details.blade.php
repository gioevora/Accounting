@extends('Layouts.Layout')

@section('title', 'Contact - Xero')

@section('content')

    <div class="details">
        <nav>
            <div class="contact-menu">
                <br>
                <div class="container-fluid">
                    <h6 class="text-primary" style="cursor: pointer" onclick="location.href='/contacts/view/all'">Contacts</h6>
                    <div class="d-inline-flex my-3">
                        <div class="profile-div">
                            
                        </div>
                        <div class="main-details-div">

                        </div>
                    </div>
                </div>
    
                <ul class="d-flex justify-content-between px-1 me-2">
                    <div class="main-list d-flex">
                        <div class="main-list d-flex">
                            <div class="main-list d-flex">
                                <li class="contact-list"><a class="section-btn">Activity</a></li>
                                <li class="contact-list"><a class="section-btn">Contact Details</a></li>
                                <li class="contact-list"><a class="section-btn">Financial Details</a></li>
                                <li class="contact-list"><a class="section-btn">Files</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="right-list">
                        <div class="dropdown me-2">
                            <button class="btn border-info" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-offset="0,5">
                                Edit
                            </button>
                        </div>
                        <div class="dropdown me-2">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-offset="0,5">
                                New
                            </button>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" id="printCSV" type="button">Sales Invoice</button></li>
                                <li><button class="dropdown-item" id="printCSV" type="button">Sales Credit note</button></li>
                                <li><button class="dropdown-item" id="printCSV" type="button">Repeating sales Invoice</button>
                                </li>
                                <li><button class="dropdown-item" id="printCSV" type="button">Quote</button></li>
                            </ul>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                </ul>
            </div>
        </nav>

        <div>
            <div class="container-fluid section activity">
                <div class="row d-flex justify-content-center mb-4">
                    <div class="card" style="width:90%">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <div class="header-content">
                                <h5 class="header">Cash out over 12 months</h5>
                            </div>
                            <div class="header-list">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center m-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown me-2">
                                <button type="button" class="btn btn-outline-dark my-3">Spend Money</button>
                            </div>
    
                            <input type="search" class="form-control" placeholder="Type query"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid section contact-details" style="display: none">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header py-3">
                                <h6>Primary Person</h6>
                            </div>

                            <div class="card-body">
                                <div class="d-inline-flex person-div">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header py-3">
                                <h6>Contact Details</h6>
                            </div>

                            <div class="card-body">
                                <div class="d-inline-flex contact-details-div">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid section financial-details" style="display: none">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header py-3">
                                <h6>Financial Details</h6>
                            </div>
                            
                            <div class="card-body currency-div">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section files" style="display: none">
                <div class="mx-5">
                    <h6>Attach files</h6>
                    <div class="card">
                        <div class="card-body my-3">
                            <div class="text-center">
                                <h6>Drag and drop files or select manually</h6>
                                <button class="btn btn-primary">Upload files</button>
                                <button class="btn btn-primary">Add from file library</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @parent

    <script>
        var options = {
            chart: {
                type: 'bar',
                toolbar: {
                    show: false
                },
                height: '300px',
            },

            series: [{
                name: 'Cash in',
                data: [30, 40, 45, 20, 10, 50],
            }],

            xaxis: {
                categories: ["January", "February", "March", "April", "June", "July"]
            }
        }

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options);

        chart2.render();
    </script>

    <script src="{{ asset('js/ContactDetails.js') }}"></script>
@endsection
