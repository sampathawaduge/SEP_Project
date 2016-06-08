@extends('layouts.master')
@section('content')

    <div class="row">
    <div class="box  col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Basic Details</h3>
            </div><!-- /.box-header -->
            <!-- form start -->

            <form  role="form" method="POST" action="{{url('/insert/'.$id)}}">

                {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name" value={{old('name')}}>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Age</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Age" name="age" value={{old('age')}}>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Qualifications</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="qualifications" value={{old('qualifications')}}></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">About You</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="about">{{old('about')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">First Post</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="description">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">SiteName</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="sitename" value={{old('sitename')}}>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">HostName</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="hostname" value={{old('hostname')}}>
                    </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Create Site</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
@endsection
