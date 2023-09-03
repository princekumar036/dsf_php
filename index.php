<?php
    require_once "partials/top.php";
    function set_title() {
        return "Home";
    }
?>

<!-- HERO SECTION -->
    <section class="p-10 grid lg:grid-cols-2 gap-10 items-center text-center lg:text-left bg-slate-100">
        <div><img class="w-96 lg:w-[36rem] mx-auto lg:mr-0" src="assets/img/star-black-lg.svg" alt=""></div>
        <div class="font-anton text-3xl lg:text-8xl xl:text-9xl">
            <span class="inline-block first-letter:text-red-800 lg:block ">Educate,</span>
            <span class="inline-block first-letter:text-red-800 lg:block  lg:leading-loose">Agitate,</span>
            <span class="inline-block first-letter:text-red-800 lg:block ">Organise!</span>
        </div>
    </section>

<!-- ABOUT SECTION -->
    <section>
        <section class="p-10 text-center lg:hidden">
            <h2 class="text-4xl font-rbto-cnsd font-bold mb-7">About DSF</h2>
            <div class="row-span-3"><img src="assets/img/unit-conf.JPG" alt=""></div>
            <p class="my-5 text-justify">DSF is an independent, leftwing students' organisation which was formed in 2012-13 by student activists of JNU. DSF seeks to strengthen the progressive and democratic students' movement across the country on the basis of independent, principled positions on the issues confronting the student community.</p>
            <a class="font-rbto-cnsd font-bold md:text-lg text-white px-10 py-2 bg-red-800 rounded-md block mt-2 shadow-lg hover:scale-110" href="about.html">learn more</a>
        </section>
    
        <section class="p-10 max-w-screen-xl mx-auto text-left hidden lg:flex justify-center gap-10 items-center">
            <div class="justify-center">
                <h2 class="text-4xl font-rbto-cnsd font-bold">About DSF</h2>
                <p class="mt-5 mb-7 text-justify">DSF is an independent, leftwing students' organisation which was formed in 2012-13 by student activists of JNU. DSF seeks to strengthen the progressive and democratic students' movement across the country on the basis of independent, principled positions on the issues confronting the student community.</p>
                <a class="font-rbto-cnsd font-bold lg:text-lg text-white px-10 py-3 bg-red-800 rounded-md inline-block shadow-lg hover:scale-95" href="about.html">learn more</a>
            </div>
            <div class=""><img src="assets/img/unit-conf.JPG" alt=""></div>
        </section>
    </section>

