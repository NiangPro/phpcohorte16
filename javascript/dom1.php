<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<body>
    <h1 class="myclass">Mon titre</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing.
    </p>
    <a href="https://youtube.com" id="lien" class="myclass">
        Cliquer pour surfer sur
         <strong>youtube</strong>
    </a>
    <p class="myclass">
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

        let classes = document.getElementsByClassName("myclass");       
        console.log(classes);

        let para2 = classes[2];

        // classes[2].innerHTML = "La nouvelle valeur modifiee en javascript";
        para2.innerHTML = "La nouvelle valeur modifiee en javascript";

        classes[2].style.textDecoration = "underline";

        classes[1].style.textShadow = "1px 1px 1px black";

        let paras = document.getElementsByTagName("p");
        
        paras[0].innerHTML = "Nouveau contenu pour le paragraphe 1";
    </script>
</body>
</html>