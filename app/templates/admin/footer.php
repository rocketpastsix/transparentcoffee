
</div>

<!-- JS -->
<?php
helpers\assets::js(array(
    helpers\url::admin_template_path() . 'js/jquery.js',
    helpers\url::admin_template_path() . "js/admin.js",
    helpers\url::template_path() . 'js/zepto.min.js',
    helpers\url::template_path() . 'js/jquery.liblink.js',
    helpers\url::template_path() . 'js/tablesort.min.js'

))
?>
<script src="/bower_components/foundation/js/foundation.min.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.reveal.js"></script>
<?php echo $data['js'];?>
</body>
</html>
