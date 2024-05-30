<?php 
include("Config.php"); 
 
// $user_id = $_SESSION['userid'];
if (!empty($_POST)) {
    $output = '';
    $message = '';

    $targetFile = 'uploads/' . basename($_FILES["filezz"]["name"]);
   $file =  $_FILES["filezz"]["name"];
    if (move_uploaded_file($_FILES["filezz"]["tmp_name"], $targetFile)) {
    $message = 'File uploaded successfully';

    $p_name = mysqli_real_escape_string($db, $_POST["p_name"]);
    $price = mysqli_real_escape_string($db, $_POST["price"]);
    $quantity = mysqli_real_escape_string($db, $_POST["quantity"]); 
    $description = mysqli_real_escape_string($db, $_POST["description"]);
    
        $query = "INSERT INTO `bg_products`(`name`,`org_pric`,`qty`,`imag`,`smal_desc`,`created_at`) Value ('$p_name','$price','$quantity','$file','$description',CURRENT_TIMESTAMP())"; 
        $message = 'Data Inserted';
    // }
    if (mysqli_query($db, $query)) {
        $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
        
    } else {
        $output .= 'Error' . $query;
    }
    //  echo $output;
    }
    
}
 
?><!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Horizontal Forms - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">

    <?php include 'sidebar.php' ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <!-- <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Horizontal Forms</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Horizontal Forms</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div> -->

            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="horizontal-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="horz-layout-basic">Add Product</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body">

                                        <form class="form form-horizontal" method="post"action="" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <!-- <h4 class="form-section"><i class="feather icon-user"></i> Personal Info</h4> -->
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput1">Product
                                                        Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="p_name" class="form-control"
                                                            placeholder="Product Name" name="p_name">
                                                    </div>
                                                </div>
                                             
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="projectinput5">Price</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="price" class="form-control"
                                                            placeholder="Company Name" name="price">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="projectinput5">Quantity</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="quantity" class="form-control"
                                                            placeholder="Quantity" name="quantity">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Select File</label>
                                                    <div class="col-md-9">
                                                        <label id="projectinput8" class="file center-block">
                                                            <input type="file" id="filezz" name="filezz">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="projectinput9">Description</label>
                                                    <div class="col-md-9">
                                                        <textarea id="description" name="description" rows="5" class="form-control"
                                                            name="comment" placeholder="Description"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                                <button type="submit"name="insert" id="insert" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
    // $(document).ready(function($) {
    //     // $('#create').on("click", function(event) {
    //     //     $('#insert_form')[0].reset();

    //     // })
    //     $('#insert_form').on("submit", function(event) {
    //         event.preventDefault();
    //         if ($('#cname').val() == "") {
    //             alert("Name is required");


    //         } else {
    //             $.ajax({
    //                 url: "product_api/insert_pro.php",
    //                 method: "POST",
    //                 data: $('#insert_form').serialize(),
    //                 // contentType: false,
    //                 // cache: false,
    //                 // processData:false,
    //                 beforeSend: function() {
    //                     $('#insert').val("Inserting");
    //                 },
    //                 success: function(data) {
    //                     console.log(data)
    //                     $('#insert_form')[0].reset();
    //                     // $('#zoomupModal').modal('hide');
    //                     // $('#employee_table').html(data);
    //                     // $("#html5-extension").load(" #html5-extension");
    //                     // window.location.reload();

    //                 }
    //             });
    //         }
    //     });
    // });
    </script>
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
</body>
<!-- END: Body-->

</html>