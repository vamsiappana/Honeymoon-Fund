<div class="footer clearfix">
    	<a href="homepage.php" class="footer-logo btn-hover">
        	<img src="static/images/small-logo.png" class="middle-vertical-align" />
            <h5>Honeymoon fund</h5>
        </a>
        <ul class="footer-menu center-vertical-horizontal-align">
        	<li>
            	<a href="homepage.php#homepageCarousel" class="btn-hover">SUPPORT</a>
            </li>
            <li>
            	<a href="fund-link.php" class="btn-hover">ACCOUNT</a>
            </li>
            <li>
            	<a href="#register-popup" class="pop-up-btn btn-hover">REGISTER</a>
            </li>
            <li>
            	<a href="#login-popup" class="pop-up-btn btn-hover">LOGIN</a>
            </li>
        </ul>
        <p class="middle-vertical-align">© Honeymoon Fund <?php echo date('Y');?>. All right reserved.</p>
    </div>
</div>
<div class="popups-container">
	<div class="small-popup" id="schedule-add-food-popup">
    	<div class="pop-up-header clearfix">
        	<p>Day 1</p>
        </div>
        <form>
        	<input type="text" name="venue-name" placeholder="What is the name of the venue?" />
            <div class="budget-container">
	            <input type="number" name="budget" placeholder="Spending Budget?" />
            </div>
            <input type="text" name="other-details" placeholder="Any extra details?" />
            <div class="food button-container">
	            <input type="submit" value="Add Food" />
            </div>
        </form>
    </div>
    <div class="small-popup" id="schedule-add-drinks-popup">
    	<div class="pop-up-header clearfix">
        	<p>Day 1</p>
        </div>
        <form>
        	<input type="text" name="venue-name" placeholder="What is the name of the venue?" />
            <div class="budget-container">
	            <input type="number" name="budget" placeholder="Spending Budget?" />
            </div>
            <input type="text" name="other-details" placeholder="Any extra details?" />
            <div class="drink button-container">
	            <input type="submit" value="Add Drinks" />
            </div>
        </form>
    </div>
    <div class="small-popup" id="schedule-day-activities-popup">
    	<div class="pop-up-header clearfix">
        	<p>Day 1</p>
        </div>
        <form>
        	<input type="text" name="venue-name" placeholder="What is the name of the venue?" />
            <div class="budget-container">
	            <input type="number" name="budget" placeholder="Spending Budget?" />
            </div>
            <input type="text" name="other-details" placeholder="Any extra details?" />
            <div class="day-activities button-container">
	            <input type="submit" value="Add Day Time Activities" />
            </div>
        </form>
    </div>
    <div class="small-popup" id="schedule-evening-activities-popup">
    	<div class="pop-up-header clearfix">
        	<p>Day 1</p>
        </div>
        <form>
        	<input type="text" name="venue-name" placeholder="What is the name of the venue?" />
            <div class="budget-container">
	            <input type="number" name="budget" placeholder="Spending Budget?" />
            </div>
            <input type="text" name="other-details" placeholder="Any extra details?" />
            <div class="evening-activities button-container">
	            <input type="submit" value="Add Evening Activities" />
            </div>
        </form>
    </div>
    <div class="small-popup" id="login-popup">
    	<div class="pop-up-header clearfix">
        	<p>Login</p>
        </div>
        <form>
        	<input type="email" name="email" placeholder="Email Address" />
            <input type="password" name="password" placeholder="Password" />
        	<div class="button-normal-container">
	            <input type="submit" value="LOGIN" />
            </div>
        </form>
    </div>
    <div class="small-popup" id="register-popup">
    	<div class="pop-up-header clearfix">
        	<p>Register</p>
        </div>
        <form>
        	<input type="email" name="email" placeholder="Email Address" />
            <input type="password" name="password" placeholder="Password" />
        	<div class="button-normal-container">
	            <input type="submit" value="SIGN UP" />
            </div>
        </form>
    </div>
    <div class="small-popup" id="fund-this-popup">
    	<div class="pop-up-header clearfix">
        	<p>Do you want to fund this?</p>
        </div>
        <form>
        	<input type="text" name="your-name" placeholder="Your Name" />
            <input type="email" name="email" placeholder="Email Address" />
            <div class="budget-container">
	            <input type="number" name="budget" placeholder="Contribution e.g. ( 50 )" />
            </div>
            <input type="text" name="other-details" placeholder="Do you have a message for Jack & Mary?" />
            <div class="check-box-container clearfix">
            	<input type="checkbox" id="anonymus-fund" />
            	<label for="anonymus-fund">Click here if you would prefer other not to know what you have contributed</label>
            </div>
            <div class="button-normal-container">
	            <input type="submit" value="Fund This" />
            </div>
        </form>
    </div>
    <div class="large-popup" id="need-help">
    	<div class="pop-up-header clearfix">
        	<p>Need some help? Send me a message</p>
        </div>
        <form>
        	<div class="half-sized-container clearfix">
            	<input type="text" name="your-name" placeholder="Your Name" />
                <input type="email" name="your-email" placeholder="Email Address" />
            </div>
            <input type="text" name="your-message" placeholder="Your Message" />
            <div class="button-normal-container">
	            <input type="submit" value="SEND MESSAGE" />
            </div>
        </form>
    </div>
    <div class="large-popup" id="succesfully-sent-message">
    	<h4>Thank you for sending me a message</h4>
        <p>Your message has been successfully sent.</p>
		<p>We will contact you very soon!</p>
    </div>
</div>
</body>
</html>