<section>
    <div class="row">
        <div class="large-12 columns">
            <h3>Create a Project</h3>
            <p>* Denotes Required Field</p>
        </div>
    </div>

    <!-- SECTION 1 - TITLE -->
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('build/create');?>
    <div class="row main">
        <div class="large-12 columns">
            <div class="row build-title">
                <div class="small-1 columns">
                    <p class="number left">1</p>
                </div>
                <div class="small-11 columns pad-left">
                    <h3>&nbsp;&nbsp; Project Title</h3>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                    <label for="project_title">Your project in just a few words *</label>
                    <input type="text" name="project_title" id="project_title" placeholder="HoatziNest - Ideas and Team building platform for web..."/>
                </div>
                <div class="large-4 columns helper">
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
            <div class="row build-title">
                <div class="small-1 columns">
                    <p class="number left">2</p>
                </div>
                <div class="small-11 columns pad-left">
                    <h3>&nbsp;&nbsp; Project Details</h3>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns textbox">
            <div class="row">
                <div class="large-8 columns left">
                    <label>This project team will need members with expertise in the following areas:</label>
                </div>
                <div class="large-4 columns helper no-pad">
                    <p>Choose one or more *</p>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <div class="row checkboxes">
                        <div class="large-4 columns">
                            <ul>
                                <li><input id="developers" name="developers" type="checkbox" class="css-checkbox" checked="checked"/><label class="css-label" for="developers">Developers</label></li>
                                <li><input id="engineers" name="engineers"  type="checkbox" class="css-checkbox"/><label class="css-label" for="engineers">Engineers</label></li>
                                <li><input id="managers" name="managers"  type="checkbox" class="css-checkbox"/><label class="css-label" for="managers">Project Managers</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns">
                            <ul>
                                <li><input id="designers" name="designers"  type="checkbox" class="css-checkbox"/><label class="css-label" for="designers">Designers</label></li>
                                <li><input id="Directors" name="directors"  type="checkbox" class="css-checkbox"/><label class="css-label" for="Directors">Art Directors</label></li>
                                <li><input id="Artists" name="artists" type="checkbox" class="css-checkbox"/><label class="css-label" for="Artists">Artists</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns">
                            <ul>
                                <li><input id="Marketers" name="marketers" type="checkbox" class="css-checkbox"/><label class="css-label" for="Marketers">Marketers</label></li>
                                <li><input id="Animators" name="animators" type="checkbox" class="css-checkbox"/><label class="css-label" for="Animators">Video/Animators</label></li>
                                <li><input id="Writers" name="writers" type="checkbox" class="css-checkbox"/><label class="css-label" for="Writers">Writers</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_what">What are you creating? *</label>
                    <textarea id="project_what" class="large-input" name="project_what" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_why">Why are you creating this? *</label>
                    <textarea id="project_why" class="large-input" name="project_why" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_how">How can others help you? *</label>
                    <textarea id="project_how" class="large-input" name="project_how" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_goals">What are the main goals you wish to accomplish with this project? *</label>
                    <textarea id="project_goals" class="large-input" name="project_goals" required></textarea>
                </div>
                <div class="large-4 columns helper">
                    <p>Example: Build an open source community</p>
                    <p>Example: Launch web and mobile app together</p>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_repo">GitHub Repository (optional)</label>
                    <input id="project_repo" name="project_repo" type="text" placeholder="Project github url"/>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>
          
    <!-- SECTION 3 - IMAGES -->
    <div class="row">
        <div class="large-12 columns">
            <div class="row build-title">
                <div class="small-1 columns pad-top">
                    <p class="number left">3</p>
                </div>
                <div class="small-11 columns pad-left">
                    <h3>&nbsp;&nbsp; Project Image *</h3>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                    <label for="file">Show off your idea...</label>
                    <br/><label for="file">JPEG, PNG, GIF or BMP formats only.</label>
                    <input id="file" type="file" name="userfile" size="20" required></input>                     
                    <button class="button secondary radius wide right" type="submit" name="submit" value="Submit">Create Project</button>
                    <br/>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>
    <?php echo form_close(); ?>

</section>

    
