@extends('admin.layouts.master')
@section('stylesheet')
    <link rel="stylesheet" href="/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
@endsection
@section('content')
    @yield('body')
@endsection
@push('js-libraries')
    <script src="/modules/datatables/datatables.min.js"></script>
    <script src="/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
@endpush
@push('js-custom')
    <script src="/modules/datatables/modules-datatables.js"></script>
@endpush
