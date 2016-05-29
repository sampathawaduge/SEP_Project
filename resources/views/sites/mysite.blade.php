@extends('layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Created Sites</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody><tr>
                        <th style="width: 10px">SiteID</th>
                        <th>HostName</th>
                        <th>TemplateID</th>
                        <th>SiteName</th>
                        <th>Created At</th>
                    </tr>
                    @foreach($sites as $key=>$value)
                        <tr>
                            <td>{{$value->siteid}}</td>
                            <td>{{$value->hostname}}</td>
                            <td>{{$value->templateid}}</td>
                            <td>{{$value->sitename}}</td>
                            <td>{{$value->created_at}}</td>
                            <td><a href="preview/site/{{ $value->siteid }}" class="btn btn-success btn-sm">View</a></td>
                            <td><a href="{{url('deletesite/'.$value->siteid)}}" class="btn btn-success btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody></table>
            </div><!-- /.box-body -->
        </div>
@endsection

