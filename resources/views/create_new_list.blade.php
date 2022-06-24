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
        table, form {
            background-color: whitesmoke !important;
            margin-top: 10%;
            padding: 20px;
        }
        
    </style>

</head>

<body class="antialiased">
    <div class="container text-center">
    <div class="text-right">
        <a href="/" class="btn btn-success" >Back</a>
    </div>
    <form action="save_new_list">
        <input type="text" name="name" placeholder="Adicione uma nova tarefa" class="form-control">
        <input type="submit" value="Salvar" class="btn btn-success">
    </form>
    </div>
</body>

</html>