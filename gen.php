<!DOCTYPE html>
<html>
<head>
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#time-in").on("input", function(){
        // Print entered value in a div box
        $("#time-out").text($(this).val());
    });
});

$(document).ready(function(){
    $("#url-in").on("input", function(){
        // Print entered value in a div box
        $("#url-out").text($(this).val());
    });
});

function copy_data(containerid) {
  var range = document.createRange();
  range.selectNode(containerid); //changed here
  window.getSelection().removeAllRanges(); 
  window.getSelection().addRange(range); 
  document.execCommand("copy");
  window.getSelection().removeAllRanges();
  alert("لینک تولید شده کپی شد");
}

$(document).ready(function(){
    $("#url-in").on("input", function(){
        // Print entered value in a div box
        $("#url-out-to").text($(this).val());
    });
});

$(document).ready(function(){
    $("#time-in").on("input", function(){
        // Print entered value in a div box
        $("#time-out-to").text($(this).val());
    });
});


</script>
    
<style>
input, select {
  width: 80%;
  padding: 5px 5px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}
input[type=url], select {
  width: 80%;
  padding: 5px 5px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}
</style>

<title>Redirecting...</title>
<meta charset="utf-8">
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/jquery.js">
</script>
<script type="text/javascript" src="js/jquery-ui.min.js">
</script>
<script type="text/javascript" src="js/bootstrap.min.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="rtl.css" type="text/css" media="screen"/>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->
<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
</style>
<![endif]-->
<!--[if lt IE 9]>

</head>
<body class="index" style="position: absolute; height: 100%; width: 100%; left: 0px; top: 0px;">
<div id="ttr_page" class="container">
<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_content_margin"class="container-fluid">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="ttr_Home_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.36em 0em 0.36em 0em;text-align:Center;"><span style="font-size:3.643em;">تولید لینک هدایت سفارشی</span></p><p style="margin:0.36em 0em 0.36em 0em;text-align:Center;"><br style="font-size:2.643em;" /></p><p style="margin:0.36em 0em 0.36em 0em;text-align:Center;"><span style="font-size:1.714em;">لینک مورد نظر را جهت هدایت به آن در کادر زیر وارد کنید :</span></p><p style="margin:0.36em 0em 0.36em 0em;text-align:Center;"><span style="font-size:1.714em;"> <input value="<?php echo $_GET['url'];?>" placeholder="لینک حتما باید همراه http باشد." type="url" id="url-in" pattern="https://.*" size="30"
       required> </span></p><p style="margin:0.36em 0em 0.36em 0em;text-align:Center;"><span style="font-size:1.714em;">زمان مورد نظر را جهت صبر کردن کاربر تا انتقال در قسمت زیر بنویسید (به ثانیه) :</span></p><p style="margin:0.36em 0em 0.36em 0em;text-align:Center;"><span style="font-size:1.714em;"> <input value="<?php echo $_GET['time'];?>" min="0" max="60" placeholder="یک زمان بین 0 ثانیه تا 60 ثانیه" type="number" id="time-in"> </span></p><p style="margin:0.36em 0em 0.36em 0em;text-align:Center;"><br style="font-size:1.714em;" /></p><p style="margin:0.36em 0em 0.36em 0em;text-align:Center;"><span> <button class="btn btn-lg btn-default" type="button" onclick="copy_data(select_txt)">کپی لینک تولید شده</button> </span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_Home_html_row1 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column10">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.71em 0em 0.71em 0em;text-align:Center;"><span style="font-family:'<FontFamilyWrapper GoogleFamily=&quot;None&quot; CustomFamily=&quot;B Yekan&quot; SystemFamily=&quot;Arial&quot; xmlns=&quot;clr-namespace:TemplateToaster.Core;assembly=TemplateToaster&quot; />';font-size:1.286em;"> <div id="select_txt"><p style="display: inline;">https://go.mc-realm.ir/custom.php?url=</p><p style="display: inline;" id="url-out"></p><p style="display: inline;">&time=</p><p id="time-out" style="display: inline;"></p></div> </span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
</div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="ttr_Home_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><br style="font-size:1.714em;" /></p><p style="margin:0.36em 0em 0.36em 0em;text-align:Center;"><span> <button class="btn btn-lg btn-default" type="button" onclick="copy_data(select_txt2)">کپی لینک به اشتراک گذاری</button> </span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_Home_html_row1 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column10">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.71em 0em 0.71em 0em;text-align:Center;"><span style="font-family:'<FontFamilyWrapper GoogleFamily=&quot;None&quot; CustomFamily=&quot;B Yekan&quot; SystemFamily=&quot;Arial&quot; xmlns=&quot;clr-namespace:TemplateToaster.Core;assembly=TemplateToaster&quot; />';font-size:1.286em;"> <div id="select_txt2"><p style="display: inline;">https://go.mc-realm.ir/gen.php?url=</p><p style="display: inline;" id="url-out-to"></p><p style="display: inline;">&time=</p><p id="time-out-to" style="display: inline;"></p></div> </span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>