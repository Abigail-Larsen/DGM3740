
<?php 
$title="Book";
include '_top.php';     
?>

<div class="body">
    <div class="wrapper">

        <p class="title">Book A Cruise</p>
        <form novalidate>
    
            <div class="col-sm">
                <div class="form-field">
                    <div class="form-field__control">
                        <label for="fullName" class="form-field__label">Full Name</label>
                        <input id="fullName" type="text" class="form-field__input" required/>
                    </div>
                </div>
            </div>
    
            <div class="col-sm">
                <div class="form-field">
                    <div class="form-field__control">
                        <label for="AddressLine"class="form-field__label">Address Line</label>
                        <input id="AddressLine" type="text" class="form-field__input" />
                    </div>
                </div>
            </div>
    
            <div class="col-sm">
                <div class="form-field">
                    <div class="form-field__control">
                        <label for="city" class="form-field__label">City</label>
                        <input id="city" type="city" class="form-field__input" />
                    </div>
                </div>
            </div>

            <div class="form-field__control-select">
                <select id="state" type="text" placeholder="Pick a state..." >
                    <option value="">Select a state...</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>

            <div class="col-sm">
                <div class="form-field">
                    <div class="form-field__control">
                        <label for="zip"class="form-field__label">Zip code</label>
                        <input id="zip" type="text" class="form-field__input" />
                    </div>
                </div>
            </div>
    
            <div class="col-sm">
                <div class="form-field">
                    <div class="form-field__control">
                        <label for="PhoneNumber"class="form-field__label">Phone Number</label>
                        <input id="PhoneNumber" type="text" class="form-field__input" />
                    </div>
                </div>
            </div>
            
            <div class="col-sm">
                <div class="form-field">
                    <div class="form-field__control">
                        <label for="email" class="form-field__label">Email</label>
                        <input id="email" type="email" class="form-field__input" required/>
                    </div>
                </div>
            </div>

            <div class="form-field__control-select">
                <select id="state" type="text" placeholder="Pick a state..." >
                    <option value="">Select a Cruise..</option>
                    <option value="AL">Alaska</option>
                    <option value="AK">Caribbean</option>
                    <option value="AZ">France</option>
                </select>
            </div>

            <button class='submit-form' submit>Book My Cruise</button>
        </form>
    </div>
</body>

<?php 
include '_bot.php';
?>