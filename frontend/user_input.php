<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

</head>
<body>
<div class = "container">
    <div class = "header">
        <img src = "images/harry-potter-wallpaper.jpg" alt = "wallpaper" width="600" height="300"/>
    </div>
    <h1 class = "main_title"> Movie recommendation </h1>
    <div class = "content">
        <form id = "user_rating_form" action = "user_submit.php" method="post">
            <div class="label_div">Type a movie name: </div>
            <div class="input_container">
                <input type="text" id="movie_id_1" name="movie_id_1">
                <ul id="list_movie_id_1"></ul>
            </div>
            <div class="label_rating_div">choose a rating:</div>
            <div class="input_container">
                <select name="ratings_1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <br>
            <br>
            <br>
            <div class="label_div">Type a movie name: </div>
            <div class="input_container">
                <input type="text" id="movie_id_2" name = "movie_id_2">
                <ul id="list_movie_id_2"></ul>
            </div>
            <div class="label_rating_div">choose a rating:</div>
            <div class="input_container">
                <select name="ratings_2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <br>
            <br>
            <br>
            <div class="label_div">Type a movie name: </div>
            <div class="input_container">
                <input type="text" id="movie_id_3" name = "movie_id_3">
                <ul id="list_movie_id_3"></ul>
            </div>
            <div class="label_rating_div">choose a rating:</div>
            <div class="input_container">
                <select name="ratings_3">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
             <br>
            <br>
            <br>
            <div class="label_div">Type a movie name: </div>
            <div class="input_container">
                <input type="text" id="movie_id_4" name = "movie_id_4">
                <ul id="list_movie_id_4"></ul>
            </div>
            <div class="label_rating_div">choose a rating:</div>
            <div class="input_container">
                <select name="ratings_4">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
             <br>
            <br>
            <br>
            <div class="label_div">Type a movie name: </div>
            <div class="input_container">
                <input type="text" id="movie_id_5" name = "movie_id_5">
                <ul id="list_movie_id_5"></ul>
            </div>
            <div class="label_rating_div">choose a rating:</div>
            <div class="input_container">
                <select name="ratings_5">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <br>
            <br>
            <br>
            <input type="submit" id = "submit_btn" name = "submit_btn" value="Recommend for me"></input>
        </form>
    </div>
    <div class="input_container">
        <ul id = "ranks"><ul>
    </div>
</div>
</body>
</html>