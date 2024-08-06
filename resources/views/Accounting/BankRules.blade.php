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
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="form-group mb-4">
                            <input type="text" class="form-control" placeholder="Search bank rules by name or condition">
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td><h5>Title</h5><small>7/11</small></td>
                                                <td><button class="btn btn-primary">Edit</button></td>
                                            </tr>
                                        </tbody>
                                       
                                    </table>
                        
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
            info:false,
            searching: false,
            sort:false,
        });
    </script>





@endsection
