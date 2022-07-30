<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="app">
        <header>
            
        </header>
        <section>
            
        </section>
        <footer>
            <button class="botao orange" id="new">new item</button>
            <button class="botao blue">refresh</button>
            <button class="botao blue">A</button>
            <button class="botao blue">A</button>
        </footer>
    </div>
    <div class="create">
        <form action="">
            <div class="create_header">
                <b>Create Item</b>
                <div class="close"></div>
            </div>
            <div class="fetch">
                <input type="text" placeholder="XML path">
                <div class="botao blue">fetch</div>
            </div>
            <div class="create_main">
                <div class="input_area">
                    <input type="text" placeholder="ID">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Description">
                    <input type="text" placeholder="Tags">
                    <input type="text" placeholder="tags">
                </div>
                <div class="credits">
                    <img src="/assets/images/me.png" width="100" height="100" class="icon">
                    <div>
                        <input type="number">
                        <div class="credit gold"></div>
                    </div>
                    <div>
                        <input type="number">
                        <div class="credit token"></div>
                    </div>
                    <img src="/assets/images/y.png">
                </div>
            </div>
            <div class="create_footer">
                <button class="botao orange" id="create">create</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="assets/script.js"></script>
</body>
</html>