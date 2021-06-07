@include('layouts.nav')
<div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                            <span class="pull-right text-muted small">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="grid_options.html">
                                        <div>
                                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                        <li>
                            <a class="right-sidebar-toggle">
                                <i class="fa fa-tasks"></i>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row white-bg dashboard-header" id="content">
            @yield('contents')
            </div>
            <div class="row">
                    <div class="footer">
                        <div class="pull-right">
                            10GB of <strong>250GB</strong> Free.
                        </div>
                        <div>
                            <strong>Copyright</strong> Example Company &copy; 2014-2017
                        </div>
                    </div>
            </div>

        </div>

                <!-- Mainly scripts -->
                <script src="{{ URL::asset('inspinia/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('inspinia/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script src="{{ URL::asset('inspinia/js/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- Flot -->
        <script src="{{ URL::asset('inspinia/js/plugins/flot/jquery.flot.js') }}"></script>
        <script src="{{ URL::asset('inspinia/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ URL::asset('inspinia/js/plugins/flot/jquery.flot.spline.js') }}"></script>
        <script src="{{ URL::asset('inspinia/js/plugins/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ URL::asset('inspinia/js/plugins/flot/jquery.flot.pie.js') }}"></script>

        <!-- Peity -->
        <script src="{{ URL::asset('inspinia/js/plugins/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ URL::asset('inspinia/js/demo/peity-demo.js') }}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{ URL::asset('inspinia/js/inspinia.js') }}"></script>
        <script src="{{ URL::asset('inspinia/js/plugins/pace/pace.min.js') }}"></script>

        <!-- jQuery UI -->
        <script src="{{ URL::asset('inspinia/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <!-- GITTER -->
        <script src="{{ URL::asset('inspinia/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

        <!-- Sparkline -->
        <script src="{{ URL::asset('inspinia/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Sparkline demo data  -->
        <script src="{{ URL::asset('inspinia/js/demo/sparkline-demo.js') }}"></script>

        <!-- ChartJS-->
        <script src="{{ URL::asset('inspinia/js/js/plugins/chartJs/Chart.min.js') }}"></script>

        <!-- Toastr -->
        <script src="{{ URL::asset('inspinia/js/js/plugins/toastr/toastr.min.js') }}"></script>

        <!-- Dropzone -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

        <script type="text/javascript">
    let file = document.querySelector("[type=file]");
    let upload = document.querySelector('#upload');
    let btnSubmit = document.querySelector('#btnSubmit');
    upload.addEventListener('change',() => {
        btnSubmit.click();
    })
    file.addEventListener('change',() => {
        btnSubmit.click();
    });

    Dropzone.options.dropzoneForm = {
        maxFilesize: 10,
        acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

        init: function() {
            this.on('success', function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {    
                    location.reload();
                }
            });
            this.on('error', function (file, response) {
            file.previewElement.classList.add("dz-error");
     });
        }
    };
</script>
