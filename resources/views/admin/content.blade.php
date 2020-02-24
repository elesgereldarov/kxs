<!-- Content Header (Page header) -->
   
 
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  
    <div class="container-fluid" style="width:100%;">
        <div class="row header_row">
            <div class="header_img">
                <img src="img/logo1.png" style="width:164px;" height="31px" alt="">
            </div>
            <div class="header_1">
                <a href="" >Ana Səhifə</a>
            </div>
            <div class="header_2">
                <a href="">Gələn Müraciətlər</a>
            </div>
          
        </div>
        <div class="row header2_row pb-4 border-bottom">
            <div class="header2_btn_1">
                <button class="btn text-white up_1">Yeni müraciət</button>
            </div>
           
            <div class="header2_btn_3">
                <button class="btn up_3">Köhnə tarix</button>
            </div>
            
        </div>
        <div class="row row_body_1">
            <div class="row_body_1_1">İcraçı Haqqında məlumat</div>
            
        </div>
        <div class="row_body_end">
            <div class="end_1">
                <span style="color:#555555;">Status</span>
                <select >
                    <option value="P_status" style="color:red;">Gözləyir</option>
                    <option value="P_status" style="color:yellowgreen;">İcradadır</option>
                    <option value="P_status" style="color:blue;">Həll olundu</option>
                </select>
            </div>
            <div class="end_2">
                <span style="color:#555555;">İcra edən şəxs:</span><span class="hidden-xs">{{Auth::user()->name}}</span>
            </div>
           
            <div class="end_3">
                <span style="font-size:16px; color:#555555;">Problem</span>
                <input type="text">
              </div>
            <div class="end_4">
                <span>Müraciət  haqqında məlumat</span>
            </div>
            <div class="end_5">
                <span style="font-size:16px; color:#555555;">Müraciət edən şəxs</span> <input type="text">
            </div>
            <div class="end_6">
                <span style="font-size:16px; color:#555555;">Görülən iş</span> <input type="text">
            </div>
            <div class="end_8">

            </div>
            <div class="end_7">
                <span style="font-size:16px; color:#555555;">Qeyd</span><br> <textarea name="" id="txt" cols="" rows="3"></textarea>
            </div>
            <div class="end_11">
                <button>Yadda Saxla</button>
            </div>
          
        </div>
    </div>







   </body>
</html>
