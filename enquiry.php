<html>
    <head>
        <title>
            class
        </title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div class="outer">
    <?php
        include("header.php");
        include("menubar.php");
        include("slider.php");
        ?>
        
        <div class="main">
        <?php
        include("mleft.php");
        ?>
            <div class="mright">
                <form action="">
                <div class="curow">
                    <div class="cul">Name <red>*</red></div>
                    <div class="cur pn"><input class="input" type="text" name="uname" placeholder="Enter Name" required></div>
                </div>
                <div class="curow">
                    <div class="cul">E-mail <red>*</red></div>
                    <div class="cur pn"><input class="input" type="text" name="uemail" placeholder="Enter E-mail" required></div>
                </div>
                <div class="curow">
                    <div class="cul">Password</div>
                    <div class="cur pn"><input class="input" type="password" name="pswrd" placeholder="Enter Password"></div>
                </div>
                <div class="curow">
                    <div class="cul">Gender <red>*</red></div>
                    <div class="cur"><input type="radio" name="G" value="M">Male <input type="radio" name="G" value="F">Female</div>
                </div>
                <div class="curow">
                    <div class="cul">Qualification</div>
                    <div class="cur">
                        <input type="checkbox" name="q" value="10">10<sup>th</sup> 
                         <input type="checkbox" name="q" value="12">12 <sup>th</sup> 
                         <input type="checkbox" name="q" value="degree">Degree 
                         <input type="checkbox" name="q" value="diploma">Diploma</div>
                </div>
                <div class="curow" style="height: 120px;">
                    <div class="cul">Address</div>
                    <div class="cur pn" style="height: 120px;"><textarea name="uaddress" placeholder="Address" class="tarea"></textarea></div>
                </div>
                <div class="curow">
                    <div class="cul">Image</div>
                    <div class="cur"><input class="input" type="file" name="uimg"></div>
                </div>
                <div class="curow">
                    <div class="cul">Action</div>
                    <div class="cur pn"><input class="btn" type="button" name="btn1" value="print"><button class="btn" name="btn2" style="margin-left: 30px;">save data</button></div>
                </div>
                <div class="curow">
                    <div class="cul">City</div>
                    <div class="cur pn"><select name="City" class="input" placeholder="select city">
                        <option value="" disabled selected >Select City</option>
                        <option value="1">Jodhpur</option>
                        <option value="2">Jaisalmer</option>
                        <option value="3">Kota</option>
                        <option value="4">Ajmer</option>
                    </select></div>
                </div>
                <div class="curow">
                    <div class="cul"></div>
                    <div class="cur pn">
                        <input type="submit" name="submit" value="Submit" class="btn">
                        <input type="reset" name="reset" value="Reset" class="btn" style="margin-left: 30px;"></div>
                </div>
            </form>
            </div>
        </div>
        <?php
        include("footer.php");
        ?>


    </div>  
    </body>
</html>