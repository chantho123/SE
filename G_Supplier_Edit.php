<?php include 'Myheader.php'?>


<div class="Group_Menu_Data float-end ">
  <div class="nameData " style="background-color:white; width: 100%;height:7%; font-size:20px; display:flex;justify-content: space-between;padding:3px">
    <!-- detail កំពុងនៅទំព័រណា -->
    <div class="groupDetail  d-flex justify-content-center align-items-center">
        <div  class="detail text-decoration-none"> 
           <a href="">ទំព័រដើម</a> <span>/</span>
            <a href="" style='color:red'>អ្នកផ្គត់ផ្គង់</a><span>/</span>
            <a href="" style='color:red'>កែប្រែ</a>
        </div> 
        
       
    </div>
    <!-- edit add print download -->
    <div class="changeData " style="display:flex;flex-direction:row-reverse;">
      <ul class="ulist d-flex justify-content-center  align-items-center px-3 ">
         <li><a href="G_Supplier_Add.php" ><i class="fa-solid fa-folder-plus" ></i>បន្ថែម</a></li>
         <li><a href="#" ><i class="fa-solid fa-print"></i>បោះពុម្ព</a></li>
         
      </ul>
    </div>

  </div>

  
  
<!-- section2-->
<section style="background-color: lightgray;" class="section2  p-3">
  <!-- control_Data -->
  <!-- group block -->
    <div style="height:89vh;width: 100%;" class="group_block p-2 bg-light rounded-3 d-block">
      <!-- block1 -->
      <section style="color: #0F434B;" class="block1 customerline1 w-100 d-flex justify-content-between  p-2">
          <!-- ឈ្មោះអតិថិជន នាម/គោត្តនាម  ឈ្មោះឡាតាំង -->
            <section style="width:40%;" class="line1 d-grid">
                  <h1>ព័ត៌មានអ្នកផ្គត់ផ្គង់</h1>
                    <div class="justify-content-between p-2">
                      <label for="" class="form-label py-1">ឈ្មោះពេញ</label>
                      <input type="text" name="" id="" class="float-end"  style="width:300px;height:30px">
                    </div>
                    <div class="justify-content-between p-2 " >
                      <label for="" class="form-label py-1">នាម/គោត្តនាម</label>
                      <span class="float-end ">
                        <input style="width:118px;margin-right:-2px" type="text" name="" id="" class=" ">
                        <input style="width: 180px;" type="text" name="" id="" class="">
                      </span >
                    </div>
                    <div class="justify-content-between p-2">
                      <label for="" class="form-label py-1">ឈ្មោះឡាតាំង</label>
                      <input type="text" name="" id="" class="float-end" style="width:300px;height:30px">
                    </div>
            </section>

            <!-- រូបុយបណ្ណ លេខទូរស័ព្ទ  អុីម៉េល-->
            <section style="width: 38%" class="line2 d-flex flex-column justify-content-end">
                  <div class="justify-content-between p-2">
                    <label for="" class="form-label py-1">រូបិយប័ណ្ណ</label>
                    <select name="" id="" class="float-end" style="width:300px"> 
                      <option value="USD" style="width:100%">USD</option>
                    </select>
                  </div>
                  <div class="justify-content-between p-2 " >
                    <label for="" class="form-label py-1">លេខទូរស័ព្ទ</label>
                      <input type="text" name="" id="" class="float-end "  style="width:300px;height:30px">
                    </span >
                  </div>
                  <div class="justify-content-between p-2">
                    <label for="" class="form-label py-1">អុីម៉ែល</label>
                    <input type="email" name="" id="" class="float-end"  style="width:300px;height:30px">
                  </div>

                
            </section>
            <div style="width:20%;background-color:lightgray;color:#266B76;border-radius: 10px;" class="line3 text-center d-grid justify-content-center align-items-center">
                រូបភាព
            </div>

          
          

      </section>




      <!-- block2 -->
      <section style="width: 50%;" class="d-gird pt-4">
            <label for="" style="width: 100%;" >អាស័យដ្ឋាន(ខ្មែរ)
              <textarea style="width: 100%;height:120px;color: #0F434B;"></textarea>        
            </label>
            <label for="" style="width: 100%;" >អាស័យដ្ឋាន(អង់គ្លេស)
              <textarea style="width: 100%;height:120px;color: #0F434B;"></textarea>        
            </label>
          

      </section>
      <!-- total_save -->
      <div style="width: 50%;float:right;">
        <!-- control_box -->
        <div style="float: right;padding-right:20px;" class="control_box">
          <button type="button" ><a href="G_Supplier.php" style="color:white">រក្សាទុក​ & បិទ</a></button>
          <button type="button" ><a href="G_Supplier_Add.php" style="color:white">រក្សាទុក​ & ថ្មី</a></button>
          <button type="button" ><a href="G_Supplier.php" style="color:white">បោះបង់</a></button>

        </div>

      </div>
      
    </div>    
</section>
</div>
