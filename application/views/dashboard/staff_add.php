<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Add Staff</h4>
                <p class="card-description">
                    Enter New Staff Member
                </p>
                <?php echo form_open_multipart('/staff-add-member');?>
                <div class="forms-sample">
					<label >Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
					</div>
					<label >Title</label>
                    <input type="text" class="form-control" name="Title" placeholder="Pastor or Elder">
                    </div>
                    <div class="form-group">
                    <label >Brief</label>
                    <textarea class="form-control" name="brief" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?php echo base_url() ?>staff-list" class="btn btn-light">Cancel</a>
                </div>
                </form>
                </div>
            </div>
            </div>
    </div>
</div>
