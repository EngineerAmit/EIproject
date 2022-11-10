<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/memes2.css"> -->
    <title>Memes EI</title>
    <style>
        body {
            background-color: whitesmoke;
        }

        img {
            width: 70%;
            height: 70%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        button {
            cursor: pointer;
            background-color: #F2910A;
            color: aliceblue;
            border: 7px;
            outline: 0;
            border: 0;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            bottom: 20px;
            z-index: 900;
            padding: 11px 42px;
        }
    </style>
</head>

<body>
    <button onclick='render(memes)'>Make me laugh</button>
    <img src="" alt="">

    <script src="js/app2.js"></script>
</body>

</html>