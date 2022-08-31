<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style-age-verification.css">

    <!-- Font Awesome icons/ facebook, instagram, twitter icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="age-verification-body" >
        
        <div class="container age-verification" >
            <img src="logo.png" class="logo-age-verification" alt="VIENNA DISTRIBUTION LOGO" width="185.67" height="161.84">

            <div class="description">
            Welcome! In order to continue your visit on Vienna distribution, you must be of legal drinking age.
            </div>
        
            <div class="question">
            When were you born?
            </div>
            <hr>

            <form action="home.php" class="age-verification-form">
                
                
                <div class="form-container">
                    <div class="input-container">
                    <div class="input-text"><label>DAY(</label>DD<label>)</label></div>
                    <input type="number" id="day" min="0" max="31"> <!-- required -->
                    <div class="blue-bckgrnd"></div>
                    </div>
                    
                    
                    
                    <div class="input-container">
                    <div class="input-text"><label>MONTH (</label>MM<label>)</label></label></div>  
                    <input type="number" id="month" min="0" max="12"> <!-- required -->
                    <div class="blue-bckgrnd"></div>
                    </div>
                    

                    
                    <div class="input-container">
                    <div class="input-text"><label>YEAR(</label>YYYY<label>)</label></div>
                    <input type="number" id="year" min="1920" max="2004" > <!-- required -->
                    <div class="blue-bckgrnd"></div>
                    </div>
                </div>

                <button type="submit">
                I am of legal drinking age
                </button>
                
            </form>
        
            <div class="icons" id="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            </div>

            <div id="cookies-msg" class="cookies-msg">
                <div class="white-border">
                    <div class="msg">
                    We use cookies on our website to give you the most relevant experience. By clicking “Accept”, you consent to the use of ALL cookies. Alternatively, you may click “Cookie Settings” to provide a controlled consent.
                    </div>
                    <br><br><br>
                    <div class="buttons">
                            <button id="accept-btn" class="accept-btn">Accept</button>
                            <button id="settings-btn" class="settings-btn">cookie settings</button>
                    </div>
                </div>
            </div>

        </div>

    </body>


    <script>
        // Aici animez .cookies-msg, ca dupa apasarea butonului ACCEPT sa dispara in jos 
        document.getElementById("accept-btn").addEventListener("click",function(){
            var animateDiv = document.getElementById("cookies-msg");
        
            var PXForAnimate = 0;
            var interval = setInterval(animate,0);

            function animate(){
                if(PXForAnimate == -200){
                    clearInterval(interval);
                    PXForAnimate=0;
                    animateDiv.style.display = "none";
                    return;
                }else{
                    PXForAnimate--;
                    animateDiv.style.bottom = PXForAnimate+'px';
                }
            }
            
        });

        document.getElementById("settings-btn").addEventListener("click",function(){
            var animateDiv = document.getElementById("cookies-msg");
            var PXForAnimate = 0;
            var interval = setInterval(animate,0);

            function animate(){
                if(PXForAnimate == -200){
                    clearInterval(interval);
                    PXForAnimate=0;
                    animateDiv.style.display = "none";
                    return;
                }else{
                    PXForAnimate--;
                    animateDiv.style.bottom = PXForAnimate+'px';
                }
            }
            
        });
    </script>

</html>