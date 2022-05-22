@extends('layout.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Користувач</h1>
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
                    <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input name="name" value="{{ old('name') }}" class="form-control" type="text"
                                   placeholder="Ім'я">
                        </div>
                        <div class="form-group">
                            <input name="email" value="{{ old('email') }}" class="form-control" type="text"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input name="password" value="{{ old('password') }}" class="form-control" type="text"
                                   placeholder="Пароль">
                        </div>
                        <div class="form-group">
                            <input name="password_confirmation" value="{{ old('password_confirmation') }}"
                                   class="form-control" type="text" placeholder="Підтвердження паролю">
                        </div>
                        <div class="form-group">
                            <input name="address" value="{{ old('address') }}" class="form-control" type="text"
                                   placeholder="Адреса">
                        </div>
                        <div class="form-group">
                            <input name="surname" value="{{ old('surname') }}" class="form-control" type="text"
                                   placeholder="Прізвище">
                        </div>
                        <div class="form-group">
                            <input name="patronymic" value="{{ old('patronymic') }}" class="form-control" type="text"
                                   placeholder="По батькові">
                        </div>
                        <div class="form-group">
                            <input name="age" value="{{ old('age') }}" class="form-control" type="number"
                                   placeholder="Вік">
                        </div>
                        <div class="form-group">
                            <select name="gender" class="custom-select form-control-border border-width-2"
                                    id="exampleSelectBorderWidth2">
                                <option disabled selected>Стать</option>
                                <option {{ old('gender') == 1 ? 'selected' : '' }} value="1">Чоловіча</option>
                                <option {{ old('gender') == 2 ? 'selected' : '' }} value="2">Жіноча</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Додати</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
@endsection
