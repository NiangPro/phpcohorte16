<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<body>
    <h1>Mon titre</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing.
    </p>
    <a href="https://youtube.com" id="lien">
        Cliquer pour surfer sur
         <strong>youtube</strong>
    </a>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit eius iusto nisi minus est, optio quis accusantium hic voluptatem molestias aut quos, nostrum repellat magni rem numquam quia adipisci. Minus.
    </p>


    <script>
        let lien = document.getElementById("lien");

        console.log(lien);
        console.log(lien.innerHTML);
        console.log(lien.innerText);

        lien.innerHTML = "Nouvelle valeur";
        lien.href = "https://facebook.com";
        lien.target = "_blank";
        lien.style.color = "red";
        lien.style.textDecoration  = "none";
        
    </script>
</body>
</html>