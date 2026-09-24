<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Code php</h1>
    <?php 
        $prenom = "Fatou";
        $nom = "Fall";

        echo "Prenom: $prenom NOm: $nom";
    ?>

    <h1>Code javascript</h1>
    <script>
        let prenom = "Matar", nom = "KHall";
        var age = 13;
        let trouve = true, note = 15.5;
        const PI = 3.14;

        document.write("Prenom: "+prenom+" Nom:"+nom)

        document.write(`<br>Prenom: ${prenom} Nom: ${nom}`)

        

       let a = 5, b = 2;

       document.write(`<br> ${a} + ${b} = ${a+b}`);
       document.write(`<br> ${a} - ${b} = ${a-b}`);
       document.write(`<br> ${a} x ${b} = ${a*b}`);
       document.write(`<br> ${a} reste ${b} = ${a%b}`);
       document.write(`<br> ${a} / ${b} = ${a/b}`);
       document.write(`<br> ${a} / ${b} = ${parseInt(a/b)}`);
       document.write(`<br> ${a}<sup>${b}</sup> = ${a**b}`);

       let valeur = prompt("Veuillez entrer votre");

       if(valeur >= 18){
            document.write("<br>Vous etes majeur");
       }else if(valeur < 18){
            document.write("<br>Vous etes mineur");
       }
    </script>
</body>
</html>