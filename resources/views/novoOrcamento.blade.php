<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>cadastro de orçamentos</title>
        <style>
            .formulario{
                margin:0 auto;
                height:0 auto;
                border: 1px solid #0080FF;
            }
            p{
                background-color: #0080FF;
                color:white;
                width:500px;
                height:40px;
                text-align:center;

            }


            fieldset {
               border:0px;

            }

            body, input, select, textarea, button {
                    font-family: sans-serif;
                    font-size: 1em;
                }

            .campo {
                margin-bottom: 1em;
                margin-bottom:30pxpx
}

            .campo label {
                margin-bottom: 0.2em;
                color: #666;
                display: block;
}
            button {
                font-size: 1.5em;
                background: #0080FF;
                border: 0;
                margin-bottom: 1em;
                color: #FFF;
                padding: 0.2em 0.6em;
                box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
                text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
            }
            .campo textarea {
                padding: 0.2em;
                border: 1px solid #CCC;
                box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
                display: block;
        }
        .menu ul li  { display: inline; }
            .menu ul li a {
                    text-decoration: none;
                    color: #FFF;
            }
            .menu{
                background-color: #0080FF;
            }
        </style>
    <head>
    <body>
        <div class="menu">

            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/orcamentos/novo">cadastrar</a></li>
                <li><a href="/orcamentos/pesquisar">Pesquisar</a></li>

            </ul>

        </div>
        <div class="formulario">
             <p> CADASTAR ORÇAMENTO<p>
            <form action="/orcamentos" method="POST">
                @csrf
                <fieldset>

                    <div class="campo">
                        <label for="nome">Nome do Cliente</label>
                        <input type="text" name="cliente" id="cliente">
                    </div>
                    <div class="campo">
                        <label for="nome">Nome do Atendente</label>
                        <input type="text" name="vendedor" id="vendedor">
                    </div>
                    <div class="campo">
                        <label for="nome">Descrição</label>
                        <input type="text" name="descricao" id="descricao"/>
                    </div>
                    <div class="campo">
                        <label for="nome">valor</label>
                        <input type="text" name="valorOrcado" id="valorOrcado">
                    </div>
                    <button type="submit" name="submit">Enviar</button>

            </form>
        </div>
    </body>
</html>
