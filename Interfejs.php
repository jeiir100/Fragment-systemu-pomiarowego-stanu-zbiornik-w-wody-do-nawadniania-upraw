<html>

<head>
	<title>Zasoby wody</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
     html {
        font-family: Arial;
        display: inline-block;
        margin: 20px auto;
        text-align: center;
        color: white;
    }

    body {
        background-color: black;
    }

    h1 {
        animation: glow 0.5s ease-in-out infinite alternate;
        margin-top: 30px;
        font-style: italic;
        color: #c3c3c3;
    }

    @keyframes glow {
        from {
            text-shadow: 0 0 10px blue, 0 0 20px blue, 0 0 30px blue, 0 0 40px blue, 
                        0 0 50px blue, 0 0 60px blue, 0 0 70px blue;
        }
        to {
            text-shadow: 0 0 20px blue, 0 0 30px blue, 0 0 40px blue, 0 0 50px blue, 
                        0 0 60px blue, 0 0 70px blue, 0 0 80px blue;
        }
    }

    .button {
        padding: 10px 20px;
        border: none;
        background-color: #2860fb;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 23px;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 40px;
        font-style: italic;
        height: 80px;
    }

    .button4 {
        padding: 10px 20px;
        border: none;
        background-color: green;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 40px;
        font-style: italic;
        height: 50px;
    }

    .button4:active, .button:active {
        transform: scale(0.9);
    }

    .button1 {
        background-color: #000000;
    }

    #jeden {
        margin-top: 60px;
        font-size: 29px;
        font-weight: bold;
        color: white;
        font-style: italic;
    }

    #div1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #a, #b, #c {
        margin: 30px;
    }

    .element {
        background-color: blue;
    }

    #z_serwera {
        display: none;
    }


    #d {
        margin: 5px;
        position: absolute;
        bottom: 1;
        right: 1;
    }


    @media only screen and (max-width: 600px) {

    html {
        margin: 0px auto;
        text-align: center;
    }

    .button {
        height: 100px;
        font-size: 26px;
        margin-top: 5px;
    }

    #div1 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #button_jeden, #button_dwa, #button_trzy {
        padding: 10px 20px;
        border: none;
        background-color: #2860fb;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        height: 100px;
        font-size: 26px;
        border-radius: 8px;
        margin-top: 5px;
    }

    #a, #b, #c {
        margin: 5px;
    }
}

    </style>
