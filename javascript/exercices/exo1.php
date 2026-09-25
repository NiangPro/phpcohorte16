<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let prenom = prompt("Veuillez entrer votre prenom:")
        let nom = prompt("Veuillez entrer votre nom:")
        let age = Number(prompt("Veuillez entrer votre age:") || 0)

        document.write(`
            ======================================= <br>
                        BULLETIN ETUDIANT <br>
            =======================================<br>
            Prenom: ${prenom} <br>
            Nom: ${nom}<br>
            Age: ${age} ans <br>
        `);

        let annee = 2026;
        let estInscrit = confirm("Etes-vous inscrit ? (Ok => Oui et Annuler => Non");

        let statutInscription = estInscrit ? "Oui" : "Non";

        document.write(`
            Annee: ${annee} <br>
            Inscrit: ${statutInscription}<br>
        `);

        let noteHtml = Number(prompt("Veuillez entrer la note du Html") || 0);
        let noteCss = Number(prompt("Veuillez entrer la note de Css") || 0);
        let noteJs = Number(prompt("Veuillez entrer la note de Js") || 0);

        document.write(`
            ======================================= <br>
                        NOTES <br>
            =======================================<br>
            HTML: ${noteHtml} <br>
            CSS: ${noteCss}<br>
            JavaScript: ${noteJs} <br><br>
        `);

        let totalNote = noteCss + noteHtml + noteJs;
        let moyenne = totalNote / 3;
        let reste = totalNote % 3;
        let carre = noteJs * noteJs;

        document.write(`
            Total: ${totalNote} <br>
            Moyenne: ${moyenne}<br>
            Reste: ${reste} <br>
            Carre JavaScript: ${carre} <br>
        `);

        let mention = "";

        if(moyenne >= 16){
            mention = "Excellent";
        }else if(moyenne >= 14){
            mention = "Tres bien";
        }else if(moyenne >= 12){
            mention = "Bien";
        }else if(moyenne >= 10){
            mention = "Passable";
        }else{
            mention = "Insuffisant";
        }

        let statut = moyenne > 10 ? "ADMIS" : "AJOURNE";

        document.write(`
            ======================================= <br>
                        RESULTAT <br>
            =======================================<br>
            Mention: ${mention} <br>
            Statut: ${statut}<br>
        `);

        let categorie = "";

        if(age >= 0 && age <=12){
            categorie = "Enfant";
        }else if(age >= 17){
            categorie = "Adolescent";
        }else if(age >= 35){
            categorie = "Jeune Adulte";
        }else if(age >= 59){
            categorie = "Adulte";
        }else{
            categorie = "Senior";
        }

        let prix = 75000;
        let frais = 10000;

        let reduction = Number(prompt("Le montant de la reduction") || 0);

        let montant = prix + frais - reduction;


         document.write(`
            ======================================= <br>
                        FRAIS <br>
            =======================================<br>
            Formation: ${prix} F CFA<br>
            Inscription: ${frais} F CFA<br>
            Reduction: ${reduction} F CFA<br><br>
            Total a payer: ${montant} F CFA
        `);
    </script>
</body>
</html>