<!DOCTYPE html>
<html>
<head>
	<title>Application for a Research Grant</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container text-center mt-5">
        <h4>SABARAGAMUWA UNIVERSITY OF SRI LANKA</h4>
		<br>
		<h4>APPLICATION FOR A RESEARCH GRANT</h4>
        <p>(Please refer to the Guidelines for a Applicants - Grants for a Scientific Research)</p>
    </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                @foreach($errors->all() as $error)
           <div class="alert alert-danger" role="alert">
               {{$error}}
           </div> 
           @endforeach

                    <form>
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">1.Project Title</label>
                            <input type="text" class="form-control" name="project" id="project" value="{{ old('project') }}" required>
                            @if ($errors->has('project'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">2.Research areas</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Agriculture and Animal Science</option>
                                <option>Enviromental and Biodiversity</option>
                                <option>Engneering and Surveying Science</option>
                                <option>Food science and Technology</option>
                                <option>Natural Resources</option>
                                <option>Social Science</option>
                                <option>Management Studies</option>
                                <option>Technology Development and Promotion</option>
                                <option>Languages</option>
                                <option>Fundermental Research</option>
                            </select>
                        </div>
                    <div class="invesigator">
                        <div class="form-group">
                            <label>3.Investigators
                                <br>Principal Investigator</label>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name and Designation</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Malling Address</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                            <div class="form-group">
                                <label>Institution</label>
                                <input type="text" class="form-control">
                            </div>
                                
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Telephone</label>
                                <input type="phone" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Fax</label>
                                <input type="phone" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>

                        <div class="co-investigator">

                            <div class="form-group">
                                    <label>Co-Investigator-1</label>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>(a) Name and Designation</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Malling Address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
        
                                    <div class="form-group">
                                        <label>Institution</label>
                                        <input type="text" class="form-control">
                                    </div>
                                        
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Telephone</label>
                                        <input type="phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Fax</label>
                                        <input type="phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control">
                                    </div>    
                                </div>
                                
                                <div class="co-investigator">

                                        <div class="form-group">
                                                <label>Co-Investigator-2</label>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>(b) Name and Designation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Malling Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                    
                                                <div class="form-group">
                                                    <label>Institution</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                    
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label>Telephone</label>
                                                    <input type="phone" class="form-control">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Fax</label>
                                                    <input type="phone" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>E-mail</label>
                                                    <input type="email" class="form-control">
                                                </div>    
                                            </div>

                                            <div class="collaborator">
                                                    <div class="form-group">
                                                        <label>4.Collaborators</label>
                                                    </div>
                                                        <div class="form-group">
                                                            <label>Name and Designation</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                            
                                                        <div class="form-group">
                                                            <label>Institution</label>
                                                            <input type="text" class="form-control">
                                                        </div>

                                                        <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>4.1 Total Budget:</label>
                                                                    <input type="phone" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>4.2 Budget for First Year:</label>
                                                                    <input type="phone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label>4.3 Project Period:</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-group">
                                                    <label>5.Institution's where research is to be performed</label>
                                                    <input  type="textarea" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label>6. Is this a continuation of an ongoing project?</label><br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                                  </div>
                                                  <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline2">No</label>
                                                  </div>
                                                  </div>

                                                  <div class="form-group col-md-6">
                                                        <label>Period for Which the grant is required:-</label><br>
                                                        <input type="text" class="form-control">
                                                                </div>
                                                                </div>
                                                    <div class="form-group">
                                                        <label> 7. Financial Support<br>
                                                            <br> (a) Is the proposed research currently being supported by any other grant?
                                                            If so, please indicate the name of granting organization and give the amount and duration.
                                                        </label>
                                                        <input type="text" class="form-control">
                                                        <br> (b) Is this application currently being considered elsewhere for funding? If so, by what organization's; by what date is a decision expected?
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>9.Project Ddescription
                                                            <br>please prepare according to the Gudelines and attach to the Aplication. <strong>Do Not exceed 8 pages</strong>
                                                        </label>
                                                       <input type="file" class="form-control-file" id="exampleFormControlFile1" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>11.Budget Justification
                                                            <br> (1) Personnel
                                                            <br>
                                                            a. Full time/part time for <input type="text" > Years/months. 
                                                        </label>

                                                    </div>
                                                   
                                                    
                                                    </div>


                                            
                      
                        </form>
                        <a href="/form B" type="submit" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>