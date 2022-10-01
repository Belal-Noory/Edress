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
          <h1 class="text-white animate__animated animate__backInLeft" style="font-family:'Poppins'; letter-spacing:1px; color:white;"><span class="shadow border-radius-lg px-4 py-2">Check Your Eligibility</span></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card card-body shadow-xl blur mx-3 mx-md-4 mt-n10 forhide text-center">
  <section class="pt-3 pb-4 " id="count-stats">
    <div class="container">
      <div class="row">
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
        <div class="col-md-6 position-relative">
          <div class="card-body text-center shadow border-radius-lg" style="background-color:white">
            <h3 class="font-weight-normal mt-3 text-primary font-weight-bold">
              Chech Your Eligibility
            </h3>
            <hr class="dark horizontal my-0">
            <div class="justify-content-center">
              <form role="form" id="eligibility-form" method="post" autocomplete="off">
                <div class="card-body">
                  <div>
                    <div class="input-group input-group-dynamic mb-4" style="justify-content: center;">
                      <label class="form-label" style="color:black">First Name</label>
                      <input class="form-control text-center" required aria-label="First Name..." type="text" name="name">
                    </div>
                  </div>
                  <div>
                    <div class="input-group input-group-dynamic mb-4" style="justify-content: center;">
                      <label class="form-label" style="color:black">Phone Number</label>
                      <input type="text" required class="form-control text-center" name="phone" placeholder="" aria-label="Phone Number">
                    </div>
                  </div>
                  <div class="mb-4">
                    <div class="input-group input-group-dynamic mb-4" style="justify-content: center;">
                      <label class="form-label" style="color:black">Email Address</label>
                      <input type="email" name="email" required class="form-control text-center">
                    </div>
                  </div>
                  <div class="input-group input-group-dynamic ">
                    <select class="form-select" aria-label="Age" name="age">
                      <option selected disabled class="text-center" value="">Age</option>
                      <option class="text-center" value="18-24 Years">18-24 Years</option>
                      <option class="text-center" value="25-32 Years">25-32 Years</option>
                      <option class="text-center" value="33-39 Years">33-39 Years</option>
                      <option class="text-center" value="40-44 Years">40-44 Years</option>
                    </select>
                  </div>
                  <div class="input-group input-group-dynamic mt-2">
                    <select class="form-select" aria-label="Skilled" name="education">
                      <option selected disabled class="text-center" value="">Education</option>
                      <option class="text-center" value="PHD / Doctorate">PHD / Doctorate</option>
                      <option class="text-center" value="Masters">Masters</option>
                      <option class="text-center" value="Post Graduation">Post Graduation</option>
                      <option class="text-center" value="Two or more Certificates">Two or more Certificates</option>
                      <option class="text-center" value="Graduation">Graduation</option>
                      <option class="text-center" value="Intermediate / 12th">Intermediate / 12th</option>
                      <option class="text-center" value="Matriculation / 10th">Matriculation / 10th</option>
                      <option class="text-center" value="Diploma 3 Years">Diploma 3 Years</option>
                      <option class="text-center" value="None">None</option>
                    </select>
                  </div>
                  <div class="input-group input-group-dynamic mt-2">
                    <select class="form-select" aria-label="Skilled" name="experince">
                      <option selected disabled class="text-center" value="">Experience</option>
                      <option class="text-center" value="Less than 3 years">Less than 3 years</option>
                      <option class="text-center" value="3-4 Years">3-4 Years</option>
                      <option class="text-center" value="5-7 Years">5-7 Years</option>
                      <option class="text-center" value="8-10 Years">8-10 Years</option>
                      <option class="text-center" value="None">None</option>
                    </select>
                  </div>
                  <div class="input-group input-group-dynamic mt-2">
                    <select class="form-select" aria-label="Visa Type" name="visa">
                      <option selected disabled value="">Visa Type</option>
                      <option value="Student Visa">Student Visa</option>
                      <option value="Permenant Residency Visa">Permenant Residency Visa</option>
                      <option value="Work Visa">Work Visa</option>
                      <option value="Tourist Visa">Tourist Visa</option>
                      <option value="Business Visa">Business Visa</option>
                      <option value="Dependent Visa">Dependent Visa</option>
                      <option value="USA H-1B Visa">USA H-1B Visa</option>
                      <option value="Canada Super Visa">Canada Super Visa</option>
                      <option value="USA O-1 Visa">USA O-1 Visa</option>
                      <option value="UK Innovator Visa">UK Innovator Visa</option>
                      <option value="USA EB-5 Visa">USA EB-5 Visa</option>
                    </select>
                  </div>
                  <div class="input-group input-group-dynamic mt-2">
                    <select class="form-select" aria-label="Visa Type" name="country">
                      <option selected disabled class="text-center" value="">Country To Immigrate</option>
                      <option class="text-center" value="Canada">Canada</option>
                      <option class="text-center" value="UK">UK</option>
                      <option class="text-center" value="Australia">Australia</option>
                      <option class="text-center" value="USA">USA</option>
                      <option class="text-center" value="Germany">Germany</option>
                      <option class="text-center" value="Singapore">Singapore</option>
                      <option class="text-center" value="New Zealand">New Zealand</option>
                      <option class="text-center" value="Schengen">Schengen</option>
                      <option class="text-center" value="Poland">Poland</option>
                      <option class="text-center" value="Italy">Italy</option>
                      <option class="text-center" value="Malesia">Malesia</option>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="addeligi" value="addeligi">
                <div class="row">
                  <div class="col-md-12 mt-2">
                    <button type="button" class="btn bg-gradient-dark w-100" id="btnaddEligibility">
                      <span class="fa fa-spinner fa-spin d-none"></span>
                      <span class="fa fa-check d-none"></span>
                      Submit
                    </button>
                  </div>
                </div>
                <span class="alert alert-success mt-1 p-2 d-block text-white d-none" id="msgalert">Thank you for sending your request ;)</span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
include("Master/footer.php");
?>

<script>
  $(document).ready(function() {
    // Add eligibility
    $("#btnaddEligibility").on("click", function(e) {
      e.preventDefault();
      ths = $(this);
      $("#eligibility-form").find("input, select").each(function() {
        if (!$.trim(this.value).length) {
          $(this).attr("style", "border:1px solid red");
        } else {
          $(this).attr("style", "border:none");
        }
      });

      $(ths).children("span").first().removeClass("d-none");
      $.post("database/controller.php", $("#eligibility-form").serialize(), function(data) {
        console.log(data);
        if (data > 0) {
          $(ths).children("span").first().addClass("d-none");
          $(ths).children("span").last().removeClass("d-none");
          $("#msgalert").removeClass("alert-danger").addClass("alert-success").text("Thank for your request ;)");
          $('#eligibility-form').trigger("reset");
          setTimeout(() => {
            $("#msgalert").addClass("d-none");
          }, 50000);
        }else{
          $(ths).children("span").first().addClass("d-none");
          $(ths).children("span").last().addClass("d-none");
        }
      });

    });
  });
</script>