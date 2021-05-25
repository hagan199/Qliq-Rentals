<?= $this->extend('layout/main')?>
<?= $this->section('content')?>
<div class="container">
    <div class="row">
        <div class="col-12">
        <?php
        $fname = session()->get('fname');
        $lname = session()->get('lname');
        if (session()->get('user_type')=='101'):
        echo  " <h1>Welcome $fname $lname </h1> ";
        elseif(session()->get('type')=='202'):
        echo   " <h1>Welcome $fname $lname </h1> ";
        else:
        endif;
        ?>
        </div>
    </div>







</div>





<?= $this->endSection()?> 