<!-- DSF's HISTORY -->
    <section class="bg-slate-100 py-10 relative">

        <div class="text-center">
            <h2 class="text-4xl font-rbto-cnsd font-bold">10 Years of DSF</h2>
            <h6 class=" mb-7">DSF in movements</h6>
        </div>

        <div id="movements" class="flex gap-10 overflow-x-scroll snap-x">

            <article id="m1" class="bg-white shadow-lg min-w-[20rem] lg:min-w-[60%] relative ml-[50vw]">
                <img class="h-48 w-full object-cover lg:h-96" src="assets/img/movements/12-december-lenin.jpeg" alt="">
                <div class="p-4 lg:absolute bottom-0 w-full lg:text-white lg:bg-gradient-to-t from-black/75 snap-center">
                    <h3 class="font-rbto-cnsd font-bold text-xl text-center lg:text-left lg:text-3xl">16 December Movement</h3>
                    <div id="movement-description" class="lg:hidden">
                        <p class="text-justify mb-2">In 2012, DSF led JNUSU gave the first call of protest and chakka jam following the brutal gang rape of a student in Delhi on 16th December 2012. The movement that followed, ushered in a new national discourse that challenged gender norms and patriarchy. JNUSU President V. Lenin Kumar and GSCASH Representative Ruchira Sen, both members of DSF, were invited by the Justice Verma Committee (JVC) to give recommendations regarding policy interventions to combat sexual violence.</p>
                        <!-- <a class="font-rbto-cnsd font-bold text-blue-600 underline lg:text-blue-300" href="#!">read more</a> -->
                    </div>
                </div>
            </article>

            <article id="m2" class="bg-white shadow-lg min-w-[20rem] lg:min-w-[60%] relative">
                <img class="h-48 w-full object-cover lg:h-96" src="assets/img/movements/mcm-anagha.jpg" alt="">
                <div class="p-4 lg:absolute bottom-0 w-full lg:text-white lg:bg-gradient-to-t from-black/75 snap-center">
                    <h3 class="font-rbto-cnsd font-bold text-xl text-center lg:text-left lg:text-3xl">Fight for MCM</h3>
                    <div id="movement-description" class="lg:hidden">
                        <p class="text-justify mb-2">DSF led JNUSU in 2012 led a spirited struggle for the increase of the Means cum Merit (MCM) scholarship, and the scholarship was increased from ₹1500 to ₹2000. DSF led JNUSU also ensured that regular remedial classes are held in SLL&CS with payment for classes ensured for student volunteers.</p>
                        <!-- <a class="font-rbto-cnsd font-bold text-blue-600 underline lg:text-blue-300" href="#!">read more</a> -->
                    </div>
                </div>
            </article>
            
            <article id="m3" class="bg-white shadow-lg min-w-[20rem] lg:min-w-[60%] relative">
                <img class="h-48 w-full object-cover lg:h-96" src="assets/img/movements/rohith.jpg" alt="">
                <div class="p-4 lg:absolute bottom-0 w-full lg:text-white lg:bg-gradient-to-t from-black/75 snap-center">
                    <h3 class="font-rbto-cnsd font-bold text-xl text-center lg:text-left lg:text-3xl">Justice for Rohith Vemula</h3>
                    <div id="movement-description" class="lg:hidden">
                        <p class="text-justify mb-2">DSF comrades sat on a 9-day hunger strike in 2016 to protest the institutional murder of Rohith Vemula in 2016. DSF was also a part of the Joint Action Committee that led the movement to ensure justice for Rohith.</p>
                        <!-- <a class="font-rbto-cnsd font-bold text-blue-600 underline lg:text-blue-300" href="#!">read more</a> -->
                    </div>
                </div>
            </article>

            <article id="m4" class="bg-white shadow-lg min-w-[20rem] lg:min-w-[60%] relative">
                <img class="h-48 w-full object-cover lg:h-96" src="assets/img/movements/9thFeb.jpg" alt="">
                <div class="p-4 lg:absolute bottom-0 w-full lg:text-white lg:bg-gradient-to-t from-black/75 snap-center">
                    <h3 class="font-rbto-cnsd font-bold text-xl text-center lg:text-left lg:text-3xl">9th February Movement: JNU against Sedition Act</h3>
                    <div id="movement-description" class="lg:hidden">
                        <p class="text-justify mb-2">DSF was at the forefront of the movement against the arrest of JNUSU President Kanhaiya Kumar and JNU activists Umar Khalid and Anirban Bhattacharya in 2016 under the draconian sedition act.</p>
                        <!-- <a class="font-rbto-cnsd font-bold text-blue-600 underline lg:text-blue-300" href="#!">read more</a> -->
                    </div>
                </div>
            </article>

            <article id="m5" class="bg-white shadow-lg min-w-[20rem] lg:min-w-[60%] relative">
                <img class="h-48 w-full object-cover lg:h-96" src="assets/img/movements/feehike.jpg" alt="">
                <div class="p-4 lg:absolute bottom-0 w-full lg:text-white lg:bg-gradient-to-t from-black/75 snap-center">
                    <h3 class="font-rbto-cnsd font-bold text-xl text-center lg:text-left lg:text-3xl">Fee Must Fall</h3>
                    <div id="movement-description" class="lg:hidden">
                        <p class="text-justify mb-2">In 2019, when the the JNU Administration tried to impose massive fee hike on the students, DSF was the first organization to conduct meticulous research on the socio-economic composition of the JNU student community and bring out a detailed report on the Draft Hostel Manual 2019 and the impact of the fee hike on the JNU student community. DSF was also at the forefront of the protest in 2019 against Fee Hike and the Draft Hostel Manual which was led by the JNUSU.</p>
                        <!-- <a class="font-rbto-cnsd font-bold text-blue-600 underline lg:text-blue-300" href="#!">read more</a> -->
                    </div>
                </div>
            </article>

            <article id="m6" class="bg-white shadow-lg min-w-[20rem] lg:min-w-[60%] relative">
                <img class="h-48 w-full object-cover lg:h-96" src="assets/img/movements/occupyUGC.jpg" alt="">
                <div class="p-4 lg:absolute bottom-0 w-full lg:text-white lg:bg-gradient-to-t from-black/75 snap-center">
                    <h3 class="font-rbto-cnsd font-bold text-xl text-center lg:text-left lg:text-3xl">Occupy UGC</h3>
                    <div id="movement-description" class="lg:hidden">
                        <p class="text-justify mb-2">DSF actively participated in the movement against the UGC's decision to cut down the Non-NET Fellowships in 2015; DSF then undertook a survey on fellowships, which showed the importance of fellowships in sustaining research in public universities.</p>
                        <!-- <a class="font-rbto-cnsd font-bold text-blue-600 underline lg:text-blue-300" href="#!">read more</a> -->
                    </div>
                </div>
            </article>

            <article id="m7" class="bg-white shadow-lg min-w-[20rem] lg:min-w-[60%] relative mr-[50vw]">
                <img class="h-48 w-full object-cover lg:h-96" src="assets/img/movements/pads.jpg" alt="">
                <div class="p-4 lg:absolute bottom-0 w-full lg:text-white lg:bg-gradient-to-t from-black/75 snap-center">
                    <h3 class="font-rbto-cnsd font-bold text-xl text-center lg:text-left lg:text-3xl">Pads Against Sexism</h3>
                    <div id="movement-description" class="lg:hidden">
                        <p class="text-justify mb-2">In 2015, the DSF initiated the Pads Against Sexism campaign in JNU in solidarity with the campaign started by 19 year old Elone Kastrati in Germany which was further taken up by students from JMI and Delhi University as well. DSF comrades put up posters and sanitary pads with feminist quotes across the campus. The campaign needs to be also seen in the context of the concerted attack on women's right under the Modi government. The campaign was also a statement against the day-to-day sexism prevalent across spaces be it universities, media or the field of sports.</p>
                        <!-- <a class="font-rbto-cnsd font-bold text-blue-600 underline lg:text-blue-300" href="#!">read more</a> -->
                    </div>
                </div>
            </article>

            <!-- <article id="m8" class="bg-white shadow-lg min-w-[20rem] lg:min-w-[60%] relative mr-[50vw]">
                <img class="h-48 w-full or lg:w-full lg:h-96" src="http://via.placeholder.com/540x360" alt="">
                <div class="p-4 lg:absolute bottom-0 w-full lg:text-white lg:bg-gradient-to-t from-black/75 snap-center">
                    <h3 class="font-rbto-cnsd font-bold text-xl text-center lg:text-left lg:text-3xl">Fight against Facism</h3>
                    <div id="movement-description" class="lg:hidden">
                        <p class="text-justify mb:2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio at libero modi.</p> -->
                        <!-- <a class="font-rbto-cnsd font-bold text-blue-600 underline lg:text-blue-300" href="#!">read more</a> -->
                    <!-- </div>
                </div>
            </article> -->
        </div>

        <div class="text-4xl lg:text-8xl opacity-80 hidden lg:block">
            <button id="slide-left" class="absolute top-[55%] lg:top-[45%] z-10 left-5 lg:left-10"><i class="fa-solid fa-chevron-left text-white"></i></button>
            <button id="slide-right" class="absolute top-[55%] lg:top-[45%] z-10 right-5 lg:right-10"><i class="fa-solid fa-chevron-right text-white"></i></button>
        </div>

    </section>

