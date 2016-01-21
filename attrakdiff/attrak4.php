<!-- <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/attrak.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>

    <body>
         <div class="container">
           <form action="action_page.php">
             Age
             <select name="age">
             <option value=""></option>
             <option value="age1">under 20</option>
             <option value="age2">20 to 40</option>
             <option value="age3">40 to 60</option>
             <option value="age4">over 60</option>
             </select>
             <br><br>
             Gender
             <select name="gender">
             <option value=""></option>
             <option value="gender1">female</option>
             <option value="gender2">male</option>

             </select>
             <br><br>
             Education completion
             <select name="education_completion">
             <option value=""></option>
             <option value="education_completion1">Lower Secondary Education 1</option>
             <option value="education_completion2">Lower Secondary Education 2</option>
             <option value="education_completion3">Higher Secondary Education</option>
             <option value="education_completion4">University</option>
             <option value="education_completion5">Other</option>

             </select>
             <br><br>
             Profession
             <input type="text" name="firstname">
             <br><br>


            Product experience
            <select name="product_experience">
            <option value=""></option>
            <option value="product_experience1">less than a month</option>
            <option value="product_experience2">less than a year</option>
            <option value="product_experience3">1 to 2 years</option>
            <option value="product_experience4">2 to 3 years</option>
            <option value="product_experience5">more than 3 years</option>

  </select>

           </form>

   </body>

-->
<DOCTYPE html>
    <html>
        <head>
            <script>
                var storebox1 = sessionStorage.getItem('storeBoxpage1');
                var storebox2 = sessionStorage.getItem('storeBoxpage2');
                var storebox3 = sessionStorage.getItem('storeBoxpage3');
                window.location.assign("./src/send.php?sb1="+storebox1+"&sb2="+storebox2+"&sb3="+storebox3);
            </script>
        </head>
        <body>
            <div id="row1"></div>
            <script>document.getElementById("row1").innerHTML = storebox1;</script>
            <div id="row2"></div>
            <script>document.getElementById("row2").innerHTML = storebox2;</script>
            <div id="row3"></div>
            <script>document.getElementById("row3").innerHTML = storebox3;</script>
        </body>
    </html>
</DOCTYPE>
