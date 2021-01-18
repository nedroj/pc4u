
<script>
    function validateForm() {
        var x = document.forms["myForm"]["first_name"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
    }
    </script>




    <form name="myForm" class="well form-horizontal" onsubmit="return validateForm()" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend>Contact Formulier</legend><br><br><br>

            <!-- Text input-->
            <?php
            echo $report;
            ?>



            <div class="form-group">
                <label class="col-md-4 control-label" >Naam</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="naam" placeholder="naam" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Adres" class="form-control"  type="text">
                    </div>
                </div>
            </div>




            <div class="form-group">
                <label class="col-md-4 control-label">Uw vraag</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="comment" placeholder="Typ hier uw vraag"></textarea>
                    </div>
                </div>
            </div>

            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Bedankt! We zullen uw vraag zo snel mogelijk beantwoorden.</div>
            <input type="hidden" class="form-control" name="fake">
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" name="mail" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>


    </form>
</div>
