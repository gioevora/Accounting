@extends('Layouts.Layout')

@section('title', 'Contacts - All - Xero')

@section('content')
    <nav>
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
                    <button class="btn btn-success me-4"><a href="/new-contacts"
                            style="color:#ffff; text-decoration:none;">New Contacts</a></button>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </ul>
        </div>
    </nav>

    <main>

        <section class="contacts-section">
            <div class="container">
                <div class="card">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped display" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Contact</th>
                                    <th>You Owe</th>
                                    <th>They Owe</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><img src="" alt="imageito"><span>7/11</span></td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Contact</th>
                                    <th>You Owe</th>
                                    <th>They Owe</th>
                                    <th></th>
                                </tr>
                            </tfoot>
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
            ]
        });
    </script>


@endsection
