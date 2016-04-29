@extends('master')



@section('content')



  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="resources/assets/img/photo1.png" alt="User profile picture">
          <h3 class="profile-username text-center">Nina Mcintire</h3>
          <p class="text-muted text-center">Software Engineer</p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <!-- <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-twitter"></i> <b>Twitter</b></a> -->
              <div class="text-center">
                    <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
                    <a class="btn btn-social-icon btn-youtube"><i class="fa fa-youtube"></i></a>
                    <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>

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
          <p class="text-muted">Malibu, California</p>

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
          <a class="twitter-timeline"  href="https://twitter.com/Castila3" data-widget-id="724097904743309312">Tweets by @Castila3</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->

    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#activity" data-toggle="tab">Activity Feed</a></li>
          <li><a href="#timeline" data-toggle="tab">My Posts</a></li>
          <li><a href="#galery" data-toggle="tab">Galery</a></li>
          <li><a href="#settings" data-toggle="tab">Edit Profile</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">


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
                <img class="img-circle img-bordered-sm" src="resources/assets/img/user1-128x128.jpg" alt="user image">
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

          <div class=" tab-pane" id="galery">
            <div class="row">
              <div class='list-group gallery'>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                  <a class="thumbnail fancybox" rel="ligthbox" href="resources/assets/img/photo1.png">
                    <img class="img-responsive" alt="" src="resources/assets/img/photo1.png" />
                    <div class='text-right'>
                      <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                  </a>
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                  <a class="thumbnail fancybox" rel="ligthbox" href="resources/assets/img/photo1.png">
                    <img class="img-responsive" alt="" src="resources/assets/img/photo1.png" />
                    <div class='text-right'>
                      <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                  </a>
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                  <a class="thumbnail fancybox" rel="ligthbox" href="resources/assets/img/photo1.png">
                    <img class="img-responsive" alt="" src="resources/assets/img/photo1.png" />
                    <div class='text-right'>
                      <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                  </a>
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                  <a class="thumbnail fancybox" rel="ligthbox" href="resources/assets/img/photo1.png">
                    <img class="img-responsive" alt="" src="resources/assets/img/photo1.png" />
                    <div class='text-right'>
                      <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                  </a>
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                  <a class="thumbnail fancybox" rel="ligthbox" href="resources/assets/img/photo1.png">
                    <img class="img-responsive" alt="" src="resources/assets/img/photo1.png" />
                    <div class='text-right'>
                      <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                  </a>
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                  <a class="thumbnail fancybox" rel="ligthbox" href="resources/assets/img/photo1.png">
                    <img class="img-responsive" alt="" src="resources/assets/img/photo1.png" />
                    <div class='text-right'>
                      <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                  </a>
                </div> <!-- col-6 / end -->
              </div> <!-- list-group / end -->
            </div> <!-- row / end -->




          </div><!-- /.tab-pane -->

          <div class="tab-pane" id="settings">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                    </label>
                  </div>
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