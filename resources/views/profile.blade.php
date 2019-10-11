@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <div class="main-content">
        <div class="container " style="margin-top: 116px">
            <div class="row pt-3">
                <div class="col-xl-12 m-auto order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img
                                            src="../public/img/{{$user->avatar}}"
                                            class="rounded-circle shadow">
                                </div>
                            </div>
                        </div>
                        <form action="{{route('up_file_avatar')}}" method="POST" enctype="multipart/form-data">
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <input type="submit" class="btn-primary btn btn-sm">
                        </form>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-info mr-4">Edit Profile <i class="fas fa-cog" aria-hidden="true"></i></a>
                                <a href="{{route('mesage')}}" class="btn btn-sm btn-default float-right">Message</a>
                            </div>
                        </div>

                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="text-center  mt-md-5">
                                        <h3>
                                            {{$user->name}} <i class="fas fa-check-circle"></i>
                                        </h3>
                                        <div class="h5 font-weight-300">
                                            <i class="ni location_pin mr-2"></i>Bucharest, Romania
                                        </div>
                                        <div class="h5 mt-4">
                                            <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                                        </div>
                                        <div>
                                            <i class="ni education_hat mr-2"></i>University of Computer Science
                                        </div>

                                    </div>
                                    <div class="card-profile-stats d-flex  justify-content-center pt-3">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#Friends">
                                                    <span class="heading">22</span>
                                                    <span class="description">
                                                <i class="fas fa-user-friends">&nbsp;</i>Friends</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#Photos">
                                                    <span class="heading">22</span>
                                                    <span class="description"><i class="fas fa-images">&nbsp;</i>Photos</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#Comments">
                                                    <span class="heading">22</span>
                                                    <span class="description"><i  class="fas fa-comments">&nbsp;</i>Comments</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content text-center">
                                        <div id="Friends" class="container tab-pane active"><br>
                                            <h3>HOME</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div id="Photos" class="container tab-pane fade"><br>

                                        </div>
                                        <div id="Comments" class="container tab-pane fade"><br>
                                            <h3>Menu 2</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab panes -->

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


@endsection
