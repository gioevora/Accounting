@extends('Layouts.Layout')

@section('title', 'Contacts - Xero')

@section('content')
    <nav>
        <div class="contact-menu">
            <ul class="d-flex justify-content-between">
                <div class="main-list d-flex">
                    <li class="contact-header">Contacts</li>
                    <li class="contact-list"><a class="search-btn">All</a></li>
                    <li class="contact-list"><a class="search-btn">Customers</a></li>
                    <li class="contact-list"><a class="search-btn">Suppliers</a></li>
                    <li class="contact-list"><a class="search-btn">Archived</a></li>
                    <li class="contact-list">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Groups</a>
                            <ul class="dropdown-menu groups-drop">
                                <div class="container">
                                    <div class="items">

                                    </div>
                                    <div>
                                        <li><a class="new-btn">+ New Group</a></li>
                                    </div>
                                </div>
                                <div class="add-form" style="display: none">
                                    <button class="btn btn-secondary mb-3 back-btn">Back</button>
                                    <label>Group Name</label>
                                    <input type="text" name='name'>

                                    <button class="btn btn-primary add-btn">Save</button>
                                    <button class="btn btn-secondary back-btn">Cancel</button>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="contact-list"><a>Smart lists</a></li>
                </div>
                <div class="right-list">
                    <button class="btn btn-success me-4" onclick="location.href='/contacts/add'">
                        <a class="text-light text-decoration-none">New Contacts</a>
                    </button>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </ul>
        </div>
    </nav>

    <main>
        <section class="contacts-section">
            <div class="container">
                <div class="card">
                    <div class="table-responsive tbl-div">
                        
                    </div>
                </div>
               
            </div>
        </section> 
    </main>

@endsection

@section('scripts')
    @parent

    <script src="{{ asset('js/Contacts.js') }}"></script>
@endsection
