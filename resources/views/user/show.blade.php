@extends('layout.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Перегляд</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Перегляд</a></li>

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
                                <div class="d-flex">
                                    <div class="mr-3" >
                                        <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Редагувати</a>
                                    </div>
                                    <div>
                                        <form action="{{ route('user.delete', $user->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Видалити</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-tools">
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">

                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $user->id }}</td>

                                    </tr>
                                    <tr>
                                        <td>Ім'я</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Прізвище</td>
                                        <td>{{ $user->surname }}</td>
                                    </tr>
                                    <tr>
                                        <td>По батькові</td>
                                        <td>{{ $user->patronymic }}</td>
                                    </tr>
                                    <tr>
                                        <td>Адреса</td>
                                        <td>{{ $user->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Вік</td>
                                        <td>{{ $user->age }}</td>
                                    </tr>
                                    <tr>
                                        <td>Стать</td>
                                        <td>{{ $user->gender }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
@endsection
