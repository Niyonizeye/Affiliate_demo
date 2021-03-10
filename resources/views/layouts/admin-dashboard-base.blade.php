
<!DOCTYPE html>




<html lang="en">

<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>My Site - ADMIN PANEL</title>

    <meta content="" name="description" />

    <meta content="" name="author" />

    <meta content="" name="keywords" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="https://demo.affiliatepro.org/assets/vertical/assets/plugins/magnific-popup/magnific-popup.css?v=4.2" rel="stylesheet" type="text/css">

    <link href="https://demo.affiliatepro.org/assets/js/jquery-confirm.min.css?v=4.2" rel="stylesheet">

    <link href="https://demo.affiliatepro.org/assets/vertical/assets/plugins/morris/morris.css?v=4.2" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

    <link href="https://demo.affiliatepro.org/assets/css/jquery-ui.css" rel="stylesheet" type="text/css">

    <link href="https://demo.affiliatepro.org/assets/vertical/assets/plugins/chartist/css/chartist.min.css?v=4.2" rel="stylesheet" type="text/css">

    <link href="https://demo.affiliatepro.org/assets/vertical/assets/css/bootstrap.min.css?v=4.2" rel="stylesheet" type="text/css">

    <link href="https://demo.affiliatepro.org/assets/vertical/assets/css/icons.css?v=4.2" rel="stylesheet" type="text/css">

    <link href="https://demo.affiliatepro.org/assets/vertical/assets/css/style.css?v=4.2" rel="stylesheet" type="text/css">



    <link href="https://demo.affiliatepro.org/assets/vertical/assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css?v=4.2" rel="stylesheet" type="text/css" media="screen">


    <link href="https://demo.affiliatepro.org/assets/css/jquery.uploadPreviewer.css?v=4.2" rel="stylesheet" type="text/css" media="screen">




    <script src="https://demo.affiliatepro.org/assets/js/jquery.min.js"></script>

    <script type="text/javascript">

      window.affiliatePro ={

        base_url:"https://demo.affiliatepro.org/"

      }

    </script>





    <!-- <script src="https://demo.affiliatepro.org/assets/js/jquery.uploadPreviewer.js"></script> -->



    <link href="https://demo.affiliatepro.org/assets/plugins/datetimepicker/jquery.datetimepicker.min.css?v=4.2" rel="stylesheet" />

    <script src="https://demo.affiliatepro.org/assets/plugins/datetimepicker/jquery.datetimepicker.full.min.js"></script>



    <link href="https://demo.affiliatepro.org/assets/plugins/datatable/select2.css?v=4.2" rel="stylesheet" />

    <script src="https://demo.affiliatepro.org/assets/plugins/datatable/select2.min.js"></script>

    <script src="https://demo.affiliatepro.org/assets/js/jscolor.js"></script>


    <script type="text/javascript" src='https://demo.affiliatepro.org/assets/sweetalert/sweetalert.min.js'></script>

    <script type="text/javascript" src='https://demo.affiliatepro.org/assets/plugins/color-picker/spectrum.js'></script>

    <link rel='stylesheet' href='https://demo.affiliatepro.org/assets/plugins/color-picker/spectrum.css?v=4.2' />

    <link rel='stylesheet' href='https://demo.affiliatepro.org/assets/css/admin-common.css?v=4.2' />



    <style>

        #preloader{

            background: #fff;

            color: rgba(0,0,0,0.8);

        }

        .lds-roller {

          display: inline-block;

          position: relative;

          width: 80px;

          height: 80px;

        }

        .lds-roller div {

          animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;

          transform-origin: 40px 40px;

        }

        .lds-roller div:after {

          content: " ";

          display: block;

          position: absolute;

          width: 7px;

          height: 7px;

          border-radius: 50%;

          background: #6362bb ;

          margin: -4px 0 0 -4px;

        }

        .lds-roller div:nth-child(1) {

          animation-delay: -0.036s;

        }

        .lds-roller div:nth-child(1):after {

          top: 63px;

          left: 63px;

        }

        .lds-roller div:nth-child(2) {

          animation-delay: -0.072s;

        }

        .lds-roller div:nth-child(2):after {

          top: 68px;

          left: 56px;

        }

        .lds-roller div:nth-child(3) {

          animation-delay: -0.108s;

        }

        .lds-roller div:nth-child(3):after {

          top: 71px;

          left: 48px;

        }

        .lds-roller div:nth-child(4) {

          animation-delay: -0.144s;

        }

        .lds-roller div:nth-child(4):after {

          top: 72px;

          left: 40px;

        }

        .lds-roller div:nth-child(5) {

          animation-delay: -0.18s;

        }

        .lds-roller div:nth-child(5):after {

          top: 71px;

          left: 32px;

        }

        .lds-roller div:nth-child(6) {

          animation-delay: -0.216s;

        }

        .lds-roller div:nth-child(6):after {

          top: 68px;

          left: 24px;

        }

        .lds-roller div:nth-child(7) {

          animation-delay: -0.252s;

        }

        .lds-roller div:nth-child(7):after {

          top: 63px;

          left: 17px;

        }

        .lds-roller div:nth-child(8) {

          animation-delay: -0.288s;

        }

        .lds-roller div:nth-child(8):after {

          top: 56px;

          left: 12px;

        }

        @keyframes lds-roller {

          0% {

            transform: rotate(0deg);

          }

          100% {

            transform: rotate(360deg);

          }

        }



    </style>



    <script type="text/javascript">

        (function ($) {

            $.fn.btn = function (action) {

                var self = $(this);

                var tagName = self.prop("tagName");



                if(tagName == 'A'){

                    if (action == 'loading') {

                        $(self).addClass("disabled");

                        $(self).attr('data-text',$(self).text());

                        $(self).text("Loading..");

                    }

                    if (action == 'reset') { $(self).text($(self).attr('data-text')); $(self).removeClass("disabled"); }

                }

                else {

                    if (action == 'loading') { $(self).addClass("btn-loading"); }

                    if (action == 'reset') { $(self).removeClass("btn-loading"); }

                }

            }

        })(jQuery);



        $(document).delegate('a.disabled',"click", function (e) {

            e.preventDefault();

        });





        var formDataFilter = function(formData) {

            if (!(window.FormData && formData instanceof window.FormData)) return formData

            if (!formData.keys) return formData

            var newFormData = new window.FormData()

            Array.from(formData.entries()).forEach(function(entry) {

                var value = entry[1]

                if (value instanceof window.File && value.name === '' && value.size === 0) {

                    newFormData.append(entry[0], new window.Blob([]), '')

                } else {

                    newFormData.append(entry[0], value)

                }

            })



            return newFormData

        }



        function apply_color(ele){

            $(ele).spectrum({

                preferredFormat: "rgb",

                showInput: true,

                className: "full-spectrum",

                showInitial: true,

                showPalette: true,

                showSelectionPalette: true,

                maxSelectionSize: 10,

                localStorageKey: "bolly_fashion",

                allowEmpty:true,

                palette: [

                    ["transparent"],

                    ["rgb(255, 255, 255)","rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",

                    "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",

                    "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",

                    "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",

                    "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",

                    "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",

                    "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",

                    "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",

                    "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",

                    "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]

                ]

            });

        }



    </script>




      <!-- place here your RTL css code -->

    </head>



  <body class="fixed-left">
            <div id="preloader">

            <div id="status">

                <div class="lds-roller">

                    <div>

                    </div>

                    <div>

                    </div>

                    <div>

                    </div>

                    <div>

                    </div>

                    <div>

                    </div>

                    <div>

                    </div>

                    <div>

                    </div>

                    <div>

                    </div>

                </div>

            </div>

        </div>

        <div id="wrapper">







<style type="text/css">
      .reload-btn{
	   border-radius: 50%;
	   width: 25px;
	   height: 25px;
	   display: flex;
	   align-items: center;
	   justify-content: center;
   }
   .server-last-update span,
   .dashboard-refresh span {
	   background: rgba(164, 91, 207,0.2);
	   border: solid 1px rgba(164, 91, 207,0.3);
	   padding: 2px 7px;
   }
</style>
<div class="left side-menu" style="padding-bottom:80px;">
   <div class="sidebar-inner slimscrollleft">
      <div id="sidebar-menu" style="padding-bottom:0px; !important">
         <ul>
         <li>
            <a href="https://demo.affiliatepro.org/admincontrol/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span>Dashboard</a>
         </li>

         <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-debug-step-over"></i> <span>How To Start Guide</span> <span class="badge badge-danger float-right">i</span></a>
            <ul class="list-unstyled">
                <li><a href="https://demo.affiliatepro.org/firstsetting"><i class="mdi mdi-menu-right"></i><span>App First Setting</a></li>
               <li><a href="https://demo.affiliatepro.org/integration/how_to_start"><i class="mdi mdi-menu-right"></i>How To Integrate ?</a></li>
            </ul>
         </li>

        <hr>

        <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-ray-start-arrow"></i> <span>Marketing Tools</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="list-unstyled">

        <li><a href="https://demo.affiliatepro.org/integration/programs"><i class="mdi mdi-menu-right"></i>Add Program</a></li>
        <li><a href="https://demo.affiliatepro.org/integration/integration_tools"><i class="mdi mdi-menu-right"></i>Add Banner</a></li>
        <!--<li><a href="https://demo.affiliatepro.org/integration/orders"><i class="mdi mdi-menu-right"></i>Marketing Orders</a></li>-->
        <!--<li><a href="https://demo.affiliatepro.org/integration/logs"><i class="mdi mdi-menu-right"></i>Marketing Logs</a></li>-->
        <li><a href="https://demo.affiliatepro.org/integration/integration_category"><i class="mdi mdi-menu-right"></i>Add Category</a></li>
        <li><a href="https://demo.affiliatepro.org/admincontrol/market_tools_setting"><i class="mdi mdi-menu-right"></i>Tools Settings</a></li>
        <li><a href="https://demo.affiliatepro.org/integration/" class="waves-effect"><i class="mdi mdi-menu-right"></i>Plugin Integrations</a></li>
        </ul>
        </li>

         <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-file-tree"></i> <span>MLM</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
               <li><a href="https://demo.affiliatepro.org/admincontrol/mlm_settings/"><i class="mdi mdi-menu-right"></i>MLM Settings</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/mlm_levels/"><i class="mdi mdi-menu-right"></i>MLM Levels</a></li>
            </ul>
         </li>

         <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-desktop" aria-hidden="true"></i><span>SaaS</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
               <li><a href="https://demo.affiliatepro.org/admincontrol/saas_setting"><i class="mdi mdi-menu-right"></i>SaaS Settings</a></li>
            </ul>
         </li>

        <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect fixed-styling">
                <i class="mdi mdi-wallet-travel"></i> <span>Wallet</span>
                <span class="float-right"><i class="mdi mdi-chevron-right"></i></span>
            </a>
            <ul class="list-unstyled">
               <li><a href="https://demo.affiliatepro.org/admincontrol/mywallet/" class="fixed-styling"><i class="mdi mdi-menu-right"></i>All Transactions</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/wallet_requests_list"><i class="mdi mdi-menu-right"></i>Withdraw Request</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/withdrawal_payment_gateways"><i class="mdi mdi-menu-right"></i>Payment Gateway</a></li>
            </ul>
         </li>

         <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-autorenew"></i> <span>Activity</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
               <li><a href="https://demo.affiliatepro.org/admincontrol/store_markettools/"><i class="mdi mdi-menu-right"></i>System Ads</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/store_orders/"><i class="mdi mdi-menu-right"></i>System Orders</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/store_logs/"><i class="mdi mdi-menu-right"></i>System Logs</a></li>
               <li><a href="https://demo.affiliatepro.org/ReportController/admin_transaction/" class="waves-effect"><i class="mdi mdi-menu-right"></i><span>Transactions Report</span></a></li>
               <li><a href="https://demo.affiliatepro.org/incomereport" class="waves-effect" ><i class="mdi mdi-menu-right"></i> <span> Users Statistics </span> </a></li>
               <li><a href="https://demo.affiliatepro.org/ReportController/admin_statistics/" class="waves-effect"><i class="mdi mdi-menu-right"></i><span>Graphs Report</span></a></li>
            </ul>
         </li>


         <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i> <span>Members</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
               <li><a href="https://demo.affiliatepro.org/admincontrol/userslist/"><i class="mdi mdi-menu-right"></i>List Affiliates</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/userslisttree/"><i class="mdi mdi-menu-right"></i>Referring tree</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/userslistmail/"><i class="mdi mdi-menu-right"></i>Affiliate Mail Send</a></li>
                              <li><a href="https://demo.affiliatepro.org/admincontrol/admin_user"><i class="mdi mdi-menu-right"></i> Manage Admin</a></li>
                           </ul>
         </li>

         <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-wallet-membership"></i> <span>Membership</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
               <li><a href="https://demo.affiliatepro.org/membership/plans"><i class="mdi mdi-menu-right"></i>Membership Plans</a></li>
               <li><a href="https://demo.affiliatepro.org/membership/membership_payment_gateways"><i class="mdi mdi-menu-right"></i>Payment Gateways</a></li>
               <li><a href="https://demo.affiliatepro.org/membership/membership_orders"><i class="mdi mdi-menu-right"></i>Membership Orders</a></li>
               <li><a href="https://demo.affiliatepro.org/membership/settings"><i class="mdi mdi-menu-right"></i>Membership Settings</a></li>
            </ul>
         </li>


                 <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-store"></i> <span>E-Commerce</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
               <li><a href="https://demo.affiliatepro.org/store" target="_blank"><i class="mdi mdi-menu-right"></i> View Store</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/store_dashboard/"><i class="mdi mdi-menu-right"></i>Dashboard</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/listproduct/"><i class="mdi mdi-menu-right"></i>Products</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/listproduct/reviews"><i class="mdi mdi-menu-right"></i>Vendor Products</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/store_category/"><i class="mdi mdi-menu-right"></i>Categories</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/form/"><i class="mdi mdi-menu-right"></i>Form List</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/listorders/"><i class="mdi mdi-menu-right"></i>Orders</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/listclients/"><i class="mdi mdi-menu-right"></i>Clients</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/coupon/"><i class="mdi mdi-menu-right"></i>Coupon</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/form_coupon/"><i class="mdi mdi-menu-right"></i>Form Coupon</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/storepayments/"><i class="mdi mdi-menu-right"></i>Payment Methods</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/store_setting/"><i class="mdi mdi-menu-right"></i>Store Settings</a></li>
            </ul>
         </li>



        <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-settings-variant"></i> <span>Global Settings</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
               <li><a href="https://demo.affiliatepro.org/admincontrol/paymentsetting/"><i class="mdi mdi-menu-right"></i>Configuration</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/mails"><i class="mdi mdi-menu-right"></i>Mail Templates</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/registration_builder"><i class="mdi mdi-menu-right"></i>Registration Form</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/backup/"><i class="mdi mdi-menu-right"></i>Site Backups</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/language"><i class="mdi mdi-menu-right"></i>Language</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/currency_list"><i class="mdi mdi-menu-right"></i>Currency</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/theme_setting"><i class="mdi mdi-menu-right"></i>Themes Color</a></li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/system_status"><i class="mdi mdi-menu-right"></i>System Status                 <li><a href="https://demo.affiliatepro.org/admincontrol/script_details"><i class="mdi mdi-menu-right"></i>Logs Tree               </a>
               </li>
               <li><a href="https://demo.affiliatepro.org/admincontrol/install_new_version"><i class="mdi mdi-menu-right"></i>Install New Version               </a>
               </li>
            </ul>
         </li>
         </li>

         <hr>



      </div>

      <div class="clearfix"></div>

   </div>
     <div class="version">
        <hr class="mt-1 mb-2">
        <span class="session_timeout_string text-white">Something</span>
        <hr class="mt-1 mb-2">
        <a href="https://demo.affiliatepro.org/admincontrol/script_details"> <i class="mdi mdi-layers"></i>
        <span>SCRIPT VERSION</span>
        <span class="badge badge-primary">4.0.0.4</span></a>
     </div>
</div>
<div class="content-page">
<div class="content">
<div class="page-content-wrapper">
   <div class="container-fluid">
            <script type="text/javascript">console.log('Page ID : admincontrol_dashboard')</script>
            <div class="row">
         <div class="col-sm-12">
            <div class="page-title-box shadow-sm">
               <div class="iconify float-left">
                  <a class="btn btn-primary btn-sm reload-btn" title="Refresh Page" data-toggle='tooltip' href="JavaScript: location.reload(true);"><i class="mdi mdi-refresh" data-inline="false" style="font-size: 1.1rem"></i></a>
               </div>
               <h4 class="page-title pull-left pl-2 mb-lg-0 mb-3">Welcome: admin</h4>
               <div class="float-right dashboard-tool d-flex align-items-center">
                                    <div class="server-last-update">Last Updated : <span class="badge">12:02:17 PM</span></div>
                  <div class="d-inline-block dashboard-refresh mr-3">
                     Session Timeout : <span class="badge">01:00</span>
                     <script type="text/javascript">
                        // function secondsTimeSpanToHMS(s) {
                        // 	var h = Math.floor(s/3600);
                        // 	s -= h*3600;
                        // 	var m = Math.floor(s/60);
                        // 	s -= m*60;
                        // 	return h+":"+(m < 10 ? '0'+m : m)+":"+(s < 10 ? '0'+s : s);
                        // }
                        // var refresh_after = 3600;
                        // var d_index = 1;
                        // setInterval(function(){
                        // 	var remaining = refresh_after - d_index;
                        // 	d_index++;

                        // 	$(".dashboard-refresh span").html(secondsTimeSpanToHMS(remaining))
                        // 	if(d_index > refresh_after){
                        // 		d_index = 1;
                        // 		window.location.reload();
                        // 	}
                        // }, 1000);
                     </script>
                  </div>

                  <div class="server-status">
                                         <div class="server-ok">
                    <span class="badge badge-success"><i class="mdi mdi-check" data-toggle="tooltip" title='Server Ok'></i></span>
                    </div>

                                      </div>

                  <div class="d-inline-block setting-tools">
                     <button class="btn btn-dark btn-sm btn-setting ml-1" data-toggle="tooltip" title='Dashboard Settings' data-key='live_dashboard' data-type='admin'>
                     <i class="mdi mdi-settings"></i>
                     </button>
                  </div>

                   <div class="d-inline-block setting-tools">
                     <button class="btn btn-primary btn-sm ml-1" onclick="window.open('https://demo.affiliatepro.org/','_blank')" data-toggle="tooltip" title='View Site'>
                     <i class="mdi mdi-web"></i>
                     </button>
                  </div>

                   <body>

                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                       </ol>
               </div>
                              <div id="dashboard-progress"></div>
                              <div class="clearfix"></div>
            </div>
         </div>
      </div>
         </div>
</div>
<div class="server-errors">
   </div>


<script>
Window.GlobaleCountDownDate = (new Date().getTime()) + (1800 * 1000);
var GlobaleCountDownDateInterval = setInterval(function() {
   var now = new Date().getTime() + 1000;
   distance = ((Window.GlobaleCountDownDate - now) / 1000).toFixed(0);

   let h = Math.floor(distance / 3600);
   let m = Math.floor(distance % 3600 / 60);
   let s = Math.floor(distance % 3600 % 60);

   let string = "";

   string += (h > 0) ? ('0'+h).slice(-2)+":" : "00:";

   string += (m > 0) ? ('0'+m).slice(-2)+":" : "00:";

   string += (s > 0) ? ('0'+s).slice(-2)+"" : "00";

   $(".session_timeout_string").text("Session Timeout: "+string);
   $(".dashboard-refresh span").text(string);

   if (distance <= 0) {
      $('#session-countdown').parent().text('Session Has Expired');
      window.location.replace('https://demo.affiliatepro.org/admincontrol/logout');
      clearInterval(GlobaleCountDownDateInterval);
   }
}, 1000);

$(document).ajaxComplete(function(event, request, settings) {
   let parts = settings.url.split("/");
   let last_part = parts[parts.length-1];
   if(last_part != "ajax_dashboard"){
      Window.GlobaleCountDownDate = (new Date().getTime()) + (1800 * 1000);
   }
});
</script><style type="text/css">
</style>


<!-- Top Bar Start -->
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="logo-container">
            <a href="https://demo.affiliatepro.org/admincontrol/dashboard" class="logo text-center">ADMIN PANEL</a>
        </div>
    </div>

    <nav class="navbar-custom">
        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input" type="search" placeholder="Search" />
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <ul class="list-inline float-right mb-0">

            <!-- Fullscreen -->
            <li class="list-inline-item dropdown notification-list hide-sm">
                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                    <i class="mdi mdi-fullscreen noti-icon"></i>
                </a>
            </li>

            <!-- language-->
            <li class="list-inline-item dropdown notification-list hide-sm">
                <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <li class="list-inline-item dropdown notification-list language"><a class="nav-link dropdown-toggle arrow-none waves-effect text-white" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                        <span class="d-none d-sm-inline-block">English</span> <img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/lr.png" class="ml-2" height="16" alt=""/>
                    </a><div class="dropdown-menu dropdown-menu-right language-switch"><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_language/29"><img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/br.png" alt="" height="16"/><span> Portuguese </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_language/30"><img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/ru.png" alt="" height="16"/><span> Russian </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_language/36"><img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/do.png" alt="" height="16"/><span> Spanish, Castilian </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_language/47"><img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/tr.png" alt="" height="16"/><span> Turkish </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_language/48"><img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/be.png" alt="" height="16"/><span> French </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_language/49"><img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/id.png" alt="" height="16"/><span> Indonesian </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_language/50"><img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/ch.png" alt="" height="16"/><span> Romansh </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_language/51"><img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/sa.png" alt="" height="16"/><span> Arabic </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_language/52"><img src="https://demo.affiliatepro.org/./assets/vertical/assets/images/flags/bn.png" alt="" height="16"/><span> Malay </span></a></div></li>
                    <li class="list-inline-item dropdown notification-list currency"><a class="nav-link dropdown-toggle arrow-none waves-effect text-white" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">$ <span class='d-none d-sm-inline-block'>US Dollar</span> </a><div class="dropdown-menu dropdown-menu-right currency-switch"><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/EUR"><span> € Euro  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/PKR"><span> PKRs Pakistani Rupee  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/DZD"><span> DA Algerian Dinar  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/NPR"><span> NPRs Nepalese Rupee Rs. </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/JPY"><span> ¥ Japanese Yen  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/NGN"><span> ₦ Nigerian Naira  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/GBP"><span> £ British Pound Sterling  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/ZAR"><span> R South African Rand  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/PLN"><span>  Polish Zloty zł </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/PHP"><span> ₱ Philippine Peso  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/IRR"><span> IRR Iranian Rial  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/LKR"><span> Rs Sri Lankan Rupee  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/XOF"><span>  CFA Franc BCEAO CFA </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/EGP"><span> EGP Egyptian Pound ج.م </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/CNY"><span> CN¥ Chinese Yuan  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/BRL"><span> R$ Brazilian Real  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/CLP"><span> CL$ Chilean Peso  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/IDR"><span> Rp Indonesian Rupiah  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/CVE"><span>  Cape Verdean Escudo $ </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/MYR"><span> RM Malaysian Ringgit  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/INR"><span> Rs Indian Rupee ₹ </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/LBP"><span> LB£ Lebanese Pound  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/BRL"><span> R$ Brazilian Real  </span></a><a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/change_currency/BRL"><span> R$ Brazilian Real  </span></a></div></li>
            </li>

            <li class="list-inline-item dropdown notification-list alert-icon">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i class="d-block ion-ios7-bell noti-icon"></i>
                        <span class="badge badge-danger noti-icon-badge blink_me ajax-notifications_count" id="notynew">27</span></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5>Notification<span class="badge badge-success float-right m-t-5"> (27)</span></h5>
                    </div>

                    <div id="allnotification">
                                                        <a href="javascript:void(0)" onclick="shownofication(1143,'https://demo.affiliatepro.org/admincontrol/membership/membership_purchase_edit/165')" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>New Subscription Buy From sdfsd</b><small class="text-muted">sdfsdf sdfsdf buy a new subscription at affiliate program on 2021-03-10 11:46:49</small></p>
                            </a>
                                <a href="javascript:void(0)" onclick="shownofication(1142,'https://demo.affiliatepro.org/admincontrol/userslist/237')" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>New User Registration</b><small class="text-muted">sdfsdf sdfsdf register as a  on affiliate Program on 2021-03-10 11:45:07</small></p>
                            </a>
                                <a href="javascript:void(0)" onclick="shownofication(1141,'https://demo.affiliatepro.org/admincontrol/userslist/236')" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>New User Registration</b><small class="text-muted">EMAD NASSER register as a  on affiliate Program on 2021-03-10 08:51:12</small></p>
                            </a>
                                <a href="javascript:void(0)" onclick="shownofication(1138,'https://demo.affiliatepro.org/admincontrol/vieworder/258')" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>New Order Generated by client1</b><small class="text-muted">client1 client1 created a new order at affiliate Program on 2021-03-10 07:31:25</small></p>
                            </a>
                                <a href="javascript:void(0)" onclick="shownofication(1135,'https://demo.affiliatepro.org/admincontrol/membership/membership_purchase_edit/164')" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>New Subscription Buy From zajidjama</b><small class="text-muted">zajid jama buy a new subscription at affiliate program on 2021-03-09 21:57:05</small></p>
                            </a>

                        <input type="hidden" id="last_id_notifications" value="1143">
                    </div>
                    <a href="https://demo.affiliatepro.org/admincontrol/notification" class="dropdown-item notify-item">View All</a>

                </div>
            </li>






            <!-- User-->
            <li class="list-inline-item dropdown notification-list user-menu">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">

                                            <img class="rounded-circle" src="https://demo.affiliatepro.org/assets/vertical/assets/images/no-image.jpg" alt="admin" width="65px">
                </a>
                <div class="dropdown-menu profile-dropdown">
                    <a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/editProfile"><i class="dripicons-user text-muted"></i>Profile</a>
                    <a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/changePassword"><i class="dripicons-wallet text-muted"></i>Change Password</a>
                    <a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/mywallet"><i class="dripicons-wallet text-muted"></i>My Wallet</a>
                    <a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/paymentsetting"><i class="dripicons-lock text-muted"></i>Settings</a>

                    <a class="dropdown-item" href="https://demo.affiliatepro.org/integration/programs/"><i class="dripicons-lock text-muted"></i>Create Programme</a>
                    <a class="dropdown-item" href="https://demo.affiliatepro.org/integration/integration_tools/"><i class="dripicons-lock text-muted"></i>Create Banner Ads</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="https://demo.affiliatepro.org/admincontrol/logout"><i class="dripicons-exit text-muted"></i> Logout</a>
                </div>
            </li>
        </ul>


        <!-- Menu Collapse Button -->

        <button type="button" class="button-menu-mobile open-left waves-effect">
            <i class="ion-navicon"></i>
        </button>
        <div class="clearfix"></div>
    </nav>

</div>
<!-- Top Bar End -->


















<!--            <br><div class="alert alert-info affiliateprogramsetting - affiliate_commission
affiliateprogramsetting - affiliate_ppc
paymentsetting - api_username
paymentsetting - api_password
paymentsetting - api_signature
">
    Please fill all details in setting tab. to fill click here. <a href="https://demo.affiliatepro.org/admincontrol/paymentsetting/">Click Here</a>
            </div>
-->




<link rel="stylesheet" type="text/css" href="https://demo.affiliatepro.org/assets/plugins/flag/css/main.min.css">
<link rel="stylesheet" type="text/css" href="https://demo.affiliatepro.org/assets/plugins/table/datatables.min.css">
<script type="text/javascript" src="https://demo.affiliatepro.org/assets/plugins/table/datatables.min.js"></script>
<script type="text/javascript" src="https://demo.affiliatepro.org/assets/plugins/table/dataTables.responsive.min.js"></script>

<style>
    .counter{
        font-size: 1.7vw;
        font-weight: bold;
    }
    .counter-card {
        width: 100%;
        height: 100%;
    }
    .counter-card .card-body{
        display: flex;
        align-items: center;
    }
    @media(max-width: 1200px){
        .counter{
            font-size: 1.3rem;
        }
        .profile__value{
            font-size: 1rem !important;
        }
    }
</style>

<div class="row mb-4">
    <div class="col-xl-2 d-flex align-items-center mb-2 mb-lg-0">
        <div class="card border shadow-sm counter-card">
            <div class="card-body p-4">
                <div class="text-left">
                    <ul class="list-inline row mb-0 clearfix">
                        <li class="col-12">
                            <p class="mb-0 text-secondary">Admin Balance</p>
                            <p class="m-b-5 font-18 font-500 counter text-primary ajax-admin_balance">$-24,156.95</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 d-flex align-items-center mb-2 mb-lg-0">
        <div class="card border shadow-sm counter-card">
            <div class="card-body p-4">
                <div class="text-left">
                    <ul class="list-inline row mb-0 clearfix">
                        <li class="col-12">
                            <p class="mb-0 text-muted">Admin Actions</p>
                            <p class="m-b-5 font-18 font-500 counter text-primary">
                                <span class="ajax-click_action_total">3</span> /
                                <span class="ajax-click_action_commission">$3.00</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 d-flex align-items-center mb-2 mb-lg-0">
        <div class="card border shadow-sm counter-card">
            <div class="card-body p-4">
                <div class="text-left">
                    <ul class="list-inline row mb-0 clearfix">
                        <li class="col-12">
                            <p class="mb-0 text-muted">All Clicks</p>
                            <p class="m-b-5 font-18 font-500 counter text-primary">
                                <span class="ajax-all_click_total">
                                    128                                </span> /
                                <span class="ajax-all_click_commission">
                                    $213.60                                </span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-2 mb-lg-0">
        <div class="card border shadow-sm h-100">
            <div class="card-header bg-transparent border-0 pb-0">
                <span class="d-none bg-success m-0 mini-stat-icon pull-left"><i class="fa fa-bell"></i></span>
                <h6 class='card-title text-center text-uppercase text-dark m-0 font-weight-bold'>Total Sales</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <ul class="list-inline row mb-0 clearfix">
                        <li class="col-6">
                            <p class="m-b-5 font-18 font-500 counter text-primary ajax-sale_total_admin_store">$112,366.90</p>
                            <p class="mb-0 text-muted">Admin Store</p>
                        </li>
                        <li class="col-6 border-left">
                            <p class="m-b-5 font-18 font-500 counter text-primary ajax-sale_localstore_vendor_total">$30.00</p>
                            <p class="mb-0 text-muted">Vendor Store</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-2 mb-lg-0">
        <div class="card border shadow-sm h-100">
            <div class="card-header bg-transparent  border-0 pb-0">
                <span class="d-none bg-success m-0 mini-stat-icon pull-left"><i class="fa fa-bell"></i></span>
                <h6 class='card-title text-center text-uppercase text-dark m-0 font-weight-bold'>Total Online</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <ul class="list-inline row mb-0 clearfix">
                        <li class="col-4">
                            <p class="m-b-5 font-18 font-500 counter text-primary ajax-online-admin">1</p>
                            <p class="mb-0 text-muted">Admin</p>
                        </li>
                        <li class="col-4 border-left">
                            <p class="m-b-5 font-18 font-500 counter text-primary ajax-online-affiliate">0</p>
                            <p class="mb-0 text-muted">Affiliate</p>
                        </li>
                        <li class="col-4 border-left">
                            <p class="m-b-5 font-18 font-500 counter text-primary ajax-online-client">0</p>
                            <p class="mb-0 text-muted">Client</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-7">
        <div class="new-card shadow-sm">
            <div class="card-header border-0">
                <h5 class="card-title">ADMIN OVERVIEW</h5>
                <div class="card-options">
                    <select onchange="loadDashboardChart()" class="renderChart chart-input form-control mr-1" name="group">
                        <option value="day" >Day</option>
                        <option value="week">Week</option>
                        <option value="month" selected="">Month</option>
                        <option value="year">Year</option>
                    </select>

                    <select onchange="loadDashboardChart()" class="yearSelection chart-input form-control" name='year'>
                                                    <option value="2016" >2016</option>
                                                    <option value="2017" >2017</option>
                                                    <option value="2018" >2018</option>
                                                    <option value="2019" >2019</option>
                                                    <option value="2020" >2020</option>
                                                    <option value="2021" selected='selected'>2021</option>
                                            </select>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                    <li class="list-inline-item d-block d-sm-inline-block m-auto">
                        <i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i>
                        <h5 class="mb-0 ajax-weekly_balance">$-17.00</h5>
                        <p class="font-14">Weekly Earning</p>
                    </li>
                    <li class="list-inline-item d-block d-sm-inline-block m-auto">
                        <i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                        <h5 class="mb-0 ajax-monthly_balance">$4,312.00</h5>
                        <p class="font-14">Monthly Earning</p>
                    </li>
                    <li class="list-inline-item d-block d-sm-inline-block m-auto">
                        <i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i>
                        <h5 class="mb-0 ajax-yearly_balance">$-32,247.35</h5>
                        <p class="font-14">Yearly Earning</p>
                    </li>
                </ul>

                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                <canvas height="340px" id="dashboard-chart" class="ct-chart ct-golden-section"></canvas>
                <div id="dashboard-chart-empty" class="ct-chart d-none ct-golden-section">
                    <div class="text-center">
                        <img class="img-responsive" src="https://demo.affiliatepro.org/assets/vertical/assets/images/no-data-2.png" style="margin-top:10px;">
                        <h3 class="m-t-40 text-center">No Activity Yet</h3>
                    </div>
                </div>

                <script type="text/javascript">
                    var ctx = document.getElementById('dashboard-chart').getContext('2d');
                    var chartData = null;

                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {},
                        options: {
                            showLines: true,
                            tooltips: {
                                mode: 'index',
                                intersect: false
                            },
                            scales: {
                                /*xAxes: [{
                                    stacked: true,
                                }],
                                yAxes: [{
                                    stacked: true
                                }]*/
                            },
                            responsive: true,
                        }
                    });

                    function renderDashboardChart(chartData){
                        var t = ctx.createLinearGradient(0, 0, 0, 150);
                        t.addColorStop(0, Chart.helpers.color("#fd397a").alpha(.3).rgbString());
                        t.addColorStop(1, Chart.helpers.color("#fd397a").alpha(0).rgbString());

                        var g = ctx.createLinearGradient(0, 0, 0, 150);
                        g.addColorStop(0, Chart.helpers.color("#1dc9b7").alpha(.3).rgbString());
                        g.addColorStop(1, Chart.helpers.color("#1dc9b7").alpha(0).rgbString());

                        chart.data = {
                            labels: Object.values(chartData['keys']),
                            datasets: [
                                {
                                    label: 'Action Count',
                                    backgroundColor: 'rgb(54, 162, 235)',
                                    borderColor: 'rgb(54, 162, 235)',
                                    data: Object.values(chartData['action_count']),
                                },
                                {

                                    label: 'Order Count',
                                    backgroundColor: 'rgb(255, 205, 86)',
                                    borderColor: 'rgb(255, 205, 86)',
                                    data: Object.values(chartData['order_count']),
                                },
                                {
                                    type: "line",
                                    borderWidth:2,
                                    label: 'Order Commission',
                                    backgroundColor: g,
                                    borderColor: "#1dc9b7",
                                    data: Object.values(chartData['order_commission']),
                                },
                                {
                                    label: 'Action Commission',
                                    backgroundColor: 'rgb(75, 192, 192)',
                                    borderColor: 'rgb(75, 192, 192)',
                                    data: Object.values(chartData['action_commission']),
                                },

                                {
                                    type: "line",
                                    label: 'Order total',
                                    backgroundColor: t,
                                    borderColor: "#fd397a",
                                    borderWidth:2,
                                    data: Object.values(chartData['order_total']),
                                },
                            ]
                        }

                        chart.update();
                    }

                    function loadDashboardChart(){
                        $.ajax({
                            url:'https://demo.affiliatepro.org/admincontrol/dashboard?getChartData=1',
                            type:'POST',
                            dataType:'json',
                            data:$(".chart-input"),
                            beforeSend:function(){},
                            complete:function(){},
                            success:function(json){
                               renderDashboardChart(json['chart']);
                            },
                        })
                    }

                    loadDashboardChart()
                </script>
            </div>
        </div>

        <div class="new-card mt-4 shadow-sm">
            <div class="card-header border-0">
                <h3 class='card-title'>AFFILIATES WORLD MAP</h3>
                <div class="card-options"></div>
            </div>
            <div class="card-body">
                <script type="text/javascript" src="https://demo.affiliatepro.org/assets/plugins/jmap/jquery-jvectormap-2.0.3.min.js"></script>
                <script type="text/javascript" src="https://demo.affiliatepro.org/assets/plugins/jmap/jquery-jvectormap-world-mill.js"></script>
                <link rel="stylesheet" type="text/css" href="https://demo.affiliatepro.org/assets/plugins/jmap/css.css">
                <div class="world-map-users"></div>
                <script type="text/javascript">
                    function load_userworldmap(_data) {
                        $('.world-map-users').html('<div class="map"><div id="world-map-users" class="map-content"></div></div>');
                        var data = {};
                        $.each(_data,function(i,j){
                            data[j['code']] = j['total'];
                        })

                        $('.world-map-users #world-map-users').vectorMap({
                            map: 'world_mill',
                            zoomButtons : 1,
                            zoomOnScroll: false,
                            panOnDrag: 1,
                            backgroundColor: 'transparent',
                            markerStyle: {
                                initial: {
                                    fill: '#9E9E9E',
                                    stroke: '#fff',
                                    "stroke-width": 1,
                                    r: 5
                                },
                            },
                            onRegionTipShow: function(e, el, code, f){
                                el.html(el.html() + (data[code] ? ': <small>' + data[code]+'</small>' : ''));
                            },
                            series: {
                                regions: [{
                                    values: data,
                                    scale: ['#dfd0f5', '#563D7C'],
                                    normalizeFunction: 'polynomial'
                                }]
                            },
                            regionStyle: {
                                initial: {
                                    fill: '#dfd0f5'
                                }
                            },
                            markers:false,
                        });
                    }
                    load_userworldmap([{"latLng":[20.593683999999999656438376405276358127593994140625,78.9628799999999984038367983885109424591064453125],"code":"IN","total":4,"name":"India - 4"},{"latLng":[-0.789274999999999948840923025272786617279052734375,113.9213270000000051140887080691754817962646484375],"code":"ID","total":2,"name":"Indonesia - 2"},{"latLng":[30.58516399999999890724211581982672214508056640625,36.23841399999999879355527809821069240570068359375],"code":"JO","total":1,"name":"Jordan - 1"},{"latLng":[47.51623099999999766396285849623382091522216796875,14.550072000000000116415321826934814453125],"code":"AT","total":1,"name":"Austria - 1"},{"latLng":[40.14310499999999848341758479364216327667236328125,47.5769269999999977471816237084567546844482421875],"code":"AZ","total":1,"name":"Azerbaijan - 1"},{"latLng":[52.13263299999999844658304937183856964111328125,5.29126600000000024692781153135001659393310546875],"code":"NL","total":1,"name":"Netherlands - 1"},{"latLng":[9.081998999999999711008058511652052402496337890625,8.6752769999999994610107023618184030055999755859375],"code":"NG","total":1,"name":"Nigeria - 1"},{"latLng":[12.879720999999999975216269376687705516815185546875,121.7740170000000006211848813109099864959716796875],"code":"PH","total":1,"name":"Philippines - 1"},{"latLng":[23.684993999999999658712113159708678722381591796875,90.3563309999999972887962940149009227752685546875],"code":"BD","total":2,"name":"Bangladesh - 2"},{"latLng":[7.873053999999999774672687635757029056549072265625,80.7717970000000065056156017817556858062744140625],"code":"LK","total":1,"name":"Sri Lanka - 1"},{"latLng":[38.9637450000000029604052542708814144134521484375,35.24332199999999915007720119319856166839599609375],"code":"TR","total":3,"name":"Turkey - 3"},{"latLng":[37.09024000000000143018041853792965412139892578125,-95.7128909999999990532160154543817043304443359375],"code":"US","total":1,"name":"United States - 1"},{"latLng":[14.0583240000000007086100595188327133655548095703125,108.2771989999999959763954393565654754638671875],"code":"VN","total":1,"name":"Vietnam - 1"},{"latLng":[28.033885999999998972498360672034323215484619140625,1.6596260000000000456310544905136339366436004638671875],"code":"DZ","total":1,"name":"Algeria - 1"},{"latLng":[-14.235003999999999990677679306827485561370849609375,-51.9252800000000007685230229981243610382080078125],"code":"BR","total":2,"name":"Brazil - 2"},{"latLng":[35.861660000000000536601874046027660369873046875,104.1953969999999998208295437507331371307373046875],"code":"CN","total":1,"name":"China - 1"},{"latLng":[7.5399890000000002743263394222594797611236572265625,-5.54708000000000023277380023500882089138031005859375],"code":"CI","total":1,"name":"Cote D'Ivoire (Ivory Coast) - 1"},{"latLng":[26.820553000000000309910319629125297069549560546875,30.8024979999999999336068867705762386322021484375],"code":"EG","total":2,"name":"Egypt - 2"},{"latLng":[46.2276379999999988967829267494380474090576171875,2.21374899999999996680344338528811931610107421875],"code":"FR","total":1,"name":"France - 1"}])
                </script>
            </div>
        </div>

        <div class="new-card mt-4 shadow-sm">
            <div class="card-header border-0">
                <h3 class="card-title">EXTERNAL SITES ORDERS</h3>
                <div class="card-options">
                    <select name="filter_integration[year]" class="form-control mr-1">
                                                    <option value="All" >All</option>
                                                    <option value="2018" >2018</option>
                                                    <option value="2019" >2019</option>
                                                    <option value="2020" >2020</option>
                                                    <option value="2021" selected="selected">2021</option>
                                            </select>
                    <select name="filter_integration[month]" class="form-control">
                                                    <option value="All">All</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                            </select>
                </div>
            </div>
            <div class="card-body p-0">
                <div role="tabpanel" id="integration-data">
                    <div class="data-here">
                        <table class="table-striped table responsive">
                            <thead>
                                <tr>
                                    <th data-priority='1'>Website</th>
                                    <th>TOTAL BALANCE: </th>
                                    <th>TOTAL SALES: </th>
                                    <th>Clicks</th>
                                    <th>Actions</th>
                                    <th>TOTAL COMMISSION: </th>
                                    <th>TOTAL ORDERS: </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
		            <td>ALL WEBSITE</td>
		            <td class="no-wrap">$4,588.40</td>
		            <td class="no-wrap">21 / $4,591.00</td>
		            <td class="no-wrap">15 / $-1.60</td>
		            <td class="no-wrap">5 / $-1.00</td>
		            <td class="no-wrap">$4,588.40 </td>
		            <td class="no-wrap">21 </td>
		        </tr><tr>
	                <td class="no-wrap">all4business.net/test/order.php</td>
	                <td class="no-wrap">$2,842.40</td>
	                <td class="no-wrap">3 / $2,843.50        </td>
	                <td class="no-wrap">3 / $-1.10</td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">$2,842.40 </td>
	                <td class="no-wrap">3 </td>
	            </tr><tr>
	                <td class="no-wrap">all4business.net/test/order2.php</td>
	                <td class="no-wrap">$1,677.00</td>
	                <td class="no-wrap">2 / $1,677.50        </td>
	                <td class="no-wrap">1 / $-0.50</td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">$1,677.00 </td>
	                <td class="no-wrap">2 </td>
	            </tr><tr>
	                <td class="no-wrap">transpoway.com</td>
	                <td class="no-wrap">$0.50</td>
	                <td class="no-wrap">4 / $0.00        </td>
	                <td class="no-wrap">3 / $0.50</td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">$0.50 </td>
	                <td class="no-wrap">4 </td>
	            </tr><tr>
	                <td class="no-wrap">outilpay.com</td>
	                <td class="no-wrap">$70.00</td>
	                <td class="no-wrap">9 / $70.00        </td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">$70.00 </td>
	                <td class="no-wrap">9 </td>
	            </tr><tr>
	                <td class="no-wrap">thoitrang360.vn/test/test.php</td>
	                <td class="no-wrap">$-1.00</td>
	                <td class="no-wrap">1 / $0.00        </td>
	                <td class="no-wrap">1 / $-1.00</td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">$-1.00 </td>
	                <td class="no-wrap">1 </td>
	            </tr><tr>
	                <td class="no-wrap">thoitrang360.vn</td>
	                <td class="no-wrap">$0.00</td>
	                <td class="no-wrap">2 / $0.00        </td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">$0.00 </td>
	                <td class="no-wrap">2 </td>
	            </tr><tr>
	                <td class="no-wrap">faceliy.com/register</td>
	                <td class="no-wrap">$0.00</td>
	                <td class="no-wrap">0 / $0.00        </td>
	                <td class="no-wrap">3 / $0.00</td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">$0.00 </td>
	                <td class="no-wrap">0 </td>
	            </tr><tr>
	                <td class="no-wrap">opp.vn</td>
	                <td class="no-wrap">$0.00</td>
	                <td class="no-wrap">0 / $0.00        </td>
	                <td class="no-wrap">3 / $0.00</td>
	                <td class="no-wrap">2 / $0.00</td>
	                <td class="no-wrap">$0.00 </td>
	                <td class="no-wrap">0 </td>
	            </tr><tr>
	                <td class="no-wrap">tourisway.com</td>
	                <td class="no-wrap">$0.50</td>
	                <td class="no-wrap">0 / $0.00        </td>
	                <td class="no-wrap">1 / $0.50</td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">$0.50 </td>
	                <td class="no-wrap">0 </td>
	            </tr><tr>
	                <td class="no-wrap">all4business.net/test/action.php</td>
	                <td class="no-wrap">$-1.00</td>
	                <td class="no-wrap">0 / $0.00        </td>
	                <td class="no-wrap">0 / $0.00</td>
	                <td class="no-wrap">3 / $-1.00</td>
	                <td class="no-wrap">$-1.00 </td>
	                <td class="no-wrap">0 </td>
	            </tr>                            </tbody>
                        </table>
                    </div>
                    <div id="integration-chart" class="ct-chart d-none ct-golden-section"></div>
                    <script type="text/javascript">
                        $("#integration-data").delegate(".show-tabs","change",function(){
                            $("#integration-data .tab-pane").hide();
                            $("#site-" + $("#integration-data option:selected").attr("data-id") ).show();
                        })

                        $("#integration-data table").dataTable({
                            "paging":   false,
                            "ordering": false,
                            "searching": false,
                            "info":     false
                        })
                    </script>
                </div>
            </div>
        </div>

        <div class="new-card mt-4 shadow-sm">
            <div class="card-header bg-white border-0">
                <h5 class="card-title">LIVE LOGS</h5>
                <div class="card-options">
                    <button class="btn btn-outline-warning btn-sm mr-1 btn-count-notification" data-toggle="tooltip" title='All Notifications' data-key='live_log' data-type='admin'>
                        <span class="count-notifications">27</span>
                        <i class="fa fa-bell"></i>
                    </button>
                    <button class="btn btn-blue-grey btn-sm btn-setting" data-toggle="tooltip" title='Live Log Settings' data-key='live_log' data-type='admin'>
                        <i class="fa fa-gear"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0" id="ajax-live_window">
                <div class="text-center m-4 empty-data" style="display: none">
                    <img class="img-responsive" src="https://demo.affiliatepro.org/assets/vertical/assets/images/no-data-2.png" style="margin-top:10px;">
                    <h3 class="m-t-40 text-center">No Activity Yet</h3>
                </div>
                <table class="ajax-live_window no-wrap responsive table table-striped" style="display: table;width: 100%">
                    <thead>
                        <th>DATE</th>
                        <th>TIME</th>
                        <th data-priority='-1' class="all">LOG</th>
                    </thead>
                    <tbody>
                                                    <tr>
	                    <td>10-03-2021</td>
	                    <td>11:45 AM</td>
	                    <td><div class="log-div"><b>New Affiliate</b> "sdfsd" From TR <img title="TR" alt="TR" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/tr.png" width="25" height="15"></div></td>
	                </tr>                                                    <tr>
	                    <td>10-03-2021</td>
	                    <td>08:51 AM</td>
	                    <td><div class="log-div"><b>New Affiliate</b> "emadnasser" From JO <img title="JO" alt="JO" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/jo.png" width="25" height="15"></div></td>
	                </tr>                                                    <tr>
	                    <td>10-03-2021</td>
	                    <td>07:31 AM</td>
	                    <td><div class="log-div"><b>NEW Store sale vendor</b> done From <img class='small-flag' title='SA' src='https://demo.affiliatepro.org/assets/vertical/assets/images/flags/sa.png'> 176.45.162.96 - <small>SA</small></div></td>
	                </tr>                                                    <tr>
	                    <td>10-03-2021</td>
	                    <td>06:35 AM</td>
	                    <td><div class="log-div"><b>New Affiliate</b> "harshalk" From LK <img title="LK" alt="LK" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/lk.png" width="25" height="15"></div></td>
	                </tr>                                                    <tr>
	                    <td>09-03-2021</td>
	                    <td>18:41 PM</td>
	                    <td><div class="log-div"><b>New Affiliate</b> "zajidjama" From TR <img title="TR" alt="TR" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/tr.png" width="25" height="15"></div></td>
	                </tr>                                                    <tr>
	                    <td>09-03-2021</td>
	                    <td>14:09 PM</td>
	                    <td><div class="log-div"><b>New Affiliate</b> "hegfdyhus" From TR <img title="TR" alt="TR" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/tr.png" width="25" height="15"></div></td>
	                </tr>                                                    <tr>
	                    <td>05-03-2021</td>
	                    <td>14:50 PM</td>
	                    <td><div class="log-div"><b>NEW Store sale vendor</b> done From <img class='small-flag' title='TN' src='https://demo.affiliatepro.org/assets/vertical/assets/images/flags/tn.png'> 197.17.73.18 - <small>TN</small></div></td>
	                </tr>                                                    <tr>
	                    <td>04-03-2021</td>
	                    <td>09:30 AM</td>
	                    <td><div class="log-div"><b>NEW Store sale vendor</b> done From <img class='small-flag' title='IN' src='https://demo.affiliatepro.org/assets/vertical/assets/images/flags/in.png'> 49.37.3.72 - <small>IN</small></div></td>
	                </tr>                                                    <tr>
	                    <td>04-03-2021</td>
	                    <td>05:17 AM</td>
	                    <td><div class="log-div"><b>NEW Store sale vendor</b> done From <img class='small-flag' title='CL' src='https://demo.affiliatepro.org/assets/vertical/assets/images/flags/cl.png'> 201.219.234.50 - <small>CL</small></div></td>
	                </tr>                                                    <tr>
	                    <td>02-03-2021</td>
	                    <td>15:50 PM</td>
	                    <td><div class="log-div"><b>NEW Store sale vendor</b> done From <img class='small-flag' title='TR' src='https://demo.affiliatepro.org/assets/vertical/assets/images/flags/tr.png'> 176.216.254.179 - <small>TR</small></div></td>
	                </tr>                                                    <tr>
	                    <td>20-12-2020</td>
	                    <td>07:47 AM</td>
	                    <td><div class="log-div"><b>New Order 545 [1609USD] </b> done From NL <img title="NL" alt="NL" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/nl.png" width="25" height="15"></div></td>
	                </tr>                                                    <tr>
	                    <td>20-12-2020</td>
	                    <td>07:47 AM</td>
	                    <td><div class="log-div"><b>New Order 904 [1611USD] </b> done From NL <img title="NL" alt="NL" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/nl.png" width="25" height="15"></div></td>
	                </tr>                                                    <tr>
	                    <td>20-12-2020</td>
	                    <td>07:43 AM</td>
	                    <td><div class="log-div"><b>New Order 483 [1744USD] </b> done From NL <img title="NL" alt="NL" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/nl.png" width="25" height="15"></div></td>
	                </tr>                                                    <tr>
	                    <td>20-12-2020</td>
	                    <td>07:43 AM</td>
	                    <td><div class="log-div"><b>New Order 480 [1576USD] </b> done From NL <img title="NL" alt="NL" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/nl.png" width="25" height="15"></div></td>
	                </tr>                                                    <tr>
	                    <td>20-12-2020</td>
	                    <td>07:41 AM</td>
	                    <td><div class="log-div"><b>New Order 485 [1668USD] </b> done From NL <img title="NL" alt="NL" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/nl.png" width="25" height="15"></div></td>
	                </tr>                                            </tbody>
                </table>

                <script type="text/javascript">
                    function aplyDatatableOnLiveLog() {
                        return $(".ajax-live_window").dataTable({
                            "paging"         : false,
                            "ordering"       : false,
                            "searching"      : false,
                            "info"           : false,
                            "scrollY"        : "300px",
                            "scrollCollapse" : true,
                        })
                    }
                    var dataTableLiveLog = aplyDatatableOnLiveLog();

                </script>
            </div>
        </div>
    </div>
    <div class="col-xl-5">
                <div class="profile mb-3">
                    <div class="profile__picture"><img src="https://demo.affiliatepro.org/assets/vertical/assets/images/no-image.jpg" alt=""/></div>
            <div class="profile__header">
                <div class="profile__account">
                    <h4 class="profile__username text-uppercase">eddy wognin</h4>
                </div>
            </div>
            <div class="profile__stats">
                <div class="profile__stat">
                    <div class="profile__value">
                        <i class="flag-sm m-auto d-inline-flex flag-sm-CI"></i>
                        <div class="profile__key text-uppercase">Country</div>
                    </div>
                </div>
                <div class="profile__stat">
                    <div class="profile__value">$0.00                        <div class="profile__key text-uppercase">Balance</div>
                    </div>
                </div>
                <div class="profile__stat">
                    <div class="profile__value">$5,000.00                        <div class="profile__key text-uppercase">Commission</div>
                    </div>
                </div>
            </div>
        </div>

                <div class="new-card pb-3 shadow-sm">
                        <div class="card-body">
                <h6>Register New Affiliate Account link</h6>
                <div class="form-group">
                    <div class="copy-input input-group">
                        <input type="text" readonly="readonly" value="https://demo.affiliatepro.org/register/MQ==" class="form-control" id="unique_re_link">
                        <button copyToClipboard="https://demo.affiliatepro.org/register/MQ==" class="input-group-addon"></button>
                    </div>
                </div>

                <div class="store-link"></div>

                <script type="text/javascript">
                    $(document).on('ready',function(){
                        $(".store-link").jsSocials({
                            url: "https://demo.affiliatepro.org/register/MQ==",
                            showCount: false,
                            showLabel: false,
                            shareIn: "popup",
                            shares: ["email", "twitter", "facebook", "linkedin", "whatsapp"]
                        });
                    })
                </script>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-white border-0">
                        <span class="d-none bg-success m-0 mini-stat-icon pull-left"><i class="fa fa-bell"></i></span>
                        <h6 class='card-title m-0'>All Clicks</h6>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>LocalStore</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-click_localstore_total">97</span> /
                                <span class="ajax-click_localstore_commission">$130.00</span>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>External</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-click_integration_total">15</span> /
                                <span class="ajax-click_integration_commission">$3.60</span>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>Forms</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-click_form_total">16</span> /
                                <span class="ajax-click_form_commission">$80.00</span>
                            </span>
                        </li>
                    </ul>
                    <div class="card-body">
                        <footer class="blockquote-footer font-14">
                            All Clicks
                            <cite title="">
                                <span class="ajax-click_all_total">128</span> /
                                <span class="click_all_commission">$213.60</span>
                            </cite>
                        </footer>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-white border-0">
                        <span class="d-none bg-success m-0 mini-stat-icon pull-left"><i class="fa fa-bell"></i></span>
                        <h6 class='card-title m-0'>Order Commission</h6>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>LocalStore</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-sale_localstore_count">112</span> /
                                <span class="ajax-sale_localstore_commission">$22,591.08</span>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>Vendor</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-sale_localstore_vendor_count">1</span> /
                                <span class="ajax-sale_localstore_vendor_commission">$9.00</span>
                            </span>
                        </li>

                        <li class="list-group-item">
                            <span>External</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-order_external_count">21</span> /
                                <span class="ajax-order_external_commission">$4,431.08</span>
                            </span>
                        </li>

                    </ul>
                    <div class="card-body">
                        <footer class="blockquote-footer font-14">
                            All Orders
                            <cite title="">
                                <span class="ajax-all_sale_count">134</span> /
                                <span class="ajax-all_sale_commission">$27,031.16</span>
                            </cite>
                        </footer>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-0">
                        <span class="d-none bg-success m-0 mini-stat-icon pull-left"><i class="fa fa-bell"></i></span>
                        <h6 class='card-title m-0'>Wallet Statistics</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Hold</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-wallet_unpaid_amounton_hold_count">60</span> /
                                <span class="ajax-wallet_on_hold_amount">$9,720.92</span>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>Unpaid</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class='ajax-wallet_unpaid_count'>60</span> /
                                <span class='ajax-wallet_unpaid_amount'>$55,309.62</span>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>Request</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-wallet_request_sent_count">44</span> /
                                <span class="ajax-wallet_request_sent_amount">$1,270.15</span>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>Paid</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-wallet_accept_count">67</span> /
                                <span class="ajax-wallet_accept_amount">$3,084.02</span>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>Cancel</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-wallet_cancel_count">0</span> /
                                <span class="ajax-wallet_cancel_amount">$0.00</span>
                            </span>
                        </li>
                    </ul>

                    <div class="card-body">
                        <footer class="blockquote-footer font-14">
                            Check All Transactions <cite title="Source Title"><a href="https://demo.affiliatepro.org/admincontrol/mywallet/">Click Here</a></cite>
                        </footer>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-0">
                        <span class="d-none bg-success m-0 mini-stat-icon pull-left"><i class="fa fa-bell"></i></span>
                        <h6 class='card-title m-0'>Vendor Order Statistics</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Paid</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-vendor_wallet_accept_count">23</span> /
                                <span class="ajax-vendor_wallet_accept_amount">$2,904.00</span>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>Request</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-vendor_wallet_request_sent_count">1</span> /
                                <span class="ajax-vendor_wallet_request_sent_amount">$720.00</span>
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span>Unpaid</span>
                            <span class="text-right pull-right text-primary font-weight-bold">
                                <span class="ajax-vendor_wallet_unpaid_count">0</span> /
                                <span class="ajax-vendor_wallet_unpaid_amount">$0.00</span>
                            </span>
                        </li>


                        <li class="list-group-item">
                            <span>Total Orders</span>
                            <span class="text-right pull-right text-primary font-weight-bold ajax-order_vendor_total">54</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="new-card mt-4">
            <div class="card-header border-0">
                <h5 class="card-title">10 TOP AFFILIATES</h5>
            </div>
            <div class="card-body p-0">
                <div role="tabpanel" id="top-users-data">
                    <div class="data-here">
                        <table class="table-striped table responsive no-wrap">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Balance</th>
                                    <th>Commission</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>eddy wognin</td>
                                        <td>CI <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/ci.png"></td>
                                        <td>$0.00</td>
                                        <td>$5,000.00</td>
                                    </tr>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>user1 user1</td>
                                        <td>AT <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/at.png"></td>
                                        <td>$0.00</td>
                                        <td>$4,631.75</td>
                                    </tr>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>Yassen Mohamed</td>
                                        <td>EG <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/eg.png"></td>
                                        <td>$0.00</td>
                                        <td>$125.00</td>
                                    </tr>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>احمد الدابي</td>
                                        <td>EG <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/eg.png"></td>
                                        <td>$0.00</td>
                                        <td>$80.00</td>
                                    </tr>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>Deivid Luvizon</td>
                                        <td>BR <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/br.png"></td>
                                        <td>$0.00</td>
                                        <td>$25.00</td>
                                    </tr>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>Md.Nayan Chowdhury</td>
                                        <td>BD <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/bd.png"></td>
                                        <td>$0.00</td>
                                        <td>$25.00</td>
                                    </tr>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>bijay malakar</td>
                                        <td>AZ <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/az.png"></td>
                                        <td>$0.00</td>
                                        <td>$25.00</td>
                                    </tr>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>Md.Nayan Chowdhury</td>
                                        <td>BD <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/bd.png"></td>
                                        <td>$0.00</td>
                                        <td>$19.00</td>
                                    </tr>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>ERWIN SITABA</td>
                                        <td>ID <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/id.png"></td>
                                        <td>$0.00</td>
                                        <td>$12.00</td>
                                    </tr>
                                                                    <tr>
                                                                                <td><span class="user-avatar" style="background-image:url('https://demo.affiliatepro.org/assets/vertical/assets/images/users/avatar-1.jpg')"></span></td>
                                        <td>test test</td>
                                        <td>PH <img class="country-flag" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/ph.png"></td>
                                        <td>$0.00</td>
                                        <td>$2.00</td>
                                    </tr>
                                                            </tbody>
                        </table>
                    </div>

                    <script type="text/javascript">
                        var dataTableUser = $("#top-users-data table").dataTable({
                            "paging":   false,
                            "ordering": false,
                            "searching": false,
                            "info":     false
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var ajax_interval = 2000; // in time mili second
            ajax_interval  = 15000;

    var dashboard_xhr;
    var last_id_integration_logs = 154;
    var last_id_integration_orders = 5;
    var last_id_newuser = 237;
    var last_id_notifications = 1143;
    var total_commision_filter_year = '2021';
    var total_commision_filter_month = '03';
    var settings_clear = false;

    function playSound(){
        $("body").append('<iframe id="noti-sound-iframe" src="https://demo.affiliatepro.org/assets/notify/notification.mp3"></iframe>')
        $("#noti-sound-iframe").on('load',function(){
            setTimeout(function(){
                $("#noti-sound-iframe").remove();
            },1000)
        });
    }

    function setTimeout2(callnexttime,show_popup) {
        $("<div />").css("height","0px").animate({height:'100px'},{
            duration: ajax_interval,
            step: function(now){
                $("#dashboard-progress").css('width',now+"%");
            },
            complete: function(){
                getDashboard(callnexttime,show_popup);
            }
        });
    }

    var checkdata = {
        '.ajax-admin_balance'                     : 'admin_balance',
        '.ajax-sale_total_admin_store'            : 'sale_total_admin_store',
        '.ajax-sale_localstore_vendor_total'      : 'sale_localstore_vendor_total',
        '.ajax-click_action_total'                : 'click_action_total',
        '.ajax-click_action_commission'           : 'click_action_commission',
        '.ajax-all_click_total'                   : 'all_click_total',
        '.ajax-all_click_commission'              : 'all_click_commission',
        '.ajax-click_localstore_total'            : 'click_localstore_total',
        '.ajax-click_localstore_commission'       : 'click_localstore_commission',
        '.ajax-click_integration_total'           : 'click_integration_total',
        '.ajax-click_integration_commission'      : 'click_integration_commission',
        '.ajax-click_form_total'                  : 'click_form_total',
        '.ajax-click_form_commission'             : 'click_form_commission',
        '.ajax-click_all_total'                   : 'click_all_total',
        '.ajax-click_all_commission'              : 'click_all_commission',
        '.ajax-sale_localstore_count'             : 'sale_localstore_count',
        '.ajax-sale_localstore_commission'        : 'sale_localstore_commission',
        '.ajax-sale_localstore_vendor_count'      : 'sale_localstore_vendor_count',
        '.ajax-sale_localstore_vendor_commission' : 'sale_localstore_vendor_commission',
        '.ajax-order_external_count'              : 'order_external_count',
        '.ajax-order_external_commission'         : 'order_external_commission',
        '.ajax-all_sale_count'                    : 'all_sale_count',
        '.ajax-all_sale_commission'               : 'all_sale_commission',
        '.ajax-wallet_unpaid_amounton_hold_count' : 'wallet_unpaid_amounton_hold_count',
        '.ajax-wallet_on_hold_amount'             : 'wallet_on_hold_amount',
        '.ajax-wallet_unpaid_count'               : 'wallet_unpaid_count',
        '.ajax-wallet_unpaid_amount'              : 'wallet_unpaid_amount',
        '.ajax-wallet_request_sent_count'         : 'wallet_request_sent_count',
        '.ajax-wallet_request_sent_amount'        : 'wallet_request_sent_amount',
        '.ajax-wallet_accept_count'               : 'wallet_accept_count',
        '.ajax-wallet_accept_amount'              : 'wallet_accept_amount',
        '.ajax-wallet_cancel_count'               : 'wallet_cancel_count',
        '.ajax-wallet_cancel_amount'              : 'wallet_cancel_amount',
        '.ajax-vendor_wallet_accept_count'        : 'vendor_wallet_accept_count',
        '.ajax-vendor_wallet_accept_amount'       : 'vendor_wallet_accept_amount',
        '.ajax-vendor_wallet_request_sent_count'  : 'vendor_wallet_request_sent_count',
        '.ajax-vendor_wallet_request_sent_amount' : 'vendor_wallet_request_sent_amount',
        '.ajax-vendor_wallet_unpaid_count'        : 'vendor_wallet_unpaid_count',
        '.ajax-vendor_wallet_unpaid_amount'       : 'vendor_wallet_unpaid_amount',
        '.ajax-order_vendor_total'                : 'order_vendor_total',
    }

    function setColors() {
        $.each(checkdata,function(ele,Key){
            if($(ele).length){
                var val =  parseInt($(ele).html().toString().replace(/[^0-9-.]/g, '') || 0);

                $(ele).removeClass("text-primary")
                $(ele).removeClass("text-danger")
                if(val >= 0){
                    $(ele).addClass("text-primary");
                } else{
                    $(ele).addClass("text-danger");
                }
            }
        })
    }

    setColors();

    function getDashboard(callnexttime,show_popup,actions){
        if(dashboard_xhr && dashboard_xhr.readyState != 4) dashboard_xhr.abort();

        if(actions == 'clearlog'){
            settings_clear = true;
            last_id_integration_logs = 0;
            last_id_integration_orders = 0;
            last_id_newuser = 0;
            last_id_notifications = 0;
            console.log(actions)
        }

        dashboard_xhr = $.ajax({
            url:'https://demo.affiliatepro.org/admincontrol/ajax_dashboard',
            type:'POST',
            dataType:'json',
            data:{
                renderChart  : $(".renderChart").val(),
                selectedyear :$('.yearSelection').val(),
                last_id_integration_logs :last_id_integration_logs,
                last_id_integration_orders :last_id_integration_orders,
                last_id_newuser :last_id_newuser,
                last_id_notifications :last_id_notifications,
                last_id_top_notifications :$("#last_id_notifications").val(),
                total_commision_filter_year : $('select[name="filter_commission[year]"]').val(),
                total_commision_filter_month : $('select[name="filter_commission[month]"]').val(),
                integration_data_year : $('select[name="filter_integration[year]"]').val(),
                integration_data_month : $('select[name="filter_integration[month]"]').val(),
                integration_data_selected : $("#integration-chart-type").val(),
            },
            beforeSend:function(){},
            complete:function(){
                if(callnexttime){
                    setTimeout2(true,true);
                }
            },
            success:function(json){
                setTimeout(function(){
                    $('.ajax-live_window .fa-bell').removeClass('blink-icon');
                    $(".mini-stat-icon i").removeClass("blink-icon");
                }, 5000);

                var play_sound = false;


                $.each(checkdata,function(ele,Key){
                    if($.trim($(ele).html()) != json['admin_totals'][Key]){
                        play_sound = true;
                        $(ele).html(json['admin_totals'][Key]);
                    }
                })

                setColors();

                if(json['online_count']){
                    if (typeof json['online_count']['admin'] == 'object' && json['online_count']['admin']['online'] ) {
                        $(".ajax-online-admin").html( json['online_count']['admin']['online']);
                    }
                    if (typeof json['online_count']['user'] == 'object' && json['online_count']['user']['online'] ) {
                        $(".ajax-online-affiliate").html(json['online_count']['user']['online']);
                    }
                    if (typeof json['online_count']['client'] == 'object' && json['online_count']['client']['online'] ) {
                        $(".ajax-online-client").html(json['online_count']['client']['online']);
                    }
                }

                $(".ajax-weekly_balance").html(json['admin_totals_week']);
                $(".ajax-monthly_balance").html(json['admin_totals_month']);
                $(".ajax-yearly_balance").html(json['admin_totals_year']);

                renderDashboardChart(json['chart'])
                load_userworldmap(json['userworldmap'])

                if($.trim($(".ajax-notifications_count").html()) != json['notifications_count']){
                    play_sound = true;
                }

                if(json['newuser']){
                    $.each(json['newuser'], function(i,j){
                        last_id_newuser = last_id_newuser <= parseInt(j['id']) ? parseInt(j['id']) : last_id_newuser;
                        if(show_popup && json['live_dashboard']['admin_affiliate_register_status']){
                            show_tost("success","New Affiliate Register","New Affiliate '"+ j['firstname'] +" "+ j['lastname'] +"' Register Just Now");
                        }
                    })
                }

                var count = 0;
                if(json['live_window']){
                    var notifications='';
                    $.each(json['live_window'], function(i,j){
                        play_sound = true;
                        count++;
                        notifications += j['title'];
                    })
                    if (notifications) {
                        dataTableLiveLog.fnClearTable();
                        dataTableLiveLog.fnDestroy();

                        $(".ajax-live_window tbody").html(notifications)
                        dataTableLiveLog = aplyDatatableOnLiveLog()
                    }
                }

                if(json['integration_logs']){
                    $.each(json['integration_logs'], function(i,j){
                        last_id_integration_logs = last_id_integration_logs <= parseInt(j['id']) ? parseInt(j['id']) : last_id_integration_logs;
                        if(j['click_type'] == 'Action'){
                            if(show_popup && json['live_dashboard']['admin_action_status']){
                                show_tost("success","New Action", "New Action Click Done Just Now");
                            }
                        }
                    })
                }


                if(json['integration_orders']){
                    $.each(json['integration_orders'], function(i,j){
                        last_id_integration_orders = last_id_integration_orders <= parseInt(j['id']) ? parseInt(j['id']) : last_id_integration_orders;
                        if(show_popup && json['live_dashboard']['admin_integration_order_status']){
                            show_tost("success","New Integration Order","New Integration Order Place Just Now");
                        }
                    })
                }

                var top_notifications = '';
                if(json['notifications']){
                    $.each(json['notifications'], function(i,j){
                        top_notifications += '<a href="javascript:void(0)" onclick="shownofication('+ j['notification_id'] +',\'https://demo.affiliatepro.org/admincontrol'+ j['notification_url'] + '\')" class="dropdown-item notify-item">\
                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>\
                        <p class="notify-details"><b>'+ j['notification_title'] +'</b><small class="text-muted">'+ j['notification_description'] +'</small></p>\
                        </a>';
                        if(j['notification_type'] == 'order'){
                            if(show_popup && json['live_dashboard']['admin_local_store_order_status']){
                                show_tost("success","New Local Store Order", j['notification_title'] + " Just Now");
                            }
                        }
                        last_id_notifications = last_id_notifications <= parseInt(j['notification_id']) ? parseInt(j['notification_id']) : last_id_notifications;
                    })
                }

                $("#last_id_top_notifications").val(last_id_notifications);
                $('#allnotification').prepend(top_notifications);

                if(play_sound && json['sound_status'] == "1" && show_popup){
                    playSound();
                }
            },
        })
    }

    $(function() {
        $(".progress").on('each',function() {
            var value = $(this).attr('data-value');
            var left = $(this).find('.progress-left .progress-bar');
            var right = $(this).find('.progress-right .progress-bar');
            if (value > 0) {
                if (value <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(180deg)')
                }
            }
        })
        function percentageToDegrees(percentage) {
            return percentage / 100 * 360
        }
    });

    setTimeout2(true,true)
</script>









    </div> <!-- content -->






<div class="modal" id="setting-widzard"></div>
<div class="modal" id="log-widzard"></div>

<div class="modal" id="model-ajaxError">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="https://demo.affiliatepro.org/assets/images/ajax-warning.png">
        <div class="-body"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Dismiss</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://demo.affiliatepro.org/assets/plugins/toastr/toastr.js"></script>
<script type="text/javascript">

	var serverErrorCode  = {
	    100 : 'Continue',
	    101 : 'Switching Protocols',
	    102 : 'Processing',
	    200 : 'OK',
	    201 : 'Created',
	    202 : 'Accepted',
	    203 : 'Non-Authoritative Information',
	    204 : 'No Content',
	    205 : 'Reset Content',
	    206 : 'Partial Content',
	    207 : 'Multi-Status',
	    208 : 'Already Reported',
	    226 : 'IM Used',
	    300 : 'Multiple Choices',
	    301 : 'Moved Permanently',
	    302 : 'Found',
	    303 : 'See Other',
	    304 : 'Not Modified',
	    305 : 'Use Proxy',
	    306 : 'Switch Proxy',
	    307 : 'Temporary Redirect',
	    308 : 'Permanent Redirect',
	    400 : 'Bad Request',
	    401 : 'Unauthorized',
	    402 : 'Payment Required',
	    403 : 'Forbidden',
	    404 : 'Not Found',
	    405 : 'Method Not Allowed',
	    406 : 'Not Acceptable',
	    407 : 'Proxy Authentication Required',
	    408 : 'Request Timeout',
	    409 : 'Conflict',
	    410 : 'Gone',
	    411 : 'Length Required',
	    412 : 'Precondition Failed',
	    413 : 'Request Entity Too Large',
	    414 : 'Request-URI Too Long',
	    415 : 'Unsupported Media Type',
	    416 : 'Requested Range Not Satisfiable',
	    417 : 'Expectation Failed',
	    418 : 'I\'m a teapot',
	    419 : 'Authentication Timeout',
	    420 : 'Enhance Your Calm',
	    420 : 'Method Failure',
	    422 : 'Unprocessable Entity',
	    423 : 'Locked',
	    424 : 'Failed Dependency',
	    424 : 'Method Failure',
	    425 : 'Unordered Collection',
	    426 : 'Upgrade Required',
	    428 : 'Precondition Required',
	    429 : 'Too Many Requests',
	    431 : 'Request Header Fields Too Large',
	    444 : 'No Response',
	    449 : 'Retry With',
	    450 : 'Blocked by Windows Parental Controls',
	    451 : 'Redirect',
	    451 : 'Unavailable For Legal Reasons',
	    494 : 'Request Header Too Large',
	    495 : 'Cert Error',
	    496 : 'No Cert',
	    497 : 'HTTP to HTTPS',
	    499 : 'Client Closed Request',
	    500 : 'Internal Server Error',
	    501 : 'Not Implemented',
	    502 : 'Bad Gateway',
	    503 : 'Service Unavailable',
	    504 : 'Gateway Timeout',
	    505 : 'HTTP Version Not Supported',
	    506 : 'Variant Also Negotiates',
	    507 : 'Insufficient Storage',
	    508 : 'Loop Detected',
	    509 : 'Bandwidth Limit Exceeded',
	    510 : 'Not Extended',
	    511 : 'Network Authentication Required',
	    598 : 'Network read timeout error',
	    599 : 'Network connect timeout error',
   	}

	toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "newestOnTop": true,
	  "progressBar": true,
	  "positionClass": "toast-top-right",
	  "preventDuplicates": false,
	  "onclick": null,
	  "showDuration": "300",
	  "hideDuration": "20000",
	  "timeOut": "20000",
	  "extendedTimeOut": "20000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
	  "hideMethod": "fadeOut"
	}

	function show_tost(type,title,message) {
		toastr[type](message,title )
	}

	$(".btn-setting").on('click',function(){
		$this = $(this);
		$("#setting-widzard").modal({
			backdrop: 'static',
			keyboard: false
		});

		$("#setting-widzard").html('Loading');

		$.ajax({
			url:'https://demo.affiliatepro.org/setting/getModal',
			type:'POST',
			dataType:'json',
			data:{
				'key' : $this.attr('data-key'),
				'type' : $this.attr('data-type'),
			},
			beforeSend:function(){ $this.btn("loading"); },
			complete:function(){ $this.btn("reset"); },
			success:function(json){
				if(json['html']){
					$("#setting-widzard").html(json['html']);
				}
			},
		})
	})


  	$(document).delegate('.allow-number','keypress keyup blur',function(event) {
    	$(this).val($(this).val().replace(/[^0-9\.]/g,''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
  	});

  	$(document).delegate("[data-log]",'click',function(){
  		$this = $(this);

  		var data = {};
  		var search = $this.attr('data-extra');
  		if(search){
			data = JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}')
  		}

  		data['type'] =$this.attr("data-log");

  		$.ajax({
  			url:'https://demo.affiliatepro.org/admincontrol/logs',
  			type:'POST',
  			dataType:'json',
  			data:data,
  			beforeSend:function(){$this.btn("loading");},
  			complete:function(){$this.btn("reset");},
  			success:function(json){
  				if(json['html']){
  					$("#log-widzard").modal({
						backdrop: 'static',
						keyboard: false
					});
					$("#log-widzard").html(json['html']);
				}
  			},
  		})
  	})

  	$(".password-group .input-group-prepend button").on('click',function(){
		$input = $(this).parents(".password-group").find("input");
		$i = $(this).parents(".password-group").find("i");
  		if($i.hasClass("fa-eye")){
  			$i.addClass("fa-eye-slash");
  			$i.removeClass("fa-eye");
  			$input.attr('type','text');
  		} else {
  			$i.addClass("fa-eye");
  			$i.removeClass("fa-eye-slash");
  			$input.attr('type','password');
  		}
  	})

  	$(document).ajaxComplete(function myErrorHandler(event, xhr, ajaxOptions, thrownError) {
  		var statusCode = xhr.status;


  		if(statusCode != 200 && ajaxOptions.type == 'POST'){
	  		var title = '';
	  		var body = '';

	  		title = 'Internal Server Error';
	  		body += '<h3>Sorry, an error has occured.</h3>';

		  	if(serverErrorCode[statusCode]){
	  			body += "<p>Error Message : " + serverErrorCode[statusCode] + "</p>";
		  		body += "<p>Error Code : " + statusCode + "</p>";

				$("#model-ajaxError .modal-title").html(title);
				$("#model-ajaxError .modal-body .-body").html(body);
				$("#model-ajaxError").modal("show");
		  	} else {
			  	body += '<p>Error Message : Uknown Error </p>';
			}

			$(".btn-loading").removeClass('btn-loading');
  		}
	});
</script>
<footer class="footer">

   <span class="text-center"> My Footer Text Will be here</span> <i class="mdi mdi-heart text-danger"></i>  <span class="text-center">

    <div title='Current Time : 2021-03-10 12:02:17 Africa/Abidjan'></div></span>

   <!-- VERSION : 4.0.0.4 | Auto Update Disabled-->

</footer>



            </div>

            <!-- End Right content here -->



        </div>

        <!-- END wrapper -->









<!--<footer class="footer">

	<div class="row">

		<div class="col-sm text-left">

	    	VERSION : 4.0.0.4 | Auto Update Disabled
	    </div>

	    <div class="col-sm-6" title='Current Time : 2021-03-10 12:02:17 Africa/Abidjan'>My Footer Text Will be here</div>

	    <div class="col-sm"></div>

	</div>

</footer>-->



<div class="modal" id="payment-detail_modal">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title mt-0">User Payment Details</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>

      <div class="modal-body">

      	<h4 class="modal-title mt-0">Bank Details</h4>

            <div class="table-rep-plugin">

                <div class="table-responsive b-0" data-pattern="priority-columns">

            <table id="tech-companies-1" class="table  table-striped">

        	<thead>

        		<tr>

					<th class="txt-cntr">Bank Name</th>

					<th class="txt-cntr">Account Number</th>

					<th class="txt-cntr">Account Name</th>

					<th class="txt-cntr">IFSC Code</th>

				</tr>

        	</thead>

        	<tbody class="bank-details"> </tbody>

        </table>

        </div>

        </div>





        <h4 class="modal-title mt-0">Paypal Emails</h4>

        <div class="table-rep-plugin">

          <div class="table-responsive b-0" data-pattern="priority-columns">

            <table id="tech-companies-1" class="table  table-striped">

            <thead>

                <tr>

                    <th class="txt-cntr"></th>

                    <th class="txt-cntr">Email</th>

                </tr>

            </thead>

            <tbody class="paypal-details"> </tbody>

        </table>

      </div>

     </div>



      <h4 class="modal-title mt-0">User Details</h4>

      <div class="table-rep-plugin">

          <div class="table-responsive b-0" data-pattern="priority-columns">

            <table id="tech-companies-1" class="table  table-striped">

        	<tbody class="user-details"></tbody>

        </table>

        </div>

    </div>



      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

</div>

</div>






<!--<div class="modal fade" id="welcome-modal" role="dialog">

	<div class="modal-dialog modal-lg">

		<div class="modal-content">

			<div class="modal-body">

				<h3 class="text-center">Welcome To Affiliate Pro Script</h3>



				<br>

				<p>Starting the work with Affiliate script you need to complete First Steps</p>

				<p>Click <a class="btn btn-primary" href="https://demo.affiliatepro.org/firstsetting"><i class="fa fa-gear"></i></a> to start the First Setting Process</p>

				<p>For any issue contact with <a href="mailto:support@affiliatepro.org">support@affiliatepro.org</a></p>



				<br>

				<center>

				<iframe style="width: 100%;max-width: 500px;" height="315" src="https://www.youtube.com/embed/SyLHbe0oJag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				</center>



				<br>

				<b>Affiliate Pro Team</b>





				<br><br>

				<div class="welcome-footer ">

					<label class="hide-welcome">Don't show again</label>

					<a href="https://demo.affiliatepro.org/firstsetting" class="close-button pull-right" >Take me to setting</a>

				</div>

			</div>

		</div>

	</div>

</div>-->



<script type="text/javascript">



	$(document).delegate(".only-number-allow","keypress",function (e) {

     	if (e.which != 46 && e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

       		return false;

    	}

   	});



	$(document).on('ready',function(){

		if(getCookie('hide_welcome') != 'true'){

			$("#welcome-modal").modal("show")

		}

	})

	function setCookie(cname, cvalue, exdays) {

	  var d = new Date();

	  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));

	  var expires = "expires="+d.toUTCString();

	  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

	}



	function readURL(input,placeholder) {

	  if (input.files && input.files[0]) {

	    var reader = new FileReader();



	    reader.onload = function(e) {

	      $(placeholder).attr('src', e.target.result);

	    }



	    reader.readAsDataURL(input.files[0]);

	  }

	}



	function getCookie(cname) {

	  var name = cname + "=";

	  var ca = document.cookie.split(';');

	  for(var i = 0; i < ca.length; i++) {

	    var c = ca[i];

	    while (c.charAt(0) == ' ') {

	      c = c.substring(1);

	    }

	    if (c.indexOf(name) == 0) {

	      return c.substring(name.length, c.length);

	    }

	  }

	  return "";

	}





	$('.hide-welcome').on('click',function(){

		setCookie("hide_welcome","true", 365)

		$("#welcome-modal").modal("hide");

	})



