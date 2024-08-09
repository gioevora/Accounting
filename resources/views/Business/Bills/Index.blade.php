@extends('Layouts.Layout')

@section('title', 'Bills - Xero')

@section('content')
    <nav>
        <div class="contact-menu">
            <ul class="d-flex justify-content-between">
                <div class="main-list d-flex">
                    <li class="contact-header">Bills</li>
                    <li class="contact-list"><a class="search-btn">All</a></li>
                    <li class="contact-list"><a class="search-btn">Draft</a></li>
                    <li class="contact-list"><a class="search-btn">Awaiting approval</a></li>
                    <li class="contact-list"><a class="search-btn">Awaiting payment</a></li>
                    <li class="contact-list"><a class="search-btn">Paid</a></li>
                    <li class="contact-list"><a class="search-btn">Repeating</a></li>
                </div>
                <div class="right-list">
                    <button class="btn btn-success me-4" onclick="location.href='/business/bills/add'">
                        <a class="text-light text-decoration-none">New Bill</a>
                    </button>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </ul>
        </div>
    </nav>

    <main>
        <section class="contacts-section">
            <div class="container">
                <div class="card">
                    <div class="table-responsive tbl-div">
                        <table class="table tbl-records">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>Status</th>
                                    <th>Reference</th>
                                    <th>Date</th>
                                    <th>Due date</th>
                                    <th>Paid</th>
                                    <th>Due</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Net Connect</td>
                                    <td><span class="badge text-bg-success p-2">Accepted</span></td>
                                    <td>Rpt</td>
                                    <td>02 Aug 2024</td>
                                    <td>12 Aug 2024</td>
                                    <td>0.00</td>
                                    <td>54.13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </section> 
    </main>

@endsection

@section('scripts')
    @parent

    <script>
        var data_table = $('.tbl-records').DataTable({
            responsive: true,
        })
    </script>

    <script src="{{ asset('js/Quotes.js') }}"></script>
@endsection
