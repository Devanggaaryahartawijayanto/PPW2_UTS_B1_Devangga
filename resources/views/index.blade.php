<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>

<style>
    table{
        margin-top: 20px;
        margin-left:235px;
    }
    th {
    background-color: blue;
    color: white;
    }
    table, th, td {
        border-bottom: 1px solid #ddd;
        padding: 10px;
        text-align: center
    }

    tr:nth-child(even) {background-color: #f2f2f2;}

    p{
        margin-top: 20px;
        margin-left:235px;
        size: 20px;
    }

    h1{
        margin-top: 20px;
        margin-left:235px;
        size: 20px;
    }

    button{
        background-color: blue;
        color: white;
    }

    /* Add a black background color to the top navigation */
    .topnav {
    background-color: #333;
    overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
    background-color: #ddd;
    color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
    background-color: blue;
    color: white;
    }

    footer{
        background-color: #333
    }
</style>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $pemain)
                <tr>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>