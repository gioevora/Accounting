@extends('Layouts.Layout')

@section('title', 'Create Bank Accounts - Abic')

@section('content')
    <main>
      <section class="addAccount">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            <h4>Find account</h4>
                            <small>Search for a bank, credit card or payment provider to connect to the system.</small>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Search..">
                                </div>
                                <div class="col-md-4">
                                    <select id="slide" class="form-control" placeholder="Filter by Country">
                                                     
                                        <option>Philippines</option>
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4>Popular banks in Philippines</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li class="d-flex justify-content-between">BDO <span class="text-right"><i class="fa-solid fa-circle-info"></i></span></li>
                                <li class="d-flex justify-content-between">Metrobank <span class="text-right"><i class="fa-solid fa-circle-info"></i></span></li>
                                <li class="d-flex justify-content-between">BPI <span class="text-right"><i class="fa-solid fa-circle-info"></i></span></li>
                               
                            </ul>
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
