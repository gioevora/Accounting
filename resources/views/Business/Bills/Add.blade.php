@extends('Layouts.Layout')

@section('title', 'New bill - Xero')

@section('content')

    <main>
        <div class="container-fluid bg-white p-2 mb-3">
            <h5>New bill</h5>
        </div>

        
    </main>

@endsection

@section('scripts')
    @parent

    <script src="{{ asset('js/Quotes.js') }}"></script>
@endsection
