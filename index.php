<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        
        #form {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="form">
        <h1>Propuesta formación de la Selección Chilena</h1>
        <form name="form" method="POST" action="procesar_formulario.php">

            <label for="arq">ARQ:</label>
            <select id="arq" name="arq">
                <option value="">Elige</option>
                <option value="Claudio Bravo">Claudio Bravo</option>
                <option value="Brayán Cortés">Brayán Cortés</option>
                <option value="Gabriel Arias">Gabriel Arias</option>
            </select>
            <br><br>
            
            <label for="li">LI:</label>
            <select id="li" name="li">
                <option value="">Elige</option>
                <option value="Gabriel Suazo">Gabriel Suazo</option>
                <option value="Thomas Galdames">Thomas Galdames</option>
            </select>
            <label for="def1">DEF:</label>
            <select id="def1" name="def1">
                <option value="">Elige</option>
                <option value="Francisco Sierralta">Francisco Sierralta</option>
                <option value="Paulo Díaz">Paulo Díaz</option>
                <option value="Igor Lichnovsky">Igor Lichnovsky</option>
            </select>
            <label for="def2">DEF:</label>
            <select id="def2" name="def2">
                <option value="">Elige</option>
                <option value="Francisco Sierralta">Francisco Sierralta</option>
                <option value="Paulo Díaz">Paulo Díaz</option>
                <option value="Igor Lichnovsky">Igor Lichnovsky</option>
            </select>
            <label for="ld">LD:</label>
            <select id="ld" name="ld">
                <option value="">Elige</option>
                <option value="Mauricio Isla">Mauricio Isla</option>
                <option value="Matias Catalán">Matias Catalán</option>
                <option value="Nicolas Fernández">Nicolas Fernández</option>
            </select>
            <br><br>
            <label for="mc1">MC:</label>
            <select id="mc1" name="mc1">
                <option value="">Elige</option>
                <option value="Marcelino Nuñez">Marcelino Nuñez</option>
                <option value="César Pérez">César Pérez</option>
                <option value="Lucas Assadi">Lucas Assadi</option>
            </select>
            <label for="mcd">MCD:</label>
            <select id="mcd" name="mcd">
                <option value="">Elige</option>
                <option value="Rodrigo Echeverría">Rodrigo Echeverría</option>
                <option value="Esteban Pavez">Esteban Pavez</option>
            </select>
            <label for="mc2">MC:</label>
            <select id="mc2" name="mc2">
                <option value="">Elige</option>
                <option value="Marcelino Nuñez">Marcelino Nuñez</option>
                <option value="César Pérez">César Pérez</option>
                <option value="Lucas Assadi">Lucas Assadi</option>
            </select>
            <br><br>

            </select>
            <label for="ei">EI:</label>
            <select id="ei" name="ei">
                <option value="">Elige</option>
                <option value="Ben Brereton">Ben Brereton</option>
                <option value="Alexander Aravena">Alexander Aravena</option>
                <option value="Darío Osorio">Darío Osorio</option>
                <option value="Cristián Zavala">Cristián Zavala</option>
                <option value="Marcos Bolados">Marcos Bolados</option>
                <option value="Victor Dávila">Victor Dávila</option>
                <option value="Alexis Sánchez">Alexis Sánchez</option>
                <option value="Eduardo Vargas">Eduardo Vargas</option>
            </select>

            <label for="dc">DC:</label>
            <select id="dc" name="dc">
                <option value="">Elige</option>
                <option value="Ben Brereton">Ben Brereton</option>
                <option value="Alexander Aravena">Alexander Aravena</option>
                <option value="Darío Osorio">Darío Osorio</option>
                <option value="Cristián Zavala">Cristián Zavala</option>
                <option value="Marcos Bolados">Marcos Bolados</option>
                <option value="Victor Dávila">Victor Dávila</option>
                <option value="Alexis Sánchez">Alexis Sánchez</option>
                <option value="Eduardo Vargas">Eduardo Vargas</option>
            </select>

            <label for="ed">ED:</label>
            <select id="ed" name="ed">
                <option value="">Elige</option>
                <option value="Ben Brereton">Ben Brereton</option>
                <option value="Alexander Aravena">Alexander Aravena</option>
                <option value="Darío Osorio">Darío Osorio</option>
                <option value="Cristián Zavala">Cristián Zavala</option>
                <option value="Marcos Bolados">Marcos Bolados</option>
                <option value="Victor Dávila">Victor Dávila</option>
                <option value="Alexis Sánchez">Alexis Sánchez</option>
                <option value="Eduardo Vargas">Eduardo Vargas</option>
            </select>
            <input type="submit" value="Enviar">
        </form>

    <?php
        include("conexionBD");
    ?>

    </div>
</body>
</html>
