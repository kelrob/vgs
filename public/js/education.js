const addEducation = () => {
    var new_ed_no = parseInt($("#total_ed_no").val()) + 1;
    var new_input = `<div class="education">
    <hr />
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">School</label>
            <input type="text" name="school[]" class="form-control" id="firstname"
                placeholder="School name">
        </div>
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">Degree</label>
            <input type="text" name="degree[]" class="form-control" id="firstname"
                placeholder="Ex: Bachelor">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">Field of study</label>
            <input type="text" name="field_of_study[]" class="form-control" id="firstname"
                placeholder="Ex: Engineering">
        </div>
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">Grade</label>
            <input type="text" name="grade[]" class="form-control" id="firstname"
                placeholder="">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">Start year</label>
            <select class="form-control" name="start_year[]" id="exampleFormControlSelect1">
            <option value="2016">
            2016
        </option>
                                                            2018
            2017
            <option value=2017>2017</option>
                                                            2018
            2016
            <option value=2016>2016</option>
                                                            2018
            2015
            <option value=2015>2015</option>
                                                            2018
            2014
            <option value=2014>2014</option>
                                                            2018
            2013
            <option value=2013>2013</option>
                                                            2018
            2012
            <option value=2012>2012</option>
                                                            2018
            2011
            <option value=2011>2011</option>
                                                            2018
            2010
            <option value=2010>2010</option>
                                                            2018
            2009
            <option value=2009>2009</option>
                                                            2018
            2008
            <option value=2008>2008</option>
                                                            2018
            2007
            <option value=2007>2007</option>
                                                            2018
            2006
            <option value=2006>2006</option>
                                                            2018
            2005
            <option value=2005>2005</option>
                                                            2018
            2004
            <option value=2004>2004</option>
                                                            2018
            2003
            <option value=2003>2003</option>
                                                            2018
            2002
            <option value=2002>2002</option>
                                                            2018
            2001
            <option value=2001>2001</option>
                                                            2018
            2000
            <option value=2000>2000</option>
                                                            2018
            1999
            <option value=1999>1999</option>
                                                            2018
            1998
            <option value=1998>1998</option>
                                                            2018
            1997
            <option value=1997>1997</option>
                                                            2018
            1996
            <option value=1996>1996</option>
                                                            2018
            1995
            <option value=1995>1995</option>
                                                            2018
            1994
            <option value=1994>1994</option>
                                                            2018
            1993
            <option value=1993>1993</option>
                                                            2018
            1992
            <option value=1992>1992</option>
                                                            2018
            1991
            <option value=1991>1991</option>
                                                            2018
            1990
            <option value=1990>1990</option>
                                                            2018
            1989
            <option value=1989>1989</option>
                                                            2018
            1988
            <option value=1988>1988</option>
            </select>
        </div>
        <div class="form-group col-lg-6">
            <label for="staticEmail" class="">End year</label>
            <select class="form-control" name="end_year[]" id="exampleFormControlSelect1">
            <option value="2016">
            2016
        </option>
                                                            2018
            2017
            <option value=2017>2017</option>
                                                            2018
            2016
            <option value=2016>2016</option>
                                                            2018
            2015
            <option value=2015>2015</option>
                                                            2018
            2014
            <option value=2014>2014</option>
                                                            2018
            2013
            <option value=2013>2013</option>
                                                            2018
            2012
            <option value=2012>2012</option>
                                                            2018
            2011
            <option value=2011>2011</option>
                                                            2018
            2010
            <option value=2010>2010</option>
                                                            2018
            2009
            <option value=2009>2009</option>
                                                            2018
            2008
            <option value=2008>2008</option>
                                                            2018
            2007
            <option value=2007>2007</option>
                                                            2018
            2006
            <option value=2006>2006</option>
                                                            2018
            2005
            <option value=2005>2005</option>
                                                            2018
            2004
            <option value=2004>2004</option>
                                                            2018
            2003
            <option value=2003>2003</option>
                                                            2018
            2002
            <option value=2002>2002</option>
                                                            2018
            2001
            <option value=2001>2001</option>
                                                            2018
            2000
            <option value=2000>2000</option>
                                                            2018
            1999
            <option value=1999>1999</option>
                                                            2018
            1998
            <option value=1998>1998</option>
                                                            2018
            1997
            <option value=1997>1997</option>
                                                            2018
            1996
            <option value=1996>1996</option>
                                                            2018
            1995
            <option value=1995>1995</option>
                                                            2018
            1994
            <option value=1994>1994</option>
                                                            2018
            1993
            <option value=1993>1993</option>
                                                            2018
            1992
            <option value=1992>1992</option>
                                                            2018
            1991
            <option value=1991>1991</option>
                                                            2018
            1990
            <option value=1990>1990</option>
                                                            2018
            1989
            <option value=1989>1989</option>
                                                            2018
            1988
            <option value=1988>1988</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-12">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="school_description[]"
                id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
</div>`;

    $("#new_ed").append(new_input);
    $("#total_ed_no").val(new_ed_no);
};
