@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Importar'])

    <div class="card shadow-lg mx-4 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Encuentre el lugar para guardar
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Verifique que las graficas sean las correctas
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-14">
                <div class="card">

                    <div class="card-body">
                        <p class="text-uppercase text-sm">Excel</p>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Formato 1</label>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" id="file" class="form-control">
                                        <hr class="horizontal white">
                                        <button class="btn btn-primary btn-sm ms-auto">Descargar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">

                        <p class="text-uppercase text-sm">Word</p>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Formato 2</label>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" id="file" class="form-control">
                                        <hr class="horizontal white">
                                        <button class="btn btn-primary btn-sm ms-auto">Descargar</button>
                                    </form>
                                </div>
                            </div>

                            <hr class="horizontal dark">
                            <div class="card-footer pb-0">
                                <p>*verificar datos</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @include('layouts.footers.auth.footer')
        </div>
@endsection
