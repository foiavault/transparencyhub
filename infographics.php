<?php
require_once('includes/config.php');
require_once('includes/header.php');
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand white" href="./"><h3><i class="fa fa-unlock-alt"></i> FOIA Vault</h3></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="act.php">FOI Act</a></li>
                <li><a href="infographics.php">Infographics</a></li>
                <li><a href="">Requests</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="wrapper">
    <h1>Infographics</h1>
    <p class="lead">Graphical data of information</p>
    <div class="main">
        <section class="sections">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>The Pie Chart</p>
                    </div>
                    <div class="col-md-6">
                        <!-- line chart canvas element -->
                        <canvas id="buyers" width="500" height="300"></canvas>
                    </div>
                </div>
            </div>
        </section>

        <section class="sections sec2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- bar chart canvas element -->
                        <canvas id="income" width="500" height="300"></canvas>
                    </div>
                    <div class="col-md-6">
                        <p>This information</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sections sec3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>The buyers data</p>
                    </div>
                    <div class="col-md-6">
                        <!-- pie chart canvas element -->
                        <canvas id="countries" width="500" height="300"></canvas>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="footer">
</div>

<?php require_once('includes/footer.php'); ?>

<script src="./assets/js/chart.js"></script>