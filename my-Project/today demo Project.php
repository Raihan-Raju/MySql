<!DOCTYPE html>
<html lang="en">
<head>
    <h1>This is my new project</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <style>
           *{
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            .navbar{
                display: flex; 
                justify-content: space-between; 
                align-items: center; 
                width: 100%; 
                background-color: green;
            }
           
            .navbar ol{
                display: flex;
                list-style-type: none;
                overflow: hidden;              
                
            }
            .navbar a{
                text-decoration: none;
                padding: 15px;
                display: block;
                text-align: center;
                color: white;
            }
            .navbar a:hover{
                background-color: rgb(252, 0, 0);
                color: black;
                border-radius: 15px;
            }
            .first{
                background-color: rgb(247, 5, 5); width: 20%;  
                text-align: left;
                margin: 0%;
                padding: 0%;
                overflow: hidden;
            }
            .first ul{
                text-decoration: none;
                padding: 15px;
                display: block;
                text-align: left; 
                list-style-type: none;
                border-radius: 10px;
                text-decoration: none;
            }

            .first ul li a{
                display: block;
                text-decoration: none;
                color: white;
                padding: 15px;
            }

            .first a:hover{
                background-color: green;
                color: rgb(255, 254, 254);
                border-radius: 10px;
            }
            ul{
               list-style-type:none ;
            }
           
            
        </style>
</head>
<body>
    
        <div style="background-color: rgb(12, 11, 11);"> 
            

            <div class="navbar">
                
                        <h1  style="color: whitesmoke;">Logo</h1>
                  
                  
                    <ol>
                        <li><a href="#">Home</a></li><br>
                        <li><a href="#">Manu</a></li><br>
                        <li><a href="#">image</a></li><br>
                        <li><a href="#">information</a></li>
                    </ol>
                    <div style="margin-right: 50px;">
                        <input type="text"> 
                       <button>search</button>
                    </div>


               
            </div>
           

            <div style="display: flex; width: 100%;"> 
                
                <div class="first"> 
                    <ul>
                        <li><a href="#">Home</a></li><br>
                        <li><a href="#">Manu</a></li><br>
                        <li><a href="#">image</a></li><br>
                        <li><a href="#">information</a></li>
                    </ul>
               </div>


                <div style="background-color: rgb(8, 6, 6); width: 100%;">
                    
                    <div>
                        <marquee style="text-align: center; font-size: 40px; color: red;">welcome to my natural Web</marquee>
                        <img src="nature.jpg" alt="" width="100%" height="450px">
                    </div>
                        <div style="display: flex; width: 100%;"> 
                                    
                            <div style="background-color: rgb(238, 200, 29); width: 100%; height: 200px ;">
                                <h1>Welcome Man</h1>  
                            </div>

                            <div style="background-color:green; width: 100%; height: 200px;"> 
                                <h1>Welcome</h1>
                            </div>
                        </div> 
                   
               </div>
        </div> 
          
           
                <footer style="background-color: rgb(30, 66, 210); text-align: center; font-size: 45px; color: red;"> 
                    This this footer
                </footer>
            
</body>
</html>