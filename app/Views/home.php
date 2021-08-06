<!DOCTYPE html>
<html>
<head>
<title><?= $page . ' | '. $title ?></title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<style type="text/css">
.result {
background-color: #1fc8db;
background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
width: 100%;
padding: 1em;
margin: 0.5em;
-webkit-border-radius: 9px;
-moz-border-radius: 9px;
border-radius: 9px;
border: solid 2px honeydew;
}
</style>
<body>
<div  class="container">
<div class="row" id="main">
<?php if($users): ?>
<?php foreach($users as $user): ?>
<div class="result">
<h2><?php echo $user->name; ?></h2>
<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
</div>
<?php endforeach; ?>
<?php endif; ?>
</div>
</div> 
</body>
<script>
var SITEURL = "<?php echo base_url(); ?>";
var page = 1; //track user scroll as page number, right now page number is 1
var is_more_data = true;
var is_process_running = false;
$(window).scroll(function() { //detect page scroll
if($(window).scrollTop() + $(window).height() >= $(document).height() - 1800) { //if user scrolled from top to bottom of the page
if(is_process_running == false) {
is_process_running = true;
page++; //page number increment
if(is_more_data){
//$('#loader').show();
load_more(page); //load content   
}
}
}
});     
function load_more(page){
$.ajax({
url:  SITEURL+"index.php/ajax/get_ajax_load_more?page=" + page,
type: "GET",
dataType: "html",
}).done(function(data) {
is_process_running = false;
if(data.length == 0){
is_more_data = false;
//console.log(data.length);
$('#loader').hide();
return;
}
$('#loader').hide();
$('#main').append(data).show('slow'); //append data into #results element          
}).fail(function(jqXHR, ajaxOptions, thrownError){
alert('No response from server');
});
}
</script>
</html>