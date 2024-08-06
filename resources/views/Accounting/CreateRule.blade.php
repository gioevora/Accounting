@extends('Layouts.Layout')

@section('title', 'Create Bank Rules - Abic')

@section('content')
    <nav>
        <div class="contact-menu">
            <ul class="justify-content-between">
                <div class="main-list d-flex">
                    <li class="contact-header">Contacts</li>
                    <li class="contact-list"><a href="#">Spend money rules</a></li>
                    <li class="contact-list"><a href="#">Recieve money rules</a></li>
                    <li class="contact-list"><a href="#">Transfer money rules</a></li>
                </div>
                <div class="right-list">
                    <div class="dropdown me-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Reconcile
                        </button>
                        {{-- <ul class="dropdown-menu d-block" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> --}}
                    </div>

                    <button class="btn btn-success me-4">
                        <a href="/new-contacts"style="color:#ffff; text-decoration:none;">Create Rule</a>
                    </button>

                </div>
            </ul>
        </div>
    </nav>

    <main>

        <section class="bankRules">
            <div class="container">


                <div class="card">
                    <div class="card-body">
                        <div class="bank-rule">
                            <h6>1. Apply a bank rule</h6>
                            <div class="conditions ">
                                <div class="form-check border border-primary">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Default radio
                                    </label>
                                </div>
                                <div class="form-check border border-primary">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Default checked radio
                                    </label>
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
        $('#slide').editableSelect({
            effects: 'slide'
        });
    </script>

    <script>
        new DataTable('#example', {
            columnDefs: [{
                render: DataTable.render.select(),
                targets: 0
            }],
            select: {
                style: 'multi',
                selector: 'td:first-child',

            },
            order: [
                [1, 'asc']
            ],
            paginate: false,
            info: false,
            searching: false,
            sort: false,
        });
    </script>





@endsection
