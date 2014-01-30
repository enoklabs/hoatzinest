<?php

    echo"
<section>
    <div class='row'>
        <div class='large-8 columns'>
            <h3>";echo $project['project_title']; echo"</h3>

            <!-- Project Images -->
            <div class='row collapse main'>
                <a class='large-4 column' href='"; echo base_url(); echo"assets/uploads/"; echo $project['project_id']; echo".png"; echo"'><img class='left panel nb panelWhite' src='"; echo base_url(); echo "assets/uploads/"; echo $project['project_id']; echo"_thumb.png' alt='project image'/></a>
            </div>

            <!-- About Project -->
            <div class='row collapse main'>
                <h6 class='large-12 column about'>About this project</h6>
                <p>"; echo $project['project_what']; echo"</p>
            </div>

            <!-- Why? -->
            <div class='row collapse main'>
                <h6 class='large-12 column about'>Why build?</h6>
                <p>"; echo $project['project_why']; echo"</p>
            </div>

            <!-- How can others help? -->
            <div class='row collapse main'>
                <h6 class='large-12 column about'>How can others help?</h6>
                <p>"; echo $project['project_how']; echo"</p>
            </div>

            <!-- Project Goals -->
            <div class='row collapse main'>
                <h6 class='large-12 column about'>Project Goals</h6>
                <p>"; echo $project['project_goals']; echo"</p>
            </div>

            <!-- Project Repo-->
            <div class='row collapse main'>
                <p class='large-12 column about' >Repository:</p>
                <a href='http://"; echo $project['project_repo']; echo"' target='_blank' class='github-link'>"; echo $project['project_repo']; echo"</a>
            </div>
        </div> <!-- End Projects -->


            ";
?>

        <!-- Team Members panel-->
        <div class="large-4 columns widget">
            <div class="row collapse top-margin">
                <div class="large-8 column bottom-spacer right">

                    <?php $link = base_url()."project/join/".$project['project_id']; ?>
                    <a href="<?php echo $link; ?>" class="button primary radius extrawide"><h5>Join this Team</h5></a>
                </div>
            </div>
            <div class="row collapse">
                <div class="large-8 columns widget right">
                    <a href="#comments" class="button secondary radius extrawide "><h5>Discuss Project</h5></a>
                </div>
            </div>
            <div class="row collapse">
                <div class="large-8 columns panelGray widget-head right">
                    <h6>Team Members</h6>
                </div>
            </div>

            <div class="row collapse">
                <div class="large-8 columns whiteBg widget-body members right">

                    <?php
                    foreach ($team as $member){ ?>

                    <!-- Team Member #1 -->
                    <div class="row collapse">
                        <div class="large-4 columns">
                            <img class="left" src="<?php echo base_url();?>assets/img/user.png" alt="user img">
                        </div>
                        <div class="large-8 columns member-name">
                            <p class="name"><strong><?php echo $member['first_name']." ".$member['last_name']; ?></strong></p>
                            <p><span><?php echo $member['location'];?></span></p>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- === End Mid Content === -->

<!-- ======= COMMENTS ======= -->
<section id="comments" class="whiteBg discussion">
    <div class="row main">
        <h6 class="large-12 column">Project Discussion</h6>
        <div class="large-8 column left">
            <!-- commentbox -->
            <div id="HCB_comment_box">Comment Form</a> is loading comments...</div>
            <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=(hcb_user.PAGE || ""+window.location), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
            <!-- commentbox -->
        </div>
    </div>
</section>
