<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Add a New News Article</h4>
                <p class="card-description">
                    Enter News Item
                </p>
                <?php echo form_open_multipart('/news-add-item');?>
                <div class="forms-sample">
                    <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Name">
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
                    <label >Content</label>
                    <textarea class="form-control" name="content" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" name="userfile" class="btn-primary btn-block" size="20">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?php echo base_url() ?>news-list" class="btn btn-light">Cancel</a>
                </div>
                </form>
                </div>
            </div>
            </div>
    </div>
</div>