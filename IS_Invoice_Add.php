<?php 
include  'Myheader.php'
?> 

  
 
<!-- Controll Menu and Data -->
<div style="width: 80%;float:right;" class="Group_Menu_Data d-block ">
  <div class="nameData " >
    <!-- detail កំពុងនៅទំព័រណា -->
    <div class="groupDetail  d-flex justify-content-center align-items-center">
        <div  class="detail text-decoration-none"> 
           <a href="">ទំព័រដើម</a> <span>/</span>
            <a href="" style='color:red'>វិក្កយបត្រ</a> <span>/</span>
            <a href="" style='color:red'>បន្ថែម</a> 
        </div> 
        
       
    </div>
    <!-- edit add print download -->
    <div class="changeData " style="display:flex;flex-direction:row-reverse;">
      <ul class="ulist d-flex justify-content-center  align-items-center px-3 ">
         <li><a href="IS_Invoice_Add.php" ><i class="fa-solid fa-folder-plus" ></i>បន្ថែម</a></li>
         <li><a href="#" ><i class="fa-solid fa-print"></i>បោះពុម្ព</a></li>
         
      </ul>
    </div>

  </div>
  

  <!-- Group Data បង្ហាញពីពត៌មាននៅស្តាំsub menu-->
  <section class="Group_Data m-auto p-3 ">
    <div  class="control_Data m-auto p-1  bg-light ">
<!-- *******************(ត្រឹមClass control_Data  Group_Data ទៅលើ) -->
    <!-- Add_Data -->
    <div  class="Add_Data  m-auto justify-content-center mt-2  rounded-2 d-flex">
        <div style="width:77%;height: 100%;" class="">
         <!--បង្កាន់ដៃ​​និង​total  -->
            <div class="box d-flex justify-content-between w-100">
                <div>
                  <h1>វិក្កយបត្រ</h1>
                </div>
                <div style="display:inline-block;text-align: center;" class="total  w-25">
                  <label for="">ទឹកប្រាក់សរុបរួម</label>
                  <h2 style="font-weight: bold;">$$</h2>
              </div>
            </div>


            <div class="box w-100 py-4">
              <div  class="box1 d-grid w-25 ">
                <label for="">#លេខវិក្កយបត្រ
                  <input type="text" style="padding:3px;">
                </label>
              </div>

              <!-- កាលបរិច្ឆេទ​ && ថ្ងៃផុតកំណត់ -->
              <div class="box2 w-100 d-flex gap-1">
                <!-- dateTimeChangeData -->
                <div style="width: 40%;" class="dateTimeChangeData  d-flex justify-content-between">
                    
                      <div class="form-group  d-flex gap-2" >
                        <label for="">កាលបរិច្ឆេទ
                            <input style="padding:3px;" type="date" name="" class="date">
                        </label>
                        <label for="">ថ្ងៃផុតកំណត់
                            <input style="padding:3px;" type="date" name="" class="date">
                        </label>
                      </div>
                      
                    
        
                </div>
                <div  style="width:20%;">
                  <label for="" class="block d-grid ">រយៈពេលទូទាត់</label>
                    <select style="width: 100%;font-size:13px">
                        <option value="">១៥​ថ្ងៃ</option>
                        <option value="">៣០ថ្ងៃ</option>
                        <option value="">៦០ថ្ងៃ</option>

                    </select>
                  
                </div>
                <div style="width:20%;" class="block d-grid">
                <label for="" class="block d-grid ">រូបិយបណ្ណ</label>
                    <select style="width: 100%;font-size:13px">
                        <option value="">USD</option>
                    </select>
                </div>
                <div style="width:20%;" class="block d-grid">
                <label for="" class="block d-grid ">ប្រភេទពន្ធ</label>
                    <select style="width: 100%;font-size:13px">
                        <option value="">អាករបន្ថែម១០%</option>
                    </select>
                  
                </div>


              </div>

            </div>      
        </div>
        <div style="width:23%;padding-left:2px" class="Customer_Detail  d-block">

          <label style="width: 100%;" class="form-label" for="">ជ្រើសរើសអតិថិជន
            <select style="width:100%;border-color: gray;font-size:13px" class="form-select" >
              <option>ផ្សារទំនើប​ឡាក់គី</option>
              <option>ផ្សារទំនើប​ឡាក់គី</option>
              <option>ផ្សារទំនើប​ឡាក់គី</option>
              
            </select>
          </label>
          <!-- អាស័យដ្ធានវិក្កយប័ត្រ -->
          <label for="" style="width: 100%;height:100%" >អាស័យដ្ឋានវិក្កយបត្រ
            <textarea style="width: 100%;;height:120px;color: #0F434B;"></textarea>        
          </label>
        
        </div>
        

    </div>
  




    <!-- InputData -->
