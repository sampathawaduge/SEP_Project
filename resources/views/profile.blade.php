@extends('layouts.master')



@section('content')



  <div class="row">

    <div class="col-md-3">

      <!-- Modal for fb-->
      <div class=" modal-default">
      <div id="fb" class="modal fade" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Paste your profile link here.</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" role="form" method="post" action="{{ url('/userLINK') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" value="{{Auth::user()->id}}" />

              <div class="form-group">
                <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="submission_fb" name="fb" placeholder="Paste the Facebook Profile Link" value="{{Auth::user()->fb}}">
                </div>
              </div>
                <div class="form-group">
                  <a class="btn btn-social-icon btn-youtube"><i class="fa fa-youtube"></i></a>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="submission_youtube" name="youtube" placeholder="Paste the YouTube Chanel Link" value="{{Auth::user()->youtube}}">
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-social-icon btn-google"><i class="fa fa-google"></i></a>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="submission_google" name="google" placeholder="Paste the Google+ Link'" value="{{Auth::user()->google}}">
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="submission_twiter"  name="twiter" placeholder="Paste the Twitter Profile Link" value="{{Auth::user()->twiter}}">
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="submission_instagram"  name="instagram" placeholder="Paste the Istagram Profile Link" value="{{Auth::user()->instagram}}">
                  </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

              <button type="submit" class="btn btn-danger">Save Links</button>
            </form>
            </div>
          </div>


      </div>
        </div>
      </div>



      <!-- Modal for password-->
      <div class=" modal-default">
        <div id="pwd" class="modal fade" role="dialog">

          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change Password.</h4>
              </div>
              <div class="modal-body">
                <form method="post" action="{{ url('/userpw') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="hidden" name="id" value="{{Auth::user()->id}}" />

                  @if(Session::has('pwmessage'))
                    <div class="alert alert-success">
                      {{ Session::get('pwmessage') }}
                    </div>
                  @endif

                  @if(Session::has('wmessage'))
                    <div class="alert alert-danger">
                      {{ Session::get('wmessage') }}
                    </div>
                  @endif

                  <div class="form-group">
                    <label class="control-label">Current Password</label>
                    <input type="password" id="currentp" class="form-control" name="currentp" /> </div>
                  <div class="form-group">
                    <label class="control-label">New Password</label>
                    <input type="password" id="newp" class="form-control" name="newp"/> </div>

                  {{--                                            @if ($errors->has('newp'))
                                                                  <span class="help-block">
                                                                      <strong>{{ $errors->first('newp') }}</strong>
                                                                  </span>
                                                              @endif--}}

                  <div class="form-group">
                    <label class="control-label">Re-type New Password</label>
                    <input type="password" id="rep" class="form-control" name="rep"/> </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                <button type="submit" class="btn green" id="btnChange">Change Password
                </button>
                </form>
              </div>
            </div>


          </div>
        </div>
      </div>








      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">

          <img class="profile-user-img img-responsive img-circle" src="{{ Auth::user()->profile_pic==NULL ? URL::asset('resources/assets/img/pro.jpg') : URL::asset(Auth::user()->profile_pic) }}" alt="User profile picture">
          <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
          <p class="text-muted text-center">{{ Auth::user()->job }}</p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <!-- <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-twitter"></i> <b>Twitter</b></a> -->
              <div class="text-center">
                    <a href="{{Auth::user()->google}}" target="_blank"class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
                    <a href="{{Auth::user()->youtube}}" target="_blank" class="btn btn-social-icon btn-youtube"><i class="fa fa-youtube"></i></a>
                    <a href="{{Auth::user()->fb}}" target="_blank"class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="{{Auth::user()->twiter}}" target="_blank" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="{{Auth::user()->instagram}}"target="_blank" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>

              </div>
          </ul>
        </div><!-- /.box-body -->
      </div><!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">About Me</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
          <p class="text-muted">
            B.S. in Computer Science from the University of Tennessee at Knoxville
          </p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
          <p class="text-muted">{{Auth::user()->address}}</p>

          <hr>

          <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
          <p>
            <span class="label label-danger">UI Design</span>
            <span class="label label-success">Coding</span>
            <span class="label label-info">Javascript</span>
            <span class="label label-warning">PHP</span>
            <span class="label label-primary">Node.js</span>
          </p>

          <hr>

          <strong><i class="fa fa-file-text-o margin-r-5"></i> Twiter Feed</strong>
          <a class="twitter-timeline"  href="{{Auth::user()->twiter}}" data-widget-id="724097904743309312">Tweets by @{{Auth::user()->name}}</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->

    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#settings" data-toggle="tab">Edit Profile</a></li>




        </ul>
        <div class="tab-content">
          <div class=" tab-pane" id="activity">


            <!-- The timeline -->
            <ul class="timeline timeline-inverse">
              <!-- timeline time label -->
              <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
              </li>
              <!-- /.timeline-label -->


              <!-- timeline item -->
              <li>
                <i class="fa fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                  <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                  <div class="timeline-body">
                    Take me to your leader!
                    Switzerland is small and neutral!
                    We are more like Germany, ambitious and misunderstood!
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                  </div>
                </div>
              </li>
              <!-- END timeline item -->
            </ul>





          </div><!-- /.tab-pane -->

          <div class="tab-pane" id="timeline">
            <!-- Post -->
            <div class="post">
              <div class="user-block">
                <img class="img-circle img-bordered-sm" src="{{URL::asset('resources/assets/img/pro.jpg')}}" alt="user image">
                        <span class='username'>
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                <span class='description'>Shared publicly - 7:30 PM today</span>
              </div><!-- /.user-block -->
              <p>
              </p>
              <ul class="list-inline">
                <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
              </ul>

              <input class="form-control input-sm" type="text" placeholder="Type a comment">
            </div><!-- /.post -->
          </div><!-- /.tab-pane -->


          <div class="active tab-pane" id="settings">
            @if(Session::has('message'))
              <div class="alert alert-success">
                {{ Session::get('message') }}
              </div>
            @endif
            <form class="form-horizontal" id="pro" role="form" method="post" action="{{ url('/user') }}">

              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <input type="hidden" name="id" value="{{Auth::user()->id}}" />

              <div class="form-group">
                <label class="col-sm-2 control-label">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="submission_name"  name="name" placeholder="Name" value="{{Auth::user()->name}}">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="submission_email" name="email" placeholder="Enter your Email Address" value="{{Auth::user()->email}}">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="submission_status" name="status" placeholder="Maried Or Unmaried" value="{{Auth::user()->status}}">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Date Of Birth</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" id="submission_BOD" name="BOD" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="{{Auth::user()->BOD}}">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                  <input type="textarea" class="form-control" id="submission_address" name="address" placeholder="Entter Your Address" value="{{Auth::user()->address}}">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Empolyment</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="submission_job" name="job" placeholder="Enter your Job" value="{{Auth::user()->job}}">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Mobile No</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" id="submission_mobile" name="mobile" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{Auth::user()->mobile}}">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button id="profdata" type="submit" class="btn btn-danger" id="btnSubmit"  >Submit</button>
                </div>
              </div>
            </form>


            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Change The Password</h3>
              </div>
              <div class="box-body">
                <a class="btn btn-block btn-info" data-toggle="modal" data-target="#pwd">Change Password</a>

              </div>
            </div>
                                <!-- profile pic -->
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Change The Profile Pciture</h3>
              </div>
              <div class="box-body">


                <form method="post" action="{{ url('/user/pic') }}" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="hidden" name="id" value="{{Auth::user()->id}}" />
                  <div class="form-group">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-new thumbnail" style="width: 222px; height: 205px;">
                        <img src="{{Auth::user()->profile_pic==NULL ? URL::asset('resources/assets/img/pro.jpg') : URL::asset(Auth::user()->profile_pic) }}" alt="" /> </div>
                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 222px; max-height: 205px;"> </div>
                      <div>
                                                                            <span class="btn default btn-file">
                                                                                <label for="profile_pic">Choose an Image</label>
                                                                                <input id="profile_pic" name="profile_pic" type="file">
                                                                            </span>
                      </div>
                    </div>

                  </div>
                  <div class="margin-top-10">
                                                <span>
                                                    <button type="submit" class="btn green" id="btnSubmitPro">Upload Profile Picture
                                                    </button>
                                                </span>
                    <button type="button" class="btn default" id="btnRemove">Remove
                    </button>

                </div>
                </form>
              </div>
            </div>


            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Paste Your Social Profile Link Here...</h3>
              </div>
              <div class="box-body">


                <a class="btn btn-block btn-default" data-toggle="modal" data-target="#fb">
                  <i class="fa fa-facebook"></i><i class="fa fa-google-plus"></i><i class="fa fa-instagram"></i><i class="fa fa-twitter"></i><i class="fa fa-youtube"></i> Enter your Profile Links
                </a>
                </div>
              </div>




          </div><!-- /.tab-pane -->



                    </div><!-- /.tab-content -->



                  </div><!-- /.nav-tabs-custom -->
                </div><!-- /.col -->
              </div><!-- /.row -->


            @endsection