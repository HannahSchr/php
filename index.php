<!DOCTYPE html>
<html>

<head>
    <title>Taschenrechner</title>
    <style type="text/css">
        p {
            text-align: center;
        }

        button {
            margin: 0.5rem;
            padding: 0.8rem;
            font-size: 1.2rem;
        }

        .headline {
            color: darkgreen;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 2rem;
        }
    </style>
</head>

<body>


    <p class="headline">
        Taschenrechner
    </p>

    <p>
        <input type="text" id="display" value="">
    </p>
    <p>
        <button type="button" id="btn1">1</button>
        <button type="button" id="btn2">2</button>
        <button type="button" id="btn3">3</button>
        <button type="button" id="btnPlus">+</button>
    </p>
    <p>
        <button type="button" id="btn4">4</button>
        <button type="button" id="btn5">5</button>
        <button type="button" id="btn6">6</button>
    </p>
    <p>
        <button type="button" id="btn7">7</button>
        <button type="button" id="btn8">8</button>
        <button type="button" id="btn9">9</button>
    </p>



    <script>
        $number1 = ''
        $number2 = ''
        $rechenzeichen = ''

        // JavaScript-Code, um auf den Button-Klick zu reagieren
        document.getElementById('btn1').addEventListener('click', function() {
            // Hier kannst du JavaScript-Code einfügen, der auf den Button-Klick reagiert
            // Zum Beispiel: Eine Funktion aufrufen oder Daten an den Server senden
            setNumber("1")
            // Den Wert des Felds ändern
            // document.getElementById('display').value = $number1;
        });
        document.getElementById('btn2').addEventListener('click', function() {
            setNumber("2")
            // document.getElementById('display').value = $number1;
        });
        document.getElementById('btn3').addEventListener('click', function() {
            setNumber("3")
            // document.getElementById('display').value = $number1;
        });
        document.getElementById('btn4').addEventListener('click', function() {
            setNumber("4")
            // document.getElementById('display').value = $number1;
        });
        document.getElementById('btn5').addEventListener('click', function() {
            setNumber("5")
            // document.getElementById('display').value = $number1;
        });


        document.getElementById('btnPlus').addEventListener('click', function() {
            $rechenzeichen = ' + ';
            document.getElementById('display').value = $number1 + $rechenzeichen;
        });

        function setNumber($number) {
            if ($rechenzeichen == '') {
                $number1 += $number
            }
            else{
                $number2 += $number
            }
            document.getElementById('display').value = $number1 + $rechenzeichen + $number2;
        }
    </script>
</body>

</html>