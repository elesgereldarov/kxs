<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid" style="width:1349px; margin-left:auto; margin-right:auto;">
        <div class="row">
            <div class="col-6 left text-center" style=" background-image: url(img/58694154_546644355742003_8290559364125687808_n.png); background-size: 100% 100%; opacity: 0.8;" >
                <img src="{{url('/')}}/img/logo1@2x.png" alt="">
                <p>PAUD RAAD SAYGACLARIN PROQRAM TƏMİNATI</p>
            </div>
            <div class="col-6 right">
                <div class="text-center right_1">
                    <form action="{{url('/')}}/admin/login" method="post">
					@csrf
                        <p>Daxil ol</p>
                        <label for="" style="font-size:14px; margin-left:-220px;">İstifadəçi adı</label><br>
                        <div style="border:1px solid #0091DC; border-radius:5px; width: 300px; margin-left:170px;">
                            <img src="{{url('/')}}/img/58713250_582441885572368_5198020294953926656_n.png" style="margin-left:-50px; margin-top:-5px;" alt="">
                            <input type="text" name="email" style="border:none; height: 46px;">
                        </div> <br>
                        <label for="" style="font-size:14px; margin-left:-270px;">Şifrə</label><br>
                        <div style="border:1px solid #0091DC;  border-radius:5px; width: 300px; margin-left:170px;">
                            <img src="{{url('/')}}/img/58372813_798276143880321_6039758791761723392_n.png" style="margin-left:-50px; margin-top:-5px;" alt="">
                            <input type="password" name="password" style="border:none;  height: 46px;"><br>
                        </div>
                        <button autofocus-none class="right_btn">Daxil ol</button>
                    </form>
                </div>
            </div>
        </div>
    </div>










    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>