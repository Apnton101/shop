@extends('layout.main')

@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Кольори</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Головна</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-primary" href="{{ route('color.create') }}">Додати</a>
                                <div class="card-tools">
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Назва</th>
                                        <th>Колір</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($colors as $color)
                                        <tr>
                                            <td>{{ $color->id }}</td>
                                            <td><a href="{{ route('color.show', $color->id) }}">{{ $color->title }}</a></td>
                                            <td><div style="width: 16px; height: 16px; background: {{ '#' .$color->title }}"></div></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

@endsection