</script>








<div class="modal" id="model-shorturl">



</div>



<script type="text/javascript">

	$(".btn-delete").on('click',function(){

        return confirm("Are your sure ?");

    })



    /*function shortUrlConfig(longUrl, title){

    	$this = $(this);

    	$.ajax({

    		url:'https://demo.affiliatepro.org/shorturl/configModal',

    		type:'POST',

    		dataType:'json',

    		data:{longUrl,longUrl,title:title},

    		beforeSend:function(){$this.btn("loading");},

    		complete:function(){$this.btn("reset");},

    		success:function(json){

    			if(json['html']){

    				$("#model-shorturl").html(json['html']);

    				$("#model-shorturl").modal("show");

    			}

    		},

    	})

    }*/



	$(document).delegate("[payment_detail]",'click',function(e){

		e.preventDefault();

		e.stopPropagation();

		$this = $(this);

		var user_id = $this.attr("payment_detail");

		$.ajax({

			url:'https://demo.affiliatepro.org/admincontrol/getpaymentdetail/' + user_id,

			type:'POST',

			dataType:'json',

			beforeSend:function(){ $this.btn("loading"); },

			complete:function(){ $this.btn("reset"); },

			success:function(json){

				$('#payment-detail_modal').modal("show");

				var html = '';

				$.each(json['paymentlist'], function(i,j){

					html += '<tr>';

					html += '<th>'+ j['payment_bank_name'] +'</th>';

					html += '<th>'+ j['payment_account_number'] +'</th>';

					html += '<th>'+ j['payment_account_name'] +'</th>';

					html += '<th>'+ j['payment_ifsc_code'] +'</th>';

					html += '</tr>';

				})

				$('#payment-detail_modal .bank-details').html(html);

				var html = '';

                $.each(json['paypalaccounts'], function(i,j){

                    html += '<tr>';

                    html += '<th>'+ (i+1) +'</th>';

                    html += '<th>'+ j['paypal_email'] +'</th>';

                    html += '</tr>';

                })

                $('#payment-detail_modal .paypal-details').html(html);

                var html = '';

                html += '<tr>';

                html += '<th>First Name</th>';

                html += '<td>'+ json.user.firstname +'</td>';

                html += '</tr>';

                html += '<tr>';

                html += '<th>Last Name</th>';

                html += '<td>'+ json.user.lastname +'</td>';

                html += '</tr>';

                html += '<tr>';

                html += '<th>Username</th>';

                html += '<td>'+ json.user.username +'</td>';

                html += '</tr>';

                html += '<tr>';

                html += '<th>Email</th>';

                html += '<td>'+ json.user.email +'</td>';

                html += '</tr>';

                html += '<tr>';

                html += '<th>Phone</th>';

                html += '<td>'+ json.user.phone +'</td>';

                html += '</tr>';

                html += '<tr>';

                html += '<th>Address</th>';

                html += '<td>'+ json.user.address +'</td>';

                html += '</tr>';

                html += '<tr>';

                html += '<th>State</th>';

                html += '<td>'+ json.user.state +'</td>';

                html += '</tr>';

                html += '<tr>';

                html += '<th>Country</th>';

                html += '<td>'+ json.user.country +'</td>';

                html += '</tr>';

				$('#payment-detail_modal .user-details').html(html);

			},

		})

	})

