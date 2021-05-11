const add = () => {
    var new_exp_no = parseInt($("#total_exp_no").val()) + 1;
    var new_input = `<div id="work_exp">
    <hr />
    <div class="row">

        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">Title</label>
            <input type="text" name="title[]" class="form-control" id="firstname"
                placeholder="Ex: Sales Manager">
        </div>

        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">Job type</label>
            <select class="form-control" name="job_type[]" id="exampleFormControlSelect1">
                <option value="fulltime">Full-time</option>
                <option value="partime">Part-time</option>
                <option value="remote">Remote</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">Company</label>
            <input type="text" name="company[]" class="form-control" id="firstname"
                placeholder="Company name">
        </div>
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">Location</label>
            <input type="text" class="form-control" id="firstname" name="location[]"
                placeholder="Lagos Nigeria">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-12">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description[]"
                rows="3"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">Start Date</label>
            <input type="text" name="start_date_month[]" class="form-control" id="firstname"
                placeholder="Month">
        </div>
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="no-label">.</label>
            <input type="text" name="start_date_year[]" class="form-control" id="firstname"
                placeholder="Year">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-3">
            <div class="form-check col-lg-12">
                <input class="form-check-input radios-btn" name="current_working[]"
                    type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    I am currently working in this role
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">End Date</label>
            <input type="text" name="end_date_month[]" class="form-control" id="firstname"
                placeholder="Month">
        </div>
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="no-label">.</label>
            <input type="text" name="end_date_year" class="form-control" id="firstname"
                placeholder="Year">
        </div>
    </div>
</div>`;

    $("#new_exp").append(new_input);
    $("#total_exp_no").val(new_exp_no);
};
