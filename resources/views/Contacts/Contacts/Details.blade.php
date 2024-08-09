@extends('Layouts.Layout')

@section('title', 'Contacts - All - Xero')

@section('content')
    <nav>
        <div class="contact-menu">
            <br>
            <div class="main-list d-flex">
                <div class="left-list d-flex">
                    <img class="profile" src="/img/user.png" w-50 alt="" class="btn btn-secondary dropdown-toggle"
                        type="button" aria-expanded="false" data-bs-offset="0,24">
                    <h6>Contact Name</h6>
                </div>
            </div>

            <br>
            <ul class="d-flex justify-content-between p-3 me-2">
                <div class="main-list d-flex">
                    <div class="main-list d-flex">
                        <div class="main-list d-flex">
                            <li class="contact-list"><a class="search-btn">Activity</a></li>
                            <li class="contact-list"><a class="search-btn">Contact Details</a></li>
                            <li class="contact-list"><a class="search-btn">Financial Details</a></li>
                            <li class="contact-list"><a class="search-btn">Files</a></li>

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

    <main>
        <section class="contacts-section">
            <div>
                Acitvity

                <div class="row d-flex justify-content-center">
                    <div class="card" style="width:90%">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <div class="header-content">
                                <h5 class="header">Cash out over 12 months</h5>
                            </div>
                            <div class="header-list">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                        <div class="card-body" style="height:40%">
                            <div id="chart2" style="min-height: 274.006px;"></div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row d-flex justify-content-center" astyle="width:90%">
                       
                        <div class="card">
                            <br>
                            <div class="dropdown me-2">
                                <button type="button" class="btn btn-outline-dark">Spend Money</button>
                            </div>
                            <hr>
                            <br>
                            <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" style="margin-top: "/>
                            <br>
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center" astyle="width:90%">
                       
                        <div class="card">
                            <br>
                            <div class="dropdown me-2">
                                <button type="button" class="btn btn-outline-dark">Spend Money</button>
                            </div>
                            <hr>
                            <br>
                            <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" style="margin-top: "/>
                            <br>
                           
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div>
                Financial
            </div> --}}
            {{-- <div class="container">
                <div class="card">
                    <div class="table-responsive tbl-div">

                    </div>
                </div>
            </div> --}}
        </section>
    </main>

@endsection

@section('scripts')
    @parent

    <script src="{{ asset('js/Contacts.js') }}"></script>

    <script>

        var options = {
            chart: {
                type: 'bar',
                toolbar: {
                    show: false
                }
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
@endsection
