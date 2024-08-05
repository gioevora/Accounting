@extends('Layouts.Layout')

@section('title', 'New Contacts - Accounting')

@section('content')
    <nav>
        <div class="contact-menu">
            <div class="add-contacts">
                <small><a href="" style="text-decoration: none">Contacts</a></small>
                <h6>Add Contact</h6>
            </div>
        </div>
    </nav>

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
                                                    <label class="mb-2" for="">Business registration number</label>
                                                    <input type="text" class="form-control ">
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="">Notes</label>
                                                   <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                                    <small class="text-muted" style="font-size: 12px">Notes can only be viewed by people in your organisation</small>
                                                </div>

                                                <hr>

                                                <h6 class="mb-4">Addresses</h6>




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



@endsection
