<?php
$title = "check eligibility";
include("Master/header.php");
?>



<!-- slide background gradient -->

<div class="page-header min-vh-80" style="background-image: url('picture/header-background/calc.jpg');background-attachment:fixed ;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="text-center">
            <h1 class="text-white animate__animated animate__backInLeft"  style="font-family:'Poppins'; letter-spacing:1px; color:white;"><span class="shadow border-radius-lg px-4 py-2">Check Your Eligibility</span></h1>
          </div>
        </div>
      </div>
    </div>
  </div>











<div class="card card-body shadow-xl blur mx-3 mx-md-4 mt-n10 forhide text-center" >

<section class="pt-3 pb-4 " id="count-stats" >
  <div class="container" >
        <div class="row" >
          <div class="col-md-6 position-relative">
            <div class="p-3 text-center">
              
              <div class="card" data-animation="true">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <img src="picture/header-background/all-coun.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </div>
                <div class="card-body text-center">
                  <h3 class="font-weight-normal mt-3">
                    Change Your Life By Joining
                    <span class="text-primary font-weight-bold">Rudraksh Group
                    Overseas Counsultancy</span>
                  </h3>
                  <ul style="text-align: left; color:black">
                    <li style="list-style-image: url(picture/icon/b1.png);">
                      <p class="mb-0">
                         Enjoy the non-stop entertainment with super cities
                      </p>
                    </li>
                    <li style="list-style-image: url(picture/icon/b1.png);">
                      <p class="mb-0">
                          Quality education with high-end technology
                      </p>
                    </li>
                    <li style="list-style-image: url(picture/icon/b1.png);">
                      <p class="mb-0">
                         Enjoy the rich cultural and historical heritage
                      </p>
                    </li>
                    <li style="list-style-image: url(picture/icon/b1.png);">
                      <p class="mb-0">
                         One of the best healthcare systems in the world
                      </p>
                    </li>
                    <li style="list-style-image: url(picture/icon/b1.png);">
                      <p class="mb-0">
                         Great job opportunities & amazing work-life balance
                      </p>
                    </li>
                    <li style="list-style-image: url(picture/icon/b1.png);">
                      <p class="mb-0">
                         High standard of living with cheaper living costs
                      </p>
                    </li>
                    <li style="list-style-image: url(picture/icon/b1.png);">
                      <p class="mb-0">
                         Explore the incredibly diverse landscapes
                      </p>
                    </li>
                  </ul>
                  
                </div>
                <hr class="dark horizontal my-0">
               
              </div>

            </div>
            
        </div>
        <div class="col-md-6 position-relative" >
                
               <div class="card-body text-center shadow border-radius-lg" style="background-color:white">
               <h3 class="font-weight-normal mt-3 text-primary font-weight-bold">
                   Chech Your Eligibility
               </h3>
              
                   <hr class="dark horizontal my-0">

              <div class="justify-content-center">
              <form role="form" id="contact-form" method="post" autocomplete="off">
                <div class="card-body">
                    <div>
                      <div class="input-group input-group-dynamic mb-4" style="justify-content: center;">
                        <label class="form-label" style="color:black">First Name</label>
                        <input class="form-control text-center" required aria-label="First Name..." type="text" >
                      </div>
                    </div>
                    <div >
                      <div class="input-group input-group-dynamic mb-4" style="justify-content: center;">
                        <label class="form-label" style="color:black">Phone Number</label>
                        <input type="number"  required  class="form-control text-center" placeholder="" aria-label="Phone Number" >
                      </div>
                    </div>
                  <div class="mb-4">
                    <div class="input-group input-group-dynamic mb-4" style="justify-content: center;">
                      <label class="form-label" style="color:black">Email Address</label>
                      <input type="email" required class="form-control text-center">
                    </div>
                  </div>
                  <div class="input-group input-group-dynamic ">
                      <select class="form-select" aria-label="Age">
                          <option  selected disabled class="text-center">Age</option>
                          <option class="text-center" value="1">18-24 Years</option>
                          <option class="text-center" value="2">25-32 Years</option>
                          <option class="text-center" value="3">33-39 Years</option>
                          <option class="text-center" value="3">40-44 Years</option>
                        </select>
                  </div>

                  <div class="input-group input-group-dynamic mt-2" >
                      <select class="form-select" aria-label="Skilled">
                          <option selected disabled class="text-center">Education</option>
                          <option class="text-center" value="1">PHD / Doctorate</option>
                          <option class="text-center" value="2">Masters</option>
                          <option class="text-center" value="3">Post Graduation</option>
                          <option class="text-center" value="3">Two or more Certificates</option>
                          <option class="text-center" value="3">Graduation</option>
                          <option class="text-center" value="3">Intermediate / 12th</option>
                          <option class="text-center" value="3">Matriculation / 10th</option>
                          <option class="text-center" value="3">Diploma 3 Years</option>
                          <option class="text-center" value="3">None</option>
                        </select>
                  </div>

                  <div class="input-group input-group-dynamic mt-2" >
                      <select class="form-select" aria-label="Skilled">
                          <option selected disabled class="text-center">Experience</option>
                          <option class="text-center" value="1">Less than 3 years</option>
                          <option class="text-center" value="2">3-4 Years</option>
                          <option class="text-center" value="3">5-7 Years</option>
                          <option class="text-center" value="3">8-10 Years</option>
                          <option class="text-center" value="3">None</option>
                        </select>
                  </div>

                  <div class="input-group input-group-dynamic mt-2" >
                      <select class="form-select" aria-label="Visa Type">
                          <option selected disabled class="text-center">Visa Type</option>
                          <option class="text-center" value="1">Permenant Residency Visa</option>
                          <option class="text-center" value="2">Work Visa</option>
                          <option class="text-center" value="3">Tourist Visa</option>
                          <option class="text-center" value="3">Business Visa</option>
                          <option class="text-center" value="3">Dependent Visa</option>
                          <option class="text-center" value="3">USA H-1B Visa</option>
                          <option class="text-center" value="3">Canada Super Visa</option>
                          <option class="text-center" value="3">USA O-1 Visa</option>
                          <option class="text-center" value="3">UK Innovator Visa</option>
                          <option class="text-center" value="3">USA EB-5 Visa</option>
                        </select>
                  </div>


                  <div class="input-group input-group-dynamic mt-2" >
                      <select class="form-select" aria-label="Visa Type">
                          <option selected disabled class="text-center">Country To Immigrate</option>
                          <option class="text-center" value="1">Canada</option>
                          <option class="text-center" value="2">UK</option>
                          <option class="text-center" value="3">Australia</option>
                          <option class="text-center" value="3">USA</option>
                          <option class="text-center" value="3">Germany</option>
                          <option class="text-center" value="3">Singapore</option>
                          <option class="text-center" value="3">New Zealand</option>
                          <option class="text-center" value="3">Schengen</option>
                          <option class="text-center" value="3">Poland</option>
                          <option class="text-center" value="3">Italy</option>
                          <option class="text-center" value="3">Malesia</option>
                        </select>
                  </div>
                  
                  <div class="mb-4 mt-4">
                    <div class="form-check form-switch mb-4 d-flex align-items-center">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                      <label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault">I agree to the 
                        <a class="text-dark  "><u>
                      Terms and Conditions
                      </u></a>.</label>
                </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-12 mt-2">
                      <button type="submit" class="btn bg-gradient-dark w-100">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
          </div>

          </div>
        </div>

          
    </div>
  </div>
