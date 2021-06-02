
    <div class="air__layout">







<div class="air__layout__header">
        <div class="air__utils__header">
          <div class="air__topbar">
  <div class="air__topbar__searchDropdown dropdown mr-md-4 mr-auto">
    <div class="air__topbar__search dropdown-toggle" data-toggle="dropdown" data-offset="5,15">
      <div class="air__topbar__searchContainer">

      </div>
    </div>
    <div class="dropdown-menu" role="menu">
    </div>
  </div>
  <div class="dropdown mr-auto d-none d-md-block">


  </div>

  <div class="air__topbar__actionsDropdown dropdown mr-4 d-none d-sm-block">
    <a href="#" class="dropdown-toggle text-nowrap" data-toggle="dropdown" aria-expanded="false" data-offset="0,15">
      <i class="dropdown-toggle-icon fe fe-menu"></i>
      <span class="dropdown-toggle-text">Actions</span>
    </a>
    <div class="air__topbar__actionsDropdownMenu dropdown-menu dropdown-menu-right" role="menu">
      <div style="width: 350px;">
        <div class="card-header card-header-flex">
  <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold nav-tabs-noborder nav-tabs-stretched">
    <li class="nav-item">
      <a
        href="#tab-alert-content"
        class="nav-link active"
        id="tab-alert"
        role="button"
        data-toggle="tab"
      >
        Alerts
      </a>
    </li>
    <li class="nav-item">
      <a
        href="#tab-events-content"
        class="nav-link"
        id="tab-events"
        role="button"
        data-toggle="tab"
      >
        Events
      </a>
    </li>
    <li class="nav-item">
      <a
        href="#tab-actions-content"
        class="nav-link"
        id="tab-actions"
        role="button"
        data-toggle="tab"
      >
        Actions
      </a>
    </li>
  </ul>
</div>
<div class="card-body">
  <div class="tab-content">
    <div class="tab-pane fade show active" id="tab-alert-content" role="tabpanel" aria-labelledby="tab-alert-content" >
      <div class="height-300 kit__customScroll">
      </div>
    </div>
    <div
      class="tab-pane fade"
      id="tab-events-content"
      role="tabpanel"
      aria-labelledby="tab-alert-content"
    >
      <div class="text-center py-4 bg-light rounded">
        No Events Today
      </div>
    </div>
    <div
      class="tab-pane fade"
      id="tab-actions-content"
      role="tabpanel"
      aria-labelledby="tab-alert-content"
    >
      <div class="text-center py-4 bg-light rounded">
        No Actions Today
      </div>
    </div>
  </div>
</div>
<?php if (session()->get("success")): ?>
        <script>
            $(document).ready(function() { $.notify({ message: '<?= session()->get("success") ?>',}, { type: 'success',},)})
        </script>
    <?php elseif (session()->get("error")): ?>
      <script>
            $(document).ready(function() { $.notify({ message: '<?= session()->get("error") ?>',}, { type: 'danger',},)})
        </script>
    <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="dropdown">
    <a href="#" class="dropdown-toggle text-nowrap" data-toggle="dropdown" aria-expanded="false" data-offset="5,15">
      <img class="dropdown-toggle-avatar" src="../../components/kit/core/img/avatars/avatar-2.png" alt="User avatar" />
    </a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
     <!--- <a class="dropdown-item" href="javascript:void(0)">
        <i class="dropdown-icon fe fe-user"></i>
        Profile
      </a>-->
      <a href="#" class="dropdown-item"  data-toggle="modal" data-target="#signupPopupForm">  Profile</a>
      <div class="dropdown-divider"></div>
      <div class="dropdown-header">
        Home
      </div>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/logout">
        <i class="dropdown-icon fe fe-log-out"></i> Logout
      </a>
    </div>
  </div>
</div>

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Profile Detail</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <span class="button" data-dismiss="modal" aria-label="Close">Close</span>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<script>
$('.modal').removeClass('show');
</script>