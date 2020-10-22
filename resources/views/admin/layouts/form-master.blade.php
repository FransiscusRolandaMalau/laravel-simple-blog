@extends('admin.layouts.master')
@section('stylesheet')
    <link rel="stylesheet" href="/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
@endsection
@section('content')
    @yield('body')
@endsection
@push('js-libraries')
    <script src="/modules/summernote/summernote-bs4.js"></script>
    <script src="/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script src="/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
@endpush
@push('js-custom')
    <script src="/modules/custom/features-post-create.js"></script>
@endpush