</section>
</div>







<!-- title of section
 -->









     


    









  </div>


  </div>
  


</div>













<!-- About Section -->









<!-- footer section -->









<!-- -------- START Content Presentation Docs ------- -->
<div style="background-image: url(picture/header-background/contact.jpg); background-size:cover; ">
<div class="container mt-sm-5 mt-4">
  <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl blur shadow-blur" loading="lazy" >
    <div class="container " >
      <div class="row">
        <div class="col-lg-6">
          <img src="picture/header-background/contact-2.png" style="width: 600px; position: fixed; ">
        </div >
        <div class="col-lg-6 my-auto">
          <div class="container py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center text-primary">Get in Touch</h3>
        <form role="form" id="contact-form" method="post" autocomplete="off">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <label class="form-label" style="color:black">First Name</label>
                  <input class="form-control" aria-label="First Name..." type="text" >
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <div class="input-group input-group-dynamic mb-4">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-dynamic mb-4">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="input-group input-group-dynamic py-3">
                <select class="form-select" aria-label="Visa Type">
                    <option selected>Student Visa</option>
                    <option value="1">Permenant Residency Visa</option>
                    <option value="2">Work Visa</option>
                    <option value="3">Tourist Visa</option>
                    <option value="3">Business Visa</option>
                    <option value="3">Dependent Visa</option>
                    <option value="3">USA H-1B Visa</option>
                    <option value="3">Canada Super Visa</option>
                    <option value="3">USA O-1 Visa</option>
                    <option value="3">UK Innovator Visa</option>
                    <option value="3">USA EB-5 Visa</option>
                  </select>
            </div>
            <div class="row">
              <div class="col-md-12 mt-4">
                <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<!-- Contact Info -->


