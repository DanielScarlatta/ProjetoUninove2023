<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Loja de Fitness</title>
    <style>
        /* Estilos para a barra de navegação e cabeçalho */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            max-width: 100px;
            max-height: 100px;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 200px;
        }

        .search-bar button {
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-left: 10px;
            cursor: pointer;
        }

        .cadastro {
            display: flex;
            align-items: center;
        }

        .cadastro input[type="text"],
        .cadastro input[type="email"],
        .cadastro button {
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .cadastro input[type="text"],
        .cadastro input[type="email"] {
            width: 150px;
        }

        .cadastro button {
            background-color: #555;
            color: #fff;
            cursor: pointer;
        }

        /* Estilos para o submenu */
        .submenu {
            background-color: #555;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .submenu a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
        }

        /* Estilos para o select */
select.categoria-select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    color: #333;
    font-size: 16px;
    width: 150px;
    margin-right: auto; /* Para alinhar à esquerda no submenu */
}

/* Estilizar a seta dropdown do select (o estilo pode variar dependendo do navegador) */
select.categoria-select::-ms-expand,
select.categoria-select::-webkit-select-arrow {
    display: none; /* Esconde a seta dropdown */
}

/* Estilizar quando o select está focado */
select.categoria-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

        /* Estilos para os banners */
        .banner {
            text-align: center;
            margin: 20px 0;
        }

        /* Estilos para o rodapé */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .banner-rotativo {
    width: 100%;
    max-width: 800px; /* Ajuste o tamanho do banner conforme necessário */
    margin: 0 auto;
    overflow: hidden;
    position: relative;
}

.banner-rotativo img {
    width: 100%;
    height: auto;
    position: absolute;
    animation: banner-animacao 6s linear infinite; /* Ajuste a duração da animação conforme necessário */
}

@keyframes banner-animacao {
    0%, 100% {
        opacity: 0;
        transform: scale(0.9);
    }
    10%, 90% {
        opacity: 1;
        transform: scale(1);
    }
}
.banner-estatico {
    width: 100%;
    max-width: 200px; /* Ajuste o tamanho do banner conforme necessário */
    margin: 0 auto;
    text-align: center;
    padding: 20px;
}


.banner-estatico img {
    max-width: 100%;
    height: auto;
}

    </style>
</head>
<body>
    <header>
        <img class="logo" src="Imagens/logo.jpg" alt="Logo da Sua Loja de Fitness">
        <div class="search-bar">
            <!-- Barra de pesquisa à esquerda -->
            <input type="text" name="pesquisa" placeholder="Pesquisar">
            <button type="submit">Buscar</button>
        </div>
        <div class="cadastro">
            <!-- Campo de cadastro à direita -->
            <input type="text" name="nome" placeholder="Nome">
            <input type="email" name="email" placeholder="E-mail">
            <button type="submit">Cadastrar</button>
        </div>
    </header>

    <div class="submenu">
        <!-- Adicione um campo de categoria ao lado das opções -->
        <select class="categoria-select" name="categoria">
            <option value="equipamentos" >Categorias</option> 
            <option value="equipamentos" href="">Equipamentos</option>
            <option value="suplementos" href="">Suplementos</option>
            <option value="roupas" href="">Roupas</option>
        </select>
        <a href="#">Equipamentos</a>
        <a href="#">Suplementos</a>
        <a href="#">Roupas</a>
    </div>

    <div class="banner">
        <div class="banner-rotativo">
        <img src="Imagens/peso.jpg" alt="Banner 1">
        <img src="Imagens/suplemento.jpg" alt="Banner 2">
        <img src="Imagens/roupa.jpg" alt="Banner 3">
    </div>
    </div>

    <div class="banner-estatico">
        <img src="Imagens/peso.jpg" alt="Banner Estático 1">
        <img src="Imagens/suplemento.jpg" alt="Banner Estático 2">
    </div>

    <footer>
        &copy; 2023 Sua Loja de Fitness
    </footer>
</body>
</html>