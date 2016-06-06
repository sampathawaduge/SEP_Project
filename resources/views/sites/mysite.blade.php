@extends('layouts.master')
@section('content')

<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }

    #wrapper {
        margin: 20px auto;
        width: 960px;
    }

    h1 {
        text-align: center;
        margin: 0 0 20px;
    }

    .grid-block-container {
        float: left;
        width: 990px;
        margin: 20px 0 0 -30px;
    }
    .grid-block {
        position: relative;
        float: left;
        width: 600px;
        height: 400px;
        margin: 0 0 30px 30px;
    }
    .grid-block h4 {
        font-size: .9em;
        color: #333;
        background: #f5f5f5;
        margin: 0;
        padding: 10px;
        border: 1px solid #ddd;
    }

    .caption {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        background:url({{url('resources/assets/img/trans-black-50.jpg')}});
        width: 100%;
        height: 100%;
    }
    .caption h3, .caption p {
        color: #fff;
        margin: 20px;
    }
    .caption h3 {
        margin: 20px 20px 10px;
    }
    .caption p {
        font-size: .75em;
        line-height: 1.5em;
        margin: 0 20px 15px;
    }
    .caption a.learn-more {
        padding: 5px 10px;
        background: #08c;
        color: #fff;
        border-radius: 2px;
        -moz-border-radius: 2px;
        font-weight: bold;
        text-decoration: none;
    }
    .caption a.learn-more:hover {
        background: #fff;
        color: #08c;
    }
</style>

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
                            <td><a href="{{url('preview/site/'.$value->siteid) }}">View</a></td>
                            <td><a href="{{url('deletesite/'.$value->siteid)}}">Delete</a></td>
                            <td><a class="demo01" href="#animatedModal">Change Template</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>
      </div>



    <!--DEMO01-->
    <div id="animatedModal">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
        <div class="close-animatedModal" align="middle">
            <img src="{{asset('resources/assets/img/closemodal.png')}}" >
        </div>

        <div class="modal-content">

          <div class="container-fluid">
            @foreach($temp as $value=>$key)
              <div class="row">
                <div class="col-sm-6">
                  <div id="wrapper">
                      <div class="grid-block-container">
                          <div class="grid-block slide">
                              <div class="caption">
                                  <h3>Rs :{{$key['price']}}</h3>
                                  <p>{{$key['description']}}</p>
                                  <p><a href="{{url('/demo')}}" target="_blank" class="learn-more">Demo</a></p>
                                  <p><a href="{{url('/updatetemp/'.$key["id"].'/'.$key["id"])}}" class="learn-more">Change</a></p>
                              </div>
                              <img src="{{url('resources/assets/img/2.jpg')}}" style="width:600px;height:300px;"/>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

        </div>
    </div>
    <script>
      $(document).ready(function(){
        $(".demo01").animatedModal({
          animatedIn:'lightSpeedIn',
          animatedOut:'bounceOutDown',
          overflow:'scroll'
        });
        $('.slide').hover(
                function(){
                    $(this).find('.caption').slideDown(550);
                },
                function(){
                    $(this).find('.caption').slideUp(550);
                }
        );
      });

    </script>


@endsection
