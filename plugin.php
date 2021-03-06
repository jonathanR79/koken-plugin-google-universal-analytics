<?php

class MesphotosGoogleUniversalAnalytics extends KokenPlugin {

    function __construct()
    {
        $this->require_setup = true;
        $this->register_hook('before_closing_head', 'render');
    }

    function render()
    {
        echo <<<OUT
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//{$this->data->tracking_js}','ga');

  ga('create', '{$this->data->tracking_id}', '{$this->data->tracking_domain}');
  ga('set', 'allowAdFeatures', false);
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');

</script>
OUT;

    }
}
