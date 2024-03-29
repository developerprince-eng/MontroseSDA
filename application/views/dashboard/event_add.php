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
                    <div>
                        <label >Date</label>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label >Day: </label>
                                    <select name="day">
                                        <option value = "1">1</option>
                                        <option value = "2">2</option>
                                        <option value = "3">3</option>
                                        <option value = "4">4</option>
                                        <option value = "5">5</option>
                                        <option value = "6">6</option>
                                        <option value = "7">7</option>
                                        <option value = "8">8</option>
                                        <option value = "9">9</option>
                                        <option value = "10">10</option>
                                        <option value = "11">11</option>
                                        <option value = "12">12</option>
                                        <option value = "13">13</option>
                                        <option value = "14">14</option>
                                        <option value = "15">15</option>
                                        <option value = "16">16</option>
                                        <option value = "17">17</option>
                                        <option value = "18">18</option>
                                        <option value = "19">19</option>
                                        <option value = "20">20</option>
                                        <option value = "21">21</option>
                                        <option value = "22">22</option>
                                        <option value = "23">23</option>
                                        <option value = "24">24</option>
                                        <option value = "25">25</option>
                                        <option value = "11">26</option>
                                        <option value = "27">27</option>
                                        <option value = "28">28</option>
                                        <option value = "29">29</option>
                                        <option value = "30">30</option>
                                        <option value = "31">31</option>
                                    </select> 
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label >Month: </label>
                                        <select name="month">
                                            <option value = "January">January</option>
                                            <option value = "February">February</option>
                                            <option value = "March">March</option>
                                            <option value = "April">April</option>
                                            <option value = "May">May</option>
                                            <option value = "June">June</option>
                                            <option value = "July">July</option>
                                            <option value = "August">August</option>
                                            <option value = "September">September</option>
                                            <option value = "October">October</option>
                                            <option value = "November">November</option>
                                            <option value = "December">December</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label >Year: </label>
                                        <select name="year">
                                            <option value = "2019">2019</option>
                                            <option value = "2020">2020</option>
                                            <option value = "2021">2021</option>
                                            <option value = "2022">2022</option>
                                            <option value = "2023">2023</option>
                                            <option value = "2024">2024</option>
                                            <option value = "2025">2025</option>
                                            <option value = "2026">2026</option>
                                            <option value = "2027">2027</option>
                                            <option value = "2028">2028</option>
                                            <option value = "2029">2029</option>
                                            <option value = "2030">2030</option>
                                        </select> 
                                </div>
                            </div>
                        </div>  
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
                    <input type="file" name="userfile" class="btn-primary btn-block" size="20">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?php echo base_url() ?>events-list" class="btn btn-light">Cancel</a>
                </div>
                </form>
                </div>
            </div>
            </div>
    </div>
</div>