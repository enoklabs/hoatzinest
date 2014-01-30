<section>
    <div class="row">
            <h3>Create a Project</h3>
            <p class="pad-left">* Denotes Required Field</p>
    </div>

    <!-- SECTION 1 - TITLE -->
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('build/create');?>


    <fieldset class="row main">

        <h3><strong>1</strong>Project Title</h3>

        <p class="large-6 column left">
            <label for="project_title">Your project in just a few words *</label>
            <input type="text" placeholder="HoatziNest - Ideas and Team building platform for web..." id="project_title" name="project_title">
        </p>
        <div class="large-3 column helper left">
            <p>Example: Real-time Code Editor</p>
            <p>Example: Mobile App Development</p>
        </div>
    </fieldset>


    <!-- SECTION 2 - DETAILS-->
    <fieldset class="row main">

        <h3><strong>2</strong>Project Details</h3>

        <p class="large-6 column left">
            <label>This project team will need members with expertise in the following areas:</label>
        </p>
        <div class="large-4 column helper no-pad left">
            <p>Choose one or more *</p>
        </div>

        <div class="row">

            <!-- Checkboxes -->
            <div class="large-6 column left">
                <ul class="large-4 columns left">
                    <li><input id="developers" name="developers" type="checkbox" class="css-checkbox" checked="checked"/><label class="css-label" for="developers">Developers</label></li>
                    <li><input id="engineers" name="engineers"  type="checkbox" class="css-checkbox"/><label class="css-label" for="engineers">Engineers</label></li>
                    <li><input id="managers" name="managers"  type="checkbox" class="css-checkbox"/><label class="css-label" for="managers">Project Managers</label></li>
                </ul>
                <ul class="large-4 columns left">
                    <li><input id="designers" name="designers"  type="checkbox" class="css-checkbox"/><label class="css-label" for="designers">Designers</label></li>
                    <li><input id="Directors" name="directors"  type="checkbox" class="css-checkbox"/><label class="css-label" for="Directors">Art Directors</label></li>
                    <li><input id="Artists" name="artists" type="checkbox" class="css-checkbox"/><label class="css-label" for="Artists">Artists</label></li>
                </ul>
                <ul class="large-4 columns left">
                    <li><input id="Marketers" name="marketers" type="checkbox" class="css-checkbox"/><label class="css-label" for="Marketers">Marketers</label></li>
                    <li><input id="Animators" name="animators" type="checkbox" class="css-checkbox"/><label class="css-label" for="Animators">Video/Animators</label></li>
                    <li><input id="Writers" name="writers" type="checkbox" class="css-checkbox"/><label class="css-label" for="Writers">Writers</label></li>
                </ul>
            </div>

            <!-- TextAreas -->
            <p class="large-6 column">
                <label for="project_what">What are you creating? *</label>
                <textarea id="project_what" class="large-input" name="project_what" required></textarea>
            </p>
            <p class="large-6 column">
                <label for="project_why">Why are you creating this? *</label>
                <textarea id="project_why" class="large-input" name="project_why" required></textarea>
            </p>
            <p class="large-6 column">
                <label for="project_how">How can others help you? *</label>
                <textarea id="project_how" class="large-input" name="project_how" required></textarea>
            </p>
            <p class="large-6 column">
                <label for="project_goals">What are the main goals you wish to accomplish with this project? *</label>
                <textarea id="project_goals" class="large-input" name="project_goals" required></textarea>
            </p>
            <div class="large-4 column helper left">
                <p>Example: Build an open source community</p>
                <p>Example: Launch web and mobile app together</p>
            </div>
            <p class="large-6 column left">
                <label for="project_repo">GitHub Repository (optional)</label>
                <input id="project_repo" name="project_repo" type="text" placeholder="Project github url"/>
            </p>
        </div>
    </fieldset>

    <!-- SECTION 3 - image uploader -->
    <fieldset class="row main">

        <h3><strong>3</strong>Project Image</h3>
        <div class="large-6 columns">
            <label for="file">Add Images...</label><br/>
            <label for="file">JPEG, PNG, GIF or BMP formats only.</label>
            <input id="file" type="file" name="userfile" size="20" />
            <button class="button secondary radius wide right" type="submit" name="submit" value="Submit">Create Project</button><br/>
        </div>

    </fieldset>
    <?php echo form_close(); ?>

</section>

    
