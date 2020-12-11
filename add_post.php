<?php
include_once 'account_header.php'
?>
            <div class="dashboard-content">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-12 col-sm-12">
                        <div id="add-listing">

                            <!-- Section -->
                            <div class="add-listing-section">
                            <form action="upload_post.php" method="post" enctype="multipart/form-data">
                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
                                </div>
                                
                                <!-- Title -->
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <label>Title</label>
                                        <input class="search-field" type="text" name="title"/>
                                    </div>
                                </div>

                                <!-- Row --> 
                                <div class="row with-forms">

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <label>Category</label>
                                        <select class="chosen-select-no-single" name="category" >
                                            <option label="blank">Select Category</option>  
                                            <option>Sport</option>
                                            <option>Music</option>
                                            <option>Health</option>
                                            <option>News</option>
                                            <option>Events</option>
                                        </select>
                                    </div>

                                    <!-- Type -->
                                    <div class="col-md-6">
                                        <label>images</label>
                                        <input type="file" name="image" accept="image/*" required>
                                    </div>

                                    <div class="form">
                                    <label>Description</label>
                                    <textarea class="WYSIWYG" name="content" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                                </div>

                                </div>
                                <!-- Row / End -->
                            </div>



                           <button class="button">Save</button>

                           </form>
                        </div>
                    </div>
                </div>      
            </div>

            <!-- Content / End -->
            <!-- Copyrights -->
            <?php
include_once 'account_footer.php'
?>