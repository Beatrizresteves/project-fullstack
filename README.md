# Weather Application

## Descrição

Este projeto é uma aplicação web full stack para consultar e visualizar informações meteorológicas usando a API do OpenWeather. O sistema é composto por um frontend desenvolvido com Vue.js e um backend desenvolvido com Lumen, um microframework PHP. 

## Funcionalidades

- **Weather Form**: Formulário para consulta do clima baseado em uma cidade fornecida pelo usuário.
- **Weather View**: Visualização das condições meteorológicas atuais.
- **Weather History**: Histórico de consultas meteorológicas realizadas pelo usuário.

## Tecnologias

- **Frontend**: Vue.js, Vuetify
- **Backend**: Lumen (Laravel)
- **API**: OpenWeatherMap API
- **Outras Tecnologias**: Composer, Docker (opcional)

## Configuração do Ambiente

### Requisitos

- PHP 8.x
- Composer
- Node.js e npm/yarn
- Docker (opcional)

### Backend (Lumen)

1. Clone o repositório:

    ```bash
    git clone github.com/Beatrizresteves/project-fullstack
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd path/to/your/project/api
    ```

3. Instale as dependências do PHP:

    ```bash
    composer install
    ```

4. Configure o arquivo `.env` com suas credenciais da API OpenWeatherMap. 

5. Inicie o servidor de desenvolvimento:

    ```bash
    php -S localhost:8000 -t public
    ```

### Frontend (Vue.js)

1. Navegue até o diretório do frontend:

    ```bash
    cd path/to/your/project
    ```

2. Instale as dependências do Node.js:

    ```bash
    npm install
    ```

    ou

    ```bash
    yarn install
    ```

3. Inicie o servidor de desenvolvimento:

    ```bash
    npm run serve
    ```

    ou

    ```bash
    yarn serve
    ```

## Estrutura do Projeto

- **api/**: Diretório do backend, contendo o código Lumen.
    - `app/Http/Controllers/WeatherController.php`: Controlador para interagir com a API do OpenWeather.
    - `routes/web.php`: Definição das rotas da API.
- **src/**: Diretório do frontend, contendo o código Vue.js.
    - `components/WeatherForm.vue`: Componente para o formulário de consulta.
    - `components/WeatherView.vue`: Componente para visualizar o clima.
    - `components/WeatherHistory.vue`: Componente para o histórico de consultas.
    - `App.vue`: Componente principal que gerencia a navegação entre os componentes.
    - `src/services/api.js`: Serviço para realizar requisições à API do backend.
- **public/**: Diretório para arquivos estáticos e entrada principal do Vue.js.

