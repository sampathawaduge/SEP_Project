@extends('layouts.master')



@section('content')
    <script language="javascript" type="text/javascript">
        function validation(){

            var a=document.reg.name.value;
            var b=document.reg.description.value;
            var c=document.reg.slide_pic.value;


            if ((a == null||a == "") ) {
                alert("Enter SLIDE IMAGE NAME...!.");
                return false;
            }
            if(a.match(/[^A-Za-z]/))
            {
                alert("Enter alphbatical characters for TEMPLATE NAME! (Allowed input:A-Z/a-z)");
                return false;
            }
            if (b==null||b=="") {
                alert("Enter DESCRIPTION of slide image...!");
                return false;
            }
            if(b.match(/[^A-Za-z]/))
            {
                alert("Enter alphbatical characters for COLOUR! (Allowed input:A-Z/a-z)");
                return false;
            }
            if (c == null||c == "" ) {
                alert("Insert IMAGE for slide...!.");
                return false;
            }

            return confirm("Are you sure to INSERT this record?");
        }
    </script>
    <div class="row">
    <div class="tab-pane" id="settings">



        <form class="form-horizontal" name="reg" action="{{ url('templates/slide/new')  }}" method="post" enctype="multipart/form-data" onsubmit="return validation()">


                <h3 style="text-align: center">Add Slide show images</h3>

            {{ csrf_field() }}


            <div class="form-group">
                <label for="Name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                </div>
            </div>
            <div class="form-group">
                <label for="Description" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="description" name="description" placeholder="description">
                </div>
            </div>
            <div class="form-group">
                <label for="slide picture" class="col-sm-2 control-label">Slide picture</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="slide_pic" name="slide_pic" placeholder="slide_pic">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-check-square-o" aria-hidden="true"></i><span> </span>Submit</button>
                </div>
            </div>
        </form>
    </div><!-- /.tab-pane -->
    <h3 style="text-align: center">Select Slide show images</h3>
    <div class="col-xs-12">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Slide show image Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Image ID: activate to sort column descending">Image ID</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending">Description</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending">Image</th><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Image status: activate to sort column descending">Image status</th> </tr>
                                </thead>
                                <tbody>

                                @foreach($slideimages as $slideimage)
                                    <tr role="row" class="">

                                        <td>{{ $slideimage->id }}</td>
                                        <td>{{ $slideimage->name }}</td>
                                        <td>{{ $slideimage->description }}</td>
                                        <td><a href="{{ url("templates/show/" .$slideimage->id) }}" target="_blank"><img src='{{asset("/resources/assets/img/preview/" . $slideimage->slide_pic )  }}' alt="MountainView" style="width:100px;height:50px;"></a></td>
                                        <td>{{ $slideimage->status }}</td>
                                        <td style="text-align: center"><a href={{url("templates/slide/". $slideimage->id ."/change1") }}><button type="button" class="btn btn-warning" value="1" name="first" ><i class="fa fa-picture-o" aria-hidden="true"></i></button></a></td>
                                        <td style="text-align: center"><a href={{url("templates/slide/". $slideimage->id ."/change2") }}><button type="button" class="btn btn-info" value="2" name="second" ><i class="fa fa-picture-o" aria-hidden="true"></i><i class="fa fa-picture-o" aria-hidden="true"></i></button></a></td>
                                        <td style="text-align: center"><a href={{url("templates/slide/". $slideimage->id ."/change3") }}><button type="button" class="btn btn-danger" value="0" name="non" ><i class="fa fa-picture-o" aria-hidden="true"></i><span> </span><i class="fa fa-share-square-o" aria-hidden="true"></i></button></a></td>

                                    </tr>
                                @endforeach
                                {{--<tfoot>--}}
                                {{--<tr><th rowspan="1" colspan="1">Template ID</th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Colour</th><th rowspan="1" colspan="1">Image</th></tr>--}}
                                {{--</tfoot>--}}
                            </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    </div><!-- /.tab-content -->
    </div><!-- /.nav-tabs-custom -->
    </div><!-- /.col -->
    </div><!-- /.row -->
    </div>
@endsection