</script>



<script src="https://demo.affiliatepro.org/assets/js/jquery-ui.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/jquery-confirm.min.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/popper.min.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/bootstrap.min.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/modernizr.min.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/detect.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/fastclick.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/jquery.slimscroll.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/jquery.blockUI.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/waves.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/jquery.nicescroll.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/jquery.scrollTo.min.js"></script>

<script src="https://demo.affiliatepro.org/assets/vertical/assets/plugins/skycons/skycons.min.js"></script>

<script src="https://demo.affiliatepro.org/assets/vertical/assets/plugins/raphael/raphael-min.js"></script>

<script src="https://demo.affiliatepro.org/assets/vertical/assets/plugins/morris/morris.min.js"></script>

<script src="https://demo.affiliatepro.org/assets/vertical/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

<script src="https://demo.affiliatepro.org/assets/js/lightbox.js"></script>







<script src="https://demo.affiliatepro.org/assets/js/jssocials-1.4.0/jssocials.min.js"></script>

<link type="text/css" rel="stylesheet" href="https://demo.affiliatepro.org/assets/js/jssocials-1.4.0/jssocials.css" />

<link type="text/css" rel="stylesheet" href="https://demo.affiliatepro.org/assets/js/jssocials-1.4.0/jssocials-theme-flat.css" />



