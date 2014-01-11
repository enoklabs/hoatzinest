
<!-- Header -->
<?php include "header.php" ?>


<!-- ======== Profile ======== -->
<section class="row profile">
    <div class="large-3 columns panel-dark">

        <!-- ======== GRAVATAR IMAGE ======== -->
        <div class="row">
            <div class="large-12 columns gravatar">
                <div class="row">
                    <div class="large-10 columns large-centered">
                        <i class="fa fa-user fa-4x user-icon"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <h4>Enok Madrid</h4>
            </div>
        </div>
        <div class="row social collapse">
            <div class="large-6 columns">
                <i class="fa fa-map-marker"></i><a href="#">{{user.location}}</a>
            </div>
            <div class="large-6 columns">
                <i class="fa fa-twitter"></i><a href="#">{{user.twitter}}</a>
            </div>
        </div>

        <!-- ======== ABOUT USER ======== -->
        <div class="row about">
            <div class="small-12 columns">
                <p><strong>About </strong>{{user.name}}</p>
                <p class="about-paragraph">Artist at Enoklabs.com. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>


    <!-- ======== USER SETTINGS ======== -->

    <section class="large-9 columns detail-viewer form">
        <form>
            <div class="row user-settings">
                <div class="large-6 large-centered columns formpadding">
                    <h5 class="form-title greyDark"><i class="fa fa-edit fa-2x"></i>Edit Profile</h5>
                    <br/>
                    <div class="row">
                        <div class="small-12 columns">
                            <input type="text" data-ng-model="user.name" id="name" placeholder="Enok Madrid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <input type="email" id="email" placeholder="enokslaboratory@fullsail.edu">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <input type="text" data-ng-model="user.location" id="location" placeholder="Las Vegas">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <input type="text" data-ng-model="user.twitter" id="twitter" placeholder="@3nok">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <textarea type="text" id="bio" placeholder="Bio"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div><a class="button secondary wide radius">Update Settings</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</section>
<!-- ======== End Profile ======== -->



<!-- ======== FOOTER ======== -->
<?php include "footer.php" ?>
<!-- === Mid Content === -->