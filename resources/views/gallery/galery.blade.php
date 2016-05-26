@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1><strong>My Albums.</strong></h1>
        </div>
        <hr>
        </br>
        </br>
        </br>

        <button   type="button"  class="btn pull-left btn-md btn-danger"  data-toggle="collapse" data-target="#demo" ><i class="fa fa-fw fa-plus"></i>Add a Album.</button>


        <div id="demo" class="collapse">
           <div class="col-md-6">
               <div class="panel">
               <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{url('gallery/save')}}">
                <input type ="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <label  class="col-sm-4 control-label">Name of the Album</label>
                    <div class="col-sm-8">
                        <input type="text" name="gallery_name" id="gallery_name" placeholder="Name of the Album" class="form-control" value="{{old('gallery_name')}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Caption for Album</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="details" name="details" placeholder="Enter a Caption">
                    </div>
                </div>
                <button id="add-btn" class="btn btn-success pull-right">Add</button>
            </form>
                   </div>
                   </div>
                    </div>
            </div>
        </div>
        <!-- Begin of rows -->
        @if($galleries->count() > 0)
            <div class="col-md-12">

            @foreach($galleries as $gallery)
            <div class="row carousel-row">
                <div class="col-xs-8 col-xs-offset-2 slide-row">
                    {{--<div class="carousel-inner">--}}
                    {{--<img src="{{URL::asset('resources/assets/img/x.png')}}">--}}
                        {{--</div>--}}
                <div id="carousel-1" class="carousel slide slide-carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{URL::asset('resources/assets/img/v.png')}}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{URL::asset('resources/assets/img/x.png')}}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{URL::asset('resources/assets/img/z.png')}}" alt="Image">
                        </div>
                    </div>
                </div>

                        <div class="slide-content">
                            <h4><strong>{{$gallery->name}}</strong></h4>
                            <p>{{$gallery->details}}</p>
                            <a class="btn pull-left btn-md btn-default" href="{{url('gallery/view/' . $gallery->id)}}" ><i class="fa fa-fw fa-eye"></i> Show</a>
                            <form method="post" action="{{url('gallery/delete/' . $gallery->id)}}" class="delete_form">
                                {{ csrf_field() }}
                            <a  id="delete-btn" class="btn  pull-right btn-danger delete" ><i class="fa fa-fw fa-trash"></i> Delete</a>
                            </form>
                        </div>

                </div>

            </div>
            @endforeach
        @endif

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

        </div>

    </div>
    </div>


@endsection
