<section class="left-panel shadow">
    <div class="d-flex sidebar flex-column p-3 " ">

          <div class="row shadow ">
              <div class="col-md-4">
                <i class="fas fa-user-tie text-white" style="font-size:70px;"></i>
              </div>
              <div class="col-md-8">
                  <h5 class="text">Super Admin (DGSH)</h5>
              </div>
          </div>

        <hr>
        <ul class="nav nav-pills flex-column mb-2 shadow">
            <li class="color-li">
                <a class="nav-link  text-white " href="{{ '/admin' }}">
                    <i class="fas fa-home green"></i>
                  Dashboard
                </a>
            </li>
            <li class="color-li">
                <a class="nav-link text-white " href="{{ '/admin/vaccine_details' }}">
                    <i class="fas fa-crutch yellow"></i>
                  Vaccine Details
                </a>
            </li>
            <li class="color-li">
              <a class="nav-link text-white " href="{{ '/admin/notice_list' }}">
                <i class="fas fa-flag-checkered text-warning"></i>
                Manage Notice
              </a>
          </li>
        <li class="color-li">
            <a class="nav-link text-white " href="{{ '/admin/manage_employee' }}">
              <i class="fas fa-users text-secondary"></i>
              Manage Employee
            </a>
        </li>

        
        <a class="nav-link text-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <i class="fas fa-chart-pie text-info"></i>
          Statistics
        </a>
        <div class="collapse" id="collapseExample">
          <div class=" ">
            <ul>
              <li class="color-li"> 
                <a class="nav-link text-white" href="{{ '/admin/upazilla_statistics' }}"> 
                  <i class="far fa-circle" style="font-size:13px;"></i>Upazilla wise</a>
              </li>
              <li class="color-li"> 
                <a class="nav-link text-white" href="{{ '/admin/district_statistics' }}"> 
                  <i class="far fa-circle" style="font-size:13px;"></i>District wise</a>
              </li>
              <li class="color-li"> 
                <a class="nav-link text-white" href="{{ '/admin/division_statistics' }}"> 
                  <i class="far fa-circle" style="font-size:13px;"></i>Division wise</a>
              </li>
            </ul>
          </div>
        </div>

          <li class="color-li">
              <a class="nav-link text-white" href="{{'/admin/my_profile' }}">
                <i class="fas fa-user-circle tomato"></i>
                My Profile
              </a>
          </li>

        </ul>
        <hr>
    </div>
</section>
