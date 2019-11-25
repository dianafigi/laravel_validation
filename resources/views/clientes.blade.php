<!DOCTYPE html>
<html>
<head>
  <title>Registo do Cliente</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_field() }}">
  <style>
    body { padding: 20px;}
  </style>
</head>
<body>
  <main role="main">
    <div class="row">
      <div class="container col-md-8 offset-md-2">
        <div class="card border">
          <div class="card-header">
            <div class="card-title">
              Registo do Cliente
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-hover" id="tabelaprodutos">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Endereço</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach($clientes as $cli)
                  <tr>
                    <td>{{ $cli->id }} </td>
                    <td>{{ $cli->nome }}</td>
                    <td>{{ $cli->idade }}</td>
                    <td>{{ $cli->endereco }}</td>
                    <td>{{ $cli->email }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>