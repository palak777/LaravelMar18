<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{!! asset('css/custom.css') !!}">

    </head>
    <body>
            <div class="container">  
              <form id="contact" action="" method="post">
                    <h3>Sign Up</h3>
                   
                    <fieldset>
                      <input placeholder="First Name" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                      <input placeholder="Last Name" type="text" tabindex="1" required autofocus>
                    </fieldset>

                    <fieldset>
                      <input placeholder="Email Address" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                      <input placeholder="Phone Number (optional)" type="tel" tabindex="3" required>
                    </fieldset>

                    <fieldset>
                      <input type="radio" name="gender" value="male" required>Male
                      <input type="radio" name="gender" value="female" required>Female
                    </fieldset>
                    
                    <fieldset>
                      <textarea placeholder="Address" tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
              </form>
            </div>
    </body>
</html>
