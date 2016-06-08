@extends('layouts.master')



@section('content')
    <div class="row">
    <h3 style="text-align: center">'Not Yet Reply' Mail Table</h3>
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Mail ID: activate to sort column descending">Mail ID</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Sender Name: activate to sort column ascending">Sender Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Sender Mail: activate to sort column ascending">Sender Mail</th> <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Subject: activate to sort column ascending">Subject</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Messenge: activate to sort column ascending">Messenge</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Reply: activate to sort column ascending">Reply</th></tr>
                                </thead>
                                <tbody>

                                @foreach($visitormails as $mail)
                                    <tr role="row" class="">

                                        <td>{{ $mail->id }}</td>
                                        <td>{{ $mail->sender_name }}</td>
                                        <td>{{ $mail->sender_email }}</td>
                                        <td>{{ $mail->subject }}</td>
                                        <td>{{ $mail->description }}</td>
                                        <td>{{ $mail->reply }}</td>
                                        {{--<td><a href="{{ url("templates/show/" .$template->id) }}" target="_blank"><img src='{{asset("/images/previews/" . $template->temp_pic )  }}' alt="MountainView" style="width:100px;height:50px;"></a></td>--}}
                                        <td style="text-align: center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#replyModal"><i class="fa fa-reply" aria-hidden="true"></i></button></td>
                                        <td style="text-align: center"><a href={{url("templates/". $mail->id ."/ignor") }}><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to IGNORE this mail?');"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>

                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="replyModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Type your reply</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" action="{{ url("templates/". $mail->id ."/reply")  }}" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <textarea name="reply_message" id="reply_message" class="form-control" rows="4" cols="85" placeholder="Enter your message" required="required"></textarea>
                                                        <input type="submit" class="btn btn-warning" value="Reply" onsubmit="return confirm('Are you sure to SEND this mail?');">
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
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

    <h3 style="text-align: center">Visitor Mail Table</h3>
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Mail ID: activate to sort column descending">Mail ID</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Sender Name: activate to sort column ascending">Sender Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Sender Mail: activate to sort column ascending">Sender Mail</th> <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Subject: activate to sort column ascending">Subject</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Messenge: activate to sort column ascending">Messenge</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Reply: activate to sort column ascending">Reply</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Replied by: activate to sort column ascending">Replied By</th></tr>
                                </thead>
                                <tbody>

                                @foreach($allmail as $all)
                                    <tr role="row" class="">

                                        <td>{{ $all->id }}</td>
                                        <td>{{ $all->sender_name }}</td>
                                        <td>{{ $all->sender_email }}</td>
                                        <td>{{ $all->subject }}</td>
                                        <td>{{ $all->description }}</td>
                                        @if($all->reply == "Ignor")
                                        <td style="background-color: red">{{ $all->reply }}</td>
                                        @elseif($all->reply == "not yet reply")
                                        <td style="background-color: lawngreen">{{ $all->reply }}</td>
                                        @else($all->reply == "not yet reply")
                                            <td>{{ $all->reply }}</td>
                                            @endif
                                        <td>{{ $all->reply_by }}</td>
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
    </div>


@endsection