<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <title>20220520</title>
</head>

<body>
    <h1>Change HTML Style(CSS)</h1><br>
    <p>
        <button class="btn btn-outline-secondary" onclick="changeColor('tomato','white');">배경색-red,
            글자색-white</button><br><br>
        <button class="btn btn-outline-danger" onclick="changeColor('skyblue','tomato');">배경색-blue,
            글자색-red</button><br><br>
        <button class="btn btn-outline-primary" onclick="changeColor('Gold','steelblue');">배경색-Gold,
            글자색-steelblue</button><br><br>
        <button class="btn btn-outline-success" onclick="changeColor('pink','greenyellow');">배경색-pink,
            글자색-greenyellow</button><br><br>
        <button class="btn btn-outline-warning" onclick="changeColor('plum','yellow');">배경색-plum,
            글자색-yellow</button><br><br>
    </p>

    <script>
        function changeColor(bc, tc) {
            document.body.style.backgroundColor = bc;
            document.body.style.color = tc;
        }
    </script>
</body>

</html>