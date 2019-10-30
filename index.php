<?php require_once('home.html');?> 

<html>
<head>
    <title>Tetris</title>
    <style>
        body {
            background: #000;
            display: flex;
            color: #fff;
            font-family: sans-serif;
            font-size: 2em;
            text-align: center;
        }

        .player {
            flex: 1 1 auto;
        }

        .player.local canvas {
            border-color: #fff;
        }

        canvas {
            border: solid .2em #707070;
            height: 80vh;
        }
    </style>
</head>
<body>
    <template id="player-template">
        <div class="player">
            <div class="score"></div>
            <canvas class="tetris" width="240" height="400"></canvas>
        </div>
    </template>

    <script src="client/connection-manager.js"></script>
    <script src="client/tetrisManager.js"></script>

    <script src="client/events.js"></script>
    <script src="client/arena.js"></script>
    <script src="client/player.js"></script>
    <script src="client/tetris.js"></script>
    <script src="client/main.js"></script>
</body>
</html>