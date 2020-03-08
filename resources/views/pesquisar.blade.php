<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Pesquisar Orçamentos</title>
        <style>
            .titulo{
                text-align: center;
                font-size:20px;
                background-color: #0080FF;
                color: white;
                padding: 10px;
            }
            form{
                margin-top:5px;

            }
            .campo{
                margin-top:10px;

            }
            button {
                background-color: #0080FF; /* Green */
                border: none;
                color: white;
                padding: 5px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                 }
            input{
                    margin-bottom:10px;

                 }
            input[type=text] {
                        width: 100%;
                        padding: 6px 10px;
                        margin: 8px 0;
                        box-sizing: border-box;
                }
                .table{
                    width:800px;
                    margin:0 auto ;
                }
                th, td {
                        border-bottom: 1px solid #ddd;
                        padding: 15px;
                        text-align: left;
}
                tr:hover {
                        background-color: #f5f5f5;
               }
               th {
                        background-color: #0080FF;
                        color: white;
}
                .menu ul li  { display: inline; }
                .menu ul li a {
                    text-decoration: none;
                    color:#fff;
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
                    <li><a href="/orcamentos/novo">Cadastrar</a></li>
                    <li><a href="/orcamentos/pesquisar">Pesquisar</a></li>

                </ul>
        </div>

        <div>
        <div class="formulario">
            <p class="titulo"> Pesquisar Orçamentos<p>
            <form action="/orcamentos/pesquisar/data" method="GET">
               @csrf
                <fieldset>
                    <div class="campoData">

                        <div class="campo">
                            <p>PESQUISAR POR DATA</p>
                            <br>
                            <label for="nome">DATA INICIO</label>
                            <input type="date" name="start" id="start">
                        </div>
                        <div class="campo">
                            <label for="nome">DATA FIM</label>
                            <input type="date"  name="end" id="end">
                        </div>

                        <button type="submit" name="submit">Enviar</button>

                </fieldset>
            </form>

            <form action="/orcamentos/pesquisar" method="GET">
                <fieldset>

                    <div class="campoCliente">

                        <label for="nome">PESQUISAR POR CLIENTE</label>
                        <br>
                        <input type="text" name="cliente" placeholder="Digite o nome do cliente" id="cliente">

                    </div>
                    <button type="submit" name="submit">Enviar</button>

                </fieldset>
            </form>
            <form action="/orcamentos/pesquisar/vendedor" method="GET">
                @csrf
                 <fieldset>


                         <div class="campoVendedor">
                             <label for="nome">PESQUISAR POR VENDEDOR</label>
                             <br>
                             <input type="text" placeholder="Digite o nome do vendedor" name="vendedor" id="vendedor">
                         </div>
                         <button type="submit" name="submit">Enviar</button>
                </fieldset>
            </form>
       </div>

        <div class="table">
            <table>
                <thead class="thead">
                    <tr>
                        <th>Cliente id</th>
                        <th>Cliente </th>
                        <th>vendedor</th>
                        <th>descrição</th>
                        <th>valor</th>
                        <th>data</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($results as $result)
                    <tr>
                    <td>{{$result->id}}</td>
                    <td>{{$result->cliente}}</td>
                    <td>{{$result->vendedor}}</td>
                    <td>{{$result->descricao}}</td>
                    <td>{{$result->valorOrcado}}</td>
                    <td>{{$result->dataHora}}</td>

                    </tr>
                    @endforeach
                </tbody>
            <table>

        </div>

    </body>
</html>
