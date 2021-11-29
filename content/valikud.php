
<header>
        <h1 id="heading">Javascript valikud</h1>
        <br>
    </header>
    <form>
        <table border="1">  
            <tr>
                <td>
                <strong>Valik1 - radionupp</strong>
                    <br>
                    <input type="radio" name="valik1" id="img1" value="img1" onchange="radionupuValik()">
                    <label for="img1">Twitter</label>
                    <br>
                    <input type="radio" name="valik1" id="img2" value="img2" onchange="radionupuValik()">
                    <label for="img2">Done</label>
                    <br>
                    <input type="radio" name="valik1" id="img3" value="img3" onchange="radionupuValik()">
                    <label for="img3">Sponge</label>
                    <br>
                    <input type="radio" name="valik1" id="img4" value="img4" onchange="radionupuValik()">
                    <label for="img4">Windows</label>
                </td>
                <td><strong>Valik2 - checkbox</strong>
                    <br>
                    <input type="checkbox" name="valik2" id="check1" onchange="checkboxnupuValik()">
                    <label for="check1">Twitter</label>
                    <br>
                    <input type="checkbox" name="valik2" id="check2" onchange="checkboxnupuValik()">
                    <label for="check2">Done</label>
                    <br>
                    <input type="checkbox" name="valik2" id="check3" onchange="checkboxnupuValik()">
                    <label for="check3">Sponge</label>
                    <br>
                    <input type="checkbox" name="valik2" id="check4" onchange="checkboxnupuValik()">
                    <label for="check4">Windows</label>







                </td>
                <td rowspan="2">
                    <img src="images/img5.jpeg" alt="kysimark" id="pilt">
                </td>
            </tr>
            <tr>
                <td> Valik3 - ripploend
                    <select id="valik3" onchange="selectValik()">
                        <option value="images/img5.jpeg" >---vali---</option>
                        <option value="images/img1.png">Twitter</option>
                        <option value="images/img2.jpg">Done</option>
                        <option value="images/img3.jpeg">Sponge</option>
                        <option value="images/img4.jpeg">Windows</option>
                    </select>
                </td>
                <td> Valik4 - tekstkast
                    <input type="text" id="tekst">
                    <input type="button" id="tekstsend" value="send" onclick="textValik()">
                    <br>
                    <h4>Valige sõna:</h4>
                    <li>"Twitter" või "twi"</li>
                    <li>"Done" või "don"</li>
                    <li>"Sponge" või "bob"</li>
                    <li>"Windows" või "win"</li>
                    
                </td>
            </tr>
        </table>
        <br>
        <header>
            <h1 id="heading2">Juhustik pilt.
                Varskenda leht!
            </h1>
        </header>
        <main>
            <button>Button <i class="material-icons">refresh</i></button>
            <img src="images/img5.jpeg" id="piltt2" alt="random">
            <select id="valikud" onchange="teeValik()">
            <option>Vali õige vastus</option>
            <option value="images/img1.png">Twitter</option>
            <option value="images/img2.jpg">Done</option>
            <option value="images/img3.jpeg">Sponge</option>
            <option value="images/img4.jpeg">Windows</option>
            </select>
            <!--radionupud-->
            
            <br><br>
            <br>
            <input type="radio" name="valik6" id="valik6"
            value="images/img1.png" onchange=teeValik2()><label for="valik6">Twitter</label>
            <br>
            <input type="radio" name="valik6" id="valik7"
            value="images/img2.jpg" onchange=teeValik2()><label for="valik7">Done</label>
            <br>
            <input type="radio" name="valik6" id="valik8"
            value="images/img3.jpeg" onchange=teeValik2()><label for="valik8">Sponge</label>
            <br>
            <input type="radio" name="valik6" id="valik9"
            value="images/img4.jpeg" onchange=teeValik2()><label for="valik9">Windows</label>
            
            <div id="vastus"></div>
            
        </main>
    </form>
    <br>
    