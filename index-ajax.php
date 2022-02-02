<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Ajax</title>
</head>
<body>
    <?php include_once __DIR__ . '/partials/header.php' ?>
    <main class="main-cont" id="app">
        <div class="img-cont">
            <div class="cards" v-for="card in cards">
                <img class="img" v-bind:src="'img/' + card.img" /> 
                    <h3>{{card.title}}</h3>
                    <h4>{{card.artist}}</h4>
                    <p>{{card.data}}</p>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="js/script.js"></script>
    
</body>
</html>