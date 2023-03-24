<?php
if (isset($_POST['submit'])) {
    $to = "joshndjohn@gmail.com";



    $name = $_POST['name'];
    $project = $_POST['project'];
    $projectType = $_POST['type'];
    $projectLink = $_POST['link'];
    $message = $_POST['message'];
    $package = $_POST['package'];
    $email = $_POST['email'];
    $subject = $_POST['project'];
    $body = $_POST['message'];
    $headers = 'From: ' . $email . "\r\n";


    $body = "name : " . $name . "\r\n" .
        "Email : " . $email . "\r\n" .
        "Project : " . $project . "\r\n" .
        "Project Type : " . $projectType . "\r\n" .
        "Project Link : " . $projectLink . "\r\n" .
        "Package : " . $package . "\r\n" .
        "Message : " . $body;
    if (mail($to, $subject, $body, $headers)) {
        header("Location:feedback.php");
    }

    // if ($name != "" && $name != "" && $name != "" && $name != "" && $name != "" && $name != "" && $name != "") {
    //     if (mail($to, $subject, $body, $headers)) {
    //         // echo "Mail Sent!";
    //         // header("Location: http://feedback.php");
    //         header("Location:feedback.php");
    //     } else {
    //         // echo "Failed To Send Mail";
    //         return;
    //     }
    // }
}
?>

<?php include("header.php") ?>
<!-- Home -->
<?php include("welcome-note.php") ?>

<!--Service Section-->
<?php include("service.php") ?>

<!-- About Section -->
<?php include("about.php") ?>

<!-- Gallery Section-->
<?php include("gallery.php") ?>

<!-- Contact Us -->
<?php include("contact.php") ?>


<!-- <script>
    const scriptURL =
        'https://script.google.com/macros/s/AKfycbyKvEUIHMYkfwg-orNxCNNEUK540V_Mwq_giK_Rq5LNIVCpntZNU1yOT1L_cz7GMKzH6g/exec';
    const form = document.forms['submit-to-google-sheet'];
    const msg = document.getElementById('msg')

    form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, {
            method: 'POST',
            body: new FormData(form)
        })
            .then(response => {
                msg.innerHTML = 'Message sent successfully'
                setTimeout(() => {
                    msg.innerHTML = ""
                }, 5000)
                form.reset()
            })
            .catch(error => console.error('Error!', error.message))
    })
</script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="./js/validation.js"></script>
<script src="./js/app.js"></script> -->

</body>

</html>