<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Armazenamento de Publicação</title>
    <link rel="stylesheet" href="{{asset('css/pure-min.css')}}">
</head>
<body>
<div class="principal">

<div id="layout">

    <a href="#menu" id="menuLink" class="menu-link">
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="">Bem vindo!</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="{{route('perfil')}}" class="pure-menu-link">Perfil</a></li>
                <li class="pure-menu-item"><a href="{{route('publicar')}}" class="pure-menu-link">Publicar</a></li>
                <li class="pure-menu-item"><a href="{{route('pesquisar')}}" class="pure-menu-link">Pesquisar</a></li>
                <li class="pure-menu-item"><a href="" class="pure-menu-link">Alterar</a></li>
                <li class="pure-menu-item"><a href="" class="pure-menu-link">Deletar</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Publicar Arquivo</h1>
        </div>

        <div class="content">

            <form class="pure-form pure-form-aligned">
                <fieldset>
                    <div class="pure-control-group" style={{marginBottom: "0%", marginLeft: "0%", marginTop: "10%"}}>
                        <label for="nomeArquivo" style={{textAlign: "left"}}>Escolha o Arquivo</label>
                        <input id="nomeArquivo" type="text" placeholder="arquivo..." />
                    </div>

                    <div class="pure-control-group">
                        <label for="publico" style={{textAlign: "left"}}>Público-Alvo:</label>
                        <select id="publico" class="pure-input-1">
                            <option>Biológicas</option>
                            <option>Exatas</option>
                            <option>Humanas</option>
                            <option>Saúde</option>
                        </select>
                    </div>

                    <div class="pure-control-group">
                        <label for="nome" style={{textAlign: "left"}}>Nome:</label>
                        <input id="nome" type="text" placeholder="Nome da Publicação" />
                    </div>

                    <div class="pure-control-group">
                        <label for="palavraschave" style={{textAlign: "left"}}>Palavras-Chave:</label>
                        <input id="palavraschave" type="text" />
                    </div>

                    <div class="pure-control-group">
                        <label for="comentario" style={{textAlign: "left"}}>Comentário:</label>
                        <textarea id="comentario" rows="6" placeholder="Digite seu comentário" style={{width: "100%"}}></textarea>
                    </div>
                    
                        <button type="submit" class="pure-button pure-button-primary" style={{marginLeft: "42%"}}>Publicar</button>
                    
                </fieldset>
            </form>

        </div>
    </div>
</div>

</div>
</body>
</html>