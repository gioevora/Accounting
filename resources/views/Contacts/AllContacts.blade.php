@extends('Layouts.Layout')

@section('title', 'Contacts - All - Xero')

@section('content')
    <nav>
        @include('Layouts/Navigation')
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
                    <button class="btn btn-success me-4">New Contacts</button>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </ul>
        </div>
    </nav>
@endsection

@section('scripts')
    @parent
    
@endsection