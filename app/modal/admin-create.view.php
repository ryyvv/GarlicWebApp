<div class="modal fade" id="staticBackdropCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Sub-Admin account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  method="POST" action="/admin"class="row g-3">
                    <div class="col-md-12">
                        <label for="validationServer01" class="form-label">Sub-Admin Name</label>
                        <input type="text" name="name" class="form-control is-valid" id="validationServer01" value="" required>
                        <!-- <div class="valid-feedback">
                            Looks good!
                        </div> -->
                        <!-- <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <label for="validationServer01" class="form-label">Sub-Admin Address</label>
                        <input type="text" name="address" class="form-control is-valid" id="validationServer01" value="" required>
                        <!-- <div class="valid-feedback">
                            Looks good!
                        </div> -->
                        <!-- <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                        </div> -->
                    </div>

                    <div class="col-md-12">
                        <label for="validationServer01" class="form-label">Sub-Admin Email</label>
                        <input type="text" name="email" class="form-control is-valid" id="validationServer01" value="" required>
                        <!-- <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <label for="validationServer01" class="form-label">Sub-Admin Password</label>
                        <input type="password" name="password" class="form-control is-valid" id="validationServer01" value="" required>
                        <!-- <div class="valid-feedback">
                            Looks good!
                        </div> -->
                        <!-- <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                        </div> -->
                    </div>

                    <div class="col-md-12">
                        <label for="validationServer01" class="form-label">Sub-Admin Office</label>
                        <input type="text" name="office" class="form-control is-valid" id="validationServer01" value="" required>
                        <!-- <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                        </div> -->
                    </div>

                    <div class="col-md-12">
                        <label for="validationServer04" class="form-label">Sub-Admin Status</label>
                        <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Active</option>
                            <option>deactive</option>
                        </select>
                        <!-- <div id="validationServer04Feedback" class="invalid-feedback">
                            Please select a valid state.
                        </div> -->
                    </div>
                    



               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit"  name="btn_new_admin" class="btn btn-primary">Submit</button>
            </div>
         </form>
        </div>
    </div>
</div>