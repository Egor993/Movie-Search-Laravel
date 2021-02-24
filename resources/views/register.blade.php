@extends('master')
@section('content')
<div class="content">
    <div class="container">
        <h2>Регистрация</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <?php print_r($_POST);?>
            <p><label for="id_username">Username:</label>
                <input type="text" name="username" class="form-control" autofocus value=''>
                <span class="helptext">• Введите уникальное имя пользователя</span>
            </p>

            <p><label for="id_email">E-mail:</label>
                <input type="email" name="email" class="form-control" value=''>
            </p>

            <p><label for="id_password1">Password:</label>
                <input type="password" name="password1" class="form-control">
                <span class="helptext">• Пароль должен быть минимум из 6 символов</span>
            </p>

            <ul class="alert alert-danger">
                <li>Error</li>
            </ul>


            <p><label for="id_password2">Password Confirm:</label>
                <input type="password" name="password2" class="form-control">
            </p>

            <div class="p-3 mb-2 bg-success text-white">Вы успешно зарегестрировались!'</div>

            <button type="submit" , name="submit" , class="btn btn-primary btn-block" ,
                value='Registration'>Отправить</button>
        </form>
    </div>
</div>
@endsection