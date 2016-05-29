@extends('layouts.master')
@section('content')
    <style>
        table{
            background-color:grey;
        }
    </style>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="#" onclick="return show('site','postsect','aboutsect','calendersect');">My Sites</a></li>
                <li><a href="#" onclick="return show('postsect','site','aboutsect','calendersect');">Posts</a></li>
                <li><a href="#" onclick="return show('aboutsect','site','postsect','calendersect');">About You</a></li>
                <li><a href="#" onclick="return show('calendersect','site','postsect','aboutsect');">Edit Calender</a></li>
            </ul>
        </div>
    </nav>

    <div class="container" id="site">
         <table class="table table-bordered">
            <thead>
            <tr>
                <th>Host Name</th>
                <th>Site Name</th>
                <th>Created Date</th>
            </tr>
            </thead>
            <tbody>

                @foreach($sites as $key=>$value)
                    <tr>
                        <td>{{$value->hostname}}</td>
                        <td>{{$value->sitename}}</td>
                        <td>{{$value->created_at}}</td>
                        <td><a href="preview/site/{{ $value->siteid }}" class="btn btn-success btn-sm">View</a></td>
                        <td><a href="preview/site/{{ $value->siteid }}" class="btn btn-success btn-sm">View</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="postsect">


        <form class="form-horizontal" role="form" action="{{url('/addpost')}}" method="post">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">SiteID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="siteID" placeholder="SiteID" name="siteid">
                    </div>
                    <div>
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter You Post" style="resize:none" name="description"></textarea>
                    </div>
                    <div>
                        <input type="file" value="Upload File">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Add</button>
            </div><!-- /.box-footer -->
        </form>

        <br>
        <br>
        <div class="container" >
            <table class="table">

                <tr>
                    <th></th>
                    <th>Tile</th>
                    <th>Author</th>
                    <th>Site ID</th>
                    <th>Category</th>
                    <th>Date</th>
                </tr>
                <tbody>
                    @foreach($post as $key=>$value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>Null</td>
                            <td>Null</td>
                            <td>{{$value->siteid}}</td>
                            <td>Null</td>
                            <td>{{$value->created_at}}</td>
                            <td><input type="button" value=""</td>
                        </tr>
                    @endforeach
                 </tbody>
            </table>
        </div>

    </div>
    <div id="aboutsect">
        well
    </div>
    <div id="calendersect">
        call
    </div>
    <script>
        $(document).ready(function(){
            $("#postsect").hide();
            $("#aboutsect").hide();
            $("#calendersect").hide();

            $("#Add").click(function(){
                $("#myModal").modal();
            })

            });

        function show(shown, hidden,hidden1,hidden2) {
            document.getElementById(shown).style.display='block';
            document.getElementById(hidden).style.display='none';
            document.getElementById(hidden1).style.display='none';
            document.getElementById(hidden2).style.display='none';

            return false;
        }


    </script>
@endsection

