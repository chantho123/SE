<?php include 'Myheader.php'?>




<!-- G_Customer-->
<div style="width: 80%;float:right;" class="Group_Menu_Data d-block ">
  <div class="nameData " >
    <!-- detail កំពុងនៅទំព័រណា -->
    <div class="groupDetail  d-flex justify-content-center align-items-center">
        <div  class="detail text-decoration-none"> 
           <a href="">ទំព័រដើម</a> <span>/</span>
            <a href="" style="color:red">អតិថិជន</a>
        </div> 
        
       
    </div>
    <!-- edit add print download -->
    <div class="changeData " style="display:flex;flex-direction:row-reverse;">
      <ul class="ulist d-flex justify-content-center  align-items-center px-3 ">
         <li><a href="G_Customer_Add.php" ><i class="fa-solid fa-folder-plus" ></i>បន្ថែម</a></li>
         <li><a href="#" ><i class="fa-solid fa-print"></i>បោះពុម្ព</a></li>
         
      </ul>
    </div>

  </div>
  
  <!-- Group Data បង្ហាញពីពត៌មាននៅស្តាំsub menu-->

<section style="background-color: lightgray" class=" Group_Data section2  p-3 ">
  <!-- control_Data -->
  <!-- group block -->
    <div style="height:89vh;width:100%;"  class="control_Data p-2 bg-light rounded-3 ">
      <!--Select Date and Time -->
      <!-- block1 -->
      <div class="block1 w-100 d-flex justify-content-between">
            <!-- formDateTime -->
          <form action="" class="formDateTime w-50 " >
            <div class="form-group  d-flex gap-2 py-2" >
              <input style="border-color: gray;width:400px" type="text" name="" value="" placeholder="ស្វែងរក" class="form-control">
              
            </div>
            
          </form>
          

      </div>
        <!-- block2 -->
        <div class="block2 w-100 ">
            <table style="font-size: 14.5px;text-align: center;" class="table" >
            <thead>
                <tr style="background-color:#0F434B;color: white; ">
                   
                    <th scope="col">#</th>
                    <th scope="col">ឈ្មោះ</th>
                    <th scope="col">លេខទូរស័ព្ទ</th>
                    <th scope="col">អាសយដ្ឋាន</th>
                    <th scope="col">រូបិយប័ណ្ណ</th>
                    <th style="width:80px;" scope="col">កែប្រែ</th>
                    <th style="width:80px;" scope="col">លុប</th>

                </tr>
            </thead>
            <tbody>
               
              <tr style="background-color:white;color:#0F434B">
                    
                <td>1</td>
                <td>សុខា​ មុនីនីតា</td>
                <td>098 997 453</td>
                <td>ផ្លូវ34, សង្កាត់​បឹងទំពុន,ខណ្ឌមានជ័យ,រាជធានីភ្នំពេញ</td>
                <td>USD</td>
                <td style="width:80px;"><button class="btn"><a href="G_Customer_Edit.php"><i class="fa-solid fa-pen"></i></a></button></td>
                <td style="width:80px;"><button class="btn"><i class="fa-solid fa-trash"></i></button></td>
                
            </tr>
            <tr style="background-color:white;color:#0F434B">
                    
              <td>2</td>
              <td>សុខា​ មុនីនីតា</td>
              <td>098 997 453</td>
              <td>ផ្លូវ34, សង្កាត់​បឹងទំពុន,ខណ្ឌមានជ័យ,រាជធានីភ្នំពេញ</td>
              <td>USD</td>
              <td style="width:80px; " ><button class="btn"><a href="G_Customer_Edit.php"><i class="fa-solid fa-pen"></i></a></button></td>
              <td style="width:80px;" ><button class="btn"><i class="fa-solid fa-trash"></i></button></td>

              
          </tr>
            
          <tr style="background-color:white;color:#0F434B">
                    
            <td>3</td>
            <td>សុខា​ មុនីនីតា</td>
            <td>098 997 453</td>
            <td>ផ្លូវ34, សង្កាត់​បឹងទំពុន,ខណ្ឌមានជ័យ,រាជធានីភ្នំពេញ</td>
            <td>USD</td>
            <td style="width:80px;"><button class="btn"><a href="G_Customer_Edit.php"><i class="fa-solid fa-pen"></i></a></button></td>
            <td style="width:80px;"><button class="btn"><i class="fa-solid fa-trash"></i></button></td>

            
        </tr>
        <tr style="background-color:white;color:#0F434B">
                    
          <td>4</td>
          <td>សុខា​ មុនីនីតា</td>
          <td>098 997 453</td>
          <td>ផ្លូវ34, សង្កាត់​បឹងទំពុន,ខណ្ឌមានជ័យ,រាជធានីភ្នំពេញ</td>
          <td>USD</td>
          <td style="width:80px;"><button class="btn"><a href="G_Customer_Edit.php"><i class="fa-solid fa-pen"></i></a></button></td>
          <td style="width:80px;"><button class="btn"><i class="fa-solid fa-trash"></i></button></td>

          
      </tr>
           
          
        
                
            </tbody>
            </table>
        </div>    
      </div>           
    </section>
</div>
