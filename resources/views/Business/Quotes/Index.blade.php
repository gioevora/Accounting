@extends('Layouts.Layout')

@section('title', 'Quotes - Xero')

@section('content')
    <nav>
        <div class="contact-menu">
            <ul class="d-flex justify-content-between">
                <div class="main-list d-flex">
                    <li class="contact-header">Quotes</li>
                    <li class="contact-list"><a class="search-btn">All</a></li>
                    <li class="contact-list"><a class="search-btn">Draft</a></li>
                    <li class="contact-list"><a class="search-btn">Sent</a></li>
                    <li class="contact-list"><a class="search-btn">Declined</a></li>
                    <li class="contact-list"><a class="search-btn">Accepted</a></li>
                    <li class="contact-list"><a class="search-btn">Invoiced</a></li>
                </div>
                <div class="right-list">
                    <button class="btn btn-success me-4" onclick="location.href='/business/quotes/add'">
                        <a class="text-light text-decoration-none">New Quote</a>
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
                                    <th>Number</th>
                                    <th>Reference</th>
                                    <th>Customer</th>
                                    <th>Issue date</th>
                                    <th>Expiry date</th>
                                    <th>Status</th>
                                    <th>Ammount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>QU-003</td>
                                    <td></td>
                                    <td>Bayside Club</td>
                                    <td>Aug 1, 2024</td>
                                    <td></td>
                                    <td><span class="badge text-bg-success p-2">Accepted</span></td>
                                    <td>5,921.10</td>
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
