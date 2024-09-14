@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="post">
    @include('admin.alert')
    <div class="card-body">
        <div class="form-group mb-3">
            <label for="menu">Menu</label>
            <input type="text" name="name" class="form-control" placeholder="Enter menu's name">
        </div>

        <div class="form-group mb-3">
            <label for="menu">Parent Menu</label>
            <select aria-label="State" class="custom-select" name="parent_id">
                <option value="0">Select menu</option>
                @foreach ($menus as $menu)
                <option value="{{$menu->id}}">{{$menu->name}}</option>

                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content description</label>
            <textarea id="content" name="content" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group mb-3">
            <label class="mr-2 mb-0">Active</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="active" id="yes_active" checked="true">
                <label class="form-check-label" for="yes_active">
                    Yes
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="active" id="no_active">
                <label class="form-check-label" for="no_active">
                    No
                </label>
            </div>
        </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Add new menu</button>
    </div>
    @csrf
</form>
@endsection


@section('footer')
<script>
    CKEDITOR.replace('content');
</script>
@endsection