<h1>Õpilase küsimustik</h1>
		<form name="kysimustik">
		<input type="button" value="Tere" onclick="tere()">
		<br>
		<div id="vastus">siia tuleb vastus...</div>
		<img src="images/tundmatu.png" alt="pilt" id="pilt">
		<br>
		<strong>Vali rühm:</strong>
			<select id="ryhm" onchange="tere()">
			<option>---vali---</option>
			<option value="TARpv19">TARpv19</option>
			<option value="TARpv20">TARpv20</option>
			<option value="TARpv18">TARpv18</option>
			<option value="TARgv19">TARgv19</option>
            <option value="TARgv20">TARgv20</option>
			</select>
			<br><br>
		<strong>Sugu:</strong>
			<br>
			<input type="radio" id="naine" name="sugu" value="naine" onchange="tere()">
			<label for="naine">Naine</label>
			<br>
			<input type="radio" id="mees" name="sugu" value="mees"onchange="tere()">
			<label for="mees">Mees</label>
			<br>
			<input type="radio" id="tundmatu" name="sugu" value="tundmatu" onchange="tere()">
			<label for="tundmatu">tundmatu</label>
			<br><br>
			<strong>
				<label for="nimi">Nimi:</label>
			</strong>
			<input type="text" id="nimi" placeholder="Eesnimi">
			<br>
			<strong>
				<label for="Teisenimi">Teisenimi:</label>
			</strong>
			
			<input type="text" id="Teisenimi" placeholder="Teisenimi">
			<br>
			
			
			<strong>
				<label for="nimi">Vanus</label>
			</strong>
			<input type="number" id="vanus" placeholder="Vanus"
			min="1" max="100" step="10"> 
			<br>
			<strong>
			<label for="username">Enter your Email:</label><br>
			</strong>
			<input type="text" id="username" name="username" placeholder="Email"><br><!--Введите свою почту-->
			
			<br><br>
				<strong>
				<label for="phone">Enter your phone number:</label>
				</strong>
				<input type="tel" id="phone" name="phone" placeholder="372 - 123 456 78"><!--Ввести свой номер телефона-->
			<br><br>
			
			
			
			<strong>
			<label for="datemax"> Sisenema sinu Sünipäev: </label><!--Ввести свой день рождения-->
			</strong>
			<input type="date" id="datemax" name="datemax"><br><br>


			<strong>Vali sinu lemmikud:</strong>
			<br>
			<input type="checkbox" id="matemaatika" name="lemmik" value="matemaatika" onchange="tere()">
			<label for="matemaatika">matemaatika</label>
			<br>
			<input type="checkbox" id="ajalugu" name="lemmik" value="ajalugu" onchange="tere()">
			<label for="ajalugu">ajalugu</label>
			<br>
			<input type="checkbox" id="programmerimine" name="lemmik" value="programmerimine" onchange="tere()">
			<label for="programmerimine">programmerimine</label>
			<br>
			<input type="checkbox" id="veebirakendused" name="lemmik" value="veebirakendused" onchange="tere()">
			<label for="veebirakendused">veebirakendused</label>
			<br><br>
			  <strong>
			  <label for="username">Enter your Username:</label><br><!--Логин и пароль-->
			  <input type="text" id="username" name="username"><br>
			  <label for="pwd">Enter your Password:</label><br>
			  <input type="password" id="pwd" name="pwd">
			  </strong>
			  
			  <br><br>
			  <strong>
				<label for="myfile">Vali fail:</label><!--прикрепить файл-->
			  </strong>
				<input type="file" id="myfile" name="myfile">
			  <br><br>
			  
			  
			  <strong>
				<label for="gsearch">Search for information:</label><!--Искать информацию-->
			  </strong>
				<input type="search" id="gsearch" name="gsearch">
			<br><br><br> 
			<input type="button" value="Lõpeta küsimustik"><!--Закончить опрос-->

			
			
		</form>