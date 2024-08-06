@extends('Layouts.Layout')

@section('title', 'Bank Accounts - Abic')

@section('content')
    <main>
        <section class="bank-section">
            <div class="container">
                <div class="manage-banks">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-8">
                            <div class="card">
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


@endsection
