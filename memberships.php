<?php 
    require_once "partials/top.php"; 
    function set_title() {
        return "Join Us";
    }
?>

<main class="min-h-screen py-10 px-10 max-w-[30rem] mx-auto">
    <h2 class="text-4xl font-rbto-cnsd font-bold text-center">Join Us</h2>
    <h4 class="text-xl font-rbto-cnsd text-center text-gray-500">Become a member of DSF</h4>

    <form action="memberships-handler.php" method="POST" class="my-10 p-10 border">
        <div class="mb-4">
            <label class="text-sm font-medium" for="name" >Name <span class="text-red-500 text-sm">*</span></label>
            <input class="block w-full border p-1" type="text" id="name" name="name" placeholder="Full Name..." required>
        </div>
        <div class="mb-4">
            <label class="text-sm font-medium" for="email">Email <span class="text-red-500 text-sm">*</span></label>
            <input class="block w-full border p-1" type="email" id="email" name="email" placeholder="Email Address..." required>
        </div>
        <div class="mb-4">
            <label class="text-sm font-medium" for="mobile">Mobile <span class="text-red-500 text-sm">*</span></label>
            <input class="block w-full border p-1" type="number" id="mobile" name="mobile" placeholder="Mobile Number..." required>
        </div>
        <div class="mb-4">
            <label class="text-sm font-medium" for="university">University <span class="text-red-500 text-sm">*</span></label>
            <select name="university" id="university" class="block w-full border p-1" required>
                <option value="" disabled selected>Choose One</option>
                <option value="JNU">Jawaharlal Nehru University</option>
                <option value="Others">Others</option>
            </select>
        </div>

        <div id="more-options"></div>

        <div class="mt-8">
            <button type="submit" class="block w-full border p-1 bg-red-700 text-white font-medium">Submit</button>
        </div>
    </form>
</main>

<?php require_once "partials/bottom.php"; ?>

<script>
    const uni = document.querySelector('#university')
    const moreOptions = document.querySelector('#more-options')
    uni.addEventListener('change', (e) => {
        if (uni.value === 'JNU') {
            moreOptions.innerHTML = `
            <div class="mb-4">
                <label class="text-sm font-medium" for="school">School <span class="text-red-500 text-sm">*</span></label>
                <select name="school" id="school" class="block w-full border p-1" required>
                    <option value="" disabled selected>Choose One</option>
                    <option value="ABV School of Management and Entrepreneurship">ABV School of Management and Entrepreneurship</option>
                    <option value="School of Arts and Aesthetics">School of Arts and Aesthetics</option>
                    <option value="School of Biotechnology">School of Biotechnology</option>
                    <option value="School of Computer & System Sciences">School of Computer & System Sciences</option>
                    <option value="School of Engineering">School of Engineering</option>
                    <option value="School of Environment Sciences">School of Environment Sciences</option>
                    <option value="School of International Studies">School of International Studies</option>
                    <option value="School of Language, Literature & Culture Studies">School of Language, Literature & Culture Studies</option>
                    <option value="School of Life Sciences">School of Life Sciences</option>
                    <option value="School of Physical Sciences">School of Physical Sciences</option>
                    <option value="School of Sanskrit and Indic Studies">School of Sanskrit and Indic Studies</option>
                    <option value="School of Social Sciences">School of Social Sciences</option>
                    <option value="Special Center for E-learning">Special Center for E-learning</option>
                    <option value="Special Center for Molecular Medicine">Special Center for Molecular Medicine</option>
                    <option value="Special Centre for the study of North East India">Special Centre for the study of North East India</option>
                    <option value="Special Centre for Tamil Studies">Special Centre for Tamil Studies</option>
                </select>
                </div>
                    <div class="mb-4">
                    <label class="text-sm font-medium" for="centre">Centre <span class="text-red-500 text-sm">*</span></label>
                    <input class="block w-full border p-1" type="tel" id="centre" name="centre" placeholder="CHS, CFFS, SAA, SOE, etc..." required>
                </div>
                <div class="mb-4">
                    <label class="text-sm font-medium" for="course">Course <span class="text-red-500 text-sm">*</span></label>
                    <select name="course" id="course" class="block w-full border p-1" required>
                        <option value="" disabled selected>Choose One</option>
                        <optgroup label="Undergraduation">
                            <option value="B.A">B.A</option>
                            <option value="B.Tech">B.Tech</option>
                        </optgroup>
                        <optgroup label="Postgraduation">
                            <option value="M.A">M.A</option>
                            <option value="MBA">MBA</option>
                            <option value="MCA">MCA</option>
                            <option value="MSc">MSc</option>
                            <option value="M.Tech">M.Tech</option>
                        </optgroup>
                        <optgroup label="Research">
                            <option value="M.Phil">M.Phil</option>
                            <option value="Ph.D">Ph.D</option>
                        </optgroup>
                        <optgroup label="COP, DOP & Others">
                            <option value="COP">COP</option>
                            <option value="DOP">DOP</option>
                            <option value="Others">Others</option>
                        </optgroup>
                    </select>
                </div>
            `
        }
        else {
            moreOptions.innerHTML = `
                <div class="mb-4">
                    <label class="text-sm font-medium" for="other-university">University Name <span class="text-red-500 text-sm">*</span></label>
                    <input class="block w-full border p-1" type="tel" id="other-university" name="university" placeholder="Specify the name of university..." required>
                </div>

                <div class="mb-4">
                    <label class="text-sm font-medium" for="residence">City of Residence <span class="text-red-500 text-sm">*</span></label>
                    <input class="block w-full border p-1" type="tel" id="residence" name="residence" required>
                </div>
            `
        }
    })
</script>