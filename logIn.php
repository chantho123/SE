<!-- Css in Mainstyle.css -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Form</title>
     <!-- jquery cdn -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!-- boostrap cdn -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <!-- link file style css -->
     <link rel="stylesheet" href="mystyle.css">
     <link rel="stylesheet" href="LogMainHeader.css">
     
   
</head>
<body>
    

    <!-- div for background image -->
    <div class="BodyLogIn"></div>

    <div style="width: 100%;height:50vh;" class="container-fluid  d-flex" >  
        <!--  LogIn-->
        <div  class="LogIn  ">
            <form action=""  class="form-control bg-light">
                <div class="d-grid text-center gap-2">
                    <!-- first child h1  -->
                    <h1>S</h1>  
                    <!-- first child p -->
                    <p>ចូលប្រើប្រាស់ប្រព័ន្ធ Sale Management</p>    
                </div>
                     
                <div class="input-group mb-3">
                    <span style="height: 45px;" class="input-group-text " ><i class="fa-regular fa-envelope" ></i></span>
                    <input style="height: 45px;" type="email" class="form-control " placeholder="Email" aria-label="Username" aria-describedby=""  required >
                </div>
                <div class="input-group mb-3">
                    <span style="height: 45px;" class="input-group-text" id="basic-addon1" ><i class="fa-solid fa-key"></i></span>
                    <input style="height: 45px;" type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby=""  required >
                </div>
                <a href="G.php"><button type="button" class="btn text-center text-light" >ចូលប្រើប្រាស់</button></a> 
                <span id="forget"><a href="">ភ្លេចពាក្យសំងាត់!</a></span>

            </form>
            
        </div>
       
        
    </div>
</body>
</html>