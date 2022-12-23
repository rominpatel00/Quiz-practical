<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 07:26:01 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Update Question Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/otus_logo_sm.ico">

        <!-- Bootstrap Css -->
        <link href="{{url('/')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('/')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/assets/css/pagination.css" id="app-style" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-0"><a href="/users" class="">Quiz >></a>&nbsp Update Question Details</h4>
                                </div>

                            </div>
                        </div>
                   
                        <!-- end page title -->
                        <div class="row main-div">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                                <div class="mt-5 mt-lg-4">
                                    <form action="{{url('/')}}/create-quiz/update/{{ $quiz->id}}" method="POST">

                                        @csrf
                                    @method('PUT')
                                        <div class="row mb-4">
                                            <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Question ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" value="{{ $quiz->id }}" name="id"class="form-control" id="horizontal-Fullname-input" placeholder="Enter User ID" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Qusetion*</label>
                                            <div class="col-sm-9">
                                                @if(old('question'))
                                                <input type="text" value="{{ old('question') }}" name="question"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Question name">
                                                
                                                @else
                                                    <input type="text" value="{{ $quiz->question }}" name="question"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Qestion name">   
                    
                                                @endif
                                                <span class="text-danger">
                                                    @error('question')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Option 1*</label>
                                            <div class="col-sm-3">
                                                @if(old('optionone'))
                                                <input type="text" value="{{ old('optionone') }}" name="optionone"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Option">
                                                @else
                                                <input type="text" value="{{ $quiz->optionone }}" name="optionone"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Option">
                                                @endif
                                                <span class="text-danger">
                                                    @error('optionone')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Option 2*</label>
                                            <div class="col-sm-3">
                                                @if(old('optiontwo'))
                                                <input type="text" value="{{ old('optiontwo') }}" name="optiontwo"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Option">
                                                @else
                                                <input type="text" value="{{ $quiz->optiontwo }}" name="optiontwo"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Option">
                                                @endif
                                                <span class="text-danger">
                                                    @error('optiontwo')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Option 3*</label>
                                            <div class="col-sm-3">
                                                @if(old('optionthree'))
                                                <input type="text" value="{{ old('optionthree') }}" name="optionthree"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Option">
                                                @else
                                                <input type="text" value="{{ $quiz->optionthree }}" name="optionthree"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Option">
                                                @endif
                                                <span class="text-danger">
                                                    @error('optionthree')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Option 4*</label>
                                            <div class="col-sm-3">
                                                @if(old('optionfour'))
                                                <input type="text" value="{{ old('optionfour') }}" name="optionfour"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Option">
                                                @else
                                                <input type="text" value="{{ $quiz->optionfour }}" name="optionfour"class="form-control" id="horizontal-Fullname-input" placeholder="Enter Option">
                                                @endif
                                                <span class="text-danger">
                                                    @error('optionfour')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Select Answer</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="answer">
                                                
                                                    <?php 
                                                    
                                                        if($quiz->optionone == $quiz->answer){ 
                                                        echo "<option value='$quiz->optionone' selected>Option 1</option>";
                                                            }
                                                            else {
                                                                echo "<option value='$quiz->optionone'>Option 1</option>";
                                                            }
                                                        if($quiz->optiontwo == $quiz->answer){ 
                                                        echo "<option value='$quiz->optiontwo' selected>Option 2</option>";
                                                            }
                                                            else {
                                                                echo "<option value='$quiz->optiontwo'>Option 2</option>";
                                                            }
                                                        if($quiz->optionthree == $quiz->answer){ 
                                                        echo "<option value='$quiz->optionthree' selected>Option 3</option>";
                                                            }
                                                            else {
                                                                echo "<option value='$quiz->optionthree'>Option 3</option>";
                                                            }
                                                        if($quiz->optionfour == $quiz->answer){ 
                                                        echo "<option value='$quiz->optionfour' selected>Option 4</option>";
                                                            }
                                                            else {
                                                                echo "<option value='$quiz->optionfour'>Option 4</option>";
                                                            }
                                                      
                                                    ?>
                                                 </select>
                                                    <span class="text-danger">
                                                    @error('customer_id')
                                                        {{$message}}
                                                    @enderror
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end col-lg-12">
                                            <div class="d-flex justify-content-center flex-wrap gap-3 col-lg-12">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Update</button>
                                                    <a type="reset" href="/users" class="btn btn-outline-danger waves-effect waves-light w-md">Cancle</a>
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
        <script src="{{url('/')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{url('/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('/')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{url('/')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{url('/')}}/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{url('/')}}/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{url('/')}}/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"> -->
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script> -->

        <!-- App js -->
        <script src="{{url('/')}}/assets/js/app.js"></script>
        <script src="{{url('/')}}/assets/js/pagination.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/minible/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 07:26:01 GMT -->
</html>
