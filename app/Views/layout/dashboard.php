<?php $this->extend('layout/main')?>
<?php $this->section('content')?>
<div class="air__layout__content">
        <div class="air__utils__content">
        <?php
        $fname = session()->get('fname');
        $lname = session()->get('lname');
        if (session()->get('user_type')=='101'):
        echo  " <h1>Welcome $fname $lname to Admin Dashboard </h1> ";
        elseif(session()->get('user_type')=='202'):
        echo   " <h1>Welcome $fname $lname to Vendor Dashboard </h1> ";
        else:
        endif;
        ?>  </h5>
<div class="row">
    <!---Total Users-->
    <?php if (session()->get('user_type') == 101):?>
<div class="col-lg-4">
    <div class="card">
        <a  href="/users/add/goals">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="mr-auto">
                        <p class="text-uppercase text-dark font-weight-bold mb-1">
                         User
                        </p>
                        <p class="text-gray-5 mb-0">
                        Total User
                        </p>
                        </div>
                    <p class="text-primary font-weight-bold font-size-24 mb-0"> <?= $usertotal ?></p>
                </div>
            </div>
        </a>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="card">
        <a  href="/users/add/goals">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="mr-auto">
                        <p class="text-uppercase text-dark font-weight-bold mb-1">
                        Vendor Owners
                        </p>
                        <p class="text-gray-5 mb-0">
                        Total Vendor Owners
                        </p>
                        </div>
                    <p class="text-secondary font-weight-bold font-size-24 mb-0"> <?= $usertotal ?></p>
                </div>
            </div>
        </a>
    </div>
    </div>
    <div class="col-lg-4">
        <a  href="/booking">
    <div class="card">
        <div class="card-body">
        <div class="d-flex flex-wrap align-items-center">
            <div class="mr-auto">
                <p class="text-uppercase text-dark font-weight-bold mb-1">
                    Booking
                    </p>
                <p class="text-gray-5 mb-0">
                    Total Booking
                    </p>
                    </div>
                <p class="text-success font-weight-bold font-size-24 mb-0"><?= $bookingorder ?></p>
                </div>
            </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
    <div class="card">
        <a href="/approved/list/item">
        <div class="card-body">
        <div class="d-flex flex-wrap align-items-center">
            <div class="mr-auto">
                <p class="text-uppercase text-dark font-weight-bold mb-1">
                    Approved 
                    </p>
                <p class="text-gray-5 mb-0">
                    Total Approved Booking
                    </p>
                    </div>
                <p class="text-warning font-weight-bold font-size-24 mb-0"> <?= $bookingorder ?></p>
                </div>
            </div>
        </a>
        </div>
    </div>

        <!---Total Paymnent---->
    <div class="col-lg-4">
        <div class="card">
            <a href="/payment-detail">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center">
                <div class="mr-auto">
                <p class="text-uppercase text-dark font-weight-bold mb-1">
                    Payment Confirm
                </p>
                <p class="text-gray-5 mb-0">  Total Payment Confirm</p>
                </div>
                <p class="text-primary font-weight-bold font-size-24 mb-0"><?= +$bookingorder ?></p>
            </div>
            </div>
            </a>
        </div>
    </div>
    <!--------- Service-------->
    <div class="col-lg-4">
            <div class="card">
                <a href= "/services/add/servicesadd">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center">
                    <div class="mr-auto">
                    <p class="text-uppercase text-dark font-weight-bold mb-1"> Service </p>
                    <p class="text-gray-5 mb-0">Total Service Offer</p>
            </div>
            <p class="text-danger font-weight-bold font-size-24 mb-0"><?= $totalservice ?></p>
            </div>
            </div>
            </a>
        </div>
    </div>
    <!------ Vendor----->
    <div class="col-lg-4">
            <div class="card">
            <a href="/svendor/edit/goals">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center">
                    <div class="mr-auto">
                    <p class="text-uppercase text-dark font-weight-bold mb-1"> Company Vendor </p>
                    <p class="text-gray-5 mb-0">Total Vendor</p>
                    </div>
                    <p class="text-danger font-weight-bold font-size-24 mb-0"><?= $vendor ?></p>
            </div>
            </div>
            </a>
        </div>
    </div>
    <?php endif;?>