<div style="border: 1px ;height:40vh;width: 100%;  border:1px solid black;margin:auto;justify-content:center" class="Add mt-3">
<!-- InputData -->
  <div class="InputData" style="display:flex;width: 100%;text-align: center;">
    <div style="width:5%;">
      <label for=""style="display:grid;border-left:none">#</label>   
      <input type="text">
    </div>
    <div style="display: grid;width:25%;">
      <label for=""> ផលិតផលសេវាកម្ម</label>   
      <select name="" id="">
        <option value="">Computer</option>
        <option value="">Ipad</option>
        <option value="">Iphone</option>
      </select>
    </div>
    <div style="display: grid;width:25%;">
      <label for="">បរិយាយ</label>   
      <input type="text">
    </div>
    <div style="display: grid;width:10%;">
      <label for="">ចំនួន</label>   
      <input type="number">
    </div>
    <div style="display: grid;width:10%;">
      <label for="">តម្លៃ</label>   
      <input type="">
    </div>
    <div style="display: grid;width:10%;">
      <label for="">សរុប</label>   
      <input type="text">
    </div>
    <div style="display: grid;width:10%;">
      <label for="">ពន្ធ</label>   
      <select name="" id=""><option value="">ពន្ធអាករ10%</option></select>
    </div>
    <div style="display: grid;width:5%;">
      <label for="" style="border-right: none;">លុប</label>   
      <button class="" style="border:1px solid gray;width:100%;height: 33px;"><i style="color:#0F434B;padding:none;margin:none;" class="fa-solid fa-trash"></i></button>
    </div>
    
</div>
  
  

  
  

  </div>
<!-- boxFooter -->
  <div style="width: 100%;color: #0F434B;" class="boxFooter d-flex py-1">
      <div style="width: 30%;" class="box1">
        <label for="" style="width: 100%;">សំគាល់
          <textarea style="width: 99%;height:90px;color: #0F434B;"></textarea>   
        </label>
      </div>
      <div style="width: 30%;" >
        <label style="display:grid; "class="">គណនីទឹកប្រាក់ត្រូវទទួល
          
          <select style="color: #0F434B; border-color: gray;font-size:13px" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
            
            <option value="1">12000 នៅធនាគា</option>
            
          </select>

        </label>
      </div>
      <!-- total_save -->
      <div style="width: 40%;" class="total_save">
        <!-- control_box -->
        <div style="float: right;" class="control_box">
          <!-- box -->
          <div class="box">
            <div style="display:flex;justify-content: space-between;"><p>តម្លៃមិនគិតពន្ធ :</p> <p>$</p></div>
            <div style="display:flex;justify-content: space-between;"><p>តម្លៃពន្ធអាករ  <span style="padding-left: 10px;"> :</span></p> <p>$</p></div>

          </div>     
          <div style="float: right;padding-right:20px;" class="control_box">
          <button type="button" ><a href="IS_Invoice.php" style="color:white">រក្សាទុក​ & បិទ</a></button>
          <button type="button" ><a href="IS_Invoice_Add.php" style="color:white">រក្សាទុក​ & ថ្មី</a></button>
          <button type="button" ><a href="IS_Invoice.php" style="color:white">បោះបង់</a></button>

        </div>

        </div>

      </div>
            </div>
  



        </div>
    </section>
</div>
</div>



  
</body>




