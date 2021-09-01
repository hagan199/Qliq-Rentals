<?php
use App\Models\UserModel;
$model = new UserModel();
$session = session();
$firstname = session()->get('fname');
$lastname = session()->get('lname');
$user = $model->orderBy('id', 'DESC')->findAll();
$id = session()->get('logged_user');
?>
    <div class="air__menuLeft">
  <div class="air__menuLeft__outer">
    <div class="air__menuLeft__mobileToggleButton air__menuLeft__mobileActionToggle">
      <span></span>
    </div>
    <div class="air__menuLeft__toggleButton air__menuLeft__actionToggle">
      <span></span>
      <span></span>
    </div>
    <a href="/dashboard" class="air__menuLeft__logo">
      <div class="air__menuLeft__logo__letter">QI</div>
      <div class="air__menuLeft__logo__name">Rental</div>
      <div class="air__menuLeft__logo__descr">QI Rental</div>
    </a>
    <a href="javascript: void(0);" class="air__menuLeft__user">
      <div class="air__menuLeft__user__avatar">
        <img src="../../components/kit/core/img/avatars/avatar.png" alt="David Beckham" />
      </div>
      <div class="air__menuLeft__user__name">
      <?php session()->get('fname').  ' ' .session()->get('lname') ?>
      </div>
      <div class="air__menuLeft__user__role">
        Administrator
      </div>
    </a>
    <div class="air__menuLeft__container kit__customScroll">
      <ul class="air__menuLeft__list">
        <li class="air__menuLeft__category" <?php if($page == "Vendor Service")echo'' ?>>
          <a href="/dashboard"> <span>Dashboard</span></a>
       
        </li>
        <li class="air__menuLeft__item <?php if($page == 'Booking')echo'air__menuLeft__item--active'; ?>">
          <a href="/booking/list/item"  class="air__menuLeft__link air__sidebar__actionToggle">
            <i class="fe fe-settings air__menuLeft__icon"></i>
            <span>Booked Detail</span>
          </a>
        </li>
        <li class="air__menuLeft__item <?php if($page == 'Booking')echo'air__menuLeft__item--active'; ?>">
          <a href="/approved/list/item"  class="air__menuLeft__link air__sidebar__actionToggle">
            <i class="fe fe-settings air__menuLeft__icon"></i>
            <span>Approve Booked List </span>
          </a>
        </li>
        <li class="air__menuLeft__item">
          <a href="/cancel_list/list/item"  class="air__menuLeft__link air__sidebar__actionToggle">
            <i class="fe fe-settings air__menuLeft__icon"></i>
            <span>Cancel Booked List </span>
          </a>
        </li>
        <li class="air__menuLeft__category">
          <span> Admin Configuration</span>
        </li>
        <li class="air__menuLeft__item air__menuLeft__submenu">
          <a href="javascript: void(0)" class="air__menuLeft__link">
            <i class="fe fe-user air__menuLeft__icon"></i>
            <span>Adminstrator</span>
          </a>
          <ul class="air__menuLeft__list">
          <li class="">
            <a href="/users/add/goals" class="air__menuLeft__link">
                <span>Setup User</span>
              </a>
            </li>
            <li class="<?php if($page == 'user')echo 'active'; ?>">
              <a href="https://html.airui.cloud/versions/no-layout/auth-forgot-password.html" class="air__menuLeft__link">
                <span>Forgot Password</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="air__menuLeft__item air__menuLeft__submenu <?php if($page == 'Vendor Service' || $page == 'Sub Category Service'  
        || $page == 'Service' || $page == 'Category Service' || $page == 'Setting Vendor')echo'air__menuLeft__submenu--active'; ?>">
          <a href="javascript: void(0)" class="air__menuLeft__link">
            <i class="fe fe-home air__menuLeft__icon"></i>
            <span>Vendor</span>
            <span class="badge text-white bg-blue-light float-right mt-1 px-2"></span>
          </a>
          <ul class="air__menuLeft__list">
          <li class="air__menuLeft__item  <?php if($page == 'Setting Vendor')echo'air__menuLeft__item--active'; ?>">
            <a href="/svendor/edit/goals" class="air__menuLeft__link">
                <span>Vendor Name</span>
              </a>
            </li>
            <li class="air__menuLeft__item  ">
            <a href="/sign-up-vendor/add/goals" class="air__menuLeft__link">
                <span>Sign Up Request Vendor</span>
              </a>
            </li>
            <li class="air__menuLeft__item <?php if($page == 'Service')echo'air__menuLeft__item--active'; ?>">
            <a href="/services/add/servicesadd" class="air__menuLeft__link">
                <span>Service</span>
              </a>
            </li>
            <li class="air__menuLeft__item <?php if($page == 'Category Service')echo'air__menuLeft__item--active'; ?>">
            <a href="/cservice/add/goals" class="air__menuLeft__link">
                <span>Cat Service</span>
              </a>
            </li>
            <li class="air__menuLeft__item <?php if($page == 'Sub Category Service')echo'air__menuLeft__item--active'; ?>">
            <a href="/subservice/add/goals" class="air__menuLeft__link">
                <span>Sub Cat Service</span>
              </a>
            </li>
            <li class="air__menuLeft__item <?php if($page == 'Vendor Service')echo'air__menuLeft__item--active'; ?>">
            <a href="/vservice/add/goals" class="air__menuLeft__link">
                <span>Vendor Service</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="air__menuLeft__category">
          <span>Finance</span>
        </li>
        <li class="air__menuLeft__item air__menuLeft__submenu">
          <a href="javascript: void(0)" class="air__menuLeft__link">
            <i class="fe fe-bookmark air__menuLeft__icon"></i>
            <span>Payment</span>
          </a>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/payment-detail" class="air__menuLeft__link">
                <span>Payment Detail</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>