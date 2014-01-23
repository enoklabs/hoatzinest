        <!-- New Members panel-->
        <div class="large-4 columns widget">
            <div class="row collapse">
                <div class="large-3 columns"></div>
                <div class="large-9 columns panelGray widget-head">
                    <h6>New members looking to team up</h6>
                </div>
            </div>
            <div class="row collapse">
                <div class="large-3 columns"></div>
                <div class="large-9 columns panelWhite widget-body members">

                    <!-- Team Member #1 -->
                    <?php
                    foreach ($rows as $r){
                     $id = $r->id; echo"
                    <div class='row'>
                        <div class='large-4 columns'>
                            <img class='left' src='assets/img/user.png' alt='user img'>
                        </div>

                        <div class='large-8 columns member-name'>

                            <p class='name'><strong>$r->first_name"; echo" "; echo"$r->last_name</strong></p>
                            <p><span>$r->location</span></p>

                        </div>
                    </div>
                    ";}
                    ?>

                </div>
            </div>
        </div>


        <!-- Featured article panel-->
        <div class="large-4 columns right">
            <div class="row collapse">
                <div class="large-3 columns"></div>
                <div class="large-9 columns panelGray widget-head">
                    <h6>Featured Article</h6>
                </div>
            </div>
            <div class="row collapse">
                <div class="large-3 columns"></div>
                <div class="large-9 columns panelWhite widget-body">
                    <p class="text-center">
                        <img src="assets/img/foundation5.jpg" alt="article image"/>
                    </p>
                    <h6><a href="http://zurb.com/article/1280/foundation-5-blasts-off--2" target="_blank">Foundation 5 Released!</a></h6>
                    <p class="time">21 November 2013</p>
                    <p>It's here. We're thrilled to announce that Foundation 5.0 is available today for you to download. Foundation 4.0 rolled out nine months ago, and ...</p>
                    <p class="text-right"><a href="#">12 comments</a></p><br/>
                </div>
            </div>
        </div>
    </div>
</section>
