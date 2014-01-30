<section id="cta">
    <h2>Let's Build Something!</h2>
    <h5>Post your Idea, and build a Team</h5>
    <a href="<?php echo base_url();?>index.php/build" id="cta-btn" class="button primary radius wide bold">+ Start Your Idea</a>
</section>

<!-- Mid Content -->
<section id="cta2">

    <!-- Video Player -->
    <h1 class="large-8 large-centered column">
        <iframe class="video" src="//player.vimeo.com/video/84874728?color=3598DB" width="560" height="329" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </h1>

    <!-- Message -->
    <h3>Crafting ideas and finding the right team to make it happen has never been easier</h3>

    <!-- 4 Steps -->
    <div class="row steps">
        <div class="large-12 column right">
            <img class="left" src="assets/img/signup.png" alt="sign up" />
            <h4>Sign Up!</h4>
            <p>It&rsquo;s 100% free.</p>
            <p>This is your first step to make your ideas happen!</p>
        </div>
        <div class="large-10 column right">
            <img class="left" src="assets/img/idea.png" alt="Post idea">
            <h4>Post Your Project Idea</h4>
            <p>Whether it&rsquo;s an online game concept, a mobile app,</p>
            <p>or a new web application, this is your place to start.</p>
        </div>
        <div class="large-8 column right">
            <img class="left" src="assets/img/team.png" alt="Build team">
            <h4>Build the Dream Team</h4>
            <p>People interested in similar ideas can help</p>
            <p>each other start amazing projects together.</p>
        </div>
        <div class="large-6 column right">
            <img class="left" src="assets/img/launch.png" alt="Launch project">
            <h4>Launch the Project</h4>
            <p>It&rsquo;s exciting to see your idea executed</p>
            <p>by skilled people. We&rsquo;ll showcase them!</p>
        </div>
    </div>

</section>


<!-- Featured Projects -->
<section id="featured">
    <div class="row">
        <div class="large-8 columns collapse">
            <h4>Featured Projects</h4>

            <?php
            foreach ($rows as $r){
                $id = $r->project_id;

            echo "
                
            <div class='row collapse'>
                <div class='large-3 column'>
                <div class='leftimg'>
                    <a href='project/details/".$id."'><img class='left' src='assets/uploads/$r->project_id"; echo "_thumb.png' alt='Project img'></a>
                </div>
                </div>

                <div class='large-9 columns collapse project'>
                
                    <a href='project/details/".$id."'><h4>$r->project_title</h4></a>
                    <p class='left'><strong>Team Needs:</strong></p>
                    <ul class='inline-list list'>
                        <li><p>$r->designers</p></li>
                        <li><p>$r->engineers</p></li>
                        <li><p>$r->artists</p></li>
                        <li><p>$r->developers</p></li>
                        <li><p>$r->directors</p></li>
                        <li><p>$r->managers</p></li>
                        <li><p>$r->marketers</p></li>
                        <li><p>$r->animators</p></li>
                        <li><p>$r->writers</p></li>
                    </ul>
                    <p>$r->project_what</p>
                </div>
                <hr/>
            </div>";
            
            } ?>
            
        </div> <!-- End Projects -->

