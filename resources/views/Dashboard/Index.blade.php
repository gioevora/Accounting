@extends('Layouts.Layout')

@section('title', 'Dashboard - Xero')

@section('content')
    <main>
        <section class="dashboard-section">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="card mb-4">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <div class="header-content">
                                    <h5 class="header">Business Bank Account</h5>
                                    <small>090-8007-006543</small>
                                </div>
                                <div class="header-list">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart"></div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <div class="header-content">
                                    <h5 class="header">Business Savings Account</h5>
                                    <small>121314-121314</small>
                                </div>
                                <div class="header-list">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-4"><b>No transactions imported</b></h5>
                                <span class="btn btn-primary btn-file">
                                    Import a bank statement <input type="file">
                                </span>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <div class="header-content">
                                    <h5 class="header">Total cash in and out</h5>
                                    <small>121314-121314</small>
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

                    <div class="col-12 col-lg-5">
                        <div class="card mb-4">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <div class="header-content">
                                    <h5 class="header">Account watchlist</h5>
                                    <small>090-8007-006543</small>
                                </div>
                                <div class="header-list">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Account</th>
                                            <th class="text-end" scope="col">This Month</th>
                                            <th class="text-end" scope="col">YTD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Advertising(400)</td>
                                            <td class="text-end">0.00</td>
                                            <td class="text-end">9, 657.05</td>
                                        </tr>
                                        <tr>
                                            <td>Entertainment(420)</td>
                                            <td class="text-end">0.00</td>
                                            <td class="text-end">9, 657.05</td>
                                        </tr>
                                        <tr>
                                            <td>Inventory(630)</td>
                                            <td class="text-end">0.00</td>
                                            <td class="text-end">9, 657.05</td>
                                        </tr>
                                        <tr>
                                            <td>Sales(200)</td>
                                            <td class="text-end">0.00</td>
                                            <td class="text-end">9, 657.05</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <div class="header-content">
                                    <h5 class="header">Invoices owed to you</h5>

                                </div>

                            </div>
                            <div class="card-body">
                                <div id="chart1"></div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <div class="header-content">
                                    <h5 class="header">Bills you need to pay</h5>

                                </div>

                            </div>
                            <div class="card-body">
                                <div id="chart3"></div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <div class="header-content">
                                    <h5 class="header">Expense claims</h5>

                                </div>

                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="new-expenses">
                                        <button class="btn border-primary">Create new expenses</button>
                                    </div>

                                    <div class="expense-item">
                                        <small class="d-block">1 draft</small>
                                        <small class="d-block">5 to review</small>
                                        <small class="d-block">1 to pay</small>
                                    </div>

                                    <div class="expense-total">
                                        <small class="d-block">00.00</small>
                                        <small class="d-block">00.00</small>
                                        <small class="d-block">00.00</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <div class="d-flex justify-content-between">
                                    <div class="recent-sub">
                                        <small><b>Recent submissions</b></small>
                                        <small class="d-block">GIOLO EVORA</small>
                                    </div>
                                    <div class="ready-review">
                                        <small><b>Ready to review</b></small>
                                        <small class="d-block">5 to review</small>
                                    </div>
                                    <div class="total">
                                        <small><b>Total</b></small>
                                        <small class="d-block">00.00 </small>
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
                type: 'line',
                toolbar: {
                    show: false
                }
            },

            series: [{
                name: 'sales',
                data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();

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

        var chart1 = new ApexCharts(document.querySelector("#chart1"), options);

        chart1.render();

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

        var chart3 = new ApexCharts(document.querySelector("#chart3"), options);

        chart3.render();
    </script>
@endsection