@extends('layouts.master')



@section('content')

<div class="tab-pane" id="settings">



    <form class="form-horizontal" action="{{ url('templates/store')  }}" method="post" enctype="multipart/form-data">


        {{ csrf_field() }}

        <div class="form-group">
            <label for="Name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>
        </div>
        <div class="form-group">
            <label for="Colour" class="col-sm-2 control-label">Colour</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="colour" name="colour" placeholder="colour">
            </div>
        </div>
        <div class="form-group">
            <label for="Description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control" id="description" name="description" placeholder="description">
            </div>
        </div>
        <div class="form-group">
            <label for="Price" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" name="price" placeholder="price">
            </div>
        </div>
        {{--<div class="form-group">--}}
            {{--<label for="URL" class="col-sm-2 control-label">URL</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="textarea" class="form-control" id="url" name="url" placeholder="url">--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="form-group">
            <label for="template source" class="col-sm-2 control-label">template source</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="temp_source" name="temp_source" placeholder="temp_source" multiple="multiple" required />
            </div>
        </div>
        <div class="form-group">
            <label for="template picture" class="col-sm-2 control-label">template picture</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="temp_pic" name="temp_pic" placeholder="temp_pic">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
</div><!-- /.tab-pane -->
</div><!-- /.tab-content -->
</div><!-- /.nav-tabs-custom -->
</div><!-- /.col -->
</div><!-- /.row -->

@endsection