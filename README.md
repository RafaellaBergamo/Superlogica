## Sobre:

API teste:
- Buscar usuários cadastrados.
- Inserir novos usuários.

## Ferramentas Utilizadas:

- PHP 7.4.19 
- Laravel 8.73.2
- Composer
- Laragon Full 5.0.0
- Apache 2.4.47
- Postman


## Como Utilizar:

01. Abrir o Postman
02. Criar uma nova aba 
03. Para cadastrar um novo usuário: https://superlogicateste.herokuapp.com/users (POST)
04. Na aba Body, em raw com tipo JSON, informe os valores conforme exemplo abaixo:
    -   {
            > "name": "Maria Silva"    (Nome completo e sem acento),
            > "userName": "mariasilva" (deve conter no mínimo 5 caracteres)
            > "zipCode": "17020356"    (Apenas números e com 8 caracteres),
            > "email": "mariasilva@email.com" (Deve ser um email válido e único),
            > "password": "Senha1234" (Deve conter no mínimo: 8 caracteres, 1 letra maiúscula, 1 letra minúscula e 1 número)
        }
05. Para buscar todos os usuários cadastrados: https://superlogicateste.herokuapp.com/users (GET)