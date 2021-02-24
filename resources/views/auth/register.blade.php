@extends('master')
@section('content')
<div class="content">
    <div class="container">
        <div class="data-form">
            <h1>Регистрация</h1>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <p><label for="id_username">Логин:</label>
                    <input type="text" name="name" class="form-control" autofocus value=''>
                    <span class="helptext">• Введите уникальное имя пользователя</span>
                </p>

                <p><label for="id_email">E-mail:</label>
                    <input type="text" name="email" class="form-control">
                </p>

                <p><label for="id_password1">Пароль:</label>
                    <input type="password" name="password" class="form-control">
                    <span class="helptext">• Пароль должен быть минимум из 6 символов</span>
                </p>

                @if (count($errors) > 0)
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{{ $error }}}</li>
                        @endforeach
                    </ul>
                @endif

                <p><label for="id_password2">Подтверждение пароля:</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </p>
                <!--                 <div class="p-3 mb-2 bg-success text-white">Вы успешно зарегестрировались!'</div> -->
                <button type="submit" , name="submit" , class="btn btn-primary btn-block" ,
                    value='Registration'>Отправить</button>
            </form>
        </div>
    </div>
</div>
@endsection