</head>


    <h1>Zasoby wody</h1>
    <p id="z_serwera"></p>
    <p id="jeden">Stan wody: <strong id="water_state"></strong></p> 
    




    <div id="div1">
        <p id="a">
            <i class="fas fa-lightbulb fa-3x" style="color:#c81919;"></i>
            <a href="#"><button onclick="plus_jeden_1();run_scanner_1();run_odczyt_1();odswiez()"  class="button" id="button_jeden">Stan zbiornika (1)</button></a>
        </p>
        
        
        <p id="b"> 
            <i class="fas fa-lightbulb fa-3x" style="color:#c81919;"></i>
            <a href="#"><button onclick="plus_jeden_2();run_scanner_2();run_odczyt_2();odswiez()" class="button" id="button_dwa">Stan zbiornika (2)</button></a>
        </p>
        
        
        
        <p id="c">
            <i class="fas fa-lightbulb fa-3x" style="color:#c81919;"></i>
            <a href="#"><button onclick="plus_jeden_3();run_scanner_3();run_odczyt_3();odswiez()" class="button" id="button_trzy">Stan zbiornika (3)</button></a>
        </p>
        
        <p id="d">
            <i class="fas fa-lightbulb fa-3x" style="color:#c81919;"></i>
            <a href="#"><button onclick="color_change();run_scanner_4();run_odczyt_4();odswiez()" class="button4" id="button_cztery">Reset</button></a>
        </p>
        
    </div>
    
    <script >
    let przycisk_1 = 0
    function plus_jeden_1() {
        
        przycisk_1 += 1
        
    };
    let przycisk_2 = 0
    function plus_jeden_2() {
        
        przycisk_2 += 1
        
    };
    let przycisk_3 = 0
    function plus_jeden_3() {
        
        przycisk_3 += 1
        
    };
    function odswiez() {
        
        if (przycisk_1 == 1)  {
            document.getElementById('button_jeden').style.backgroundColor = '#2860fb';//ff1466=czerwony
            if (window.innerWidth > 768) { // Sprawdza, czy szerokość ekranu jest większa niż 768 pikseli
                document.getElementById('button_jeden').style.marginLeft = '118px';
            }
            
            document.getElementById('button_dwa').style.display = 'none';
            document.getElementById('button_trzy').style.display = 'none';
        }
        if (przycisk_2 == 1) {
            document.getElementById('button_dwa').style.backgroundColor = '2860fb';
            document.getElementById('button_jeden').style.display = 'none';
            document.getElementById('button_trzy').style.display = 'none';
        }
        if (przycisk_3 == 1) {
            document.getElementById('button_trzy').style.backgroundColor = '2860fb'
            if (window.innerWidth > 768) { // > 768 px?
                document.getElementById('button_trzy').style.marginRight = '118px';
            }
            document.getElementById('button_jeden').style.display = 'none';
            document.getElementById('button_dwa').style.display = 'none';
        }
        
        
        setTimeout(() => {
            location.reload();
        }, 10100);//główne opóźnienie
        }
        
    
    
        document.addEventListener("DOMContentLoaded", function() {
            // Sprawda led_state w localStorage
            var led_state = localStorage.getItem("led_state");

            
            if (!led_state) {
                led_state = "?";
            }

            // Ustawienia_state
            document.getElementById("water_state").innerText = led_state;

            
            localStorage.setItem("led_state", led_state);
        });
            
            
            
            

            
            window.addEventListener('load', function() {
                setTimeout(function() {
                    var led_state = "?";
                    document.getElementById("water_state").innerText = led_state; // Ustawienie wartości w elemencie o id="water_state"
                    document.body.style.backgroundColor = 'black';
                    var ledStateString = document.getElementById('water_state').innerText;
            
                    document.getElementById('jeden').style.color = 'white';
                }, 8000); 
            }); 
            
            
            /////////////////////////////////////////////////////////////////////////////////_reset
            function run_scanner_4() {
                // Tworzenie nowego obiektu XMLHttpRequest
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "odczyt_danych_uart_reset.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhr.send();
            }
                
            
                /////////////////////////////////////////////////////////////////////////////////_reset
            function color_change() {
				var button = document.getElementById('button_cztery');
				button.style.backgroundColor = '#f52007';

				setTimeout(function() {
					button.style.backgroundColor = 'green';
					}, 1000); // 1000ms = 1s
			}

            /////////////////////////////////////////////////////////////////////////////////zbiornik_3
            function run_scanner_3() {
                // Tworzenie nowego obiektu XMLHttpRequest
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "odczyt_danych_uart_zbiornik_3.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhr.send();
            }
                function run_odczyt_3() {
                    setTimeout(() => {
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "odczyt_z_pliku_php.php", true);
                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                var response = xhr.responseText;
                                document.getElementById("z_serwera").innerHTML = xhr.responseText;
                                console.log("xhr",xhr.responseText);
                                console.log(response); 
                                
                                var divContent = document.querySelector('div').textContent;
                



                                var wartosci = parseFloat(divContent);
                                // Usunięcie znaku procent z pobranej wartości
                                var numberValue = parseFloat(divContent.replace('%', ''));

                                
                                console.log("JS",wartosci);
                                var wartoscZProcentem = wartosci + '%';
                                document.getElementById('water_state').textContent = wartoscZProcentem;

                                ledState = numberValue
                
                                if (isNaN(ledState))  {
                                document.getElementById('jeden').style.color = 'white';
                                } else if (ledState >= 65) {
                                    document.getElementById('jeden').style.color = '#0ed145';
                                    document.getElementById('water_state').style.color = 'white';
                                } else if (ledState >= 45) {
                                    document.getElementById('jeden').style.color = '#ff7f27';
                                    document.getElementById('water_state').style.color = 'white';
                                    
                                } else if (ledState <= 32) {
                                    document.getElementById('jeden').style.color = 'red';
                                    document.getElementById('water_state').style.color = 'white';
                                } else {
                                    document.getElementById('jeden').style.color = '#ff7f27';
                                    document.getElementById('water_state').style.color = 'white';
                                }

                            


                            }
                        };

                        xhr.send();
                    }, 5500); //Delay
                }
                /////////////////////////////////////////////////////////////////////////////////zbiornik_3
                
                






                /////////////////////////////////////////////////////////////////////////////////zbiornik_1
                function run_scanner_1() {
                // Tworzenie nowego obiektu XMLHttpRequest
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "odczyt_danych_uart_zbiornik_1.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhr.send();
            }
                function run_odczyt_1() {
                    setTimeout(() => {
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "odczyt_z_pliku_php.php", true);
                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                var response = xhr.responseText;
                                document.getElementById("z_serwera").innerHTML = xhr.responseText;
                                console.log("xhr",xhr.responseText);
                                console.log(response); // Log the response in the console
                                
                                var divContent = document.querySelector('div').textContent;
                



                                var wartosci = parseFloat(divContent);
                                // Usunięcie znaku procent z pobranej wartości
                                var numberValue = parseFloat(divContent.replace('%', ''));

                                // Wyświetlenie wartości jako liczbę całkowitą
                                console.log("JS",wartosci);
                                var wartoscZProcentem = wartosci + '%';
                                document.getElementById('water_state').textContent = wartoscZProcentem;

                                ledState = numberValue
                
                                if (isNaN(ledState))  {
                                document.getElementById('jeden').style.color = 'white';
                                } else if (ledState >= 65) {
                                    document.getElementById('jeden').style.color = '#0ed145';
                                    document.getElementById('water_state').style.color = 'white';
                                } else if (ledState >= 45) {
                                    document.getElementById('jeden').style.color = '#ff7f27';
                                    document.getElementById('water_state').style.color = 'white';
                                    
                                } else if (ledState <= 32) {
                                    document.getElementById('jeden').style.color = 'red';
                                    document.getElementById('water_state').style.color = 'white';
                                } else {
                                    document.getElementById('jeden').style.color = '#ff7f27';
                                    document.getElementById('water_state').style.color = 'white';
                                }

                            


                            }
                        };

                        xhr.send();
                    }, 5500); //Delay
                }
                /////////////////////////////////////////////////////////////////////////////////zbiornik_1







                /////////////////////////////////////////////////////////////////////////////////zbiornik_2
                function run_scanner_2() {
                // Tworzenie nowego obiektu XMLHttpRequest
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "odczyt_danych_uart_zbiornik_2.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhr.send();
            }
                function run_odczyt_2() {
                    setTimeout(() => {
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "odczyt_z_pliku_php.php", true);
                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                var response = xhr.responseText;
                                document.getElementById("z_serwera").innerHTML = xhr.responseText;
                                console.log("xhr",xhr.responseText);
                                console.log(response); // Log the response in the console
                                
                                var divContent = document.querySelector('div').textContent;
                



                                var wartosci = parseFloat(divContent);
                                // Usunięcie znaku procent z pobranej wartości
                                var numberValue = parseFloat(divContent.replace('%', ''));

                                console.log("JS",wartosci);
                                var wartoscZProcentem = wartosci + '%';
                                document.getElementById('water_state').textContent = wartoscZProcentem;

                                ledState = numberValue
                
                                if (isNaN(ledState))  {
                                document.getElementById('jeden').style.color = 'white';
                                } else if (ledState >= 65) {
                                    document.getElementById('jeden').style.color = '#0ed145';
                                    document.getElementById('water_state').style.color = 'white';
                                } else if (ledState >= 45) {
                                    document.getElementById('jeden').style.color = '#ff7f27';
                                    document.getElementById('water_state').style.color = 'white';
                                    
                                } else if (ledState <= 32) {
                                    document.getElementById('jeden').style.color = 'red';
                                    document.getElementById('water_state').style.color = 'white';
                                } else {
                                    document.getElementById('jeden').style.color = '#ff7f27';
                                    document.getElementById('water_state').style.color = 'white';
                                }

                            


                            }
                        };

                        xhr.send();
                    }, 5500); //Delay
                }






                /////////////////////////////////////////////////////////////////////////////////zbiornik_2




                function reloadWithDelay() {
                    setTimeout(function() {
                        location.reload();
                    }, 8000); 
                }
            
            
            
    
        
        function reloadWithDelay() {
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
        
        
        
       
        
  </script>
</body>


</html>