<!DOCTYPE html>
<html>

<head>
    <title>Load More Data on Page Scroll CodeIgniter 4 Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Load More Data on Page Scroll CodeIgniter 4 Tutorial</h2>
        <br />
        <div class="col-md-12" id="ajax-post-container">
            <?php foreach ($products as $product) { ?>
                <div>
                    <h3><a href="#"><?php echo $product->name ?></a></h3>
                    <p><?php echo $product->description ?></p>
                </div>
            <?php } ?>
        </div>
    </div>


    <script type="text/javascript">
        var page = 1;
        var total_pages = <?php print $count ?>;
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $("#ajax-post-container").height()) {
                page++;
                if (page < total_pages) {
                    loadMore(page);
                }
            }
        });

        function loadMore(page) {
            $.ajax({
                    url: '?page=' + page,
                    type: "GET",
                    beforeSend: function() {}
                })
                .done(function(data) {
                    $("#ajax-post-container").append(data);
                });
        }
    </script>
</body>
</html>