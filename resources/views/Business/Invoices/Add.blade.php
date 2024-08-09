@extends('Layouts.Layout')

@section('title', 'New Invoice - Xero')

@section('content')

    <main>
        <div class="container-fluid bg-white p-2 mb-3">
            <h5>New invoice <span class="badge text-bg-secondary">Draft</span></h5>
        </div>

        <div class="container-fluid">
            <div class="row d-flex justify-content-center mb-3">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <h6>Set up invoice template</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body m-3">
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label class="form-label">To</label>
                                    <div class="input-group">
                                        <label class="input-group-text bg-white"><i class="fa-solid fa-user"></i></label>
                                        <select class="form-select" name=""></select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Issue date</label>
                                    <div class="input-group">
                                        <label class="input-group-text bg-white"><i class="fa-regular fa-calendar"></i></label>
                                        <input class="form-control" type='date' name="">
                                    </div>
                                </div>

                                
                                <div class="col-md-2">
                                    <label class="form-label">Due date</label>
                                    <div class="input-group">
                                        <label class="input-group-text bg-white"><i class="fa-regular fa-calendar"></i></label>
                                        <input class="form-control" type='date' name="">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Invoice number</label>
                                    <div class="input-group">
                                        <label class="input-group-text bg-white"><i class="fa-solid fa-hashtag"></i></label>
                                        <input class="form-control" type='text' name="">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Reference</label>
                                    <div class="input-group">
                                        <label class="input-group-text bg-white"><i class="fa-solid fa-bookmark"></i></label>
                                        <input class="form-control" type='text' name="">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Branding theme</label>
                                    <div class="input-group">
                                        <label class="input-group-text bg-white"><i class="fa-solid fa-palette"></i></label>
                                        <select class="form-select" name="">
                                            <option>Standard</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label class="form-label">Online payments</label>
                                    <input class="form-control" type='text' name="" value="None">
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Currency</label>
                                    <div class="input-group">
                                        <label class="input-group-text bg-white"><i class="fa-solid fa-dollar-sign"></i></label>
                                        <select class="form-select" name="">
                                            <option>United States Dollar</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Amounts are</label>
                                    <select class="form-select" name="">
                                        <option>Tax exclusive</option>
                                        <option>Tax inclusive</option>
                                        <option>No Tax</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <table class="table table-bordered">
                                    <thead class="table-secondary">
                                        <th></th>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th>Qty.</th>
                                        <th>Price</th>
                                        <th>Account</th>
                                        <th>Tax rate</th>
                                        <th>Region</th>
                                        <th>Project</th>
                                        <th>Amount</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
                                            <td>
                                                <p><span class="badge border border-dark-subtle text-secondary">GB1-White</span> Golf balls - white single</p>
                                            </td>
                                            <td>Golf balls - white single. Please reorder with code GB1-White</td>
                                            <td>1</td>
                                            <td>5.60</td>
                                            <td>200 - Sales</td>
                                            <td>Tax on Goods (8.75%)</td>
                                            <td>North</td>
                                            <td>Abby Wells</td>
                                            <td>5.60</td>
                                            <td><i class="fa-solid fa-trash-can"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <button class="btn rounded-1 btn-outline-secondary text-primary me-2">Show/hide fields</button>
                                    <button class="btn rounded-1 btn-outline-secondary text-primary">Show files</button>
                                </div>

                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-5 text-start">
                                            Subtotal
                                        </div>
                                        <div class="col-md-7 text-end">
                                            5.60
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 text-start">
                                            Total Tax
                                        </div>
                                        <div class="col-md-7 text-end">
                                            0.45
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-5 text-start">
                                            Total
                                        </div>
                                        <div class="col-md-7 text-end">
                                            <p class="fw-bold">5.60</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')
    @parent

    <script src="{{ asset('js/Invoices.js') }}"></script>
@endsection
