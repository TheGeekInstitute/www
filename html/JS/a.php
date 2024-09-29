
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .preloader{
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.315);
        }

        .preloader img{
            height: 200px;
            width: 200px;
            position: absolute;
            z-index: 999;
            top: calc(50% - 100px);
            left: calc(50% - 100px);
        }

    </style>
</head>
<body>
    <div class="preloader">
        <img src="https://cdn.pixabay.com/animation/2023/10/10/13/27/13-27-45-28_256.gif" alt="ABCD">
    </div>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quasi necessitatibus repellat debitis. Ab culpa dolores sapiente! Voluptas reiciendis quod, accusantium cumque autem numquam? Non beatae a quasi tempora velit!</h1>

    <script>
        window.addEventListener("load",()=>{
            document.querySelector(".preloader").style.display="none"
        })
    </script>
</body>
</html>