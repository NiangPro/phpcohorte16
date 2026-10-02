<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let tab = ["binetou", "faye", 45, 56.6, true];

        document.write(`Premier element: ${tab[0]}`);
        document.write(`<br>Dernier element: ${tab.at(tab.length - 1)} <br>`);

        // for(let i=0; i < tab.length; i++){
        //     document.write(`${tab[i]} - `)
        // }

        // tab.forEach(function (v){
        //      document.write(`${v} - `)     
        // });

        // tab.forEach((v)=>{
        //     document.write(`${v} - `)
        // });

        tab.push("katim", "fallou");
        tab.unshift("mamadou");

        tab.shift();
        tab.pop();
        tab = tab.sort();

        tab.splice(1,0, "Soda");
        tab.splice(2,1);
        tab.splice(5, 1, "ada");

        tab[3] = "Fall";

        tab.forEach(v => window.document.write(`${v} * `));

        console.log(window);
        
    </script>
</body>
</html>