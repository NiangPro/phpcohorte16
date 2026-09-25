<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        
        function somme(a, b){
            document.write(`${a} + ${b} = ${a+b} <br>`)
        }

        // fonction anonyme 
        let direBonjourA = function (nom){
            document.write(`Bonjour ${nom} <br>`)
        };

        // fonction flechee 
        const produit = (a, b) =>{
            document.write(`${a} x ${b} = ${a*b}`)
        }



        direBonjourA("Modou");
        direBonjourA("Mareme");
        direBonjourA("Maguette");

        somme(5, 15);
    </script>
</body>
</html>