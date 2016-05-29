@extends('layouts.master')
@section('content')

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="#">Posts</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add Post</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/update')}}">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">SiteID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="siteid" placeholder="SiteID" name="siteid" value={{$users->siteid}} disabled>
                        <input type="hidden" name="id" value={{$users->siteid}}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Post</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="description" style="resize:none;" >{{$users->description}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="file" name="image">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" style="margin-right:10px;">
            </div><!-- /.box-footer -->
        </form>
    </div>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">All Posts</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody><tr>
                        <th style="width: 10px">SiteID</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Created Date</th>
                    </tr>

                    @foreach($test as $key=>$value)
                        <tr>
                            <td>
                                {{$value->siteid}}
                            </td>
                            <td>
                                {{$value->description}}
                            </td>
                            <td>
                                NULL
                            </td>
                            <td>
                                {{$value->created_at}}
                            </td>
                            <td>
                                <a href="{{url('/delete/'.$value->siteid)}}"><input type="button" class="btn btn-success" value="Delete" ></a>
                            </td>
                        <tr>
                    @endforeach

                    </tbody></table>
            </div><!-- /.box-body -->

        </div><!-- /.box -->

@endsection