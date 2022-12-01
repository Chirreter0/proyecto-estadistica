@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Profile'])

    <div class="container-fluid py-4 card-profile">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form role="form" method="POST" action={{ route('profile.update') }} enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Información del usuario</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Usuario</label>
                                    <input class="form-control" type="text" name="username" value="{{ old('username', auth()->user()->username) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Correo electronico</label>
                                    <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nombre</label>
                                    <input class="form-control" type="text" name="firstname" value="{{ old('firstname', auth()->user()->firstname) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Apellido</label>
                                    <input class="form-control" type="text" name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}">
                                </div>
                            </div>
                        </div>

                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-4">*Verificar datos</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Información de la cuenta</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Permisos</label>
                                    <input class="form-control" type="text"
                                        value="Lectura - Escritura - Registros" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Facultad</label>
                                    <input class="form-control" type="text" value="Ingenierias" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Carrera</label>
                                    <input class="form-control" type="text" value="Ingenieria de sistemas" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tipo</label>
                                    <input class="form-control" type="text" value="Administrador" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="text-center pt-0 pt-lg-2">
                            <p class="text-uppercase text-sm">Registros</p>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="d-flex justify-content-between">
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">inicio sesion</a>
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                                    class="ni ni-collection"></i></a>
                            <a href="javascript:;"
                                class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">formatos subidos</a>
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i
                                    class="ni ni-email-83"></i></a>
                        </div>
                    </div>



                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">#</span>
                                        <span class="text-sm opacity-8">1</span>
                                    </div>
                                    <div class="d-grid text-center mx-4">
                                        <span class="text-lg font-weight-bolder">Nombre</span>
                                        <span class="text-sm opacity-8">test</span>
                                    </div>
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">Fecha</span>
                                        <span class="text-sm opacity-8">2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
