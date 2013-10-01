<?php include('../includes/Tonto.php'); ?>
<!DOCTYPE html>
<html>
<head>

<?php useWebpart("head"); ?>

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

            <?php useWebpart("header"); ?>

            <?php useWebpart("nav-top"); ?>

            <div id="pageContent" class="container">
                <div class="n4m-layout-pageSpan">
                    <div id="topZone">
                        <div class="row-fluid">
                            <div class="span12">
                                <div id="ContentHeaderZone" class="webPartZone empty">
                                    <ul class="drop-zone">
                                        Content header zone
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="threeColumnWrapper">
                        <div id="bannerZone">
                            Banner zone
                        </div>

                        <div id="navZone">
                            Nav zone?
                        </div>

                        <div class="contentZone">
                            <div class="row-fluid">
                                <div class="span9">
                                    <div class="row-fluid">
                                        <div class="span3">
                                            <?php useWebpart("nav-left"); ?>

                                            <div id="NavZone" class="webPartZone empty">
                                                <ul class="drop-zone">
                                                    NavZone
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="span9">

                                            <div id="ContentZone" class="webPartZone empty">
                                                <ul class="drop-zone">
                                                    ContentZone
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div id="AdZone" class="webPartZone empty">
                                        <ul class="drop-zone">
                                            AdZone
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row-fluid">
                                <div class="span6">
                                    <div id="ContentZoneBottomLeft" class="webPartZone empty">
                                        <ul class="drop-zone">
                                            ContentZoneBottomLeft
                                        </ul>
                                    </div>

                                </div>
                                <div class="span6">

                                    <div id="ContentZoneBottomRight" class="webPartZone empty">
                                        <ul class="drop-zone">
                                            ContentZoneBottomRight
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div id="sidebarZone">
                        </div>

                        <div class="clear">
                        </div>
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

            <?php useWebpart("footer"); ?>

        </div> <!-- End div#page -->
    </form>
</body>
</html>