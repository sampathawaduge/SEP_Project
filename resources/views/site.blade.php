@extends('master')
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

         {{--@foreach($sites as $key=>$value)--}}
            {{--<tr>--}}
               {{--<td>{{$value->hostname}}</td>--}}
               {{--<td>{{$value->sitename}}</td>--}}
               {{--<td>{{$value->created_at}}</td>--}}
               {{--<td><a href="preview/site/{{ $value->siteid }}" class="btn btn-success btn-sm">View</a></td>--}}

            {{--</tr>--}}
         {{--@endforeach--}}
         </tbody>
      </table>
   </div>

   <div id="postsect">

      <button type="button" class="btn btn-info" id="Add">Add New</button>
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
            </tbody>
         </table>
      </div>

      <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add new post</h4>
               </div>
               <form method="post" action="">
                  <div class="modal-body">
                     <div class="form-group">
                        <label for="siteid">SiteID</label>
                        <input type="text" class="form-control" id="siteid" width="5">
                     </div>

                     <div class="form-group">
                        <label for="post">Post</label>
                        <textarea class="form-control" rows="5" id="post" style="resize: none"></textarea>
                     </div>


                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <input type="submit" class="btn btn-default" data-dismiss="modal" id="addpost" value="post">
                  </div>
               </form>
            </div>

         </div>
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


      })
      //        })

      function show(shown, hidden,hidden1,hidden2) {
         document.getElementById(shown).style.display='block';
         document.getElementById(hidden).style.display='none';
         document.getElementById(hidden1).style.display='none';
         document.getElementById(hidden2).style.display='none';

         return false;
      }
   </script>


@endsection