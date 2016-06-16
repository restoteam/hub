<?//dd($data);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!--
    	The codes are free, but we require linking to our web site.
    	Why to Link?
    	A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google!
    	Where to Put the Link?
    	home, about, credits... or in a good page that you want
    	THANK YOU MY FRIEND!
    -->
    <title>Ваш профиль</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:20px;}


#main {
    background-color: #f2f2f2;
    padding: 20px;
    margin-top: -55px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
    border-bottom: 4px solid #ddd;
}


#real-estates-detail #author img {
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    -o-border-radius: 100%;
    border-radius: 100%;
    border: 5px solid #ecf0f1;
    margin-bottom: 10px;
}

#real-estates-detail .sosmed-author i.fa {
    width: 30px;
    height: 30px;
    border: 2px solid #bdc3c7;
    color: #bdc3c7;
    padding-top: 6px;
    margin-top: 10px;
}

.panel-default .panel-heading {
    background-color: #fff;
}

#real-estates-detail .slides li img {
    height: 450px;
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div id="main">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <a href="#" class="btn btn-primary">Профиль</a>&nbsp;&nbsp;&nbsp;<a href="/places"  class="btn btn-primary">Забронировать место</a>&nbsp;&nbsp;&nbsp;<a href="/"  class="btn btn-primary">Главная</a>&nbsp;&nbsp;&nbsp;<a href="/auth/logout"  class="btn btn-primary">выйти</a>
            </h2>

        </div>
    </div>

    <!-- start:real estates detail -->
    <div class="row" id="real-estates-detail">
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <header class="panel-title">
                        <div class="text-center">
                            <?=$data['attributes']['email'];?>
                        </div>
                    </header>
                </div>
                <div class="panel-body">
                    <div class="text-center" id="author">
                        <img src="<?=$data['attributes']['avatar'];?>">
                        <h3><?=$data['attributes']['name'];?></h3>

                        <!--<p>Aku kie sing sok ngedolke omah-omah kae, yo iso di omongke makelar ngono sih. Tapi makelar nek payu ne akeh yo dadi sugih bro. Tenanan ra ngapusi.</p>
                        <p class="sosmed-author">
                            <a href="#"><i class="fa fa-facebook" title="Facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter" title="Twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus" title="Google Plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin" title="Linkedin"></i></a>
                        </p>-->
                    </div>
                </div>
                @if(isset($order))
                <div class="panel-body">
                    <div class="text-center" id="author">
                        <p>Ваш заказ:</p>
                        <p>место:<?=$order["id"];?></p>
                        <p>способ оплаты:<?=$order["billing_type"];?></p>
                        <p>время:<?=$order["date_time"];?></p>
                        <p>продолжительность:<?=$order["time_spend"];?>&nbsp;&nbsp;дней</p>
                    </div>
                </div>
                @endif


            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-xs-12">
            <div class="panel">
                <div class="panel-body">
                    <ul id="myTab" class="nav nav-pills">
                        <!--<li class="active"><a href="#photos" data-toggle="tab">Photos</a></li>
                        <li class=""><a href="#detail" data-toggle="tab">Detail</a></li>-->
                        <li class=""><a href="#contact" data-toggle="tab">Обо мне</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <!--  <div class="tab-pane fade active in" id="photos">
                            <br>
                            <div class="flexslider">
                                <img src="http://bootemplates.com/themes/srikandi/v2/img/content/thumbnail5.jpg" draggable="false">
                            </div>
                        </div>-->
                        <!--<div class="tab-pane fade" id="detail">
                            <p></p>
                            <h4>Short Detail</h4>
                            <p>Iki mung detail singkat wae soale seko jenenge wae wis short detail dadi yo ojo dowo-dowo.</p>
                            <table class="table table-th-block">
                                <tbody>
                                    <tr><td class="active">Bedrooms:</td><td>5 beds</td></tr>
                                    <tr><td class="active">Bathrooms:</td><td>2 baths</td></tr>
                                    <tr><td class="active">Single Family:</td><td>2,957 sq ft</td></tr>
                                    <tr><td class="active">Lot:</td><td>0.26 acres</td></tr>
                                    <tr><td class="active">Year Built:</td><td>1998</td></tr>
                                    <tr><td class="active">Last Sold:</td><td>Apr 1998 for $225,000</td></tr>
                                    <tr><td class="active">Heating Type:</td><td><a href="#">Contact for details</a></td></tr>
                                </tbody>
                            </table>
                        </div>-->
                        <div class="tab-pane fade active in" id="contact">
                            <p></p>
                            <form role="form">
                                <div class="form-group">
                                    <label>Ваше специализация</label>
                                    <input type="text" class="form-control rounded" placeholder="development,design,sales ...">
                                </div>
                                <div class="form-group">
                                    <label>Ваш номер телефона</label>
                                    <input type="text" class="form-control rounded" placeholder="(000)0000000">
                                </div>
                                <div class="form-group">
                                    <label>Email адресс</label>
                                    <input type="email" class="form-control rounded" placeholder="email">
                                </div>
                                <!--<div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Buy this property
                                        </label>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label>о вас</label>
                                    <textarea class="form-control rounded" style="height: 100px;"></textarea>
                                    <!--<p class="help-block">Please be polite and professional</p>-->
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger" data-original-title="" title="">сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">


</script>
</body>
</html>
