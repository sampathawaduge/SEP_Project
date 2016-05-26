@extends('layouts.master')



@section('content')

    @extends('layouts.master')



@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>My Albums</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @if($galleries->count() > 0)
                <table class="table table-striped table-bordered table-responsive table-hover">
                    <thead>
                    <tr class="info">
                        <th><strong>Name Of the Album</strong></th>
                        <th><strong>Action</strong></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($galleries as $gallery)
                        <tr>
                            <td>{{$gallery->name}}</td>


                            <td><a type="button" class="btn btn-info " href="{{url('gallery/view/' . $gallery->id)}}"><i class="glyphicon glyphicon-tool"></i>
                                    <span>View</span></a><a type="button" class="pull-right btn btn-danger delete" href="{{url('gallery/delete/' . $gallery->id)}}">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    <span>Delete</span>
                                </a>
                                {{--<a href="{{url('gallery/delete/' . $gallery->id)}}">Delete</a>--}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="col-md-4">
            @if(count ($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form" method="post" action="{{url('gallery/save')}}">
                <input type ="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <input type="text" name="gallery_name" id="gallery_name" placeholder="Name of the Album" class="form-control" value="{{old('gallery_name')}}"/>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>


@endsection
@endsection