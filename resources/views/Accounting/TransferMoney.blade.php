@extends('Layouts.Layout')

@section('title', 'Create Bank Accounts - Abic')

@section('content')
    <main>
        <section class="transfer-section">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>Enter Transfer Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2">
                                        <h5>From</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Account</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Region</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <h5>To</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Account</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Region</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Amount</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Reference</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button class="btn btn-primary">Transfer</button>
                                <button class="btn border-danger">Cancel</button>
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





@endsection
