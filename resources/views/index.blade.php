<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Execício 1</title>

    </head>
    <body>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Nome completo:</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="userName">Nome de login:</label>
                <input type="text" id="userName" name="userName">
            </div>
            <div>
                <label for="zipCode">CEP</label>
                <input type="text" id="zipCode" name="zipCode">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
            <div>
                <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra
                e 1 número):</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>
