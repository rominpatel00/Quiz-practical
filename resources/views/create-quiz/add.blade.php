
<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 07:26:01 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Add User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/otus_logo_sm.ico">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pagination.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>


    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
        @include('header/innerheader');
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12 row">
                                <div class="page-title-box d-flex align-items-center justify-content-between col-10">
                                    <h4 class="mb-0"><a href="/users" class="" style="color: #495057">Quiz ></a>&nbsp Add Question </h4>
                                </div>

                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row main-div">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                                <div class="mt-5 mt-lg-4">
                                    <form action="{{url('/')}}/create-quiz/store" method="POST" enctype="multipart/form-data">

                                    @csrf
                                        <div class="row mb-4">
                                            <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Question*</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="question"class="form-control" id="horizontal-Fullname-input" value="{{old('question')}}" placeholder="Enter Question" required>
                                                <span class="text-danger">
                                                    @error('question')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                        
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Option 1*</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="optionone" class="form-control" id="horizontal-email-input"  value="{{old('optionone')}}" placeholder="Enter your Option" >
                                                <span class="text-danger">
                                                    @error('optionone')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                       
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Option 2*</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="optiontwo" class="form-control" id="horizontal-email-input"  value="{{old('optiontwo')}}" placeholder="Enter your Option">
                                                <span class="text-danger">
                                                    @error('optiontwo')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                      
                                        <div class="row mb-4">
                                        
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Option 3*</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="optionthree" class="form-control" id="horizontal-email-input"  value="{{old('optionthree')}}" placeholder="Enter your Option">
                                                <span class="text-danger">
                                                    @error('optionthree')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                       
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Option 4*</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="optionfour" class="form-control" id="horizontal-email-input"  value="{{old('optionfour')}}" placeholder="Enter your Option">
                                                <span class="text-danger">
                                                    @error('optionfour')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row mb-4" style="">
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Select Answer*</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="answer">
                                                    <option selected>Select Answer</option>
                                                    <option value='optionone'>Option 1</option>
                                                    <option value='optiontwo'>Option 2</option>
                                                    <option value='optionthree'>Option 3</option>
                                                    <option value='optionfour'>Option 4</option>
                                                     
                                            </select> <span class="text-danger">
                                                    @error('answer')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row justify-content-end col-lg-12">
                                            <div class="d-flex justify-content-center flex-wrap gap-3 col-lg-12">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                                    <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                @include('footer/footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>
        <script src="../assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"> -->
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script> -->

        <!-- App js -->
        <script src="../assets/js/app.js"></script>
        <script src="../assets/js/pagination.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/minible/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 07:26:01 GMT -->
</html>
