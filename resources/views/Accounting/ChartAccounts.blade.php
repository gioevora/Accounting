@extends('Layouts.Layout')

@section('title', 'Chart Accounts - Abic')

@section('content')


    <main>

        <section class="bankRules">
            <div class="container">
                <div class="bank-account-menu mb-4">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                            class="fa-solid fa-plus"></i> Add Account</button>
                    <button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Bank Account</button>
                    <button class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i> Print PDF</button>
                    <button class="btn btn-primary"><i class="fa-solid fa-file-import"></i> Import</button>
                    <button class="btn btn-primary"><i class="fa-solid fa-file-export"></i> Export</button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped display" style="width:100%">
                                <thead class="table-primary">
                                    <tr>
                                        <th></th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Tax Rate</th>
                                        <th>YTD</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>090</td>
                                        <td>Business Bank Account</td>
                                        <td>Bank</td>
                                        <td>Tax Exempt (0%)</td>
                                        <td>7, 948.00</td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>


            </div>
        </section>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content new-account">
                    <form class="create-form">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Account</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group mb-2">
                                <label class="mb-2" for="">Account type</label>
                                <select class="form-control" name='type'>
                                    <optgroup label="ASSETS">
                                        <option>Current Asset</option>
                                        <option>Fixed Asset</option>
                                        <option>Inventory</option>
                                        <option>Non-current Asset</option>
                                        <option>Prepayment</option>
                                    </optgroup>
                                    <optgroup label="EQUITY">
                                        <option>Equity</option>
                                    </optgroup>
                                    <optgroup label="EXPENSES">
                                        <option>Depreciation</option>
                                        <option>Direct Costs</option>
                                        <option>Expense</option>
                                        <option>Overhead</option>
                                    </optgroup>
                                    <optgroup label="LIABILITIES">
                                        <option>Current Liability</option>
                                        <option>Liability</option>
                                        <option>Non-current Liability</option>

                                    </optgroup>
                                    <optgroup label="REVENUE">
                                        <option>Other Income</option>
                                        <option>Revenue</option>
                                        <option>Sales</option>

                                    </optgroup>


                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="">Code</label>
                                <span class="d-block"><small>A unique code/number for this account (limited to 10
                                        characters)</small></span>
                                <input type="text" class="form-control" name='code'>
                            </div>

                            <div class="form-group mb-2">
                                <label for="">Name</label>
                                <span class="d-block"><small>A short title for this account (limited to 150
                                        characters)</small></span>
                                <input type="text" class="form-control" name='name'>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Description</label>
                                <span class="d-block"><small>A description of how this account should be used</small></span>
                                <input type="text" class="form-control" name='description'>
                            </div>

                            <div class="form-group mb-2">
                                <label class="mb-2" for="">Tax</label>
                                <span class="d-block"><small>The default tax setting for this account</small></span>
                                <select class="form-control" name='tax'>

                                    <option>Exempt Sales (0%)</option>


                                </select>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name='settings[]' value='on_dw'>
                                    <label class="form-check-label" for="op1">
                                    Show on dashboard watchlist
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name='settings[]' value='on_ec'>
                                    <label class="form-check-label" for="op2">
                                        show in expense claims
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name='settings[]' value='payments'>
                                    <label class="form-check-label" for="op3">
                                        enable payments to this account
                                    </label>
                                </div>
                            
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </main>

@endsection

@section('scripts')
    @parent

    <script>
        $('#slide').editableSelect({
            effects: 'slide',
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
            sort: false,
            responsive: true,
        });
    </script>

    <script src="{{ asset('js/Accounting.js') }}"></script>
@endsection
