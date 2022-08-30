<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style-age-verification.css">
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

            <form action="/ViennaDistribution/home.php">
                
                
                <div class="form-container">
                    <div class="input-container">
                    <div class="input-text">DAY (DD)</div>
                    <input type="text" id="day">
                    <div class="blue-bckgrnd"></div>
                    </div>
                    
                    
                    
                    <div class="input-container">
                    <div class="input-text">MONTH (MM)</div>  
                    <input type="text" id="month">
                    <div class="blue-bckgrnd"></div>
                    </div>
                    

                    
                    <div class="input-container">
                    <div class="input-text">YEAR (YYYY)</div>
                    <input type="text" id="year">
                    <div class="blue-bckgrnd"></div>
                    </div>
                </div>

                <button type="submit">
                I am of legal drinking age
                </button>
                
            </form>
        
            <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            </div>

            <div class="cookies-msg">
                <div class="white-border">
                    <div class="msg">
                    We use cookies on our website to give you the most relevant experience. By clicking “Accept”, you consent to the use of ALL cookies. Alternatively, you may click “Cookie Settings” to provide a controlled consent.
                     
                    </div>
                    <div class="buttons">
                            <button class="accept-btn">Accept</button>
                            <button class="settings-btn">cookie settings</button>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>