@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Importar'])

    <div class="card shadow-lg mx-4 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Encuentre el documento a cargar
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Verifique que la extension coincida con la seccion de carga
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
                    <p class="text-uppercase text-sm">Documento</p>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Importar desde .xlsx .xlsm .xml .csv .tsv</label>
                                <form action="{{route('importarfile')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" id="file" class="form-control">
                                    <hr class="horizontal white">
                                    <button type="submit" class="btn btn-primary btn-sm ms-auto">Importar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">




                        <div class="card-footer pb-0">
                            <p>*no importar PDF</p>
                        </div>
                    </div>
            </div>
        </div>

    </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
