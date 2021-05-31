<html>
<head>
    <meta charset="UTF-8" />
    <title>Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th{
            width: 100px;
            height: 100px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Form</h1>
<div id="cvb"></div>
<form id="MyForm" method="POST">
    <input type="text" name="AdSoyad" />
    <input type="text" name="Vezife" />
    <input type="number" name="Maas" />
    <button name="gonder">OK</button>
</form>

<hr />

<input id="axtar" type="text" name="axtar" placeholder="Axtar..." />

<table id="tbl"></table>


<script src="ajax.js"></script>
</body>
</html>