<script type="text/javascript">

	$(document).delegate(".copy-input input",'click', function(){

		$(this).select();

	})

	$(document).delegate('[copyToClipboard]',"click", function(){

		$this = $(this);

	  	var $temp = $("<input>");

	  	$("body").append($temp);

	  	$temp.val($(this).attr('copyToClipboard')).select();

	  	document.execCommand("copy");

	  	$temp.remove();

	  	$this.tooltip('hide').attr('data-original-title', 'Copied!').tooltip('show');

	  	setTimeout(function() { $this.tooltip('hide'); }, 500);

	});

	$('[copyToClipboard]').tooltip({

	  trigger: 'click',

	  placement: 'bottom'

	});

</script>

<script type="text/javascript">

    (function ($) {

        $.fn.button = function (action) {

            var self = $(this);

            if (action == 'loading') {

                if ($(self).attr("disabled") == "disabled") {

                    //e.preventDefault();

                }

                $(self).attr("disabled", "disabled");

                $(self).attr('data-btn-text', $(self).html());

                $(self).html('<i class="fa fa-spinner fa-spin"></i>' + $(self).text());

            }

            if (action == 'reset') {

                $(self).html($(self).attr('data-btn-text'));

                $(self).removeAttr("disabled");

            }

        }

    })(jQuery);

