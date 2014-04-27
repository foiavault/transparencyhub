

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
                    <li><a href="<?= site_url(); ?>/page/view/act">FOI Act</a></li>
                    <li><a href="<?= site_url(); ?>/page/view/infographics">Infographics</a></li>
                    <li><a href="">Requests</a></li>
                    <li><a  class="modalLink" href="#signUp">Sign Up</a>
                    </li>
                    <li><a href="#auth">Sign in</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="intro-overtake"></div>
    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 class="fa fa-unlock-alt fa-3x"></h1>
                        <h1>FOIA Vault</h1>
                        <p>Search for your Freedom of Information requests</p>
                        <input type="text" id="reqs" name="requests" placeholder="Make your request...">
                        <button class="searchbtn" type="submit">
                            <i class="fa fa-3x fa-arrow-circle-right"></i>
                        </button>
                        <script language="javascript" type="text/javascript">
                        $("#reqs").suggestion({
                          url:<?= site_url()."/page/view/data/"; ?>
                        });
                          </script>
                    </div>
                    <a href="#content"><img src="/transparencyhub/assets/img/down.png"></a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <div id="content" class="content-section-b">

        <div class="information">
            <h1>Recent Requests</h1>
            <ul class="request-list">
                <? foreach($requests as $count => $request): ?>
                <li><?= $request->title; ?> <i class="time"><?= date('F jS \of Y', $request->time); ?></i>
                    <span class="pull-right btn 
                    <? if($request->status === 'verified'){
                        echo "btn-success";
                    }elseif($request->status === 'pending'){
                        echo "btn-warning";
                    }else{
                        echo "btn-danger";
                    } ?>"><?= $request->status; ?></span>
                </li>
                <?if($count === 11){break;} ?>
                <? endforeach; ?>
            </ul>
        </div>

    </div>
    <!-- /.content-section-b -->

    <div id="auth" class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Agent Sign In</h2>
                    <p class="lead"><input type="text" name="uname" placeholder="Username"></p>
                    <p class="lead"><input type="password" name="pwd" placeholder="password"></p>
                    <button class="btn btn-primary">Sign In</button>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="/transparencyhub/assets/img/lock3.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to our social media:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li><a href="https://twitter.com/FOIvault" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li><a href="https://www.facebook.com/foiavault" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="#home">FOI Act</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#about">Requests</a>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Transparent Hub 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

<!-- Modal -->
<div class="overlay"></div>

<div id="signUp" class="modal">
    <p role="link" class="closeBtn"><img src="/transparencyhub/assets/img/exit.png" alt="close"></p>
    <h2>Sign Up (Agents Only)</h2>
    <? $attributes = ['class' => 'reg']; ?>
    <?= form_open('page/register',$attributes); ?>
    <div class="errors"><?= validation_errors(); ?></div>
    <label for="firstname">Firstname: </label><br>
    <input type="text" name="firstname">
    <label for="lastname">Lastname: </label><br>
    <input type="text" name="lastname">
    <label for="email">Email: </label><br>
    <input type="email" name="email">
    <label for="department">Department: </label><br>
    <select name="department">
        <option>- select a department -</option>
        <option>Ministry of Finance</option>
        <option>Military</option>
        <option>Police Federation of Nigeria</option>
    </select>
    <label for="password">Password: </label><br>
    <input type="password" name="password"><br><br>
    <label for="vpassword">Verify Password: </label><br>
    <input type="password" name="vpassword"><br><br>
    <button class="btn">Register</button>
    <?= form_close(); ?>
</div>