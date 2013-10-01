<?php include('../includes/Tonto.php'); ?>
<!DOCTYPE html>
<html>
<head>

<?php useWebpart("head") ?>

</head>

<body id="htmlBody">
    <form method="post" action="" id="aspnetForm">
        <div id="page">
            <div id="n4m-topAdZone" class="container">
                <div class="n4m-layout-pageSpan">
                    <!--googleoff: index-->
                    <div class="row-fluid">
                        <div class="span12">
                            <div id="TopAdZone" class="webPartZone empty">
                                <ul class="drop-zone">
                                    TopAdZone
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--googleon: index-->
                </div>
            </div>

            <?php useWebpart("header") ?>

            <?php useWebpart("nav-top"); ?>

            <div id="pageContent" class="container">
                <div class="n4m-layout-pageSpan">
                    <div id="topZone">
                        <div class="row-fluid">
                            <div class="span12">
                                <div id="ContentHeaderZone" class="webPartZone empty">
                                    <ul class="drop-zone">
                                        ContentHeaderZone
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="singleColumnWrapper">
                        <div class="contentZone">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div id="ContentZone" class="webPartZone empty">
                                        <ul class="drop-zone">
                                            ContentZone
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>

                    <div id="bottomZone">
                        <div class="row-fluid">
                            <div class="span12">
                                <div id="ContentFooterZone" class="webPartZone empty">
                                    <ul class="drop-zone">
                                        ContentFooterZone
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php useWebpart("footer") ?>

        </div> <!-- End div#page -->
    </form>
</body>
</html>