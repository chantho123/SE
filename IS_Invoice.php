<!-- ត្រឹមកន្លែងសរសេរ command ***************** (Class control_Data  Group_Data )ទៅលើ css នៅក្នុង Mainstyle.css -->

<?php include 'Myheader.php' ?>


<!-- Group_Menu_Data-->
<div class="Group_Menu_Data d-block" style="width: 80%;float:right;" >
  <!-- nameData -->
  <div class="nameData ">
    <!-- detail កំពុងនៅទំព័រណា -->
    <div class="groupDetail  d-flex justify-content-center align-items-center">
    <div class="groupDetail  d-flex justify-content-center align-items-center">
        <div  class="detail text-decoration-none"> 
           <a href="">ទំព័រដើម</a> <span>/</span>
            <a href="" style="color:red">វិក្កយបត្រ</a>
        </div> 
        
       
    </div> 
        
       
    </div>
    <!-- edit add print download -->
    <!-- changeData -->
    <div class="changeData">
      <ul class="ulist px-3 ">
         <li><a href="IS_Invoice_Add.php" ><i class="fa-solid fa-folder-plus" ></i>បន្ថែម</a></li>
         <li><a href="#" ><i class="fa-solid fa-print"></i>បោះពុម្ព</a></li>
         
      </ul>
    </div>

  </div>

  <!-- Group Data បង្ហាញពីពត៌មាននៅស្តាំsub menu-->
<section  class="Group_Data p-3 ">
  <!-- control_Data -->
  <!-- group block -->
    <div style="height:89vh;width:100%;"   class="control_Data p-2 bg-light rounded-3  ">
<!-- *******************(ត្រឹមClass control_Data  Group_Data ទៅលើ) -->

      <!--Select Date and Time -->
      <!-- block1 -->
      <div class="block1 w-100 d-flex justify-content-between">
            <!-- formDateTime -->
          <form action="" class="formDateTime w-50 " >
            <div class="form-group  d-flex gap-2 py-2" >
              <input style="border-color: gray;" type="text" name="" value="" placeholder="ស្វែងរក" class="form-control">
              <input type="date" name="timedate" class=" date form-control">
              <input type="date" name="timedate" class=" date form-control">
              
            </div>
            
          </form>
          

      </div>
        <!-- block2 -->
        <div class="block2 w-100  ">
            <table style="font-size: 14.5px;text-align: center;" class="table" >
            <thead>
                <tr style="background-color:#0F434B;color: white;">
                   
                    <th >#</th>
                    <th >លេខវិក្កយបត្រ</th>
                    <th >អតិថិជន</th>
                    <th >កាលបរិច្ឆេទ</th>
                    <th >ថ្ងៃផុតកំណត់</th>
                    <th >ជំពាក់</th>
                    <th >បានទូទាត់</th>
                    <th >សរុប</th>
                    <th >កែប្រែ</th>
                    <th >លុប</th>

                </tr>
            </thead>
            <tbody>
               
              <tr style="background-color:white;color:#0F434B">
                    
                <td>1</td>
                <td>INV-4865</td>
                <td>Amazone</td>
                <td>11-11-23</td>
                <td>30-11-23</td>
                <td>200$</td>
                <td>100$</td>
                <td>300$</td>
                <td style="width:80px;"><button class="btn"><a href="IS_Invoice_Edit.php"><i class="fa-solid fa-pen"></i></a></button></td>
                <td style="width:80px;"><button class="btn"><i class="fa-solid fa-trash"></i></button></td>
              

            </tr>
            <tr style="background-color:white;color:#0F434B">
                    
                <td>2</td>
                <td>INV-4865</td>
                <td>Amazone</td>
                <td>11-11-23</td>
                <td>30-11-23</td>
                <td>200$</td>
                <td>100$</td>
                <td>300$</td>
                <td style="width:80px;"><button class="btn"><a href="IS_Invoice_Edit.php"><i class="fa-solid fa-pen"></i></a></button></td>
                <td style="width:80px;"><button class="btn"><i class="fa-solid fa-trash"></i></button></td>

            </tr>
            <tr style="background-color:white;color:#0F434B">
                    
                <td>3</td>
                <td>INV-4865</td>
                <td>Amazone</td>
                <td>11-11-23</td>
                <td>30-11-23</td>
                <td>200$</td>
                <td>100$</td>
                <td>300$</td>
                <td style="width:80px;"><button class="btn"><a href="IS_Invoice_Edit.php"><i class="fa-solid fa-pen"></i></a></button></td>
                <td style="width:80px;"><button class="btn"><i class="fa-solid fa-trash"></i></button></td>

            </tr>
            <tr style="background-color:white;color:#0F434B">
                    
              <td>4</td>
              <td>INV-4865</td>
              <td>Amazone</td>
              <td>11-11-23</td>
              <td>30-11-23</td>
              <td>200$</td>
              <td>100$</td>
              <td>300$</td>
              <td style="width:80px;"><button class="btn"><a href="IS_Invoice_Edit.php"><i class="fa-solid fa-pen"></i></a></button></td>
                <td style="width:80px;"><button class="btn"><i class="fa-solid fa-trash"></i></button></td>
          </tr>
           
          
        
                
            </tbody>
            </table>
        </div>    
      </div>           
    </section>
  </div> 
  </div>



</body>
</html>




 

