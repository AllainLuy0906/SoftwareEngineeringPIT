
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>A Little Corner</title>

<style>
* { box-sizing: border-box; }

body {
    margin: 0;
    background: #f7f4ed;
    color: #414b3b;
    font-family: Arial, sans-serif;
}

nav {
    padding: 25px 9%;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #e5e0d5;
}

.logo { font-family: Georgia; font-size: 22px; }

nav a {
    color: #65745b;
    text-decoration: none;
    margin-left: 20px;
}

.hero {
    min-height: 75vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    padding: 70px 12%;
}

.content { max-width: 500px; }

.tag {
    color: #879477;
    letter-spacing: 3px;
    font-size: 11px;
}

h1 {
    font: 60px Georgia, serif;
    line-height: 1.15;
    margin: 20px 0;
}

p {
    color: #85877a;
    line-height: 1.9;
}

button {
    background: #78866c;
    color: white;
    border: 0;
    border-radius: 30px;
    padding: 14px 25px;
    margin-top: 15px;
    cursor: pointer;
}

.art {
    width: 300px;
    height: 390px;
    background: #e4e5d8;
    border-radius: 150px 150px 15px 15px;
    display: grid;
    place-items: center;
    font-size: 100px;
}

footer {
    text-align: center;
    padding: 25px;
    color: #999;
    font-size: 12px;
}
</style>
</head>

<body>

<nav>
    <div class="logo">a little corner ♡</div>
    <div>
        <a href="#">Home</a>
        <a href="#about">About</a>
    </div>
</nav>

<section class="hero" id="about">
    <div class="content">
        <div class="tag">WELCOME TO MY WORLD</div>

        <h1>Finding beauty in little things.</h1>

        <p>
            Hello! I'm Luy. Welcome to my little
            corner of the internet, where I share
            my thoughts, favorite things, and
            beautiful moments in life.
        </p>

        <button onclick="alert('Thank you for visiting! ♡')">
            Get to know me →
        </button>
    </div>

    <div class="art">🌿</div>
</section>

<footer>Made with love ♡ · 2026</footer>

</body>
</html>
