<section class="left-panel">
    <div class="d-flex sidebar flex-column p-3 " ">
        
        <div class="row shadow ">
            <div class="col-md-4">
              <i class="fas fa-user-md text-white" style="font-size:70px;"></i>
            </div>
            <div class="col-md-8">
                <h5 class="text">Health Inspector Panel</h5>
            </div>
        </div>
        
        <hr>
        <ul class="nav nav-pills flex-column mb-2 shadow">
            <li class="color-li">
                <a class="nav-link  text-white" href="{{ '/division' }}">
                    <i class="fas fa-home green"></i>
                  Dashboard
                </a>
            </li>
           
            <li class="color-li">
                <a class="nav-link text-white" href="{{ '/division/vaccine_details' }}">
                    <i class="fas fa-crutch yellow"></i>
                  Vaccine Details
                </a>
            </li>
            <li class="color-li">
                <a class="nav-link text-white" href="{{ '/division/my_profile' }}">
                    <i class="fas fa-user-circle tomato"></i>
                  My Profile
                </a>
            </li>
        </ul>
        <hr>
    </div>
</section>