<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page . ' | '. $title ?></title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="../../site_file/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../site_file/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../site_file/css/line-awesome.css">
    <link rel="stylesheet" href="../../site_file/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../site_file/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../site_file/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../site_file/css/daterangepicker.css">
    <link rel="stylesheet" href="../../site_file/css/animate.min.css">
    <link rel="stylesheet" href="../../site_file/css/animated-headline.css">
    <link rel="stylesheet" href="../../site_file/css/jquery-ui.css">
    <link rel="stylesheet" href="../../site_file/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../site_file/css/style.css">
    <link rel="stylesheet" href="../../site_file/css/style_all.css">
</head>
<style>
.all {
    background-color: #007bff;
}

.cta-area {
background-size: cover;
background-color: #007bff;
}
body {
    font-size: 16px;
    line-height: 28px;
    font-family: "Roboto", sans-serif;
    color: #007bff;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.section-bg-2 {
background-color: #007bff;
}
.body{
    color:#007bff;
}
.section-heading .sec__title {
font-size: 40px;
color: #007bff;
font-weight: 700;
}
.blue{
    background-color:#007bff
}

p.panel-title {
    text-align: center;
    color: #495057; 
}

img. {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

h3.panel-title {
    text-align: center;
}
</style>

<body>
<?php if (session()->get("success")): ?>
        <script>
            $(document).ready(function() { $.notify({ message: '<?= session()->get("success") ?>',}, { type: 'success',},)})
        </script>
    <?php elseif (session()->get("error")): ?>
      <script>
            $(document).ready(function() { $.notify({ message: '<?= session()->get("error") ?>',}, { type: 'danger',},)})
        </script>
    <?php endif; ?>
    <div class="container">
        <div class="row centered-form">
            <div class="col-md-12 col-sm-offset-2 col-md-offset-12">
                <div class="panel panel-default">
                    <div class="panel-heading centre_all">
                        <img alt="Paris" style="width:50%"
                            src="https://africa-public.food.jumia.com/marketing/production/ke/images/nl/icon/circle-cropped%20%2813%29.png?v=1625049168">
                        <h3 class="panel-title ">Partner with us today and grow your business <small>It's
                                free!</small>
                        </h3>
                        <p class="panel-title">List your business online by submiting your details in the form below.
                        </p>
                    </div>
                    
                    <div class="panel-body">
                    <form action="/vendor-self-sign-up/add/goals" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="fname" id="fname"
                                            class="form-control input-sm" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lname" id="lname" class="form-control input-sm"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="phooooone" name="phone" id="phone" class="form-control input-sm"
                                    placeholder="Phone">
                            </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm"
                                    placeholder="Email Address">
                            </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <input type="" name="location" id="location" class="form-control input-sm"
                                    placeholder="Location">
                            </div>
                            <input type="submit"   class="btn btn-info blue btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start back-to-top -->
    <div id="back-to-top"><i class="la la-angle-up" title="Go top"></i></div>
    <!-- end back-to-top -->
    <!-- Template JS Files -->
    <script src="../../site_file/js/jquery-3.4.1.min.js"></script>
    <script src="../../site_file/js/jquery-ui.js"></script>
    <script src="../../site_file/js/popper.min.js"></script>
    <script src="../../site_file/s/bootstrap.min.js"></script>
    <script src="../../site_file/js/bootstrap-select.min.js"></script>
    <script src="../../site_file/js/moment.min.js"></script>
    <script src="../../site_file/js/daterangepicker.js"></script>
    <script src="../../site_file/js/owl.carousel.min.js"></script>
    <script src="../../site_file/js/jquery.fancybox.min.js"></script>
    <script src="../../site_file/js/jquery.countTo.min.js"></script>
    <script src="../../site_file/js/animated-headline.js"></script>
    <script src="../../site_file/js/jquery.ripples-min.js"></script>
    <script src="../../site_file/js/main.js"></script>
</body>

</html>