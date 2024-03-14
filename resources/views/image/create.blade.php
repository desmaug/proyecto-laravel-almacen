@extends('dashboard')

@section('container')


<!DOCTYPE html>
<html lang="en">
    <body class="account-body accountbg">
        <!-- Log In page -->
        <div class="container">
            <div class="row vh-75 d-flex justify-content-center">
                <div class="col-12 align-self-center mt-5">
                    
                <h3>crear imagen </h3>

                <div class="card">
                    <div class="card-header">Subir Nueva Imagen</div>
                    <div class="card-body">
                        <form action="{{route('image.save')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row d-flex align-items-center">
                                <label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
                                <div class="col-md-6">
                                    <input type="file" id="image_path" name="image_path" class="form-control" required>
                                    @if($errors->has('image_path'))
                                        <span class="invalid-feedblack" role="alert">
                                            <strong>{{ $errors->first('image_path')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <label for="description" class="col-md-3 col-form-label text-md-right">Descripción</label>
                                <div class="col-md-6">
                                    <textarea id="description" name="description" class="form-control" required></textarea>
                                    @if($errors->has('description'))
                                        <span class="invalid-feedblack" role="alert">
                                            <strong>{{ $errors->first('description')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <div class="col-md-4 offset-md-3">
                                    @include('includes.message')
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <div class="col-md-6 offset-md-3">
                                    <input type="submit" class="btn btn-primary" value="Subir Imagen">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->
    </body>

</html>


@endsection