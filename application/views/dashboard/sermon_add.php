<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Add a New Sermon</h4>
                <p class="card-description">
                    Enter Details of a Sermon
                </p>
                <?php echo form_open_multipart('/sermons-add-item');?>
                <div class="forms-sample">
                    <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <label >Preacher</label>
                    <input type="text" class="form-control" name="preacher" placeholder="Preacher">
                    </div>
                    <div class="form-group">
                    <label >Date</label>
                    <input type="text" class="form-control" name="date" placeholder="2019-01-01">
                    </div>
                    <div class="form-group">
                    <label >Content</label>
                    <textarea class="form-control" name="content" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                    <label>Upload PDF</label>
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