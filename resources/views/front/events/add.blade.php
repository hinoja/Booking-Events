@extends('layout.front')
@section('title', 'Créer un Evènement')
@section('content')


    <!-- Body Start-->
    <div class="wrapper">

        @include('include.front.navbar')
        @livewire('front.event.add')
    </div>
@endsection
<!-- Body End-->
@push('css')
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-steps.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/ckeditor5/sample/css/sample.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#pd_editor'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
    <script src="{{ asset('vendor/ckeditor5/ckeditor.js') }}"></script>
    <script src="{{ asset('js/jquery-steps.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/i18n/datepicker.en.js') }}"></script>
    <script>
        $('#add-event-tab').steps({
            onFinish: function() {
                alert('Wizard Completed');
            }
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#pd_editor'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
@endpush
