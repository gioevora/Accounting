@extends('Layouts.Layout')

@section('title', 'Bank Accounts - Abic')

@section('content')
    <main>
        <section class="bank-section">
            <div class="container">
                <div class="manage-banks">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-8">
                            <div class="bank-account-menu mb-4">
                                <a href="/bank/new" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Bank Account</a>
                                <a href="/bank/transfer" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Transfer Money</a>
                                <button class="btn btn-primary"><i class="fa-solid fa-play"></i> Bank Rules</button>
                                <button class="btn btn-primary"><i class="fa-solid fa-play"></i> Uncoded Statement Lines</button>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <div class="header-content">
                                        <h5 class="header">Business Bank Account</h5>
                                        <small>090-8007-006543</small>
                                    </div>
                                    <div class="header-list">
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Manage Account
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <h4>12,345.00</h4>
                                            <small>Statement Balance</small>
                                            <small class="text-muted">1 Aug 2024</small>
                                            <hr>
                                            <h4>12,345.00</h4>
                                            <small>Current Balance</small>
                                        </div>
                                        <div class="col-8">
                                            <div id="charts"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <div class="header-content">
                                        <h5 class="header">Business Savings Account</h5>
                                        <small>090-8007-006543</small>
                                    </div>
                                    <div class="header-list">
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Manage Account
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <h4>12,345.00</h4>
                                            <small>Statement Balance</small>
                                            <small class="text-muted">1 Aug 2024</small>
                                            <hr>
                                            <h4>12,345.00</h4>
                                            <small>Current Balance</small>
                                        </div>
                                        <div class="col-8">
                                            <div id="banksavings"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection

@section('scripts')
    @parent

    <script>
        var options = {
            chart: {
                type: 'area',
                height: 150,
                toolbar: {
                    show: false
                }
            },


            series: [{
                name: 'sales',
                data: [30, 40, 45, 50, 49, 60]
            }],
            xaxis: {
                categories: ['March', 'April', 'May', 'June', 'July', 'August']
            }


        }

        var charts = new ApexCharts(document.querySelector("#charts"), options);

        charts.render();

      
    </script>

    <script>
          var options = {
            chart: {
                type: 'area',
                height: 150,
                toolbar: {
                    show: false
                }
            },


            series: [{
                name: 'sales',
                data: [30, 40, 45, 50, 49, 60]
            }],
            xaxis: {
                categories: ['March', 'April', 'May', 'June', 'July', 'August']
            }


        }

        var banksavings = new ApexCharts(document.querySelector("#banksavings"), options);

        banksavings.render();
    </script>


@endsection
