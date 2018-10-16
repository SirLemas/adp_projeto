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
            <h1>Perfil</h1>   
        </div>

        <div class="content">

            <form class="pure-form pure-form-stacked">
                <fieldset>
                    <div class="pure-g" style={{marginBottom: "0%", marginLeft: "0%", marginTop: "10%"}}>

                        <div class="pure-u-1-3">
                            <label for="nome">Nome:</label>
                            <input id="nome" class="pure-input-1" type="text" />
                        </div>

                        <div class="pure-u-1-3">
                            <label for="sobrenome">Sobrenome:</label>
                            <input id="sobrenome" class="pure-input-1" type="text" />
                        </div>

                        <div class="pure-u-1-3">
                            <label for="email">E-Mail:</label>
                            <input id="email" class="pure-input-1" type="email" required />
                        </div>

                        <div class="pure-u-1-3">
                            <label for="cep">CEP:</label>
                            <input id="cep" class="pure-input-1" type="text" />
                        </div>

                        <div class="pure-u-1-3">
                            <label for="cidade">Cidade:</label>
                            <input id="cidade" class="pure-input-1" type="text" />
                        </div>

                        <div class="pure-u-1-3">
                            <label for="estado">Estado:</label>
                            <select id="estado" class="pure-input-1">
                                <option>AL</option>
                                <option>CA</option>
                                <option>IL</option>
                            </select>
                        </div>

                        <div class="pure-u-1-3" style={{marginLeft: "20%"}}>
                            <label for="telefone">Telefone:</label>
                            <input id="telefone" class="pure-input-1" type="number" />
                        </div>

                        <div class="pure-u-1-3">
                            <label for="matricula">Matricula:</label>
                            <input id="matricula" class="pure-input-1" type="number" />
                        </div>
                    </div>
                        <br />
                    <button type="submit" class="pure-button pure-button-primary" style={{marginLeft: "42%"}}>Cadastrar</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

</div>
</body>
</html>