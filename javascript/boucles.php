<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>

        for(let i = 1; i <= 10; i++){
            document.write(`${i} -`);
        }

        let i = 11;
        while(i <=20){
             document.write(`${i} -`);
             i+=1;
        }

        
        do{
             document.write(`${i} -`);
             i=i+1;
        }while(i <= 30);
    </script>
</body>
</html>