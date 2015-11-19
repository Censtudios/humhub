<?php

use yii\helpers\Url;
?>


<div class="panel panel-default members" id="share-panel">
    <?php echo \humhub\widgets\PanelMenu::widget(array('id' => 'share-panel')); ?>

    <div class="panel-heading">
        <?php echo Yii::t('DashboardModule.widgets_views_share', '<strong>Share</strong> your opinion with others'); ?>
    </div>
    <div class="panel-body">

        <p>Wir freuen uns, dass du <a href="https://www.humhub.org" target="_blank" class="colorInfo">HumHub</a> nutzt. Wenn es dir gefällt dann unterstütze das Projekt und empfehle es weiter.</p>

        <a class="popup"
           href="http://twitter.com/intent/tweet?status=Ich empfehle @HumHub als Social Intranet. Es ist super schick, open source und ich bin schwer begeistert: https://www.humhub.org">
            <div class="share-icon share-icon-twitter"><i class="fa fa-twitter"></i></div>
            <div class="share-text"><?php echo Yii::t('DashboardModule.widgets_views_share', 'Tweet about HumHub'); ?></div>
        </a>
        <!--<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>-->
        <div class="clearfix"></div>
        <a class="popup" href="http://www.facebook.com/share.php?u=https://www.humhub.org">
            <div class="share-icon share-icon-facebook"><i class="fa fa-facebook"></i></div>
            <div class="share-text"><?php echo Yii::t('DashboardModule.widgets_views_share', 'Post a message on Facebook'); ?></div>
        </a>

        <div class="clearfix"></div>
        <a class="popup" href="https://plus.google.com/share?url=https://www.humhub.org">
            <div class="share-icon share-icon-google-plus"><i class="fa fa-google-plus"></i></div>
            <div class="share-text"><?php echo Yii::t('DashboardModule.widgets_views_share', 'Share it on Google+'); ?></div>
        </a>

        <div class="clearfix"></div>
        <a class="popup"
           href="http://www.linkedin.com/shareArticle?mini=true&url=https://www.humhub.org&title=HumHub - The flexible Open Source Social Network Kit for Collaboration">
            <div class="share-icon share-icon-linkedin"><i class="fa fa-linkedin-square"></i></div>
            <div class="share-text"><?php echo Yii::t('DashboardModule.widgets_views_share', 'Tell anyone on LinkedIn'); ?></div>
        </a>

        <div class="clearfix"></div>
        <hr>
        <a href="javascript:hideSharePanel();" class="colorInfo"><i class="fa fa-times"></i> Hide this panel</a>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.popup').click(function (event) {
            var width = 575,
                height = 400,
                left = ($(window).width() - width) / 2,
                top = ($(window).height() - height) / 2,
                url = this.href,
                opts = 'status=1' +
                    ',width=' + width +
                    ',height=' + height +
                    ',top=' + top +
                    ',left=' + left;

            window.open(url, 'twitter', opts);

            return false;
        });
    });

    function hideSharePanel() {

        $.ajax({
            url: '<?= Url::to(["/share/share/hide-panel", "ajax" => 1]); ?>',
            //data: {id: '<id>', 'other': '<other>'},
            success: function (data) {
                $('#share-panel').remove();
            }
        });

    }


</script>
