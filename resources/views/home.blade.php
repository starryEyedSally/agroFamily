@extends('templates/default')

@section('content')
    <div class="welcome">
        <h2>Dobrodošli u AgroFamily</h2>
    </div>
    <div class="main_content">
        <div class="login">
            <form action="{{ url('login') }}" method="POST">
                <input type="text" name="email">
                <input type="password" name="password">
                <input type="submit" value="Prijava">
                {{ csrf_field() }}
            </form>
        </div>
    </div>

    <div class="messages">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@stop