<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Add a New Event</h4>
                <p class="card-description">
                    Enter Details of an u pcoming Event
                </p>
                <?php echo form_open_multipart('/event-add-item');?>
                <div class="forms-sample">
                    <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <label >Brief</label>
                    <input type="text" class="form-control" name="brief" placeholder="Brief Description">
                    </div>
                    <div class="form-group">
                    <label >Date</label>
                    <input type="text" class="form-control" name="date" placeholder="2019-01-01">
                    </div>
                    <div class="form-group">
                    <label >Time</label>
                    <input type="text" class="form-control" name="time" placeholder="00:00:00">
                    </div>
                    <div class="form-group">
                    <label >Description</label>
                    <textarea class="form-control" name="description" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" name="userfile" size="20">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </div>
                </form>
                </div>
            </div>
            </div>
    </div>
</div>