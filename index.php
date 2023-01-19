
<?php include "head.php"?>

<div class="container">
    <div class="text-center mt-5 text-success"><h1>Daugybos užduočių lentelė</h1></div>

    <form class="d-flex flex-column align-items-center"  action="lentele.php">

            <div class="row col-md-6">
        <div class="col-md-6">
            <h4 class="mt-5 mb-4">Skaičių intervalas</h4>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1" value="4">
            <label class="form-check-label" for="flexRadioDefault1">
                Skaičiai nuo 1 iki 4
            </label>
        </div>

            <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" value="6">
            <label class="form-check-label" for="flexRadioDefault2">
                Skaičiai nuo 1 iki 6
            </label>
        </div>

            <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault3" value="8">
            <label class="form-check-label" for="flexRadioDefault3">
                Skaičiai nuo 1 iki 8
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault4" value="10">
            <label class="form-check-label" for="flexRadioDefault4">
                Skaičiai nuo 1 iki 10
            </label>
        </div>


        </div>



        <div class="col-md-6">
            <h4 class="mt-5 mb-4">Sudėtingumo lygis</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" id="flexRadioDefault2" value="90">
                <label class="form-check-label" for="flexRadioDefault1">
                    Lengvas(10%)
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" id="flexRadioDefault2" value="70">
                <label class="form-check-label" for="flexRadioDefault2">
                    Vidutinis(30%)
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" id="flexRadioDefault2" value="30">
                <label class="form-check-label" for="flexRadioDefault3">
                    Sunkus(70%)
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" id="flexRadioDefault2" value="10">
                <label class="form-check-label" for="flexRadioDefault4">
                    Neįmanomas(95%)
                </label>
            </div>

        </div>
            </div>
        <button class="btn btn-primary col-md-6 mt-4">Išbandyti jėgas</button>
    </form>
</div>
<?php include "footer.php"?>