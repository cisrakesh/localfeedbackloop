<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Test CI</title>

        
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        
        <link rel="stylesheet" href="<?php echo base_url();?>webroot/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo base_url();?>webroot/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo base_url();?>webroot/css/main.css">

        <!-- Include a specific file here from <?php echo base_url();?>webroot/css/themes/ folder to alter the default theme of the template -->

        

        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?php echo base_url();?>webroot/js/vendor/modernizr-respond.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            

            <!-- Page Container -->
            
            <div id="page-container" class="">
                

                <!-- Main Container -->
                <div id="main-container">
                    
                    
                    

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->
                        <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                        <div class="row">
                                    
                            <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                                <h1>Welcome <strong>Admin</strong><br><small>You Look Awesome!</small></h1>
                            </div>
                            <!-- END Main Title -->

                                    
                        </div>
                        <!-- END Dashboard Header -->

                        <div class="row">
                            <!-- First Column -->
                            <div class="col-md-6 col-lg-7">
                                

                                <div class="block">
                           
                            <!-- END Search Styles Title -->

                            <!-- Search Styles Content -->
                            <div class="tab-content">
                                <!-- Projects Search -->
                                <div class="tab-pane active" id="search-tab-projects">
                                    <!-- Search Info - Pagination -->
                                    <div class="block-section clearfix">
                                        
                                        <ul class="pagination remove-margin ">
                                            <li class="active"><span><strong><?php echo $business_info['total_rating']['total_no_of_reviews']; ?></strong> Results</span></li>
                                        </ul>
                                    </div>
                                    <!-- END Search Info - Pagination -->

                                    <!-- Projects Results -->
                                    <table class="table table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-briefcase"></i> Customer</th>
                                                <th class="text-center hidden-xs" style="width: 20%;">rating</th>
                                                <th class="text-center hidden-xs" style="width: 20%;">date</th>
                                                <th class="text-center" style="min-width: 120px; width: 20%;">source</th>
                                            </tr>
                                        </thead>
                                        <tbody id="reviewBody">
                                        <?php foreach($reviews as $eachreview){ ?>
                                                <tr>
                                                <td>
                                                    <h3><a href="javascript:void(0)"><strong><?php echo $eachreview['customer_name']; ?></strong></a></h3>
                                                    
                                                    <p><em><?php echo $eachreview['description']; ?></em></p>
                                                </td>
                                                <td class="text-center hidden-xs">
                                                    <h3 class="animation-pullDown"><?php echo $eachreview['rating']; ?></h3>
                                                </td>
                                                <td class="text-center hidden-xs">
                                                    <h3 class="animation-pullDown"><?php echo $eachreview['date_of_submission']; ?></h3>
                                                </td>
                                                <td class="text-center">
                                                    <h3 class="animation-pullDown text-success"><strong><?php echo $eachreview['review_source']; ?></strong></h3>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                    <!-- END Projects Results -->

                                    <!-- Bottom Navigation -->
                                    <div class="block-section text-right">
                                        <ul class="pagination remove-margin" id="bottomPagination">
                                            <li class="disabled previouspage" >
                                                <a href="javascript:void(0)" onclick="previousPage();"><i class="fa fa-chevron-left"></i></a>
                                            </li>
                                            <?php for($i=1;$i<=$pages;$i++){ 

                                                if($i>3){ ?>
                                                    <li class="hide pagingLink">
                                                        <a href="javascript:void(0)" data-link="<?php echo $i; ?>" onclick="paginate(this);"><?php echo $i; ?></a>
                                                    </li>    
                                                <?php }elseif($i==1){
                                                ?>
                                                    <li class="active pagingLink">
                                                        <a href="javascript:void(0)" data-link="<?php echo $i; ?>" onclick="paginate(this);"><?php echo $i; ?></a>
                                                    </li>
                                            <?php }else{
                                                ?>
                                                    <li class="pagingLink">
                                                        <a data-link="<?php echo $i; ?>" href="javascript:void(0)" onclick="paginate(this);"><?php echo $i; ?></a>
                                                    </li>
                                            <?php }
                                            } ?>
                                            
                                            
                                            <li class="nextPage <?php echo ($pages<=2)?'disabled':''; ?>">
                                                <a href="javascript:void(0)"  onclick="nextPage();"><i class="fa fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END Bottom Navigation -->
                                </div>
                                <!-- END Projects Search -->

                                
                            </div>
                            <!-- END Search Styles Content -->
                        </div>
                        <!-- END Search Styles Block -->
                            </div>
                            <!-- END First Column -->

                            <!-- Second Column -->
                            <div class="col-md-6 col-lg-5">
                                <!-- Info Block -->
                                <div class="block">
                                    <!-- Info Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            
                                            <a target="_blank" href="<?php echo $business_info['external_url']; ?>" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Hire"><i class="fa fa-briefcase"></i></a>
                                        </div>
                                        <h2>About <strong><?php echo $business_info['business_name']; ?></strong> <small>&bull; <i class="fa fa-file-text text-primary"></i> <a href="javascript:void(0)" data-toggle="tooltip" title="Download Bio in PDF">Bio</a></small></h2>
                                    </div>
                                    <!-- END Info Title -->

                                    <!-- Info Content -->
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                <td><strong>Name</strong></td>
                                                <td><a href="javascript:void(0)"><?php echo $business_info['business_name']; ?></a></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 20%;"><strong>Address</strong></td>
                                                <td><?php echo $business_info['business_address']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Phone</strong></td>
                                                <td><a href="javascript:void(0)"><?php echo $business_info['business_phone']; ?></a></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Rating</strong></td>
                                                <td><a href="javascript:void(0)"><?php echo $business_info['total_rating']['total_avg_rating']; ?></a></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <!-- END Info Content -->
                                </div>
                                <!-- END Info Block -->

                                
                            </div>
                            <!-- END Second Column -->
                        </div>
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        

        <script src="<?php echo base_url();?>webroot/js/vendor/jquery-1.11.2.min.js"></script>
       

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="<?php echo base_url();?>webroot/js/vendor/bootstrap.min.js"></script>
        
        <script type="text/javascript">

        function previousPage(){
            paginate($(".active.pagingLink").prev().find('a'));
        }
        function nextPage(){
            paginate($(".active.pagingLink").next().find('a'));
        }
        function paginate(elem){
            var pageNumber=$(elem).attr("data-link");
            $(".pagingLink").removeClass("active");
            $(elem).parent().addClass("active");
            $(".pagingLink").addClass("hide");
            $(elem).parent().removeClass("hide");
            if($(elem).parent().prev().hasClass("pagingLink")){ 
            //if there is a li behind this li
                $(elem).parent().prev().removeClass("hide");
            }else if($(elem).parent().next().next().hasClass("pagingLink")){ 
            //if there is li next to next of this li
                $(elem).parent().next().next().removeClass("hide");
            }
            

            if($(elem).parent().next().hasClass("pagingLink")){
                //if this there is li next to this li
                $(elem).parent().next().removeClass("hide");
            }else if($(elem).parent().prev().prev().hasClass("pagingLink")){
                //if there is li at 2 position back of this li
                $(elem).parent().prev().prev().removeClass("hide");
            }
            $(".nextPage").removeClass("disabled");
            if($(".active.pagingLink").next().hasClass("nextPage")){
                $(".nextPage").addClass("disabled");
            }

            $(".previouspage").removeClass("disabled");
            if($(".active.pagingLink").prev().hasClass("previouspage")){
                $(".previouspage").addClass("disabled");
            }
            
            
            $.ajax({
                        type:"post",
                        url:"<?php echo base_url();?>home/paginate",
                        data: "pageNumber="+pageNumber,
                        success:function(data){
                            //console.log(data);
                            $("#reviewBody").html('');
                            var obj = JSON.parse(data); 
                            $.each(obj, function(key,item) {
                                var trdata='<tr><td><h3><a href="javascript:void(0)"><strong>'+item['customer_name']+'</strong></a></h3><p><em>'+item['description']+'</em></p></td><td class="text-center hidden-xs"><h3 class="animation-pullDown">'+item['rating']+'</h3></td><td class="text-center hidden-xs"><h3 class="animation-pullDown">'+item['date_of_submission']+'</h3></td><td class="text-center"><h3 class="animation-pullDown text-success"><strong>'+item['review_source']+'</strong></h3></td></tr>';
                                $("#reviewBody").append(trdata);
                                //console.log(value);
                            });
                            
                        }
                    }); // Ajax Function Closing

        }
       
        </script>
    </body>
</html>