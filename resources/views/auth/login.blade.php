@extends('master')
@section('content')
<div class="content">
<div class="container">
	<div class="data-form">
    <h1>Вход на сайт</h1>
    <br>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <p><label for="id_email">Email:</label> 
            <input type="email" name="email" class="form-control" autofocus value=''> 
            <br>

            <p><label for="id_password1">Пароль:</label> 
            <input type="password" name="password" class="form-control"> 
            <br>
            
            @if (count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{{ $error }}}</li>
                    @endforeach
                </ul>
            @endif
          
            <button type="submit", name="submit", class ="btn btn-primary btn-block", value='Enter'>Войти</button>
        </form>
    </div>
</div>
</div>
@endsection