</div>



<div class="row">
<?php if (session()->get('user_type') == 101):?>
<div class="col-lg-4">
<div class="card">

        <div class="card-body">
        <div class="mb-3">
    <div class="bg-success text-white text-uppercase px-3 py-1 mb-2">
    Total Income on Service
    </div>
    <div class="table-responsive">
    <table class="table table-borderless text-gray-6 mb-0">
        <tbody>
        <tr>
            <td class="text-nowrap">
            <div class="kit__l12__donut kit__l12__donut--danger mr-3"></div>
            Tables
            </td>
            <td class="text-right"><strong>+78</strong></td>
        </tr>
        <tr>
    <td class="text-nowrap">
            <div class="kit__l12__donut kit__l12__donut--primary mr-3"></div>
            Chair
            </td>
            <td class="text-right"><strong>+58</strong></td>
        </tr>
        <tr>
            <td class="text-nowrap">
            <div class="kit__l12__donut kit__l12__donut--success mr-3"></div>
            Canopies
            </td>
            <td class="text-right"><strong>+26</strong></td>
        </tr>
        <tr>
            <td class="text-nowrap">
            <div class="kit__l12__donut kit__l12__donut--info mr-3"></div>
            Mattress
            </td>
            <td class="text-right"><strong>+18</strong></td>
        </tr>
        </tbody>
    </table>
</div>
</div>
<div>
    <div class="bg-light text-gray-6 text-uppercase px-3 py-1 mb-2">
    6 may 2019
    </div>
    <div class="table-responsive">
    <table class="table table-borderless text-muted mb-0">
        <tbody>
        <tr>
            <td>No Items</td>
        </tr>
        </tbody>
    </table>
</div>
</div>
</div>

</div>
</div>
<?php endif;?>
<?php if (session()->get('user_type') == 202):?>
<div class="col-lg-12">
<div class="card">
    <div class="card-body">
        <h5 class="mb-2">My Order History</h5>
        <div class="text-left text-nowrap">
        <div class="table-responsive">
            <table class="table table-hover">
            <tr>
                <td>Order Date</td>
                <td>Order</td>
                <td>Type</td>
                <td>BID/ASK</td>
                <td>Filled</td>
                <td>Units Total</td>
                <td>Actual Rate</td>
                <td>Est. Total</td>
                </tr>
                <tr>
                <td>2018/05/27 20:55:39</td>
                <td>2018/05/27 20:55:39</td>
                <td class="text-danger">SELL</td>
                <td>7319.44600000</td>
                <td>0.26510202</td>
                <td>0.26510202</td>
                <td>7325.77049148</td>
                <td>1937.22136398</td>
                    </tr>
                <tr>
                <td>2018/05/24 09:28:04</td>
                <td>2018/05/24 09:27:11</td>
                <td class="text-success">BUY</td>
                <td>7660.00000000</td>
                <td>0.29959731</td>
                <td>0.29959731</td>
                <td>7660.00000000</td>
                <td>-2300.65268307</td>
                    </tr>
                <tr>
                <td>2018/05/18 20:21:08</td>
                <td>2018/05/18 20:21:08</td>
                <td class="text-danger">SELL</td>
                <td>8121.00000001</td>
                <td>0.28400674</td>
                <td>0.28400674</td>
                <td>8121.00000000</td>
                <td>2300.65268871</td>
                </tr>
            </table>
            </div>
            <div class="d-flex">
            <ul class="ml-auto pagination mb-0">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
                </a>
                </li>
            </ul>
            </div>
        </div>
    </div>
    </div>
</div>
<?php endif;?>
</div>






</div>
</div>







<?= $this->endSection()?> 
