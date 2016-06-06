@extends('layouts.master')
@section('content')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="#" onclick="return show('about','post','calender','sitedetails');">About</a></li>
                <li><a href="#" onclick="return show('post','about','calender','sitedetails');">Posts</a></li>
                <li><a href="#" onclick="return show('sitedetails','post','about','calender');">SiteDetails</a></li>
                <li><a href="#" onclick="return show('calender','post','about','sitedetails');">Calender</a></li>
            </ul>
        </div>
    </nav>

    <hr>

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your inputs.<br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
        </div>
    @endif

    <form method="POST" action="{{url('/insert')}}">

        {{ csrf_field() }}

        <div class="form-group" id="sitedetails">

            <label for="usr">SiteName</label>
            <input type="text" class="form-control" id="usr"  name="sitename" value={{old('sitename')}}>

            <label for="usr">HostName</label>
            <input type="text" class="form-control" id="usr"  name="hostname" value={{old('hostname')}}>

        </div>

        <div class="form-group" id="about">

            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="usr"  name="name" value={{old('name')}}>

            <label for="usr">Age</label>
            <input type="text" class="form-control" id="usr" name="age" value={{old('age')}}>

            <label for="usr">Qualifications</label>
            <input type="text" class="form-control" id="usr" name="qualifications" value={{old('qualifications')}}>

            <div class="form-group">
                <label for="comment">About Your Self</label>
                <textarea class="form-control" rows="10" id="comment" name="about">{{old('about')}}</textarea>
            </div>
        </div>


        <div class="form-group" id="post">

            <div class="form-group">
                <label for="comment">POST</label>
                <textarea class="form-control" rows="5" id="comment" name="description">{{old('description')}}</textarea>
            </div>
            <input type="button" class="btn btn-success" value="+upload">

        </div>

        <div class="form-group" id="calender">

        </div>

        <input type="submit" value="+publish" class="btn btn-primary" >
    </form>

     <script>
        $(document).ready(function(){
            $("#post").hide();
            $("#img_vid").hide();
            $("#contact").hide();
            $("#calender").hide();
            $("#sitedetails").hide();

        })
        function show(shown, hidden,hidden1,hidden2) {
            document.getElementById(shown).style.display='block';
            document.getElementById(hidden).style.display='none';
            document.getElementById(hidden1).style.display='none';
            document.getElementById(hidden2).style.display='none';

            return false;
        }
    </script>
@endsection