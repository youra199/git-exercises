<html>
<p>
  <label>Celcius</label>
  <input id="degree" type="number" placeholder="degree" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
</p>
<p>Kelvin: <span id="Kelvin"></span></p>
<script>
function temperatureConverter(num) {
  num = parseFloat(num);
  
  document.getElementById("Kelvin").innerHTML=((num-32)/1.8) +273.15;
<script>  
</body>
</html>
