<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <script>
        function a(valeur){
            document.write(valeur);
        }

        let chaine = "   Ma chaine de caracteres  ";

        chaine = chaine.trim()
        
        a(`Le nombre de caracteres est de ${chaine.length} <br>`);
        a(`Le premier caractere est : ${chaine[0]} <br>`);
        a(`Le dernier caractere est : ${chaine.charAt(chaine.length - 1)} <br>`);

        let prenom = "Badou", nom = "Dia";

        // prenom = prenom + " "+ nom;
        prenom = prenom.concat(" ", nom)
        a(prenom+"<br>");
        let tel = "7574738";

        if(tel.startsWith("76")){
            a("Vous avez utilise le YAS <br>");
        }else{
            a("Operateur inconnu <br>");
        }

        a(tel.padEnd(9, "x")+"<br>");

        a(chaine.repeat(2)+"<br>")
        a(chaine.replace("M", "L")+"<br>")
        a(chaine.replaceAll("a", "e")+"<br>")
        a(chaine.toUpperCase()+"<br>")
        a(chaine.toLowerCase()+"<br>")
        a(chaine.substr(3, 6)+"<br>")

    </script>
</body>
</html>