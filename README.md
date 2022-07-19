# gestao-alojamento
 Sistema de gestao de alojamento

## Passos para instalacao do projecto:

### Passo 1

Clonar este projecto, de qualquer forma a sua escolha para telo no seu computador.

### Passo 2

Criar o seu ficheiro `.env` com base no ficheiro `.env.dev` deste projecto.

### Passo 3

Criar a sua base de dados, com o nome:

```
gestao_alojamento
```

A seguir importar a base de dados mais recente disponivel no: `database/backups`

Depois instalar as dependencias:

```
composer install
```

### Passo 4

Apos isso, ja pode inicar o desenvolvido, execute o comendo:
```
php artisan serve --port 8009
```
Visite a aplicacao: `http://localhost:8000/admin`

BOM TRABALHO
