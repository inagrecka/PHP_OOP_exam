<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 60%;
        }
        tr, th, td {
            text-align: center;
        }
    </style>
</head>
<body>

<form method="POST" action="">
    <label><h2>ELEKTROS DEKLARAVIMAS:</h2></label>
    <a>Deklaruojamas kiekis, kval.</a>
    <input type="number" name="deklKiekis"><br><br>
    <a>Tarifas, Eur/kval.</a>
    <input type="number" name="tarifas"><br><br>
    <a>Dienos ar nakties tarifas?</a>
    <input type="button" name="diena" value="DIENA">
    <input type="button" name="naktis" value="NAKTIS"><br><br>
    <a>Deklaravimo data</a>
    <input type="month" name="data"><br><br>
    <input type="submit" value="SKAIČIUOTI KAINĄ"><br><br>
</form>
<!-- per foreach idedami duomenis i lentele -->
<h2> SUVESTŲ DUOMENŲ SĄRAŠAS: </h2>

<table>
    <tr>
        <th>Deklaruojamas kiekis, kval.</th>
        <th>Tarifas, Eur/kval.</th>
        <th>Dienos ar nakties tarifas?</th>
        <th>Deklaravimo data</th>
        <th>Suma apmokėjimui, Eur</th>
    </tr>
    <tr>
        <td>item1</td>
        <td>item2</td>
        <td>item3</td>
        <td>item4</td>
        <td>item5</td>
    </tr>
</table>
<br><br>

<h3> BENDRA SUMA APMOKĖJIMUI, Eur: </h3>
<p><i><u>xxxxx Eur</u></i></p>

<form method="POST" action="">
    <input type="submit" value="DEKLARUOTI IR SUMOKĖTI"><br><br>
</form>

</body>
</html>
