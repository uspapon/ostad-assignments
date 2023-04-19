<?php 
    session_start();
?>
<h2 class="pt-3 pb-3 mt-5 fs-1 fw-bold">Contact Us</h2>
            <?php
                $msg = "";
                if($_SESSION){
                    $msg = $_SESSION['actionResult'];
                    echo $msg;
                }
            ?>
                        <form action="includes/models/contact_action.php" method="post">
                            <div class="mb-3">
                                
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <!-- end of lname -->
                            <div class="mb-3">
                                
                                <input name="email" type="email" class="form-control" id="email" required aria-describedby="emailHelp" placeholder="Email Address">
                                
                            </div>
                            <!-- end of email -->
                            <div class="mb-3">
                            
                                <input name="sunject" type="text" class="form-control" id="sunject" required placeholder="Subject">
                            </div>
                            <!-- end of sunject -->
                           
                            <div class="mb-3">
                   
                                <textarea name="message" class="form-control" placeholder="Type your message here" id="message" style="height: 100px"></textarea>
                            </div>
                            <!-- end of password -->

                            <input type="submit" value="Submit" class="btn btn-danger">
                        </form>
                        <!-- end of form -->
