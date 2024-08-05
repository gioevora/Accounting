@extends('Layouts.Layout')

@section('title', 'New Contacts - Accounting')

@section('content')

    <main>
        <div class="container">

            <div class="main-content">
                <div class="row no-gutters">
                    <div class="col-12 col-md-4 px-0">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="side-menu border-bottom-1">
                                    <ul class="side-list">
                                        <li class="side-list-menu">Contact details</li>
                                        <li class="side-list-menu">Addresses</li>
                                        <li class="side-list-menu">Financial details</li>
                                    </ul>
                                    <hr class="hr" />
                                    <ul class="side-list">
                                        <li class="side-list-menu">Sale defaults</li>
                                        <li class="side-list-menu">Purchase defaults</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 px-0">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="container">

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-12 col-md-7">
                                            <h6 class="mb-4">Contact details</h6>
                                            <form action="" method="post">
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Contact name
                                                        <small>(required)</small></label>
                                                    <input type="text" class="form-control "
                                                        placeholder="A business or person's name">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Account number</label>
                                                    <input type="text" class="form-control ">
                                                    <small class="text-muted" style="font-size: 12px">Add a unique account
                                                        number to identify, reference and search for the contact.</small>
                                                </div>

                                                <h6 class="mb-4">Primary Person</h6>

                                                <div class="input-group">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput"
                                                            placeholder="">
                                                        <label for="floatingInput">Last name</label>
                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="floatingPassword"
                                                            placeholder="">
                                                        <label for="floatingPassword">First name</label>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Email</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="example@gmail.com">
                                                </div>

                                                <h6 class="mb-4">Another people</h6>

                                                <button class="btn bg-none" style="color: blue"><i
                                                        class="fa-solid fa-plus"></i> Add another person</button>


                                                <h6 class="mb-4">Business information</h6>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Phone number</label>
                                                    <div class="input-group">
                                                        <input type="text" aria-label="First name" class="form-control"
                                                            placeholder="Country">
                                                        <input type="text" aria-label="Last name" class="form-control"
                                                            placeholder="Area">
                                                        <input type="text" aria-label="Last name" class="form-control"
                                                            placeholder="Number">
                                                    </div>
                                                </div>
                                                <button class="btn bg-none mb-4" style="color: blue">
                                                    <i class="fa-solid fa-plus"></i> Add phone number
                                                </button>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Website</label>
                                                    <input type="text" class="form-control ">
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Business registration
                                                        number</label>
                                                    <input type="text" class="form-control ">
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Notes</label>
                                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                                    <small class="text-muted" style="font-size: 12px">Notes can only be
                                                        viewed by people in your organisation</small>
                                                </div>

                                                <hr>

                                                <h6 class="mb-4">Addresses</h6>

                                                <div class="form-group mb-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label class="mb-2" for="">Billing address</label>
                                                            <input type="text" placeholder="Search address"
                                                                class="form-control">
                                                            <a href="">Enter address manually</a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group mb-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label class="mb-2" for="">Delivery address</label>
                                                            <input type="text" placeholder="Search address"
                                                                class="form-control">
                                                            <a href="">Enter address manually</a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <hr>

                                                <h6 class="mb-4">Financial details</h6>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Bank account name</label>
                                                    <input type="text" class="form-control "
                                                        placeholder="e.g. A business or person's name">
                                                    <small class="text-muted" style="font-size: 12px">These details will
                                                        show against the bills to pay when you create a batch
                                                        payment.</small>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Bank account number</label>
                                                    <input type="text" class="form-control "
                                                        placeholder="e.g. 123456789">

                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Details</label>
                                                    <input type="text" class="form-control " placeholder="e.g. Rent">

                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Tax ID number</label>
                                                    <input type="text" class="form-control "
                                                        placeholder="e.g. 123456789">
                                                    <small class="text-muted" style="font-size: 12px">Enter your contact's
                                                        Tax ID number if you'd like to show it on their invoices, credit
                                                        notes, statements, and other PDF documents.</small>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Currency</label>
                                                    <select id="slide" class="form-control">
                                                        <option>USD - United States Dollar</option>
                                                        <option>EUR - Euro</option>
                                                        <option>GBP - British Pound</option>
                                                        <option>JPY - Japanese Yen</option>
                                                        <option>AUD - Australian Dollar</option>
                                                        <option>CAD - Canadian Dollar</option>
                                                        <option>CHF - Swiss Franc</option>
                                                        <option>CNY - Chinese Yuan</option>
                                                        <option>SEK - Swedish Krona</option>
                                                        <option>NZD - New Zealand Dollar</option>
                                                        <option>MXN - Mexican Peso</option>
                                                        <option>SGD - Singapore Dollar</option>
                                                        <option>HKD - Hong Kong Dollar</option>
                                                        <option>NOK - Norwegian Krone</option>
                                                        <option>KRW - South Korean Won</option>
                                                        <option>TRY - Turkish Lira</option>
                                                        <option>RUB - Russian Ruble</option>
                                                        <option>INR - Indian Rupee</option>
                                                        <option>BRL - Brazilian Real</option>
                                                        <option>ZAR - South African Rand</option>
                                                        <option>PHP - Philippine Peso</option>

                                                    </select>
                                                </div>

                                                <hr>

                                                <h6 class="mb-4">Sales defaults</h6>

                                                <small>Defaults can be overridden on individual invoices, quotes, and receive money</small>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Sales account</label>
                                                    <select id="slide2" class="form-control">
                                                     
                                                        <option>USD - United States Dollar</option>
                                                        <option>EUR - Euro</option>
                                                        <option>GBP - British Pound</option>
                                                        <option>JPY - Japanese Yen</option>
                                                        <option>AUD - Australian Dollar</option>
                                                        <option>CAD - Canadian Dollar</option>
                                                        <option>CHF - Swiss Franc</option>
                                                        <option>CNY - Chinese Yuan</option>
                                                        <option>SEK - Swedish Krona</option>
                                                        <option>NZD - New Zealand Dollar</option>
                                                        <option>MXN - Mexican Peso</option>
                                                        <option>SGD - Singapore Dollar</option>
                                                        <option>HKD - Hong Kong Dollar</option>
                                                        <option>NOK - Norwegian Krone</option>
                                                        <option>KRW - South Korean Won</option>
                                                        <option>TRY - Turkish Lira</option>
                                                        <option>RUB - Russian Ruble</option>
                                                        <option>INR - Indian Rupee</option>
                                                        <option>BRL - Brazilian Real</option>
                                                        <option>ZAR - South African Rand</option>
                                                        <option>PHP - Philippine Peso</option>

                                                    </select>

                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Invoice due date</label>
                                                    <div class="input-group">
                                                        <input type="text" aria-label="First name" class="form-control">
                                                            <select id="slide2" class="form-control">
                                                     
                                                                <option>USD - United States Dollar</option>
                                                                <option>EUR - Euro</option>
                                                                <option>GBP - British Pound</option>
                                                                <option>JPY - Japanese Yen</option>
                                                                <option>AUD - Australian Dollar</option>
                                                                <option>CAD - Canadian Dollar</option>
                                                                <option>CHF - Swiss Franc</option>
                                                                <option>CNY - Chinese Yuan</option>
                                                                <option>SEK - Swedish Krona</option>
                                                                <option>NZD - New Zealand Dollar</option>
                                                                <option>MXN - Mexican Peso</option>
                                                                <option>SGD - Singapore Dollar</option>
                                                                <option>HKD - Hong Kong Dollar</option>
                                                                <option>NOK - Norwegian Krone</option>
                                                                <option>KRW - South Korean Won</option>
                                                                <option>TRY - Turkish Lira</option>
                                                                <option>RUB - Russian Ruble</option>
                                                                <option>INR - Indian Rupee</option>
                                                                <option>BRL - Brazilian Real</option>
                                                                <option>ZAR - South African Rand</option>
                                                                <option>PHP - Philippine Peso</option>
        
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Amounts are</label>
                                                    <select id="slide2" class="form-control">
                                                     
                                                        <option>Use organisation settings</option>
                                                        <option>Tax inclusive</option>
                                                        <option>Tax exclusive</option>
                                                        <option>No tax</option>
                                                       

                                                    </select>

                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Sales tax</label>
                                                    <select id="slide2" class="form-control">
                                                     
                                                        <option>Use organisation settings</option>
                                                        <option>Exempt Sales</option>
                                                        <option>MB - GST/RST on Purchase</option>
                                                        <option>MB - GST/RST on Sales</option>
                                                        <option>Sales  Tax on Imports</option>
                                                        <option>Tax expemt</option>
                                                        <option>Tax on Consulting</option>
                                                        <option>Tax on Goods</option>
                                                        <option>Tax on Purchases</option>
                                                    </select>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Discount</label>
                                                    <input type="text" class="form-control "
                                                        placeholder="00.00">
                                                   
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Credit limit amount</label>
                                                    <input type="text" class="form-control ">
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="action d-flex justify-content-end">
                                    <button class="btn btn-outline-primary me-2">Cancel</button>
                                    <button class="btn btn-primary">Save & close</button>
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


    <script>
        $('#slide').editableSelect({
            effects: 'slide'
        });

        $('#slide2').editableSelect({
            effects: 'slide'
        });
    </script>



@endsection
