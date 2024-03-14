@extends('dashboard')

@section('container')


<!DOCTYPE html>
<html lang="en">
    <body class="account-body accountbg">
        <!-- Log In page -->
        <div class="container">
            <div class="row vh-75 d-flex justify-content-center">
                <div class="col-12 align-self-center mt-5">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <h4 class="mt-3 mb-3 fw-semibold text-white font-18">Configuracion de mi cuenta</h4>   
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">
                                            <form class="form-horizontal auth-form" action="{{ route('user.update')}}" enctype="multipart/form-data" method="POST">
                                                
                                                @csrf
                                                @if(Auth::check())
                                                
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="name">Nombre</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" id="name" placeholder="Nombre">
                                                    </div>                                    
                                                </div><!--end form-group--> 
            
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="email">Correo</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="Correo">
                                                    </div>                                    
                                                </div><!--end form-group-->

                                                <div class="form-group mb-2">
                                                    @include('includes.avatar')
                                                </div>

                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="image_path">Avatar</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="file" class="form-control{{ $errors->has('image_path') ? ' is-invalid ' : '' }}" name="image_path" id="image_path">
                                                        @if($errors->has('image_path'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$errors->first('image_path')}}</strong>
                                                            </span>
                                                        @endif
                                                    </div>                                    
                                                </div>

                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif   

                                                @if(session('message'))
                                                    <div class="alert alert-success">
                                                        {{session('message')}}
                                                    </div>
                                                @endif
                                               
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Guardar Cambios <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->      
                                                @endif       
                                                           
                                            </form><!--end form-->
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->
    </body>

</html>


@endsection