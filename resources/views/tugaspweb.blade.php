<html>

<head>
    <title>Kalkulator Volume Tabung</title>
    <style>
        body {
            background-color: rgb(247, 8, 195);
        }

        div {
            font-size: larger;
            font-weight: bolder;
        }
    </style>
      <script language="javascript"> function perhitungan(){
        let pi = 3.14;
        let diameter = parseFloat(document.formulir.diameter.value);
        let tinggi = parseFloat(document.formulir.tinggi.value);
        let ruas = diameter/2;
        let volume = pi * ruas * ruas * tinggi;
        alert("Volume tabung: " + volume);
        hasil.innerText = volume;
    } </script>
</head>

<body> 
    <h1>Kalkulator Volume Tabung</h1>
    <hr>
    <b>Masukkan diameter tinggi tabung untuk mendapatkan volume tabung</b>
    <br>
    <form name="formulir">
        <label for="fname">Diameter Tabung (cm):</label><br>
        <input type="number" id="diameter" name="diameter"><br>
        <label for="lname">Tinggi Tabung (cm):</label><br>
        <input type="number" id="tinggi" name="tinggi"><br><br>
        <input type="button" id="submit" value="Submit" onclick="perhitungan()">

        <div>=</div>
    <div id="hasil">... Cm</div>
  
    </form>
    
   
</body>

</html>