</script>

<script src="https://demo.affiliatepro.org/assets/js/app.js"></script>

<link href="https://demo.affiliatepro.org/assets/js/summernote-0.8.12-dist/summernote-bs4.css" rel="stylesheet">

<script src="https://demo.affiliatepro.org/assets/js/summernote-0.8.12-dist/summernote-bs4.js"></script>



<div class="modal fade" id="ip-flag_model">

	<div class="modal-dialog">

		<div class="modal-content">

			<div class="modal-header">

				<h4 class="modal-title">All IPs Details</h4>

				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

			</div>

			<div class="modal-body"></div>

			<div class="modal-footer">

				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>

		</div>

	</div>

</div>



<script>

	$(".select2-input").select2();

	$(document).delegate(".view-all",'click',function(){

		var data = $(this).find("span").html();

		var html = '<table class="table table-hover">';

		data = JSON.parse(data);

		html += '<tr>';

		html += '	<th>IP</th>';

		html += '	<th width="30px">Country</th>';

		html += '</tr>';



		$.each(data, function(i,j){

			html += '<tr>';

			html += '	<td>'+ j['ip'] +'</td>';

			html += '	<td><img style="width: 20px;" src="https://demo.affiliatepro.org/assets/vertical/assets/images/flags/'+ j['country_code'].toLowerCase() +'.png" ></td>';

			html += '</tr>';

		})

		html += '</table>';



		$("#ip-flag_model").modal("show");

		$("#ip-flag_model .modal-body").html(html);

	})

	$('[data-toggle="tooltip"]').tooltip();



	if($('#morris-area-chart').length > 0) {

		var areaData = [

			{y: '2011', a: 10, b: 15},

			{y: '2012', a: 30, b: 35},

			{y: '2013', a: 10, b: 25},

			{y: '2014', a: 55, b: 45},

			{y: '2015', a: 30, b: 20},

			{y: '2016', a: 40, b: 35},

			{y: '2017', a: 10, b: 25},

			{y: '2018', a: 25, b: 30}

		];

		Morris.Area({

			element: 'morris-area-chart',

			pointSize: 3,

			lineWidth: 2,

			data: areaData,

			xkey: 'y',

			ykeys: ['a', 'b'],

			labels: ['Orders', 'Sales'],

			resize: true,

			hideHover: 'auto',

			gridLineColor: '#eef0f2',

			lineColors: ['#00c292', '#03a9f3'],

			lineWidth: 0,

			fillOpacity: 0.1,

			xLabelMargin: 10,

			yLabelMargin: 10,

			grid: false,

			axes: false,

			pointSize: 0

		});

	}

	$(document).on('ready',function(){

		if($('#morris-donut-chart').length > 0) {

			var donutData = [


			];

			Morris.Donut({

				element: 'morris-donut-chart',

				data: donutData,

				resize: true,

				colors: ['#40a4f1', '#5b6be8', '#c1c5e2', '#e785da', '#00bcd2']

			});

		}



		if($("#boxscroll").length > 0){

			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});

		}

		if($("#boxscroll2").length > 0){

			$("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});

		}



		if($(".clickable-row").length > 0){

			$(".clickable-row").on('click',function(){

				window.location = $(this).data("href");

			});

		}

		if($("#Country").length > 0){

			$('#Country').on('change', function(){

				country_id = $(this).val();

				$.ajax({

					type: "POST",

					url: "https://demo.affiliatepro.org/admincontrol/getstate",

					data:'country_id='+country_id,

					success: function(data){

						$("#StateProvince").html(data);

					}

				});

			});

		}

	});

	function shownofication(id,url){

		$.ajax({

			type: "POST",

			url: "https://demo.affiliatepro.org/admincontrol/updatenotify",

			data:'id='+id,

			dataType:'json',

			success: function(data){

				window.location.href=data['location'];

			}

		});

	}



	$(document).on('ready',function(){

        $('.summernote-img').each(function(){

            sumNote($(this));

        });

    });



    function sumNote(element){



        var height = $(element).attr("data-height") ? $(element).attr("data-height") : 500;

        $(element).summernote({

            disableDragAndDrop: true,

            height: height,

            toolbar: [

                ['style', ['style']],

                ['font', ['bold', 'underline', 'clear']],

                ['fontname', ['fontname']],

                ['color', ['color']],

                ['para', ['ul', 'ol', 'paragraph']],

                ['table', ['table']],

                ['insert', ['link', 'image', 'video']],

                ['view', ['fullscreen', 'codeview', 'help']]

            ],

            buttons: {

                image: function() {

                    var ui = $.summernote.ui;

                    // create button

                    var button = ui.button({

                        contents: '<i class="fa fa-image" />',

                        tooltip: false,

                        click: function () {

                            $('#modal-image').remove();



                            $.ajax({

                                url: 'https://demo.affiliatepro.org/filemanager',

                                dataType: 'html',

                                beforeSend: function() {

                                },complete: function() {

                                },success: function(html) {

                                    $('body').append('<div id="modal-image" class="modal fade">' + html + '</div>');

                                    $('#modal-image').modal('show');

                                    $('#modal-image').delegate('.image-box .thumbnail','click', function(e) {

                                        e.preventDefault();

                                        $(element).summernote('insertImage', $(this).attr('href'));

                                        $('#modal-image').modal('hide');

                                    });

                                }

                            });

                        }

                    });



                    return button.render();

                }

            }

        });

    }

</script>

</body></html>

						