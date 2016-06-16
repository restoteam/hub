<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Забронировать</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link href="<?=url('/public/hub_map').'/assets/css/bootstrap.min.css';?>" rel="stylesheet" />
    <link href="<?=url('/public/hub_map').'/assets/css/gsdk-base.css';?>" rel="stylesheet" />
    
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <link href="<?=url('/public/hub_map').'/assets/datepicker/assets/css/bootstrap-datepicker.css';?>" rel="stylesheet" />

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('../img/map.png')">
    <!--   Creative Tim Branding   -->
    <a href="/user/<?=$user;?>">
         <div class="logo-container">
            <!--<div class="logo">
                <img src="assets/img/new_logo.png">
            </div>-->
            <div class="brand">
                Профиль
            </div>
        </div>
    </a>
    
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                <div class="card wizard-card ct-wizard-green" id="wizard">
                <form action="/bookplace" method="post">
                <!--        You can switch "ct-wizard-azzure"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <div class="wizard-header">
                          <h3>
                             <b>Выберите</b> ваше место <br>
                             <small>места помечены цыфрами</small>
                          </h3>
                      </div>
                      <ul>
                            <li><a href="#location" data-toggle="tab">Выбор места</a></li>
                            <li><a href="#type" data-toggle="tab">Метод оплаты</a></li>
                            <!--<li><a href="#facilities" data-toggle="tab">Facilities</a></li>-->
                            <li><a href="#description" data-toggle="tab">Дополнительно</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="location">
                              <div class="row">
                                  <div class="col-sm-12">
                                    <h4 class="info-text"> Заполните небольшую форму</h4>
                                  </div>
                                  
                                  <div class="col-sm-5 col-sm-offset-1">
                                       <div class="form-group">
                                            <label>На сколько времени</label><br>
                                             <select name="timespend" class="form-control">
                                                <option value="1"> день </option>
                                                <option value="7"> неделя </option>
                                                <option value="30"> месяц </option>
                                            </select>
                                          </div>
                                  </div>
                                  <!--<div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Accommodates</label>
                                          <select class="form-control">
                                            <option disabled="" selected="">- persons -</option>
                                            <option>1 Person</option>
                                            <option>2 Persons </option>
                                            <option>3 Persons</option>
                                            <option>4 Persons</option>
                                            <option>5 Persons</option>
                                            <option>6+ Persons</option>
                                          </select>
                                      </div>
                                  </div>-->

                                  <div class="col-sm-5 ">
                                      <div class="form-group">
                                        <label>Дата</label>
                                        <div class="controls">
                                          <input class="datepicker form-control" name="date" type="text"/>
                                      </div>
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-sm-offset-3">
                                      <div class="form-group">
                                          <label>Номер столика</label>
                                          <div class="input-group">
                                              <input type="text" name="place" class="form-control" id="placenumber" placeholder="номер места">
                                              <span class="input-group-addon"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="type">
                                <h4 class="info-text">Каким способом вы хотите оплатить? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Выберите удобный для вас метод оплаты">
                                                <input type="radio" name="type" value="offline">
                                                <div class="icon">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                                <h6>Оплата на месте</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Выберите удобный для вас метод оплаты">
                                                <input type="radio" name="type" value="online">
                                                <div class="icon">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                                <h6>Оплата Приват24</h6>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="description">
                                <div class="row">
                                    <h4 class="info-text"> Оставьте дополнительную информацию </h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Описание</label>
                                            <textarea class="form-control" name="add_desc" placeholder="" rows="9">
                                                
                                            </textarea>
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                         <div class="form-group">
                                            <label>Например</label>
                                            <p class="description">"Я хотел бы ..."</p>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                              <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' id="nextbtn" name='next' value='Далее' />
                                    <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Подтвердить' />
        
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='назад' />
                                </div>
                                <div class="clearfix"></div>
                        </div>  
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div> <!-- row -->
    </div> <!--  big container -->
   
    
</div>


</body>

  
  

  <script src="<?=url('/public/hub_map').'/assets/js/jquery-1.10.2.js';?>" type="text/javascript"></script>
  <script src="<?=url('/public/hub_map').'/assets/js/bootstrap.min.js';?>" type="text/javascript"></script>

  <script src="<?=url('/public/hub_map').'/assets/datepicker/assets/bootstrap3/js/bootstrap.js';?>" type="text/javascript"></script>
  <script src="<?=url('/public/hub_map').'/assets/datepicker/assets/js/bootstrap-datepicker.js';?>" type="text/javascript"></script>
    
  <!--   plugins   -->
  <script src="<?=url('/public/hub_map').'/assets/js/jquery.bootstrap.wizard.js';?>" type="text/javascript"></script>
  
    <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="<?=url('/public/hub_map').'/assets/js/jquery.validate.min.js';?>"></script>
  
  <!--  methods for manipulating the wizard and the validation -->
  <script src="<?=url('/public/hub_map').'/assets/js/wizard.js';?>"></script>

    

</html>



	<script>


  /*
	    $(function() {
	      $('#slides').superslides({
	        hashchange: true
	      });
	    });

  $(document).ready(function () {
    $(".btn-select").each(function (e) {
        var value = $(this).find("ul li.selected").html();
        if (value != undefined) {
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
    });
});

$(document).on('click', '.btn-select', function (e) {
    e.preventDefault();
    var ul = $(this).find("ul");
    if ($(this).hasClass("active")) {
        if (ul.find("li").is(e.target)) {
            var target = $(e.target);
            target.addClass("selected").siblings().removeClass("selected");
            var value = target.html();
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
        ul.hide();
        $(this).removeClass("active");
    }
    else {
        $('.btn-select').not(this).each(function () {
            $(this).removeClass("active").find("ul").hide();
        });
        ul.slideDown(300);
        $(this).addClass("active");
    }
});

$(document).on('click', function (e) {
    var target = $(e.target).closest(".btn-select");
    if (!target.length) {
        $(".btn-select").removeClass("active").find("ul").hide();
    }
});
*/
$("#placenumber").on('change',function(){

	$.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
      }
  })

	var placenumber = $("#placenumber").val();
	console.log(placenumber);
	//console.log(datetime);

	$.ajax({
		type: "POST",
		url: "/checkplace",
		data: "placenumber="+placenumber,
		success: function(msg){
			console.log( "result: " + msg );
      if(msg === '1'){
        $("#nextbtn").attr('disabled','disabled');
        console.log("booked");
        alert("к сожалению это место уже занято,выберите другое)");
      }else{
        $("#nextbtn").removeAttr('disabled');
        console.log("free");
      }
		}
		/*error: function(data){
        
        var errors = data.responseJSON;

        console.log(errors);

        $.each(errors, function(index, value) {
            $.gritter.add({
                title: 'Error',
                text: value
            });
        });
    }*/
	})
});
	</script>

	<script type="text/javascript">
	 $('.datepicker').datepicker({
			 weekStart:1,
			 color: 'red'
	 });
	</script>

</body>
</html>
