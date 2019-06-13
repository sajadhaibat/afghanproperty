<!-- jQuery 3 -->


<script src="{{asset('admin-assets/bower_components/jquery/dist/jquery.min.js')}} "></script>
<script src="{{asset('admin-assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin-assets/bower_components/jquery-ui/jquery-ui.min.js')}} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin-assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}} "></script>
<!-- Morris.js charts -->
<script src="{{asset('admin-assets/bower_components/morris.js/morris.min.js')}} "></script>
<!-- Sparkline -->

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}} "></script>
<!-- Slimscroll -->
<script src="{{asset('admin-assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}} "></script>
<!-- FastClick -->
<script src="{{asset('admin-assets/bower_components/fastclick/lib/fastclick.js')}} "></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-assets/dist/js/adminlte.min.js')}} "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin-assets/dist/js/pages/dashboard.js')}} "></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-assets/dist/js/demo.js')}} "></script>



<script src="{{asset('admin-assets/bower_components/select2/dist/js/select2.full.min.js')}} "></script>
<script src="{{asset('temp/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.select2').select2()
    });
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('#editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
<script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
</script>

@section('scriptSection')
    @show