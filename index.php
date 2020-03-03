<?php

/*

Plugin Name: Split Call To Action

*/

add_action('init', function(){
    add_shortcode('split-plugin', function($atts = [], $content = null){
        return $content . <<<'EOT'
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-grid.css" />
<div class="row">
<div class="col-md-6">I am just a poor boy</div>
<div class="col-md-6">From a poor family</div>
</div>
EOT;

    });
});