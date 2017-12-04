<?php include('include/navigation.php');?>

	<div class="content">
    	<div class="header register-page">
        	<div class="center-vertical-horizontal-align">
                <h1>Create your honeymoon fund</h1>
                <p>Once you have built your honeymoon then just share the link we give you with your friends and family.</p>
            </div>
        </div>
        <div class="register-first-step-container step2 clearfix">
        	<div class="first-step-container">
            	<div class="register-header clearfix">
                	<div class="steps-container clearfix">
                        <div class="step equal-height">
                            <div class="positioned-container">
                                <p>Step 1</p>
                                <p>Details</p>
                            </div>
                        </div>
                    </div>
                    <div class="first-step-progres">
                    	<h4>Your Itinerary</h4>
                        <p>Progress</p>
                        <div class="step-progress clearfix">
                        	<p>Step 2</p>
                            <div class="step-progress-bar">
                            	<div class="progress-bar-part">
                                	<div class="progress-bar-subpart completed"></div>
                                </div>
                                <div class="progress-bar-part">
                                	<div class="progress-bar-subpart"></div>
                                </div>
                                <div class="progress-bar-part">
                                	<div class="progress-bar-subpart"></div>
                                </div>
                            </div>
                            <p>Step 3</p>
                        </div>
                    </div>
                    <div class="steps-container clearfix">
                        <div class="step equal-height">
                            <div class="positioning-container">
                                <div class="positioned-container">
                                    <p>Step 3</p>
                                    <p>Share</p>
                                </div>
                            </div>
                        </div>
                        <div class="step equal-height">
                            <div class="positioned-container">
                                <p>Step 1</p>
                                <p>Details</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-container">
                    <form class="clearfix">
                        <div class="flight-container clearfix">
                        	<div>
    	                    	<h5>Flight</h5>
	                            <a class="btn-hover">More than 1 flight?</a>
                            </div>
                            <span class="correctly-completed input-container">
                                <input type="text" placeholder="Flight From (destination)" name="flightfrom" />
                            </span>
                            <span class="input-container">
                                <input type="text" placeholder="Flight to (destination)" name="flight-to" />
                            </span>
                            <span class="input-container">
                                <div class="departure">
                                    <select name="departure">
                                    	<option>Departure(day)</option>
                                        <option>Day 1</option>
                                        <option>Day 2</option>
                                        <option>Day 3</option>
                                        <option>Day 4</option>
                                        <option>Day 5</option>
                                        <option>Day 6</option>
                                        <option>Day 7</option>
                                    </select>
                                </div>
                                <div class="return">
                                    <select name="return">
                                    	<option>Return(day)</option>
                                        <option>Day 1</option>
                                        <option>Day 2</option>
                                        <option>Day 3</option>
                                        <option>Day 4</option>
                                        <option>Day 5</option>
                                        <option>Day 6</option>
                                        <option>Day 7</option>
                                    </select>
                                </div>
                            </span>
                        </div>
                        <div class="accomodation-container clearfix">
                        	<div>
                        		<h5>Accommodation</h5>
                            	<a class="btn-hover">More than 1 hotel?</a>
                            </div>
                            <span class="input-container">
                            	<input type="text" placeholder="Hotel Name" name="hotel" />
                            </span>
                            <span class="input-container">
                                <div class="check-in">
                                    <select name="check-in">
                                    	<option>Check-in(day)</option>
                                        <option>Day 1</option>
                                        <option>Day 2</option>
                                        <option>Day 3</option>
                                        <option>Day 4</option>
                                        <option>Day 5</option>
                                        <option>Day 6</option>
                                        <option>Day 7</option>
                                    </select>
                                </div>
                                <div class="check-out">
                                    <select name="check-out">
                                    	<option>Check-out(day)</option>
                                        <option>Day 1</option>
                                        <option>Day 2</option>
                                        <option>Day 3</option>
                                        <option>Day 4</option>
                                        <option>Day 5</option>
                                        <option>Day 6</option>
                                        <option>Day 7</option>
                                    </select>
                                </div>
                            </span>
                        </div>
                        <div class="schedule-container">
                        	<div>
                            	<h5>Schedule</h5>
                                <a class="btn-hover">Want to edit Honeymoon duration?</a>
                            </div>
                            <ul>
                            	<li>
                                	<div class="clearfix">
                                    	<p>Day 1</p>
                                        <p>£0.00</p>
                                        <span>total: </span>
                                    </div>
                                    <div class="clearfix">
                                    	<div class="equal-height">
                                        	<a href="#schedule-add-food-popup" class="pop-up-btn btn-hover"><i class="fa fa-cutlery"></i>Add Food</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-add-drinks-popup" class="pop-up-btn btn-hover"><i class="fa fa-glass"></i>Add Drinks</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-day-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-sun-o"></i>Day Time Activities</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-evening-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-moon-o"></i>Evening Activities</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                	<div class="clearfix">
                                    	<p>Day 2</p>
                                        <p>£0.00</p>
                                        <span>total: </span>
                                    </div>
                                    <div class="clearfix">
                                    	<div class="equal-height">
                                        	<a href="#schedule-add-food-popup" class="pop-up-btn btn-hover"><i class="fa fa-cutlery"></i>Add Food</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-add-drinks-popup" class="pop-up-btn btn-hover"><i class="fa fa-glass"></i>Add Drinks</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-day-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-sun-o"></i>Day Time Activities</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-evening-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-moon-o"></i>Evening Activities</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                	<div class="clearfix">
                                    	<p>Day 3</p>
                                        <p>£0.00</p>
                                        <span>total: </span>
                                    </div>
                                    <div class="clearfix">
                                    	<div class="equal-height">
                                        	<a href="#schedule-add-food-popup" class="pop-up-btn btn-hover"><i class="fa fa-cutlery"></i>Add Food</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-add-drinks-popup" class="pop-up-btn btn-hover"><i class="fa fa-glass"></i>Add Drinks</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-day-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-sun-o"></i>Day Time Activities</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-evening-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-moon-o"></i>Evening Activities</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                	<div class="clearfix">
                                    	<p>Day 4</p>
                                        <p>£0.00</p>
                                        <span>total: </span>
                                    </div>
                                    <div class="clearfix">
                                    	<div class="equal-height">
                                        	<a href="#schedule-add-food-popup" class="pop-up-btn btn-hover"><i class="fa fa-cutlery"></i>Add Food</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-add-drinks-popup" class="pop-up-btn btn-hover"><i class="fa fa-glass"></i>Add Drinks</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-day-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-sun-o"></i>Day Time Activities</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-evening-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-moon-o"></i>Evening Activities</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                	<div class="clearfix">
                                    	<p>Day 5</p>
                                        <p>£0.00</p>
                                        <span>total: </span>
                                    </div>
                                    <div class="clearfix">
                                    	<div class="equal-height">
                                        	<a href="#schedule-add-food-popup" class="pop-up-btn btn-hover"><i class="fa fa-cutlery"></i>Add Food</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-add-drinks-popup" class="pop-up-btn btn-hover"><i class="fa fa-glass"></i>Add Drinks</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-day-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-sun-o"></i>Day Time Activities</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-evening-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-moon-o"></i>Evening Activities</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                	<div class="clearfix">
                                    	<p>Day 6</p>
                                        <p>£0.00</p>
                                        <span>total: </span>
                                    </div>
                                    <div class="clearfix">
                                    	<div class="equal-height">
                                        	<a href="#schedule-add-food-popup" class="pop-up-btn btn-hover"><i class="fa fa-cutlery"></i>Add Food</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-add-drinks-popup" class="pop-up-btn btn-hover"><i class="fa fa-glass"></i>Add Drinks</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-day-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-sun-o"></i>Day Time Activities</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-evening-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-moon-o"></i>Evening Activities</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                	<div class="clearfix">
                                    	<p>Day 7</p>
                                        <p>£0.00</p>
                                        <span>total: </span>
                                    </div>
                                    <div class="clearfix">
                                    	<div class="equal-height">
                                        	<a href="#schedule-add-food-popup" class="pop-up-btn btn-hover"><i class="fa fa-cutlery"></i>Add Food</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-add-drinks-popup" class="pop-up-btn btn-hover"><i class="fa fa-glass"></i>Add Drinks</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-day-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-sun-o"></i>Day Time Activities</a>
                                        </div>
                                        <div class="equal-height">
                                        	<a href="#schedule-evening-activities-popup" class="pop-up-btn btn-hover"><i class="fa fa-moon-o"></i>Evening Activities</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a class="add-another-day btn-hover">ADD ANOTHER DAY <i class="fa fa-plus"></i></a>
                        </div>
                        <div class="separator"></div>
                        <div class="prev-step">
	                        <a class="btn-hover simple">&#11013; PREVIOUS STEP</a>
                        </div>
                        <input class="green btn-hover" type="submit" value="NEXT STEP  &#10145;" />
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include('include/footer.php');?>