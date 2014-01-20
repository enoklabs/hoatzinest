
<!-- Header -->
<?php include "header.php" ?>


<section>
    <div class="row">
        <div class="large-12 columns">
            <h3>Create a Project</h3>
            <p>* Denotes Required Field</p>
        </div>
    </div>

    <!-- SECTION 1 - TITLE -->
    <div class="row main">
        <div class="large-12 columns">
            <span class="number left">1</span>
            <h3>Project Title *</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                    <input type="text" placeholder="HoatziNest - Ideas and Team building platform for web..."/>
                </div>
                <div class="large-4 columns">
                    <p>Example: Real-time Code Editor</p>
                    <p>Example: Mobile App Development</p>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>


    <!-- SECTION 2 - DETAILS-->
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">2</span>
            <h3>Project Details</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns textbox">
            <div class="row">
                <div class="large-8 columns left">
                    <span>This project team will need members with expertise in the following areas:</span>
                    <p>Choose one or more*</p>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <div class="row checkboxes">
                        <div class="large-4 columns">
                            <ul>
                                <li><input id="developers" type="checkbox"/><label for="developers">Developers</label></li>
                                <li><input id="Engineers" type="checkbox"/><label for="Engineers">Engineers</label></li>
                                <li><input id="Managers" type="checkbox"/><label for="Managers">Project Managers</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns">
                            <ul>
                                <li><input id="Designers" type="checkbox"/><label for="Designers">Designers</label></li>
                                <li><input id="Directors" type="checkbox"/><label for="Directors">Art Directors</label></li>
                                <li><input id="Artists" type="checkbox"/><label for="Artists">Artists</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns">
                            <ul>
                                <li><input id="Marketers" type="checkbox"/><label for="Marketers">Marketers</label></li>
                                <li><input id="Animators" type="checkbox"/><label for="Animators">Video/Animators</label></li>
                                <li><input id="Writers" type="checkbox"/><label for="Writers">Writers</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_what">What are you creating?</label>
                    <input id="project_what" class="large-input" type="text" size="9999" name="project_what">
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_why">Why are you creating this?</label>
                    <input id="project_why" class="large-input" type="text" name="project_why">
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_how">How can others help you?</label>
                    <input id="project_how" class="large-input" type="text" name="project_how">
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_goals">What are the main goals you wish to accomplish with this project?</label>
                    <input id="project_goals" class="large-input" type="text" name="project_goals">
                </div>
                <div class="large-4 columns">
                    <p>Example: Build an open source community</p>
                    <p>Example: Launch web and mobile app together</p>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="github">GitHub Repository (optional)</label>
                    <input id="github" type="text" placeholder="Project github url"/>
                </div>
            </div>


        </div>
        <div class="large-1 columns"></div>
    </div>


    <!-- SECTION 3 - IMAGES -->
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">3</span>
            <h3>Project Images</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                    <form action="upload_file.php" method="post"
                          enctype="multipart/form-data">
                        <label for="file">Add Images...</label>
                        <input type="file" name="file" id="file"><br>
                        <input class="button secondary radius wide right" type="submit" name="submit" value="Submit">
                    </form>
                    <br/>

                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>
    <br/><br/>

</section>


<!-- ======== FOOTER ======== -->
<?php include "footer.php" ?>
<!-- === Mid Content === -->