<!-- LEADERSHIP -->
    <section class="p-10 lg:px-40">

        <div class="text-center">
            <h2 class="text-4xl font-rbto-cnsd font-bold">Office Bearers</h2>
            <h6 class="mb-7">Meet the DSF Leadership</h6>
        </div>
        <?php include "partials/office-bearers.php" ?>
    </section>

<!-- JOIN US SECTION -->
    <section class="bg-slate-100 px-10 py-16 lg:px-40 text-center lg:text-left lg:flex justify-evenly gap-10">
        <div>
            <img class="w-20 mx-auto lg:ml-0" src="assets/img/fist_265.svg" alt="">
            <h2 class="text-4xl font-rbto-cnsd font-bold">Join DSF</h2>
            <h6 class=" mb-5 text-lg">Join Independent Students' Movement</h6>
            <?php include "partials/join-btn.php" ?>
            <hr class="mt-6 mb-4">

            <div class="social-media">
                <p class="font-rbto-cnsd font-bold text-lg">Connect with us on:</p>
                <?php include "partials/social-media.php" ?>
            </div>
        </div>

        <div class="hidden lg:block"><img class="w-96" src="assets/img/star-black-lg.svg" alt=""></div>

    </section>

<!-- FOOTER -->
    <footer class="bg-red-800 text-white/75 py-5 px-10 lg:px-40 text-center md:text-left">

        <div class="font-rbto-cnsd text-sm text-center">
            <p>All Rights Reserved DSF © 2022</p>
        </div>

    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
