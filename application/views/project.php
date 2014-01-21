<?php
    foreach ($rows as $r){
    echo"
<section>
    <div class='row'>
        <div class='large-8 columns'>
            <h3>";echo $r['project_title']; echo"</h3>

            <!-- Project Images -->
            <div class='row main collapse'>
                <div class='large-4 column'>
                    <h5>Project Image</h5>
                    <a href='"; echo base_url(); echo"assets/uploads/"; echo $r['project_id']; echo".png"; echo"'><img class='left panel nb panelWhite' src='"; echo base_url(); echo "assets/uploads/"; echo $r['project_id']; echo"_thumb.png' alt='project image'/></a>
                </div>
            </div>

            <!-- About Project -->
            <div class='row collapse'>
                <div class='large-12 column about'>
                    <h5>About this project</h5>
                    <p>"; echo $r['project_what']; echo"</p>
                </div>
            </div>
            <br/>
            
            
            <!-- Why? -->
            <div class='row collapse main'>
                <div class='large-12 column about'>
                    <h5>Why build?</h5>
                    <p>"; echo $r['project_why']; echo"</p>
                </div>
            </div>
            <br/>
            
            <!-- How can others help? -->
            <div class='row collapse main'>
                <div class='large-12 column about'>
                    <h5>How can others help?</h5>
                    <p>"; echo $r['project_how']; echo"</p>
                </div>
            </div>
            <br/>

            <!-- Project Goals -->
            <div class'row collapse main'>
                <div class='large-12 column about'>
                    <h6>Project Goals</h6>
                    <p>"; echo $r['project_goals']; echo"</p>
                </div>
            </div>
            <br/>
            
            <!-- Project Repo-->
            <div class='row collapse main'>
                <div class='large-12 column about'>
                    <h6>Repository</h6>
                    <p><"; echo $r['project_repo']; echo"</p>
                </div>
            </div>
            <br/>
        </div> <!-- End Projects -->
        
        
        
            ";}
?>

        <!-- Team Members panel-->
        <div class="large-4 columns widget">
            <div class="row collapse top-margin">
                <div class="large-4 columns"></div>
                <div class="large-8 column bottom-spacer">
                    <a href="#" class="button primary radius extrawide"><h5>Join this Team</h5></a>
                </div>
            </div>
            <div class="row collapse">
                <div class="large-4 columns"></div>
                <div class="large-8 columns widget">
                    <a href="#comments" class="button secondary radius extrawide "><h5>Discuss Project</h5></a>
                </div>
            </div>


            <div class="row">
                <div class="large-4 columns"></div>
                <div class="large-8 columns panelGray widget-head">
                    <h6>Team Members</h6>
                </div>
            </div>
            <div class="row">
                <div class="large-4 columns"></div>
                <div class="large-8 columns whiteBg widget-body members">

                    <!-- Team Member #1 -->
                    <div class="row collapse">
                        <div class="large-4 columns">
                            <img class="left" src="<?php echo base_url();?>assets/img/user.png" alt="user img">
                        </div>
                        <div class="large-8 columns member-name">
                            <p class="name"><strong>Bryan Penkala</strong></p>
                            <p><span>Orlando, FL</span></p>
                        </div>
                    </div>

                    <!-- Team Member #2 -->
                    <div class="row collapse">
                        <div class="large-4 columns">
                            <img class="left" src="<?php echo base_url();?>assets/img/user.png" alt="user img">
                        </div>
                        <div class="large-8 columns member-name">
                            <p class="name"><strong>Enok Madrid</strong></p>
                            <p><span>Las Vegas, NV</span></p>
                        </div>
                    </div>

                    <!-- Team Member #3 -->
                    <div class="row collapse">
                        <div class="large-4 columns">
                            <img class="left" src="<?php echo base_url();?>assets/img/user.png" alt="user img">
                        </div>
                        <div class="large-8 columns member-name">
                            <p class="name"><strong>John Neilsen</strong></p>
                            <p><span>Los Angeles, CA</span></p>
                        </div>
                    </div>

                    <!-- Team Member #4 -->
                    <div class="row collapse">
                        <div class="large-4 columns">
                            <img class="left" src="<?php echo base_url();?>assets/img/user.png" alt="user img">
                        </div>
                        <div class="large-8 columns member-name">
                            <p class="name"><strong>Chris Potts</strong></p>
                            <p><span>Chicago, IL</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- === End Mid Content === -->

<!-- ======= COMMENTS ======= -->
<section id="comments" class="whiteBg discussion">
    <div class="row">
        <div class="large-8 columns">
            <br/><br/>
            <p><strong>Project Discussion</strong></p>
            <br/><br/>
            <div class="panel">
<!-- begin htmlcommentbox.com -->
                 <div id="HCB_comment_box">Comment Form</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=(hcb_user.PAGE || ""+window.location), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end htmlcommentbox.com -->
                
                
            </div>
        </div>
    </div>
</section>