<div class="container">
  <div class="row mt-6">
    <div class="col-lg-4">
      <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4 shadow">
        <i class="fa fa-location text-white fs-2"></i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5 class="text-white">Address</h5>
          <p class="text-white">S.C.O.: 15 -16, Top Floor, Phase:1
                                Sahibzada Ajit Singh Nagar, Punjab 160070
                                India</p>
          <a href="https://www.google.com/maps/dir//RD+group,+S.C.O.:+15+-16,+Top+Floor,+Phase:1,+Sahibzada+Ajit+Singh+Nagar,+Punjab+160070,+India/@30.7268292,76.6518091,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390fee6e267ec513:0xe362c1a27b4bcfad!2m2!1d76.7218493!2d30.726848" target="_blank" class="text-white icon-move-right">
            Let's start
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>
      <div class="col-lg-4">
      <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4 shadow">
        <i class="fa-solid fa-square-phone text-white fs-2"></i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5 class="text-white">Phone Number</h5>
          <p class="text-white">S.C.O.: 15 -16, Top Floor, Phase:1
                                Sahibzada Ajit Singh Nagar, Punjab 160070
                                India</p>
          <a href="https://www.google.com/maps/dir//RD+group,+S.C.O.:+15+-16,+Top+Floor,+Phase:1,+Sahibzada+Ajit+Singh+Nagar,+Punjab+160070,+India/@30.7268292,76.6518091,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390fee6e267ec513:0xe362c1a27b4bcfad!2m2!1d76.7218493!2d30.726848" target="_blank" class="text-white icon-move-right">
            Let's start
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>

      <div class="col-lg-4">
      <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4 shadow">
        <i class="fa-solid fa-envelope text-white fs-2"></i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5 class="text-white">Address</h5>
          <p class="text-white">S.C.O.: 15 -16, Top Floor, Phase:1
                                Sahibzada Ajit Singh Nagar, Punjab 160070
                                India</p>
          <a href="https://www.google.com/maps/dir//RD+group,+S.C.O.:+15+-16,+Top+Floor,+Phase:1,+Sahibzada+Ajit+Singh+Nagar,+Punjab+160070,+India/@30.7268292,76.6518091,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390fee6e267ec513:0xe362c1a27b4bcfad!2m2!1d76.7218493!2d30.726848" target="_blank" class="text-white icon-move-right">
            Let's start
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- -------- END Content Presentation Docs ------- -->



<?php
include("Master/footer.php");
?>