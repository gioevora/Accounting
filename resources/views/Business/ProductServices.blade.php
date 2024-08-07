@extends('Layouts.Layout')

@section('title', 'Create Bank Accounts - Abic')

@section('content')
    <nav>
        <div class="contact-menu">
            <ul class="d-flex justify-content-between p-3 me-2">
                <div class="main-list d-flex">
                    <li class="contact-header"><b>PRODUCT AND SERVICES</b></li>
                </div>
                <div class="right-list">
                    <div class="dropdown me-2">
                        <button class="btn border-info dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-offset="0,5">
                            Import
                        </button>
                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Items</button></li>
                            <li><button class="dropdown-item" type="button">Opening Balances</button></li>
                        </ul>
                    </div>

                    <div class="dropdown me-2">
                        <button class="btn border-info dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-offset="0,5">
                            Export
                        </button>
                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" id="printCSV" type="button">CSV</button></li>
                            <li><button class="dropdown-item" type="button">PDF</button></li>
                        </ul>
                    </div>


                    <button type="button" class="btn btn-success me-2" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        New Item
                    </button>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </ul>
        </div>
    </nav>
    <main>
        <section class="addAccount">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped display" style="width:100%">
                                        <thead class="table-primary"">
                                            <tr>
                                                <th></th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Cost Price</th>
                                                <th>Sale Price</th>
                                                <th>Quantity</th>
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td><span class="btn border-primary p-1"><small>CHOCOLATE</small></span>
                                                </td>
                                                <td>Big Rolls</td>
                                                <td>0.00</td>
                                                <td>20.00</td>
                                                <td>5</td>
                                                <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
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

    {{-- Modal --}}
    <div class="modal modal-lg fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="product-form">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">New Item</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="row">
                        <div class="col-4 mb-4">
                            <div class="form-group">
                                <label for="">Code</label>
                                <input type="text" name="code" class="form-control">
                            </div>
                        </div>
                        <div class="col-8 mb-4">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <hr>    
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="types[]" type="checkbox" value="Inventory" id="tracking">
                                    <label class="form-check-label" for="tracking">
                                        <h5>Track Inventory Item</h5>
                                    </label>
                                    <p class="text-muted">Track the quantity and value of stock on hand. This option is suitable for
                                        organisations with less than 4,000 products or services, who purchase items before
                                        they are sold, and who calculate the average cost of items.
                                    </p>

                                    <div class="inventory-categ" style="display: none">
                                        <div class="alert alert-light" role="alert" >
                                            <i class="fa-solid fa-circle-info"></i> Items can’t be untracked once they
                                            appear on a transaction. This includes the opening balance, an adjustment, or a
                                            bill or an invoice.
                                        </div>

                                        <div class="col-4 mb-4">
                                            <div class="form-group">
                                                <label class="mb-2" for="">Sales Account</label>
                                                <select  name="inventory_account_id" class="form-control">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="types[]" type="checkbox" value="Purchase">
                                    <label class="form-check-label" for="purchase">
                                        <h5>Purchase</h5>
                                    </label>
                                    <p>Add item to bills, purchase orders, and other purchase transactions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="form-group">
                                <label class="mb-2" for="">Cost Price</label>
                                <input type="text" name="purchase_price" class="form-control">
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="form-group">
                                <label class="mb-2" for="">Sales Account</label>
                                <select id="purchaseAccount" name="purchase_account_id" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="form-group">
                                <label class="mb-2" for="">Sales tax</label>
                                <select id="slide" name="purchase_tax" class="form-control">
                                    <option value="Exempt Sales" selected>Exempt Sales</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label class="mb-2" for="">Description</label>
                                <input type="text" name="purchase_description" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="types[]" type="checkbox" value="Sell">
                                    <label class="form-check-label" for="sell">
                                        <h5>Sell</h5>
                                    </label>
                                    <p>Add item to invoices, quotes, and other sales transactions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="form-group">
                                <label class="mb-2" for="">Cost Price</label>
                                <input type="text" name="sell_price" class="form-control">
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="form-group">
                                <label class="mb-2" for="">Sales Account</label>
                                <select id="purchaseAccount" name="sell_account_id" class="form-control">
                                
                                </select>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="form-group">
                                <label class="mb-2" for="">Sales tax</label>
                                <select id="slide" name="sell_tax" class="form-control">
                                    <option value="Exempt Sales" selected>Exempt Sales</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label class="mb-2" for="">Description</label>
                                <input type="text" name="sell_description" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @parent

    <script>
        $('#slide').editableSelect({
            effects: 'slide'
        });
    </script>
    <script>
        $('#purchaseAccount').editableSelect({
            effects: 'slide'
        });
    </script>

    <script src="{{ asset('js/Products.js') }}"></script>





@endsection
