@extends('layouts.app')

@section('content')

        <!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->

            <!-- New Task Form -->
    <form action="/share-food" method="POST" class="form-horizontal">
        {{ csrf_field() }}

                <!-- Task Name -->
        <div class="form-group">
            <label for="user_name" class="col-sm-3 control-label">User Name</label>

            <div class="col-sm-6">
                <input type="text" name="user_name" id="user_name" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="personal_price" class="col-sm-3 control-label">User Name</label>

            <div class="col-sm-6">
                <input type="text" name="personal_price" id="personal_price" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <label for="max_person" class="col-sm-3 control-label">User Name</label>

            <div class="col-sm-6">
                <input type="text" name="max_person" id="max_person" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="current_person" class="col-sm-3 control-label">User Name</label>

            <div class="col-sm-6">
                <input type="text" name="current_person" id="current_person" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <label for="temp" class="col-sm-3 control-label">User Name</label>

            <div class="col-sm-6">
                <input type="text" name="temp" id="temp" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <label for="temp" class="col-sm-3 control-label">User Name</label>

            <div class="col-sm-6">
                <input type="text" name="temp" id="temp" class="form-control">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Create Share Food
                </button>
            </div>
        </div>
    </form>
</div>

<!-- TODO: Current Tasks -->
@endsection