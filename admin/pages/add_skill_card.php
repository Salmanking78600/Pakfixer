<?php





include("../logics/common.php");
include("../components/sidebar.php");



?>





<div id="main">

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="container">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h5 class="card-title">Add New Card</h5>

                                <div>




                                </div>
                            </div>
                            <div class="card-body">
                                <form method="post" action="../logics/skilldata.php" id="form-card-info">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="personal-tab" data-bs-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal Info</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link disabled" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">Experience</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link disabled" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <!-- Personal Info Content -->
                                        <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                            <div class="card-body">
                                                <div class="form-body c">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="title">Title</label>
                                                                <input type="text" id="title" class="form-control" name="title" placeholder="Title">
                                                                <div id="title-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="container my-3">
                                                            <label for="categoryDropdown" class="form-label">Category</label>
                                                            <select name="Category" id="categoryDropdown" class="form-select">
                                                                <option value="" disabled selected>Select a Profession</option>
                                                                <option value="plumber">Plumber</option>
                                                                <option value="mechanic">Mechanic</option>
                                                                <option value="electrician">Electrician</option>
                                                                <option value="carpenter">Carpenter</option>
                                                                <option value="welder">Welder</option>
                                                                <option value="painter">Painter</option>
                                                                <option value="driver">Driver</option>
                                                                <option value="chef">Chef</option>
                                                                <option value="nurse">Nurse</option>
                                                                <option value="teacher">Teacher</option>
                                                                <option value="gardener">Gardener</option>
                                                                <option value="plasterer">Plasterer</option>
                                                                <option value="hairdresser">Hairdresser</option>
                                                                <option value="cleaner">Cleaner</option>
                                                                <option value="barber">Barber</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 my-3">

                                                            <div class="form-group">
                                                                <label for="des">Description</label>
                                                                <textarea id="des" class="form-control" name="description" placeholder="Description" rows="5"></textarea>
                                                                <div id="error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="button" class="btn btn-primary me-1 mb-1" id="personalnext">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Experience Content -->
                                        <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                            <div class="card-body">
                                                <div class="form-body c">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="expdesc">Experience Description</label>
                                                                <textarea id="expdesc" class="form-control" name="expdesc" placeholder="Describe your experience" rows="5"></textarea>
                                                                <div id="experror"></div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="experienceDropdown" class="form-label">Experience</label>
                                                            <select name="Experience" id="experienceDropdown" class="form-select">
                                                                <option value="" disabled selected>Select Experience Level</option>
                                                                <option value="1">1 year</option>
                                                                <option value="2">2 years</option>
                                                                <option value="3">3 years</option>
                                                                <option value="4">4 years</option>
                                                                <option value="5">5 years</option>
                                                                <option value="5+">5+ years</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="button" class="btn btn-secondary me-1 mb-1" id="expback">Back</button>
                                                            <button type="button" class="btn btn-primary me-1 mb-1" id="expnext">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Contact Content -->
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="card-body">
                                                <div class="form-body c">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="contact-number">Contact Number</label>
                                                                <input type="number" id="contact-number" class="form-control" name="contact-number" placeholder="Enter contact number">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="whatsapp-number">Whatsapp Number</label>
                                                                <input type="number" id="contact-number" class="form-control" name="whatsapp-number" placeholder="Enter whatsapp number">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input type="text" id="Address" class="form-control" name="address" placeholder="Enter addrress">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="button" class="btn btn-secondary me-1 mb-1" id="contactback">Back</button>
                                                            <button name="submit-btn" type="submit" class="btn btn-success me-1 mb-1" id="submit-btn">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include("../components/leftbar.php")
            ?>
        </section>
    </div>



    <?php
    include("../components/footer.php")

    ?>

    <script>
        $(document).ready(function() {
            let expdescriptionstatus = false;
            let titlestatus = false;
            let descriptionstatus = false;

            // Disable Experience and Contact Tabs initially
            $("#experience-tab").addClass("disabled");
            $("#contact-tab").addClass("disabled");

            // Personal Info Next Button Logic
            $(document).on("click", "#personalnext", function() {
                let title = $('#title').val();
                let description = $("#des").val();

                if (title == '') {
                    $("#title-error").html("<span class='text-danger fs-6 my-2'>This field is required</span>");
                } else if (title.length < 5) {
                    $("#title-error").html("<span class='text-danger fs-6 my-2'>Minimum 5 characters required</span>");
                } else if (title.length > 20) {
                    $("#title-error").html("<span class='text-danger fs-6 my-2'>Maximum 20 characters allowed</span>");
                } else {
                    titlestatus = true;
                    $("#title-error").html("");
                }

                if (description == '') {
                    $("#error").html("<span class='text-danger fs-6 my-2'>This field is required</span>");
                } else if (description.length < 10) {
                    $("#error").html("<span class='text-danger fs-6 my-2'>Minimum 10 characters required</span>");
                } else if (description.length > 200) {
                    $("#error").html("<span class='text-danger fs-6 my-2'>Maximum 200 characters allowed</span>");
                } else {
                    descriptionstatus = true;
                    $("#error").html("");
                }

                if (titlestatus && descriptionstatus) {
                    $("#personal-tab").removeClass("active");
                    $("#personal").removeClass("show active");
                    $("#experience-tab").removeClass("disabled").addClass("active");
                    $("#experience").addClass("show active");
                }
            });

            // Experience Next Button Logic
            $(document).on("click", "#expnext", function() {
                let expdescription = $("#expdesc").val();

                if (expdescription == '') {
                    $("#experror").html("<span class='text-danger fs-6 my-2'>This field is required</span>");
                } else if (expdescription.length < 10) {
                    $("#experror").html("<span class='text-danger fs-6 my-2'>Minimum 10 characters required</span>");
                } else if (expdescription.length > 200) {
                    $("#experror").html("<span class='text-danger fs-6 my-2'>Maximum 200 characters allowed</span>");
                } else {
                    expdescriptionstatus = true;
                    $("#experror").html("");
                }

                if (titlestatus && descriptionstatus && expdescriptionstatus) {
                    $("#experience-tab").removeClass("active");
                    $("#experience").removeClass("show active");
                    $("#contact-tab").removeClass("disabled").addClass("active");
                    $("#contact").addClass("show active");
                }
            });

            // Experience Back Button Logic
            $(document).on("click", "#expback", function() {
                $("#experience-tab").removeClass("active");
                $("#experience").removeClass("show active");
                $("#personal-tab").addClass("active");
                $("#personal").addClass("show active");
            });

            // Contact Back Button Logic
            $(document).on("click", "#contactback", function() {
                $("#contact-tab").removeClass("active");
                $("#contact").removeClass("show active");
                $("#experience-tab").addClass("active");
                $("#experience").addClass("show active");
            });


        });
    </script>
    <?php
    if (isset($_GET['card'])) {
        // Define messages for success and error
        $successMessage = isset($_GET['message']) ? $_GET['message'] : 'Card created successfully!';
        $errorMessage = isset($_GET['message']) ? $_GET['message'] : 'Something went wrong. Please try again.';

        echo "<script>
        // Display SweetAlert based on the card status
        Swal.fire({
            title: '" . ($_GET['card'] == 'yes' ? "Good job!" : "Oops...") . "',
            text: '" . ($_GET['card'] == 'yes' ? $successMessage : $errorMessage) . "',
            icon: '" . ($_GET['card'] == 'yes' ? "success" : "error") . "',
            " . ($_GET['card'] == 'no' ? "footer: '<a href=\"#\">Need more help?</a>'," : "") . "
            confirmButtonText: 'OK'
        }).then(() => {
            // Redirect to the base URL after alert is closed
            window.location.href = 'http://localhost/PakFixer/admin/pages/add_skill_card.php';
        });
    </script>";
    }
    ?>