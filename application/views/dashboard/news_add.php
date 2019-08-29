<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Add a New News Article</h4>
                <p class="card-description">
                    Enter News Item
                </p>
                <form class="forms-sample">
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <label for="brief">Brief</label>
                    <input type="text" class="form-control" id="brief" placeholder="Brief Description">
                    </div>
                    <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" id="date" placeholder="01/10/2019">
                    </div>
                    <div class="form-group">
                    <label for="time">Time</label>
                    <input type="text" class="form-control" id="time" placeholder="00:00:00">
                    </div>
                    <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                </div>
            </div>
            </div>
    </div>
</div>