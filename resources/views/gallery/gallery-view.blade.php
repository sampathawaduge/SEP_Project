@extends('layouts.master')

@section('content')
    <style type="text/css">
        #gallery-images img{
            width: 240px;
            height: 160px;
            border: 2px solid black;
            margin-bottom: 10px;
        }
        #gallery-images ul{
            margin: 0;
            padding: 0;
        }

        #gallery-images li{
            margin: 0;
            padding: 0;
            list-style: none;
            float: left;
            padding-right: 10px;
        }
    </style>
    <div class="row">
        <div class="col-md-6">
            <h1>{{$gallery->name}}</h1>
            </div>
        <div class="col-md-6">
        <a  href="{{url('gallery/list')}}" class="btn  pull-right btn-danger delete" ><i class="fa fa-fw fa-backward"></i>Back to Albums.</a>
        </div>
    </div>




    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
            <div id="gallery-images">
                <ul>
                    @foreach($gallery->images as $image)
                        <li>
                            <a href="{{url($image->file_path)}}" data-lightbox="mygallery">
                                <img src="{{url('/gallery/images/thumbs/'.$image->file_name)}}">
                            </a>
                        </li>

                        @endforeach
                </ul>
            </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-8 ">
            <form action="{{url('image/do-upload')}}" class="dropzone" id="addImages">
                {{csrf_field()}}
                <input type="hidden" name="gallery_id" value="{{$gallery->id}}" >
            </form>
        </div>

    </div>



@endsection