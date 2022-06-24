<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: wheat !important;
        }
        table {
            background-color: whitesmoke !important;
            margin-top: 10%;
        }
        
    </style>

</head>

<body class="antialiased">
    <div class="text-right">
        <a href="create" class="btn btn-success" >Criar nova</a>
    </div>
    <div class="container text-center">
        <table class="table">

            @foreach ($todo_arr as $td)
            <tr>
                
                <td>{{$td->name}}</td>
                <td>criado às {{$td->created_at}}</td>
                <td>atualizado às {{$td->updated_at}}</td>
                <td><a href="delete/{{$td->id}}">Deletar</a> | <a href="edit/{{$td->id}}">Editar</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>