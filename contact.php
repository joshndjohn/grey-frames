<section class="contact" id="contact">
    <div class="contact-text">
        <h2>Contact Us</h2>
        <h5>Get in Touch</h5>
    </div>
    <div class="overlay2"></div>
    <div class="form-container">
        <form action="index.php" name="submit-to-google-sheet" class="form" id="form" method="post">
            <div class="form-controls">
                <div class="form-input">
                    <div class="form-control-box">
                        <div class="input-holder">
                            <label for="">Your name / Studio</label>
                            <input type="text" name="name" placeholder="eg John Chris enterprise" class="name"
                                id="studio-name">
                            <small>Error message</small>
                        </div>
                        <div class="input-holder">
                            <label for="">Project Name</label>
                            <input type="text" name="project" placeholder="Project name" class="project"
                                id="project-name">
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="form-control-box">
                        <div class="input-holder">
                            <label for="">Project Link</label>
                            <input type="text" name="link" placeholder="Upload your footages google drive" class="link"
                                id="project-link">
                            <small>Error message</small>
                        </div>
                        <div class="input-holder">
                            <label for="">Project Type</label>
                            <input type="text" name="type" placeholder="Wedding Films" class="type" id="project-type">
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="form-control-box">
                        <div class="input-holder">
                            <label for="">Email Address</label>
                            <input type="text" name="email" placeholder="example@gmail.com" class="email2" id="email">
                            <small>Error message</small>
                        </div>
                        <div class="input-holder">
                            <label for="">Packages</label>
                            <select name="package" class="Packages" id="packages">
                                <option value="Teaser-$100">Teaser:$100</option>
                                <option value="Highlight Film-$250">Highlight Film:$250</option>
                                <option value="Feature Film-$280">Feature Film:$280</option>
                                <option value="Documentary Film-$320">Documentary Film:$320</option>
                                <option value="Highlight and Documentary Film-$500">Highlight and Documentary Film:$500
                                </option>
                            </select>
                            <small>Error message</small>
                        </div>
                    </div>

                </div>
                <div class="input-holder">
                    <label for="">Special Instruction</label>
                    <textarea name="message" id="text-area" class="Message" cols="10" rows="10"
                        placeholder="talk to us..."></textarea>
                    <small>Error message</small>
                </div>
            </div>
            <div class="button-area">
                <input type="submit" name="submit" class="btn">
            </div>
        </form>
        <div class="call-address">
            <div class="call">
                <i class="fa-solid fa-envelope icon"></i>
                <div class="write-up">
                    <h5>Email Us</h5>
                    <p>videttstudios@gmail.com</p>
                </div>
            </div>
            <div class="call">
                <i class="fa-sharp fa-solid fa-phone icon"></i>
                <div class="write-up">
                    <h5>Contact Number</h5>
                    <p>+1 734 874 099</p>
                </div>
            </div>
            <div class="call">
                <i class="fa-solid fa-house icon"></i>
                <div class="write-up">
                    <h5>Address</h5>
                    <p>10404, Polo Trail Avenue,<br> Bakersfield, California.</p>
                </div>
            </div>
        </div>
        <hr>

        <!-- Footer -->
        <?php include("footer.php") ?>
    </div>
</section>