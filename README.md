## Sobre:

API teste:
- Buscar usuários cadastrados.
- Inserir novos usuários.

## Ferramentas Utilizadas:

- PHP 7.4.19 
- Laravel 8.73.2
- Postman


## Como Utilizar:

01. Caso não tenha, faça download do [Postman](https://www.postman.com/downloads)
02. Você também pode utilizar a versão para navegador: https://www.postman.com/ 
03. Instale e crie uma conta
04. Abra o Postman
05. Crie uma nova aba 
06. Para cadastrar um novo usuário: https://superlogicateste.herokuapp.com/users (POST)
07. Na aba Body, em raw com tipo JSON, informe os valores conforme exemplo abaixo:  
    {  
        "name": "Maria Silva",    (Nome completo e sem acento)  
        "userName": "mariasilva", (deve conter no mínimo 5 caracteres)  
        "zipCode": "17020356",    (Apenas números e com 8 caracteres)  
        "email": "mariasilva@email.com", (Deve ser um email válido e único)  
        "password": "Senha1234"  (Deve conter no mínimo: 8 caracteres, 1 letra maiúscula, 1 letra minúscula e 1 número)   
    }
08. Para buscar todos os usuários cadastrados: https://superlogicateste.herokuapp.com/users (GET)
09. Para buscar um usuário específico: https://superlogicateste.herokuapp.com/users/{id} (GET)  
    onde {id} é o id do usuário cadastrado
