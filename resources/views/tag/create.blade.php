@extends('layout.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Теги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Додати категорію</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('tag.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input name="title" class="form-control" type="text" placeholder="категорія">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Додати</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
@endsection
