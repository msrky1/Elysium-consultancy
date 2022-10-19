<!DOCTYPE html>
<html lang="tr">
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sınav Giriş Belgesi</title>
</head>
<body>
        
         <style>
        
        *{
    font-family:"DeJaVu Sans Mono", monospace;
}


             .heading{font-size: 19px; color: black; position: absolute; top:24%; width: 100%; text-align: center;
              
                
             
            }
         </style>


    <div class="container" > 
           <div class="row">

            <div class="banner">
       
               <div class="heading">
              Adı Soyadı:    {{$approved->name}}   <br> 
              Tc Kimlik No:    {{$approved->tc}}    <br>
              Gireceği Sınıf:    {{$approved->hour}}    <br>

              <br> <br>
              <p>Sınav tarihi: <h4> 28 Mart Pazar </h4></p>
              

               </div>

                
             <img src="{{ public_path("assets/pdf/belge.jpg") }}" width="700" >    
               
            </div>
           </div>
    </div>
    
</body>
</html>