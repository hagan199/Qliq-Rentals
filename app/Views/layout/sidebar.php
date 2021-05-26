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

      <?= session()->get('fname').  ' ' .session()->get('lname') ?>
      </div>
      <div class="air__menuLeft__user__role">
      <?php
      if(session()->get('user_type') == 101 ){
        echo 'Admin';
      }elseif(session()->get('user_type') == 202){
      echo 'Vendor';
      }
      ?>
      </div>
    </a>
    <div class="air__menuLeft__container kit__customScroll">
      <ul class="air__menuLeft__list">
      <li class="air__menuLeft__category">
          <span>Dashboards</span>
        </li>

        <?php if (session()->has("logged_user")):?>
      <?php else:?>
        <?php endif;?>
        <!--DASHBOARD ----->
        <li class="air__menuLeft__category">
            <span>Booked</span>
        </li>
        <li class="air__menuLeft__item air__menuLeft__submenu">
          <a href="javascript: void(0)" class="air__menuLeft__link">
            <i class="fe fe-database air__menuLeft__icon"></i>
            <span>Booked List</span>
          </a>
          <?php if (session()->get('user_type') == 101):?>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/booking" class="air__menuLeft__link">
                <span>Book List</span>
              </a>
            </li>
       
            <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/booking" class="air__menuLeft__link">
                <span>Book List</span>
              </a>
            </li>
          </ul>
      
          </ul>
          <?php endif;?>
       
          <?php if (session()->get('user_type') == 202):?>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/booking" class="air__menuLeft__link">
                <span>Vendor Order </span>
              </a>
            </li>
          </ul>
          </ul>
        </li>
        <?php endif;?>
          <!----ADMINSTATOR ----->

          <?php if (session()->get('user_type') == 101):?>
        <li class="air__menuLeft__category">
            <span>Adminstator</span>
        </li>
        <li class="air__menuLeft__item air__menuLeft__submenu">
          <a href="javascript: void(0)" class="air__menuLeft__link">
            <i class="fe fe-database air__menuLeft__icon"></i>
            <span>Adminstator</span>
          </a>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/users/add/goals" class="air__menuLeft__link">
                <span>User</span>
              </a>
            </li>
          </ul>

          <!----VENDOR CONFIGURATION ----->
        <li class="air__menuLeft__category">
          <span>Vendor Configuration</span>
        </li>
        <li class="air__menuLeft__item air__menuLeft__submenu">
          <a href="javascript: void(0)" class="air__menuLeft__link">
            <i class="fe fe-database air__menuLeft__icon"></i>
            <span>Vendor</span>
          </a>

          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/svendor/edit/goals" class="air__menuLeft__link">
                <span>Setup Vendor Name</span>
              </a>
            </li>
          </ul>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/services/add/servicesadd" class="air__menuLeft__link">
                <span>Setup Service</span>
              </a>
            </li>
          </ul>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/cservice/add/goals" class="air__menuLeft__link">
                <span>Setup Cat Service</span>
              </a>
            </li>
          </ul>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/subservice/add/goals" class="air__menuLeft__link">
                <span>Setup Sub Cat Service</span>
              </a>
            </li>
          </ul>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/vservice/add/goals" class="air__menuLeft__link">
                <span>Setup Vendor Service</span>
              </a>
            </li>
          </ul>
    <!----VENDOR CONFIGURATION ----->
          <li class="air__menuLeft__category">
          <span>Hotel Configuration</span>
        </li>
        <li class="air__menuLeft__item air__menuLeft__submenu">
          <a href="javascript: void(0)" class="air__menuLeft__link">
            <i class="fe fe-database air__menuLeft__icon"></i>
            <span>Hotel</span>
          </a>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/svendor/edit/goals" class="air__menuLeft__link">
                <span>Setup Canopy</span>
              </a>
            </li>
          </ul>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/services/add/servicesadd" class="air__menuLeft__link">
                <span>Setup Hall</span>
              </a>
            </li>
          </ul>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/cservice/add/goals" class="air__menuLeft__link">
                <span>Setup Hall</span>
              </a>
            </li>
          </ul>
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item">
              <a href="/vservice/add/goals" class="air__menuLeft__link">
                <span>Setup Room</span>
              </a>
            </li>
          </ul>
          <?php endif;?>


      
      <div class="air__menuLeft__banner">
        <p>More components, more styles, more themes, and premium support!</p>
        <a href="https://themeforest.net/item/air-ui-multi-concept-admin-template/24434456" target="_blank"
          rel="noopener noreferrer" class="btn btn-white text-center d-block">
          Buy Air UI
        </a>
      </div>

  
    </div>
  </div>
</div>