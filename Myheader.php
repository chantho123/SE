<!-- css in Mainstyle.css -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale Management System</title>

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
      <link rel="stylesheet" href="G.css">
      <link rel="stylesheet" href="Is.css">
      <link rel="stylesheet" href="PI.css">
      
     <!-- font khmer OS Battambang -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Khmer OS Battambang">
<style>

</style>
    </head>
<body>
<div class="body">
  <!-- header -->
  <div class="header" >
    <div class="Mynavbar w-100 ">
      <h3>S</h3><h3 style="padding-left:4px;">Management</h3>
    </div>
       
    <!-- Group Menu -->
    <div class="group_Menu ">
      <!-- Left Menu -->       
                  <div class="left_Menu">
                  <ul >  
                      <li style="width: 100%;padding-left: 10px;"><a href="G.php"><i style="padding:2px;" class="fa-solid fa-desktop"></i>ផ្ទាំងគ្រប់គ្រងទូទៅ</a></li>               
                      <li>  
                          <a href="#">                      
                            មុខងារទូទៅ<i class="fa-solid fa-chevron-down down1 i" ></i>
                          </a>
                          <ul class="sub_Menu " id="sub_Menu1">
                            <li class="none"><a href="G_Customer.php"><i class="fa-regular fa-user "></i>អតិថិជន</a></li>
                            <li class="none"><a href="G_Supplier.php"><i class="fa-solid fa-people-group "></i>អ្នកផ្គត់ផ្គង់</a></li>
                            <li class="none"><a href="G_ProductType.php"><i class="fa-solid fa-bag-shopping"></i>ប្រភេទទំនិញ</a></li>
                            <li class="none"><a href="G_Product.php"><i class="fa-solid fa-bag-shopping"></i>ទំនិញ</a></li>
                            <li class="none"><a href="G_Account.php"><i class="fa-solid fa-diagram-project"></i>ប្លង់គណនី</a></li>

                          </ul>               
                    </li>
  
                    <li>
                        <a href="#">វិក្កយបត្រលក់<i class="fa-solid fa-chevron-down down2 i" ></i></a>
                        <ul class="sub_Menu" id="sub_Menu2">

                          <li class="none"><a href="IS_Invoice.php" ><i class="fa-regular fa-file-lines"></i>វិក្កយបត្រ</a></li>
                          <li class="none"><a href="IS_Reciept.php"><i class="fa-solid fa-hand-holding-dollar"></i>បង្កាន់ដៃទទួលប្រាក់</a></li>
                          <li class="none"><a href="IS_SaleReciept_Add.php"><i class="fa-regular fa-file-lines"></i>បង្កាន់ដៃលក់</a></li>
                        
                        </ul>
                    </li>
                  
                    <li>
                        <a href="#">វិក្កយបត្រទិញ<i class="fa-solid fa-chevron-down down3 i"></i></a>
                        <ul class="sub_Menu" id="sub_Menu3">

                          <li class="none"><a href="PI_PI.php"><i class="fa-regular fa-file-lines"></i>វិក្កយបត្រទិញ</a></li>
                          <li class="none"><a href="PI_PaymentReciept.php"><i class="fa-solid fa-hand-holding-dollar"></i>បង្កាន់ដៃបង់ប្រាក់</a></li>
                          <li class="none"><a href="PI_SaleProduct.php"><i class="fa-regular fa-file-lines"></i>បង្កាន់ដៃលក់ទំនិញ</a></li>
                        
                      </ul>
                    </li>
                    <li>
                      <a href="#">របាយការណ៍</a>
                    
                    </li>
                    <li>
                      <a style="width: 100%;padding-left: 10px;" href="#"><i style="float: left;padding:2px;" class="fa-solid fa-gear"></i>ការកំណត់</a>
                    </li>
                </ul>
              </div>
              <!-- btn ជំនួយ -->
              <button type="button"  class="btn btn_help  mt-2 text-light justify-content-center align-items-center m-auto d-flex px-3 gap-1">
                <i class="fa-solid fa-circle-info" ></i>
                ជំនួយ
              </button>
          </div>
   
  </div>