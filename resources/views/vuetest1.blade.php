<!doctype html>
<html lang="en">
<head >
    <meta name="csrf-token" content="{!!csrf_token()!!}" charset="UTF-8">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.1" rel="stylesheet" type="text/css">
    <title>LMT</title>
</head>
<body>

<div id="sudoku-demo" class="demo">
    <h1>Lazy Sudoku</h1>
    <p>Keep hitting the shuffle button until you win.</p>

    <button @click="shuffle">
        Shuffle
    </button>
    <transition-group name="cell" tag="div" class="container">
        <div v-for="cell in cells" :key="cell.id" class="cell">
            @{{ cell.number }}
        </div>
    </transition-group>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>