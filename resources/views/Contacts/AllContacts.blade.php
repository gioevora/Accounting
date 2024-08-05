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
                    <button class="btn btn-success me-4"><a href="/new-contacts" style="color:#ffff; text-decoration:none;">New Contacts</a></button>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </ul>
        </div>
    </nav>

    <main>

        <div class="table-responsive">

            <table class="table" id="myDataTable">
                <thead>
                    <tr>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                            style="width: 107px;" aria-label="Role: activate to sort column ascending">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                            style="width: 107px;" aria-label="Role: activate to sort column ascending">Loan Type</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                            style="width: 107px;" aria-label="Role: activate to sort column ascending">Amount</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                            style="width: 107px;" aria-label="Role: activate to sort column ascending">Due Date</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                            style="width: 67px;" aria-label="Plan: activate to sort column ascending">Status</th>
                        <th class="sorting_disabled" style="width: 20px;" aria-label="Actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <td class="sorting_1">
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="d-flex flex-column"><a href="app-user-view-account.html"
                                        class="text-body text-truncate"><span class="fw-medium">Amboy Cynthia</span></a>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                Credit
                            </span>
                        </td>
                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                41, 668.68
                            </span>
                        </td>
                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                31/10/24
                            </span>
                        </td>


                        <td><span class="badge bg-label-success">Paid</span></td>
                        <td class="">
                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i
                                        class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon delete-record"><i
                                        class="bx bx-trash"></i></button><button
                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                                        class="bx bx-dots-vertical-rounded "></i></button>
                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="app-user-view-account.html"
                                        class="dropdown-item">View</a><a href="javascript:;"
                                        class="dropdown-item">Suspend</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="sorting_1">
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="d-flex flex-column"><a href="app-user-view-account.html"
                                        class="text-body text-truncate"><span class="fw-medium">Amboy Cynthia</span></a>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                Calamity
                            </span>
                        </td>
                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                12, 500.03
                            </span>
                        </td>
                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                31/03/25
                            </span>
                        </td>


                        <td><span class="badge bg-label-warning">Unpaid</span></td>
                        <td class="">
                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i
                                        class="bx bx-edit"></i></button><button
                                    class="btn btn-sm btn-icon delete-record"><i class="bx bx-trash"></i></button><button
                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                                        class="bx bx-dots-vertical-rounded "></i></button>
                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="app-user-view-account.html"
                                        class="dropdown-item">View</a><a href="javascript:;"
                                        class="dropdown-item">Suspend</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="sorting_1">
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="d-flex flex-column"><a href="app-user-view-account.html"
                                        class="text-body text-truncate"><span class="fw-medium">Amboy Theresa</span></a>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                Modified
                            </span>
                        </td>
                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                66, 666.68
                            </span>
                        </td>
                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                31/08/26
                            </span>
                        </td>


                        <td><span class="badge bg-label-warning">Unpaid</span></td>
                        <td class="">
                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i
                                        class="bx bx-edit"></i></button><button
                                    class="btn btn-sm btn-icon delete-record"><i class="bx bx-trash"></i></button><button
                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                                        class="bx bx-dots-vertical-rounded "></i></button>
                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="app-user-view-account.html"
                                        class="dropdown-item">View</a><a href="javascript:;"
                                        class="dropdown-item">Suspend</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="sorting_1">
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="d-flex flex-column"><a href="app-user-view-account.html"
                                        class="text-body text-truncate"><span class="fw-medium">Aquino Florian</span></a>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                Calamity
                            </span>
                        </td>
                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                12, 500.03
                            </span>
                        </td>
                        <td>
                            <span class="text-truncate d-flex align-items-center">
                                31/12/21
                            </span>
                        </td>


                        <td><span class="badge bg-label-success">Paid</span></td>
                        <td class="">
                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i
                                        class="bx bx-edit"></i></button><button
                                    class="btn btn-sm btn-icon delete-record"><i class="bx bx-trash"></i></button><button
                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                                        class="bx bx-dots-vertical-rounded "></i></button>
                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="app-user-view-account.html"
                                        class="dropdown-item">View</a><a href="javascript:;"
                                        class="dropdown-item">Suspend</a></div>
                            </div>
                        </td>
                    </tr>



                </tbody>
            </table>

        </div>
    </main>

@endsection

@section('scripts')
    @parent

    <script>
        $(document).ready(function() {

            var dataTable = $('#myDataTable').DataTable({

                responsive: true, // Enable Responsive extension
                inlineEditing: true,

                buttons: [
                    'print', 'copy', 'csv', 'pdf'
                ],

                "language": {
                    "search": "Search: ",
                    "searchPlaceholder": "Search here..."
                }
            });
            // responsive: true
            // autoFill: true

            // Button click events
            $('#printBtn').on('click', function() {
                dataTable.button('.buttons-print').trigger();
            });
            $('#copyBtn').on('click', function() {
                dataTable.button('.buttons-copy').trigger();
            });

            $('#excelBtn').on('click', function() {
                dataTable.button('.buttons-csv').trigger();
            });

            $('#pdfBtn').on('click', function() {
                dataTable.button('.buttons-pdf').trigger();
            });


        });
    </script>


@endsection
