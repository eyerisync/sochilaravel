<!--Create modal form-->
<div id="modalAddChild" class="modal fade" tabindex="-1" aria-labelledby="modalAddChild">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Add Child</b></h4>
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <p><i>Note: Input '2' in User ID section. This is for temporary use only due to system
                        error.</i></p>
                <form id="saveChild" method="post">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="id">User ID:</label>
                            <input type="text" class="form-control" id="id" name="id" value="2" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label for="zone">Zone:</label>
                            <input type="text" class="form-control" id="zone" name="zone" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="mothersname">Mother's Name:</label>
                            <input type="text" class="form-control" id="mothersname" name="mothersname" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="childsname">Child's Name:</label>
                            <input type="text" class="form-control" id="childsname" name="childsname" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Indigenous:</label>
                            <select class="form-control" id="ind_id" name="ind_id" required>
                                <option value="">YES or NO</option>
                                @foreach ($indigenous as $key => $value)
                                <option id="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Sex:</label>
                            <select class="form-control" id="sex_id" name="sex_id" required>
                                <option value="">M or F</option>
                                @foreach ($sex as $key => $value)
                                <option id="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Date of Birth:</label>
                            <input type="text" class="form-control" id="birthdate" name="birthdate"
                                placeholder="YYYY-MM-DD" required>
                        </div>
                        <div class="col-sm-6">
                            <label>Actual Date of Weighing:</label>
                            <input type="text" class="form-control" id="actualdate" name="actualdate"
                                placeholder="YYYY-MM-DD" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Weight(kg):</label>
                            <input type="text" class="form-control" id="weight" name="weight" required>
                        </div>
                        <div class="col-sm-6">
                            <label>Height(cm):</label>
                            <input type="text" class="form-control" id="height" name="height" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Age In Months:</label>
                        <input type="text" class="form-control" id="ageinmonths" name="ageinmonths" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-flat btn-primary" id="saveBtn">Submit</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Update modal form 2-->
<div id="modalUpdateChild" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Update Child</b></h4>
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <form id="update_Child" method="post">
                    <!--@csrf_field
                    {{ method_field('PUT') }}-->
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="child_idx">Child ID:</label>
                            <input type="text" class="form-control" id="child_idx" name="child_idx" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label for="useridx">User ID:</label>
                            <input type="text" class="form-control" id="useridx" name="useridx" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label for="zonex">Zone:</label>
                            <input type="text" class="form-control" id="zonex" name="zonex" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="mothersnamex">Mother's Name:</label>
                            <input type="text" class="form-control" id="mothersnamex" name="mothersnamex" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="childsnamex">Child's Name:</label>
                            <input type="text" class="form-control" id="childsnamex" name="childsnamex" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Indigenous:</label>
                            <select class="form-control" id="ind_idx" name="ind_idx" required>
                                <option value="">YES or NO</option>
                                @foreach ($indigenous as $key => $value)
                                <option id="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Sex:</label>
                            <select class="form-control" id="sex_idx" name="sex_idx" required>
                                <option value="">M or F</option>
                                @foreach ($sex as $key => $value)
                                <option id="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Date of Birth:</label>
                            <input type="text" class="form-control" id="birthdatex" name="birthdatex"
                                placeholder="YYYY-MM-DD" required>
                        </div>
                        <div class="col-sm-6">
                            <label>Actual Date of Weighing:</label>
                            <input type="text" class="form-control" id="actualdatex" name="actualdatex"
                                placeholder="YYYY-MM-DD" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Weight(kg):</label>
                            <input type="text" class="form-control" id="weightx" name="weightx" required>
                        </div>
                        <div class="col-sm-6">
                            <label>Height(cm):</label>
                            <input type="text" class="form-control" id="heightx" name="heightx" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Age In Months:</label>
                        <input type="text" class="form-control" id="ageinmonthsx" name="ageinmonthsx" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-flat btn-primary" id="saveChangesBtn">Save Changes</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--CALCULATE MODAL FORM-->
<div id="modalCalculate" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Calculate Nutritional Status</b></h4>
            </div>
            <div class="modal-body">
                <form id="calculate" method="post">
                    <!--@csrf_field
                    {{ method_field('PUT') }}-->
                    <div class="form-group">
                        <label for="child_id">Child ID:</label>
                        <input type="text" class="form-control" id="child_id1" name="child_id1" readonly>
                    </div>

                    <div class="form-group">
                        <label for="userid">User ID:</label>
                        <input type="text" class="form-control" id="userid1" name="userid1" readonly>
                    </div>

                    <div class="form-group">
                        <label for="sex_id">Gender:</label>
                        <input type="text" class="form-control" id="sex2" name="sex2" readonly>
                    </div>

                    <div class="form-group">
                        <label for="weight">Weight:</label>
                        <input type="text" class="form-control" id="weight2" name="weight2" readonly>
                    </div>

                    <div class="form-group">
                        <label for="height">Height:</label>
                        <input type="text" class="form-control" id="height2" name="height2" readonly>
                    </div>

                    <div class="form-group">
                        <label for="ageinmonths">Age In Months:</label>
                        <input type="text" class="form-control" id="ageinmonths1" name="ageinmonths1" readonly>
                    </div>

                    <div class="form-group">
                        <label for="weightst">Weight Status:</label>
                        <input type="text" class="form-control" id="weightstatus1" name="weightstatus1" readonly>
                    </div>

                    <div class="form-group">
                        <label for="heightst">Height Status:</label>
                        <input type="text" class="form-control" id="heightstatus1" name="heightstatus1" readonly>
                    </div>

                    <div class="form-group">
                        <label for="weightforlengthst">Weight for Length Status:</label>
                        <input type="text" class="form-control" id="weightforlengthstatus1"
                            name="weightforlengthstatus1" readonly>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-flat btn-primary" id="calculateStatus">Save</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>