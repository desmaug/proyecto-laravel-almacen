@extends('dashboard')

@section('container')


<!DOCTYPE html>
<html lang="en">
    <body class="account-body accountbg">
        <!-- Log In page -->
        <div class="container dataTables_paginate ">
            <div class="row vh-75 d-flex justify-content-center pagination">
                <div class="col-8 align-self-center mt-5">
                    @foreach($images as $image)
                    <div class="card pub_image">
                        <div class="card-header">
                            @if($image->user->image)
                            <img  class="container-avatar" src="{{ route('user.avatar',['filename'=>$image->user->image])}}" class="avatar" >
                            @endif
                            <div class="data-user">
                                <a href="{{ route('image.detail',['id'=>$image->id])}}">
                                    {{$image->user->name}}
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="image-container">
                                <img src="{{route('image.file',['filename'=>$image->image_path])}}" alt="">
                            </div>
                            
                            <div class="description">
                                <span class="nickname">{{'@'.$image->user->name}}</span>
                                <p>{{$image->description}}</p>
                            </div>
                            <div class="likes">
                                <img src="{{asset('img/heart-black.png')}}" alt="">

                            </div>
                            <div class="comments">
                                <a href="" class="btn btn-warning btn-sm btn-comments">
                                    Comentarios ({{count($image->comments)}})
                                </a>
                            </div>
                           
                        </div>
                    </div>
                    @endforeach
                    <!-- Paginacion -->
                    <div class="clearfix">
                        {{$images->links()}}
                    </div>
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end container-->
        <!-- End Log In page -->
    </body>

</html>


@endsection