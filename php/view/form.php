<?php
namespace DriveForm\View;
include dirname(__FILE__).'/commons.php';

function init() {
    head();
    ?>
    <body>
        <form action="http://localhost:89/php/api/register" method="POST" enctype="multipart/form-data">
            <section id="one">
                <div>
                    <a href="http://autonomi.ducic.ac.in" target="_blank"><img src="img/autonomi.png" class="logo"></a>
                    <a href="http://pattern.ducic.ac.in" target="_blank"><img src="img/lpe.png" class="logo"></a>
                    <h2>Please choose the Workshop you wish to register into</h2>
                    <ul class="inline lg" data-type="select">
                        <li data-workshop="3D1" data-type="slot">
                            <img src="img/128.png">
                        </li>
                        <li data-workshop="3D2" data-type="slot">
                            <img src="img/130.png">
                        </li>
                        <li data-workshop="RB1" data-type="slot">
                            <img src="img/129.png">
                        </li>
                        <li data-workshop="RB2" data-type="slot">
                            <img src="img/132.png">
                        </li>
                    </ul><br>
                    <span id="notice"></span><br>
                    <input type="text" name="Workshop" data-hidden="false">
                </div>
            </section>
            <section id="two">
                <div>
                    <h2>What is your Name?</h2>
                    <input type="text" name="Name" placeholder="Nico Hades" data-tab="three">
                    <div data-type="nav" data-target="three">NEXT</div>
                    <div data-type="nav" data-target="one">PREVIOUS</div>
                </div>
            </section>
            <section id="three">
                <div>
                    <h2>How do we contact you?</h2>
                    <span>Email ID</span>
                    <input type="email" name="Email" placeholder="leo@valdez.com">
                    <span>Contact Number</span>
                    <input type="tel" name="Contact" placeholder="999 999 9999" data-tab="four">
                    <div data-type="nav" data-target="four">NEXT</div>
                    <div data-type="nav" data-target="two">PREVIOUS</div>
                </div>
            </section>
            <section id="four">
                <div>
                    <h2>What is your Institution/College?</h2>
                    <span>College</span>
                    <input type="text" name="College" placeholder="Camp Half Blood">
                    <span>Course/Specialization</span>
                    <input type="text" name="Course" placeholder="Sorcerer" data-tab="five">
                    <div data-type="nav" data-target="five">NEXT</div>
                    <div data-type="nav" data-target="three">PREVIOUS</div>
                </div>
            </section>
            <section id="five">
                <div>
                    <h2>Please give us the Payment Details</h2>
                    <span>Upload a Picture/Scan of the DD. (Only jpg, png, and gif files accepted. Max. Size = 7 MB.</span><br>

                    <input type="file" name="DD_Img" accept="image/*">

                    <input type="text" name="DD" placeholder="Demand Draft Number">
                    <input type="text" name="Bank" placeholder="Issuing Bank">
                    <div data-type="nav" data-target="four">PREVIOUS</div>
                    <button type="submit" data-target="three">SUBMIT</button>

                </div>
            </section>
        </form>
        <script type="text/javascript" src="js/jquery-min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
    <?php
}

?>