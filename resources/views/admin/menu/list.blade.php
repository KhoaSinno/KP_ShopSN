@extends('admin.main')

@section('head')

@endsection

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Active</th>
            <th>Update</th>
            <th>&nbsp;</th>
        </tr>
    </thead>

    <body>
        {!! app\Helpers\Helper::menu($menus) !!}
    </body>
</table>
@endsection
