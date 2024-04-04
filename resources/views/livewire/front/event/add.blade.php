<div>
    <div class="event-dt-block p-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="main-title text-center">
                        <h3>Create Venue Event {{ $step }}</h3>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="wizard-steps-block">
                        <div id="add-event-tab" class="step-app">
                            <ul class="step-steps">
                                <li class="active">
                                    <a href="#tab_step1">
                                        <span class="number"></span>
                                        <span class="step-name">Details</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab_step2">
                                        <span class="number"></span>
                                        <span class="step-name">Tickets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab_step3">
                                        <span class="number"></span>
                                        <span class="step-name">Setting</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="step-content">
                                @if ($step == 0)
                                    <div class=" step-tab-info active" id="tab_step1" >
                                        <div class="tab-from-content">
                                            <div class="main-card">
                                                <div class="bp-title">
                                                    <h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Details
                                                    </h4>
                                                </div>
                                                <div class="p-4 bp-form main-form">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group border_bottom pb_30">
                                                                <label class="form-label fs-16">Give your event a
                                                                    name.*</label>
                                                                <p class="mt-2 d-block fs-14 mb-3">See how your name
                                                                    appears on the event page and a list of all places
                                                                    where your event name will be used. <a
                                                                        href="#" class="a-link">Learn more</a></p>
                                                                <input class="form-control h_50" type="text"
                                                                    placeholder="Enter event name here" value="">
                                                            </div>
                                                            <div class="form-group border_bottom pt_30 pb_30">
                                                                <label class="form-label fs-16">Choose a category for
                                                                    your event.*</label>
                                                                <p class="mt-2 d-block fs-14 mb-3">Choosing relevant
                                                                    categories helps to improve the discoverability of
                                                                    your event. <a href="#" class="a-link">Learn
                                                                        more</a></p>
                                                                <select class="selectpicker" multiple=""
                                                                    data-size="5" title="Select category"
                                                                    data-live-search="true">
                                                                    <option value="01">Arts</option>
                                                                    <option value="02">Business</option>
                                                                    <option value="03">Coaching and Consulting
                                                                    </option>
                                                                    <option value="04">Community and Culture
                                                                    </option>
                                                                    <option value="05">Entrepreneurship</option>
                                                                    <option value="06">Education and Training
                                                                    </option>
                                                                    <option value="07">Family and Friends</option>
                                                                    <option value="08">Fashion and Beauty</option>
                                                                    <option value="09">Film and Entertainment
                                                                    </option>
                                                                    <option value="10">Food and Drink</option>
                                                                    <option value="11">Government and Politics
                                                                    </option>
                                                                    <option value="12">Health and Wellbeing</option>
                                                                    <option value="13">Hobbies and Interest</option>
                                                                    <option value="14">Music and Theater</option>
                                                                    <option value="15">Religion and Spirituality
                                                                    </option>
                                                                    <option value="16">Science and Technology
                                                                    </option>
                                                                    <option value="17">Sports and Fitness</option>
                                                                    <option value="18">Travel and Outdoor</option>
                                                                    <option value="19">Visual Arts</option>
                                                                    <option value="20">Others</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group border_bottom pt_30 pb_30">
                                                                <label class="form-label fs-16">When is your
                                                                    event?*</label>
                                                                <p class="mt-2 fs-14 d-block mb-3">Tell your attendees
                                                                    when your event starts so they can get ready to
                                                                    attend.</p>
                                                                <div class="row g-2">
                                                                    <div class="col-md-6">
                                                                        <label class="form-label mt-3 fs-6">Event
                                                                            Date.*</label>
                                                                        <div class="loc-group position-relative">
                                                                            <input
                                                                                class="form-control h_50 datepicker-here"
                                                                                data-language="en" type="text"
                                                                                placeholder="MM/DD/YYYY" value="">
                                                                            <span class="absolute-icon"><i
                                                                                    class="fa-solid fa-calendar-days"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row g-2">
                                                                            <div class="col-md-6">
                                                                                <div class="clock-icon">
                                                                                    <label
                                                                                        class="form-label mt-3 fs-6">Time</label>
                                                                                    <select class="selectpicker"
                                                                                        data-size="5"
                                                                                        data-live-search="true">
                                                                                        <option value="00:00">12:00 AM
                                                                                        </option>
                                                                                        <option value="00:15">12:15 AM
                                                                                        </option>
                                                                                        <option value="00:30">12:30 AM
                                                                                        </option>
                                                                                        <option value="00:45">12:45 AM
                                                                                        </option>
                                                                                        <option value="01:00">01:00 AM
                                                                                        </option>
                                                                                        <option value="01:15">01:15 AM
                                                                                        </option>
                                                                                        <option value="01:30">01:30 AM
                                                                                        </option>
                                                                                        <option value="01:45">01:45 AM
                                                                                        </option>
                                                                                        <option value="02:00">02:00 AM
                                                                                        </option>
                                                                                        <option value="02:15">02:15 AM
                                                                                        </option>
                                                                                        <option value="02:30">02:30 AM
                                                                                        </option>
                                                                                        <option value="02:45">02:45 AM
                                                                                        </option>
                                                                                        <option value="03:00">03:00 AM
                                                                                        </option>
                                                                                        <option value="03:15">03:15 AM
                                                                                        </option>
                                                                                        <option value="03:30">03:30 AM
                                                                                        </option>
                                                                                        <option value="03:45">03:45 AM
                                                                                        </option>
                                                                                        <option value="04:00">04:00 AM
                                                                                        </option>
                                                                                        <option value="04:15">04:15 AM
                                                                                        </option>
                                                                                        <option value="04:30">04:30 AM
                                                                                        </option>
                                                                                        <option value="04:45">04:45 AM
                                                                                        </option>
                                                                                        <option value="05:00">05:00 AM
                                                                                        </option>
                                                                                        <option value="05:15">05:15 AM
                                                                                        </option>
                                                                                        <option value="05:30">05:30 AM
                                                                                        </option>
                                                                                        <option value="05:45">05:45 AM
                                                                                        </option>
                                                                                        <option value="06:00">06:00 AM
                                                                                        </option>
                                                                                        <option value="06:15">06:15 AM
                                                                                        </option>
                                                                                        <option value="06:30">06:30 AM
                                                                                        </option>
                                                                                        <option value="06:45">06:45 AM
                                                                                        </option>
                                                                                        <option value="07:00">07:00 AM
                                                                                        </option>
                                                                                        <option value="07:15">07:15 AM
                                                                                        </option>
                                                                                        <option value="07:30">07:30 AM
                                                                                        </option>
                                                                                        <option value="07:45">07:45 AM
                                                                                        </option>
                                                                                        <option value="08:00">08:00 AM
                                                                                        </option>
                                                                                        <option value="08:15">08:15 AM
                                                                                        </option>
                                                                                        <option value="08:30">08:30 AM
                                                                                        </option>
                                                                                        <option value="08:45">08:45 AM
                                                                                        </option>
                                                                                        <option value="09:00">09:00 AM
                                                                                        </option>
                                                                                        <option value="09:15">09:15 AM
                                                                                        </option>
                                                                                        <option value="09:30">09:30 AM
                                                                                        </option>
                                                                                        <option value="09:45">09:45 AM
                                                                                        </option>
                                                                                        <option value="10:00"
                                                                                            selected="selected">10:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="10:15">10:15 AM
                                                                                        </option>
                                                                                        <option value="10:30">10:30 AM
                                                                                        </option>
                                                                                        <option value="10:45">10:45 AM
                                                                                        </option>
                                                                                        <option value="11:00">11:00 AM
                                                                                        </option>
                                                                                        <option value="11:15">11:15 AM
                                                                                        </option>
                                                                                        <option value="11:30">11:30 AM
                                                                                        </option>
                                                                                        <option value="11:45">11:45 AM
                                                                                        </option>
                                                                                        <option value="12:00">12:00 PM
                                                                                        </option>
                                                                                        <option value="12:15">12:15 PM
                                                                                        </option>
                                                                                        <option value="12:30">12:30 PM
                                                                                        </option>
                                                                                        <option value="12:45">12:45 PM
                                                                                        </option>
                                                                                        <option value="13:00">01:00 PM
                                                                                        </option>
                                                                                        <option value="13:15">01:15 PM
                                                                                        </option>
                                                                                        <option value="13:30">01:30 PM
                                                                                        </option>
                                                                                        <option value="13:45">01:45 PM
                                                                                        </option>
                                                                                        <option value="14:00">02:00 PM
                                                                                        </option>
                                                                                        <option value="14:15">02:15 PM
                                                                                        </option>
                                                                                        <option value="14:30">02:30 PM
                                                                                        </option>
                                                                                        <option value="14:45">02:45 PM
                                                                                        </option>
                                                                                        <option value="15:00">03:00 PM
                                                                                        </option>
                                                                                        <option value="15:15">03:15 PM
                                                                                        </option>
                                                                                        <option value="15:30">03:30 PM
                                                                                        </option>
                                                                                        <option value="15:45">03:45 PM
                                                                                        </option>
                                                                                        <option value="16:00">04:00 PM
                                                                                        </option>
                                                                                        <option value="16:15">04:15 PM
                                                                                        </option>
                                                                                        <option value="16:30">04:30 PM
                                                                                        </option>
                                                                                        <option value="16:45">04:45 PM
                                                                                        </option>
                                                                                        <option value="17:00">05:00 PM
                                                                                        </option>
                                                                                        <option value="17:15">05:15 PM
                                                                                        </option>
                                                                                        <option value="17:30">05:30 PM
                                                                                        </option>
                                                                                        <option value="17:45">05:45 PM
                                                                                        </option>
                                                                                        <option value="18:00">06:00 PM
                                                                                        </option>
                                                                                        <option value="18:15">06:15 PM
                                                                                        </option>
                                                                                        <option value="18:30">06:30 PM
                                                                                        </option>
                                                                                        <option value="18:45">06:45 PM
                                                                                        </option>
                                                                                        <option value="19:00">07:00 PM
                                                                                        </option>
                                                                                        <option value="19:15">07:15 PM
                                                                                        </option>
                                                                                        <option value="19:30">07:30 PM
                                                                                        </option>
                                                                                        <option value="19:45">07:45 PM
                                                                                        </option>
                                                                                        <option value="20:00">08:00 PM
                                                                                        </option>
                                                                                        <option value="20:15">08:15 PM
                                                                                        </option>
                                                                                        <option value="20:30">08:30 PM
                                                                                        </option>
                                                                                        <option value="20:45">08:45 PM
                                                                                        </option>
                                                                                        <option value="21:00">09:00 PM
                                                                                        </option>
                                                                                        <option value="21:15">09:15 PM
                                                                                        </option>
                                                                                        <option value="21:30">09:30 PM
                                                                                        </option>
                                                                                        <option value="21:45">09:45 PM
                                                                                        </option>
                                                                                        <option value="22:00">10:00 PM
                                                                                        </option>
                                                                                        <option value="22:15">10:15 PM
                                                                                        </option>
                                                                                        <option value="22:30">10:30 PM
                                                                                        </option>
                                                                                        <option value="22:45">10:45 PM
                                                                                        </option>
                                                                                        <option value="23:00">11:00 PM
                                                                                        </option>
                                                                                        <option value="23:15">11:15 PM
                                                                                        </option>
                                                                                        <option value="23:30">11:30 PM
                                                                                        </option>
                                                                                        <option value="23:45">11:45 PM
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label mt-3 fs-6">Duration</label>
                                                                                <select class="selectpicker"
                                                                                    data-size="5"
                                                                                    data-live-search="true">
                                                                                    <option value="15">15m</option>
                                                                                    <option value="30">30m</option>
                                                                                    <option value="45">45m</option>
                                                                                    <option value="60"
                                                                                        selected="selected">1h</option>
                                                                                    <option value="75">1h 15m
                                                                                    </option>
                                                                                    <option value="90">1h 30m
                                                                                    </option>
                                                                                    <option value="105">1h 45m
                                                                                    </option>
                                                                                    <option value="120">2h</option>
                                                                                    <option value="135">2h 15m
                                                                                    </option>
                                                                                    <option value="150">2h 30m
                                                                                    </option>
                                                                                    <option value="165">2h 45m
                                                                                    </option>
                                                                                    <option value="180">3h</option>
                                                                                    <option value="195">3h 15m
                                                                                    </option>
                                                                                    <option value="210">3h 30m
                                                                                    </option>
                                                                                    <option value="225">3h 45m
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group pt_30 pb_30">
                                                                <label class="form-label fs-16">Add a few images to
                                                                    your
                                                                    event banner.</label>
                                                                <p class="mt-2 fs-14 d-block mb-3 pe_right">Upload
                                                                    colorful and vibrant images as the banner for your
                                                                    event! See how beautiful images help your event
                                                                    details page. <a href="#"
                                                                        class="a-link">Learn
                                                                        more</a></p>
                                                                <div class="content-holder mt-4">
                                                                    <div class="default-event-thumb">
                                                                        <div class="default-event-thumb-btn">
                                                                            <div class="thumb-change-btn">
                                                                                <input type="file" id="thumb-img">
                                                                                <label for="thumb-img">Change
                                                                                    Image</label>
                                                                            </div>
                                                                        </div>
                                                                        <img src="images/banners/custom-img.jpg"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group border_bottom pb_30">
                                                                <label class="form-label fs-16">Please describe your
                                                                    event.</label>
                                                                <p class="mt-2 fs-14 d-block mb-3">Write a few words
                                                                    below to describe your event and provide any extra
                                                                    information such as schedules, itinerary or any
                                                                    special instructions required to attend your event.
                                                                </p>
                                                                <div livewire::ignore class="text-editor mt-4">
                                                                    <div id="pd_editor"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group pt_30 pb-2">
                                                                <label class="form-label fs-16">Where is your event
                                                                    taking place? *</label>
                                                                <p class="mt-2 fs-14 d-block mb-3">Add a venue to your
                                                                    event to tell your attendees where to join the
                                                                    event.</p>
                                                                <div class="stepper-data-set">
                                                                    <div class="content-holder template-selector">
                                                                        <div class="row g-4">
                                                                            <div class="col-md-12">
                                                                                <div class="venue-event">
                                                                                    <div class="map">
                                                                                        <iframe
                                                                                            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27382.59422947023!2d75.84077125074462!3d30.919535510612153!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1534312417365"
                                                                                            style="border:0"
                                                                                            allowfullscreen></iframe>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group mt-1">
                                                                                    <label
                                                                                        class="form-label fs-6">Venue*</label>
                                                                                    <input class="form-control h_50"
                                                                                        type="text" placeholder=""
                                                                                        value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group mt-1">
                                                                                    <label
                                                                                        class="form-label fs-6">Address
                                                                                        line 1*</label>
                                                                                    <input class="form-control h_50"
                                                                                        type="text" placeholder=""
                                                                                        value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group mt-1">
                                                                                    <label
                                                                                        class="form-label fs-6">Address
                                                                                        line 2*</label>
                                                                                    <input class="form-control h_50"
                                                                                        type="text" placeholder=""
                                                                                        value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group main-form mt-1">
                                                                                    <label
                                                                                        class="form-label">Country*</label>
                                                                                    <select class="selectpicker"
                                                                                        data-size="5"
                                                                                        title="Nothing selected"
                                                                                        data-live-search="true">
                                                                                        <option value="Algeria">Algeria
                                                                                        </option>
                                                                                        <option value="Argentina">
                                                                                            Argentina</option>
                                                                                        <option value="Australia"
                                                                                            selected="">Australia
                                                                                        </option>
                                                                                        <option value="Austria">Austria
                                                                                            (Österreich)</option>
                                                                                        <option value="Belgium">Belgium
                                                                                            (België)</option>
                                                                                        <option value="Bolivia">Bolivia
                                                                                        </option>
                                                                                        <option value="Brazil">Brazil
                                                                                        </option>
                                                                                        <option value="Canada">Canada
                                                                                        </option>
                                                                                        <option value="Chile">Chile
                                                                                        </option>
                                                                                        <option value="Colombia">
                                                                                            Colombia</option>
                                                                                        <option value="Costa Rica">
                                                                                            Costa
                                                                                            Rica</option>
                                                                                        <option value="Cyprus">Cyprus
                                                                                        </option>
                                                                                        <option value="Czech Republic">
                                                                                            Czech Republic</option>
                                                                                        <option value="Denmark">Denmark
                                                                                        </option>
                                                                                        <option
                                                                                            value="Dominican Republic">
                                                                                            Dominican Republic</option>
                                                                                        <option value="Estonia">Estonia
                                                                                        </option>
                                                                                        <option value="Finland">Finland
                                                                                        </option>
                                                                                        <option value="France">France
                                                                                        </option>
                                                                                        <option value="Germany">Germany
                                                                                        </option>
                                                                                        <option value="Greece">Greece
                                                                                        </option>
                                                                                        <option value="Hong Kong">Hong
                                                                                            Kong</option>
                                                                                        <option value="Iceland">Iceland
                                                                                        </option>
                                                                                        <option value="India">India
                                                                                        </option>
                                                                                        <option value="Indonesia">
                                                                                            Indonesia</option>
                                                                                        <option value="Ireland">Ireland
                                                                                        </option>
                                                                                        <option value="Israel">Israel
                                                                                        </option>
                                                                                        <option value="Italy">Italy
                                                                                        </option>
                                                                                        <option value="Japan">Japan
                                                                                        </option>
                                                                                        <option value="Latvia">Latvia
                                                                                        </option>
                                                                                        <option value="Lithuania">
                                                                                            Lithuania</option>
                                                                                        <option value="Luxembourg">
                                                                                            Luxembourg</option>
                                                                                        <option value="Malaysia">
                                                                                            Malaysia</option>
                                                                                        <option value="Mexico">Mexico
                                                                                        </option>
                                                                                        <option value="Nepal">Nepal
                                                                                        </option>
                                                                                        <option value="Netherlands">
                                                                                            Netherlands</option>
                                                                                        <option value="New Zealand">New
                                                                                            Zealand</option>
                                                                                        <option value="Norway">Norway
                                                                                        </option>
                                                                                        <option value="Paraguay">
                                                                                            Paraguay</option>
                                                                                        <option value="Peru">Peru
                                                                                        </option>
                                                                                        <option value="Philippines">
                                                                                            Philippines</option>
                                                                                        <option value="Poland">Poland
                                                                                        </option>
                                                                                        <option value="Portugal">
                                                                                            Portugal</option>
                                                                                        <option value="Singapore">
                                                                                            Singapore</option>
                                                                                        <option value="Slovakia">
                                                                                            Slovakia</option>
                                                                                        <option value="Slovenia">
                                                                                            Slovenia</option>
                                                                                        <option value="South Africa">
                                                                                            South Africa</option>
                                                                                        <option value="South Korea">
                                                                                            South Korea</option>
                                                                                        <option value="Spain">Spain
                                                                                        </option>
                                                                                        <option value="Sweden">Sweden
                                                                                        </option>
                                                                                        <option value="Switzerland">
                                                                                            Switzerland</option>
                                                                                        <option value="Tanzania">
                                                                                            Tanzania</option>
                                                                                        <option value="Thailand">
                                                                                            Thailand</option>
                                                                                        <option value="Turkey">Turkey
                                                                                        </option>
                                                                                        <option value="United Kingdom">
                                                                                            United Kingdom</option>
                                                                                        <option value="United States">
                                                                                            United States</option>
                                                                                        <option value="Vietnam">Vietnam
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group mt-1">
                                                                                    <label
                                                                                        class="form-label">State*</label>
                                                                                    <input class="form-control h_50"
                                                                                        type="text" placeholder=""
                                                                                        value="Victoria">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group mt-1">
                                                                                    <label
                                                                                        class="form-label">City/Suburb*</label>
                                                                                    <input class="form-control h_50"
                                                                                        type="text" placeholder=""
                                                                                        value="Melbourne">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="form-group mt-1">
                                                                                    <label class="form-label">Zip/Post
                                                                                        Code*</label>
                                                                                    <input class="form-control h_50"
                                                                                        type="text" placeholder=""
                                                                                        value="3000">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($step === 1)
                                    <div class=" step-tab-gallery" id="tab_step2">
                                        <div class="tab-from-content">
                                            <div class="main-card">
                                                <div class="bp-title">
                                                    <h4><i class="fa-solid fa-ticket step_icon me-3"></i>Tickets</h4>
                                                </div>
                                                <div class="bp-form main-form">
                                                    <div class="p-4 form-group border_bottom pb_30">
                                                        <div class="">
                                                            <div class="ticket-section">
                                                                <label class="form-label fs-16">Let's create
                                                                    tickets!</label>
                                                                <p class="mt-2 fs-14 d-block mb-3 pe_right">Create
                                                                    tickets for your event by clicking on the 'Add
                                                                    Tickets' button below.</p>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between pt-4 pb-3 full-width">
                                                                <h3 class="fs-18 mb-0">Tickets (<span
                                                                        class="venue-event-ticket-counter">3</span>)
                                                                </h3>
                                                                <div
                                                                    class="dropdown dropdown-default dropdown-normal btn-ticket-type-top">
                                                                    <button
                                                                        class="dropdown-toggle main-btn btn-hover h_40 pe-4 ps-4"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <span>Add Tickets</span>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="dropdownMenuButton"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#singleTicketModal">
                                                                            <i class="fa-solid fa-ticket me-2"></i>
                                                                            Single Ticket
                                                                        </a>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#groupTicketModal">
                                                                            <i class="fa-solid fa-ticket me-2"></i>
                                                                            Group Ticket
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ticket-type-item-empty d-none text-center p_30">
                                                                <div class="ticket-list-icon d-inline-block">
                                                                    <img src="images/ticket.png" alt="">
                                                                </div>
                                                                <h4 class="color-black mt-4 mb-3 fs-18">You have no
                                                                    tickets yet.</h4>
                                                                <p class="mb-0">You have not created a ticket yet.
                                                                    Please click the button above to create your event
                                                                    ticket.</p>
                                                            </div>
                                                            <div class="ticket-type-item-list mt-4">
                                                                <div class="price-ticket-card mt-4">
                                                                    <div
                                                                        class="price-ticket-card-head d-md-flex flex-wrap align-items-start justify-content-between position-relative p-4">
                                                                        <div
                                                                            class="d-flex align-items-center top-name">
                                                                            <div class="icon-box">
                                                                                <span
                                                                                    class="icon-big rotate-icon icon icon-purple">
                                                                                    <i class="fa-solid fa-ticket"></i>
                                                                                </span>
                                                                                <h5 class="fs-16 mb-1 mt-1">New Small -
                                                                                    $10.00</h5>
                                                                                <p class="text-gray-50 m-0"><span
                                                                                        class="visitor-date-time">May
                                                                                        3,
                                                                                        2022</span></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="price-badge">
                                                                                <img src="images/discount.png"
                                                                                    alt="">
                                                                            </div>
                                                                            <label
                                                                                class="btn-switch tfs-8 mb-0 me-4 mt-1">
                                                                                <input type="checkbox" value=""
                                                                                    checked>
                                                                                <span class="checkbox-slider"></span>
                                                                            </label>
                                                                            <div
                                                                                class="dropdown dropdown-default dropdown-text dropdown-icon-item">
                                                                                <button class="option-btn-1"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    <i
                                                                                        class="fa-solid fa-ellipsis-vertical"></i>
                                                                                </button>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <a href="#"
                                                                                        class="dropdown-item"><i
                                                                                            class="fa-solid fa-pen me-3"></i>Edit</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item"><i
                                                                                            class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-ticket-card-body border_top p-4">
                                                                        <div
                                                                            class="full-width d-flex flex-wrap justify-content-between align-items-center">
                                                                            <div class="icon-box">
                                                                                <div class="icon me-3">
                                                                                    <i class="fa-solid fa-ticket"></i>
                                                                                </div>
                                                                                <span class="text-145">Total
                                                                                    tickets</span>
                                                                                <h6 class="coupon-status">20</h6>
                                                                            </div>
                                                                            <div class="icon-box">
                                                                                <div class="icon me-3">
                                                                                    <i class="fa-solid fa-users"></i>
                                                                                </div>
                                                                                <span class="text-145">Ticket limit per
                                                                                    customer</span>
                                                                                <h6 class="coupon-status">2</h6>
                                                                            </div>
                                                                            <div class="icon-box">
                                                                                <div class="icon me-3">
                                                                                    <i
                                                                                        class="fa-solid fa-cart-shopping"></i>
                                                                                </div>
                                                                                <span class="text-145">Discount</span>
                                                                                <h6 class="coupon-status">5%</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="price-ticket-card mt-4">
                                                                    <div
                                                                        class="price-ticket-card-head d-md-flex flex-wrap align-items-start justify-content-between position-relative p-4">
                                                                        <div
                                                                            class="d-flex align-items-center top-name">
                                                                            <div class="icon-box">
                                                                                <span
                                                                                    class="icon-big rotate-icon icon icon-yellow">
                                                                                    <i class="fa-solid fa-ticket"></i>
                                                                                </span>
                                                                                <h5 class="fs-16 mb-1 mt-1">Group -
                                                                                    $10.00</h5>
                                                                                <p class="text-gray-50 m-0"><span
                                                                                        class="visitor-date-time">May
                                                                                        3,
                                                                                        2022</span></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="price-badge">
                                                                                <img src="images/discount.png"
                                                                                    alt="">
                                                                            </div>
                                                                            <label
                                                                                class="btn-switch tfs-8 mb-0 me-4 mt-1">
                                                                                <input type="checkbox" value=""
                                                                                    checked>
                                                                                <span class="checkbox-slider"></span>
                                                                            </label>
                                                                            <div
                                                                                class="dropdown dropdown-default dropdown-text dropdown-icon-item">
                                                                                <button class="option-btn-1"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    <i
                                                                                        class="fa-solid fa-ellipsis-vertical"></i>
                                                                                </button>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <a href="#"
                                                                                        class="dropdown-item"><i
                                                                                            class="fa-solid fa-pen me-3"></i>Edit</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item"><i
                                                                                            class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-ticket-card-body border_top p-4">
                                                                        <div
                                                                            class="full-width d-flex flex-wrap justify-content-between align-items-center">
                                                                            <div class="icon-box">
                                                                                <div class="icon me-3">
                                                                                    <i class="fa-solid fa-ticket"></i>
                                                                                </div>
                                                                                <span class="text-145">Total
                                                                                    tickets</span>
                                                                                <h6 class="coupon-status">Unlimited
                                                                                </h6>
                                                                            </div>
                                                                            <div class="icon-box">
                                                                                <div class="icon me-3">
                                                                                    <i class="fa-solid fa-users"></i>
                                                                                </div>
                                                                                <span class="text-145">Ticket limit per
                                                                                    customer</span>
                                                                                <h6 class="coupon-status">Unlimited
                                                                                </h6>
                                                                            </div>
                                                                            <div class="icon-box">
                                                                                <div class="icon me-3">
                                                                                    <i
                                                                                        class="fa-solid fa-cart-shopping"></i>
                                                                                </div>
                                                                                <span class="text-145">Discount</span>
                                                                                <h6 class="coupon-status">2%</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($step === 2)
                                    <div class=" step-tab-location" id="tab_step3">
                                        <div class="tab-from-content">
                                            <div class="main-card">
                                                <div class="bp-title">
                                                    <h4><i class="fa-solid fa-gear step_icon me-3"></i>Setting</h4>
                                                </div>
                                                <div class="p_30 bp-form main-form">
                                                    <div class="form-group">
                                                        <div class="ticket-section">
                                                            <label class="form-label fs-16">Let's configure a few
                                                                additional options for your event!</label>
                                                            <p class="mt-2 fs-14 d-block mb-3 pe_right">Change the
                                                                following settings based on your preferences to
                                                                customise your event accordingly.</p>
                                                            <div class="content-holder">
                                                                <div class="setting-item border_bottom pb_30 pt-4">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""
                                                                                id="booking-start-time-btn"
                                                                                value="" checked>
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                        <div class="d-flex flex-column">
                                                                            <label class="color-black fw-bold mb-1">I
                                                                                want the bookings to start
                                                                                immediately.</label>
                                                                            <p class="mt-2 fs-14 d-block mb-0">Disable
                                                                                this option if you want to start your
                                                                                booking from a specific date and time.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="booking-start-time-holder"
                                                                        style="display:none;">
                                                                        <div class="form-group pt_30">
                                                                            <label class="form-label fs-16">Booking
                                                                                starts on</label>
                                                                            <p class="mt-2 fs-14 d-block mb-0">Specify
                                                                                the date and time when you want the
                                                                                booking to start.</p>
                                                                            <div class="row g-3">
                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        class="form-label mt-3 fs-6">Event
                                                                                        Date.*</label>
                                                                                    <div
                                                                                        class="loc-group position-relative">
                                                                                        <input
                                                                                            class="form-control h_50 datepicker-here"
                                                                                            data-language="en"
                                                                                            type="text"
                                                                                            placeholder="MM/DD/YYYY"
                                                                                            value="">
                                                                                        <span class="absolute-icon"><i
                                                                                                class="fa-solid fa-calendar-days"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="clock-icon">
                                                                                        <label
                                                                                            class="form-label mt-3 fs-6">Time</label>
                                                                                        <select class="selectpicker"
                                                                                            data-size="5"
                                                                                            data-live-search="true">
                                                                                            <option value="00:00">
                                                                                                12:00
                                                                                                AM</option>
                                                                                            <option value="00:15">
                                                                                                12:15
                                                                                                AM</option>
                                                                                            <option value="00:30">
                                                                                                12:30
                                                                                                AM</option>
                                                                                            <option value="00:45">
                                                                                                12:45
                                                                                                AM</option>
                                                                                            <option value="01:00">
                                                                                                01:00
                                                                                                AM</option>
                                                                                            <option value="01:15">
                                                                                                01:15
                                                                                                AM</option>
                                                                                            <option value="01:30">
                                                                                                01:30
                                                                                                AM</option>
                                                                                            <option value="01:45">
                                                                                                01:45
                                                                                                AM</option>
                                                                                            <option value="02:00">
                                                                                                02:00
                                                                                                AM</option>
                                                                                            <option value="02:15">
                                                                                                02:15
                                                                                                AM</option>
                                                                                            <option value="02:30">
                                                                                                02:30
                                                                                                AM</option>
                                                                                            <option value="02:45">
                                                                                                02:45
                                                                                                AM</option>
                                                                                            <option value="03:00">
                                                                                                03:00
                                                                                                AM</option>
                                                                                            <option value="03:15">
                                                                                                03:15
                                                                                                AM</option>
                                                                                            <option value="03:30">
                                                                                                03:30
                                                                                                AM</option>
                                                                                            <option value="03:45">
                                                                                                03:45
                                                                                                AM</option>
                                                                                            <option value="04:00">
                                                                                                04:00
                                                                                                AM</option>
                                                                                            <option value="04:15">
                                                                                                04:15
                                                                                                AM</option>
                                                                                            <option value="04:30">
                                                                                                04:30
                                                                                                AM</option>
                                                                                            <option value="04:45">
                                                                                                04:45
                                                                                                AM</option>
                                                                                            <option value="05:00">
                                                                                                05:00
                                                                                                AM</option>
                                                                                            <option value="05:15">
                                                                                                05:15
                                                                                                AM</option>
                                                                                            <option value="05:30">
                                                                                                05:30
                                                                                                AM</option>
                                                                                            <option value="05:45">
                                                                                                05:45
                                                                                                AM</option>
                                                                                            <option value="06:00">
                                                                                                06:00
                                                                                                AM</option>
                                                                                            <option value="06:15">
                                                                                                06:15
                                                                                                AM</option>
                                                                                            <option value="06:30">
                                                                                                06:30
                                                                                                AM</option>
                                                                                            <option value="06:45">
                                                                                                06:45
                                                                                                AM</option>
                                                                                            <option value="07:00">
                                                                                                07:00
                                                                                                AM</option>
                                                                                            <option value="07:15">
                                                                                                07:15
                                                                                                AM</option>
                                                                                            <option value="07:30">
                                                                                                07:30
                                                                                                AM</option>
                                                                                            <option value="07:45">
                                                                                                07:45
                                                                                                AM</option>
                                                                                            <option value="08:00">
                                                                                                08:00
                                                                                                AM</option>
                                                                                            <option value="08:15">
                                                                                                08:15
                                                                                                AM</option>
                                                                                            <option value="08:30">
                                                                                                08:30
                                                                                                AM</option>
                                                                                            <option value="08:45">
                                                                                                08:45
                                                                                                AM</option>
                                                                                            <option value="09:00">
                                                                                                09:00
                                                                                                AM</option>
                                                                                            <option value="09:15">
                                                                                                09:15
                                                                                                AM</option>
                                                                                            <option value="09:30">
                                                                                                09:30
                                                                                                AM</option>
                                                                                            <option value="09:45">
                                                                                                09:45
                                                                                                AM</option>
                                                                                            <option value="10:00"
                                                                                                selected="selected">
                                                                                                10:00 AM</option>
                                                                                            <option value="10:15">
                                                                                                10:15
                                                                                                AM</option>
                                                                                            <option value="10:30">
                                                                                                10:30
                                                                                                AM</option>
                                                                                            <option value="10:45">
                                                                                                10:45
                                                                                                AM</option>
                                                                                            <option value="11:00">
                                                                                                11:00
                                                                                                AM</option>
                                                                                            <option value="11:15">
                                                                                                11:15
                                                                                                AM</option>
                                                                                            <option value="11:30">
                                                                                                11:30
                                                                                                AM</option>
                                                                                            <option value="11:45">
                                                                                                11:45
                                                                                                AM</option>
                                                                                            <option value="12:00">
                                                                                                12:00
                                                                                                PM</option>
                                                                                            <option value="12:15">
                                                                                                12:15
                                                                                                PM</option>
                                                                                            <option value="12:30">
                                                                                                12:30
                                                                                                PM</option>
                                                                                            <option value="12:45">
                                                                                                12:45
                                                                                                PM</option>
                                                                                            <option value="13:00">
                                                                                                01:00
                                                                                                PM</option>
                                                                                            <option value="13:15">
                                                                                                01:15
                                                                                                PM</option>
                                                                                            <option value="13:30">
                                                                                                01:30
                                                                                                PM</option>
                                                                                            <option value="13:45">
                                                                                                01:45
                                                                                                PM</option>
                                                                                            <option value="14:00">
                                                                                                02:00
                                                                                                PM</option>
                                                                                            <option value="14:15">
                                                                                                02:15
                                                                                                PM</option>
                                                                                            <option value="14:30">
                                                                                                02:30
                                                                                                PM</option>
                                                                                            <option value="14:45">
                                                                                                02:45
                                                                                                PM</option>
                                                                                            <option value="15:00">
                                                                                                03:00
                                                                                                PM</option>
                                                                                            <option value="15:15">
                                                                                                03:15
                                                                                                PM</option>
                                                                                            <option value="15:30">
                                                                                                03:30
                                                                                                PM</option>
                                                                                            <option value="15:45">
                                                                                                03:45
                                                                                                PM</option>
                                                                                            <option value="16:00">
                                                                                                04:00
                                                                                                PM</option>
                                                                                            <option value="16:15">
                                                                                                04:15
                                                                                                PM</option>
                                                                                            <option value="16:30">
                                                                                                04:30
                                                                                                PM</option>
                                                                                            <option value="16:45">
                                                                                                04:45
                                                                                                PM</option>
                                                                                            <option value="17:00">
                                                                                                05:00
                                                                                                PM</option>
                                                                                            <option value="17:15">
                                                                                                05:15
                                                                                                PM</option>
                                                                                            <option value="17:30">
                                                                                                05:30
                                                                                                PM</option>
                                                                                            <option value="17:45">
                                                                                                05:45
                                                                                                PM</option>
                                                                                            <option value="18:00">
                                                                                                06:00
                                                                                                PM</option>
                                                                                            <option value="18:15">
                                                                                                06:15
                                                                                                PM</option>
                                                                                            <option value="18:30">
                                                                                                06:30
                                                                                                PM</option>
                                                                                            <option value="18:45">
                                                                                                06:45
                                                                                                PM</option>
                                                                                            <option value="19:00">
                                                                                                07:00
                                                                                                PM</option>
                                                                                            <option value="19:15">
                                                                                                07:15
                                                                                                PM</option>
                                                                                            <option value="19:30">
                                                                                                07:30
                                                                                                PM</option>
                                                                                            <option value="19:45">
                                                                                                07:45
                                                                                                PM</option>
                                                                                            <option value="20:00">
                                                                                                08:00
                                                                                                PM</option>
                                                                                            <option value="20:15">
                                                                                                08:15
                                                                                                PM</option>
                                                                                            <option value="20:30">
                                                                                                08:30
                                                                                                PM</option>
                                                                                            <option value="20:45">
                                                                                                08:45
                                                                                                PM</option>
                                                                                            <option value="21:00">
                                                                                                09:00
                                                                                                PM</option>
                                                                                            <option value="21:15">
                                                                                                09:15
                                                                                                PM</option>
                                                                                            <option value="21:30">
                                                                                                09:30
                                                                                                PM</option>
                                                                                            <option value="21:45">
                                                                                                09:45
                                                                                                PM</option>
                                                                                            <option value="22:00">
                                                                                                10:00
                                                                                                PM</option>
                                                                                            <option value="22:15">
                                                                                                10:15
                                                                                                PM</option>
                                                                                            <option value="22:30">
                                                                                                10:30
                                                                                                PM</option>
                                                                                            <option value="22:45">
                                                                                                10:45
                                                                                                PM</option>
                                                                                            <option value="23:00">
                                                                                                11:00
                                                                                                PM</option>
                                                                                            <option value="23:15">
                                                                                                11:15
                                                                                                PM</option>
                                                                                            <option value="23:30">
                                                                                                11:30
                                                                                                PM</option>
                                                                                            <option value="23:45">
                                                                                                11:45
                                                                                                PM</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="setting-item border_bottom pb_30 pt_30">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""
                                                                                id="booking-end-time-btn"
                                                                                value="" checked>
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                        <div class="d-flex flex-column">
                                                                            <label class="color-black fw-bold mb-1">I
                                                                                want the bookings to continue until my
                                                                                event ends.</label>
                                                                            <p class="mt-2 fs-14 d-block mb-0">Disable
                                                                                this option if you want to end your
                                                                                booking from a specific date and time.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="booking-end-time-holder"
                                                                        style="display:none;">
                                                                        <div class="form-group pt_30">
                                                                            <label class="form-label fs-16">Booking
                                                                                ends
                                                                                on</label>
                                                                            <p class="mt-2 fs-14 d-block mb-0">Specify
                                                                                the date and time when you want the
                                                                                booking to start.</p>
                                                                            <div class="row g-3">
                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        class="form-label mt-3 fs-6">Event
                                                                                        Date.*</label>
                                                                                    <div
                                                                                        class="loc-group position-relative">
                                                                                        <input
                                                                                            class="form-control h_50 datepicker-here"
                                                                                            data-language="en"
                                                                                            type="text"
                                                                                            placeholder="MM/DD/YYYY"
                                                                                            value="">
                                                                                        <span class="absolute-icon"><i
                                                                                                class="fa-solid fa-calendar-days"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="clock-icon">
                                                                                        <label
                                                                                            class="form-label mt-3 fs-6">Time</label>
                                                                                        <select class="selectpicker"
                                                                                            data-size="5"
                                                                                            data-live-search="true">
                                                                                            <option value="00:00">
                                                                                                12:00
                                                                                                AM</option>
                                                                                            <option value="00:15">
                                                                                                12:15
                                                                                                AM</option>
                                                                                            <option value="00:30">
                                                                                                12:30
                                                                                                AM</option>
                                                                                            <option value="00:45">
                                                                                                12:45
                                                                                                AM</option>
                                                                                            <option value="01:00">
                                                                                                01:00
                                                                                                AM</option>
                                                                                            <option value="01:15">
                                                                                                01:15
                                                                                                AM</option>
                                                                                            <option value="01:30">
                                                                                                01:30
                                                                                                AM</option>
                                                                                            <option value="01:45">
                                                                                                01:45
                                                                                                AM</option>
                                                                                            <option value="02:00">
                                                                                                02:00
                                                                                                AM</option>
                                                                                            <option value="02:15">
                                                                                                02:15
                                                                                                AM</option>
                                                                                            <option value="02:30">
                                                                                                02:30
                                                                                                AM</option>
                                                                                            <option value="02:45">
                                                                                                02:45
                                                                                                AM</option>
                                                                                            <option value="03:00">
                                                                                                03:00
                                                                                                AM</option>
                                                                                            <option value="03:15">
                                                                                                03:15
                                                                                                AM</option>
                                                                                            <option value="03:30">
                                                                                                03:30
                                                                                                AM</option>
                                                                                            <option value="03:45">
                                                                                                03:45
                                                                                                AM</option>
                                                                                            <option value="04:00">
                                                                                                04:00
                                                                                                AM</option>
                                                                                            <option value="04:15">
                                                                                                04:15
                                                                                                AM</option>
                                                                                            <option value="04:30">
                                                                                                04:30
                                                                                                AM</option>
                                                                                            <option value="04:45">
                                                                                                04:45
                                                                                                AM</option>
                                                                                            <option value="05:00">
                                                                                                05:00
                                                                                                AM</option>
                                                                                            <option value="05:15">
                                                                                                05:15
                                                                                                AM</option>
                                                                                            <option value="05:30">
                                                                                                05:30
                                                                                                AM</option>
                                                                                            <option value="05:45">
                                                                                                05:45
                                                                                                AM</option>
                                                                                            <option value="06:00">
                                                                                                06:00
                                                                                                AM</option>
                                                                                            <option value="06:15">
                                                                                                06:15
                                                                                                AM</option>
                                                                                            <option value="06:30">
                                                                                                06:30
                                                                                                AM</option>
                                                                                            <option value="06:45">
                                                                                                06:45
                                                                                                AM</option>
                                                                                            <option value="07:00">
                                                                                                07:00
                                                                                                AM</option>
                                                                                            <option value="07:15">
                                                                                                07:15
                                                                                                AM</option>
                                                                                            <option value="07:30">
                                                                                                07:30
                                                                                                AM</option>
                                                                                            <option value="07:45">
                                                                                                07:45
                                                                                                AM</option>
                                                                                            <option value="08:00">
                                                                                                08:00
                                                                                                AM</option>
                                                                                            <option value="08:15">
                                                                                                08:15
                                                                                                AM</option>
                                                                                            <option value="08:30">
                                                                                                08:30
                                                                                                AM</option>
                                                                                            <option value="08:45">
                                                                                                08:45
                                                                                                AM</option>
                                                                                            <option value="09:00">
                                                                                                09:00
                                                                                                AM</option>
                                                                                            <option value="09:15">
                                                                                                09:15
                                                                                                AM</option>
                                                                                            <option value="09:30">
                                                                                                09:30
                                                                                                AM</option>
                                                                                            <option value="09:45">
                                                                                                09:45
                                                                                                AM</option>
                                                                                            <option value="10:00"
                                                                                                selected="selected">
                                                                                                10:00 AM</option>
                                                                                            <option value="10:15">
                                                                                                10:15
                                                                                                AM</option>
                                                                                            <option value="10:30">
                                                                                                10:30
                                                                                                AM</option>
                                                                                            <option value="10:45">
                                                                                                10:45
                                                                                                AM</option>
                                                                                            <option value="11:00">
                                                                                                11:00
                                                                                                AM</option>
                                                                                            <option value="11:15">
                                                                                                11:15
                                                                                                AM</option>
                                                                                            <option value="11:30">
                                                                                                11:30
                                                                                                AM</option>
                                                                                            <option value="11:45">
                                                                                                11:45
                                                                                                AM</option>
                                                                                            <option value="12:00">
                                                                                                12:00
                                                                                                PM</option>
                                                                                            <option value="12:15">
                                                                                                12:15
                                                                                                PM</option>
                                                                                            <option value="12:30">
                                                                                                12:30
                                                                                                PM</option>
                                                                                            <option value="12:45">
                                                                                                12:45
                                                                                                PM</option>
                                                                                            <option value="13:00">
                                                                                                01:00
                                                                                                PM</option>
                                                                                            <option value="13:15">
                                                                                                01:15
                                                                                                PM</option>
                                                                                            <option value="13:30">
                                                                                                01:30
                                                                                                PM</option>
                                                                                            <option value="13:45">
                                                                                                01:45
                                                                                                PM</option>
                                                                                            <option value="14:00">
                                                                                                02:00
                                                                                                PM</option>
                                                                                            <option value="14:15">
                                                                                                02:15
                                                                                                PM</option>
                                                                                            <option value="14:30">
                                                                                                02:30
                                                                                                PM</option>
                                                                                            <option value="14:45">
                                                                                                02:45
                                                                                                PM</option>
                                                                                            <option value="15:00">
                                                                                                03:00
                                                                                                PM</option>
                                                                                            <option value="15:15">
                                                                                                03:15
                                                                                                PM</option>
                                                                                            <option value="15:30">
                                                                                                03:30
                                                                                                PM</option>
                                                                                            <option value="15:45">
                                                                                                03:45
                                                                                                PM</option>
                                                                                            <option value="16:00">
                                                                                                04:00
                                                                                                PM</option>
                                                                                            <option value="16:15">
                                                                                                04:15
                                                                                                PM</option>
                                                                                            <option value="16:30">
                                                                                                04:30
                                                                                                PM</option>
                                                                                            <option value="16:45">
                                                                                                04:45
                                                                                                PM</option>
                                                                                            <option value="17:00">
                                                                                                05:00
                                                                                                PM</option>
                                                                                            <option value="17:15">
                                                                                                05:15
                                                                                                PM</option>
                                                                                            <option value="17:30">
                                                                                                05:30
                                                                                                PM</option>
                                                                                            <option value="17:45">
                                                                                                05:45
                                                                                                PM</option>
                                                                                            <option value="18:00">
                                                                                                06:00
                                                                                                PM</option>
                                                                                            <option value="18:15">
                                                                                                06:15
                                                                                                PM</option>
                                                                                            <option value="18:30">
                                                                                                06:30
                                                                                                PM</option>
                                                                                            <option value="18:45">
                                                                                                06:45
                                                                                                PM</option>
                                                                                            <option value="19:00">
                                                                                                07:00
                                                                                                PM</option>
                                                                                            <option value="19:15">
                                                                                                07:15
                                                                                                PM</option>
                                                                                            <option value="19:30">
                                                                                                07:30
                                                                                                PM</option>
                                                                                            <option value="19:45">
                                                                                                07:45
                                                                                                PM</option>
                                                                                            <option value="20:00">
                                                                                                08:00
                                                                                                PM</option>
                                                                                            <option value="20:15">
                                                                                                08:15
                                                                                                PM</option>
                                                                                            <option value="20:30">
                                                                                                08:30
                                                                                                PM</option>
                                                                                            <option value="20:45">
                                                                                                08:45
                                                                                                PM</option>
                                                                                            <option value="21:00">
                                                                                                09:00
                                                                                                PM</option>
                                                                                            <option value="21:15">
                                                                                                09:15
                                                                                                PM</option>
                                                                                            <option value="21:30">
                                                                                                09:30
                                                                                                PM</option>
                                                                                            <option value="21:45">
                                                                                                09:45
                                                                                                PM</option>
                                                                                            <option value="22:00">
                                                                                                10:00
                                                                                                PM</option>
                                                                                            <option value="22:15">
                                                                                                10:15
                                                                                                PM</option>
                                                                                            <option value="22:30">
                                                                                                10:30
                                                                                                PM</option>
                                                                                            <option value="22:45">
                                                                                                10:45
                                                                                                PM</option>
                                                                                            <option value="23:00">
                                                                                                11:00
                                                                                                PM</option>
                                                                                            <option value="23:15">
                                                                                                11:15
                                                                                                PM</option>
                                                                                            <option value="23:30">
                                                                                                11:30
                                                                                                PM</option>
                                                                                            <option value="23:45">
                                                                                                11:45
                                                                                                PM</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="setting-item border_bottom pb_30 pt_30">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""
                                                                                id="passing-service-charge-btn"
                                                                                value="" checked>
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                        <div class="d-flex flex-column">
                                                                            <label class="color-black fw-bold mb-1">I
                                                                                want my customers to pay the applicable
                                                                                service fees at the time when they make
                                                                                the bookings.</label>
                                                                            <p
                                                                                class="mt-2 fs-14 d-block mb-0 pe_right">
                                                                                Passing your service charge means your
                                                                                attendees will pay your service charge
                                                                                in addition to the ticket price. <a
                                                                                    href="#"
                                                                                    class="a-link">Learn
                                                                                    more</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="setting-item border_bottom pb_30 pt_30">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""
                                                                                id="refund-policies-btn"
                                                                                value="" checked>
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                        <div class="d-flex flex-column">
                                                                            <label class="color-black fw-bold mb-1">I
                                                                                do
                                                                                not wish to offer my customers with
                                                                                option to cancel their orders and
                                                                                receive refund.</label>
                                                                            <p class="mt-2 fs-14 d-block mb-0">Disable
                                                                                this slider if you want to let your
                                                                                customers cancel their order and select
                                                                                a refund policy.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="refund-policies-holder"
                                                                        style="display:none;">
                                                                        <div
                                                                            class="refund-policies-content border_top mt-4">
                                                                            <div class="row grid-padding-8">
                                                                                <div class="col-md-12 mb-6">
                                                                                    <div class="refund-method">
                                                                                        <div class="form-group mb-0">
                                                                                            <label
                                                                                                class="brn-checkbox-radio mb-0 mt-4">
                                                                                                <input type="radio"
                                                                                                    required=""
                                                                                                    name="refund_policy_id"
                                                                                                    value="refund-id-1"
                                                                                                    class="form-check-input br-checkbox refund-policy1">
                                                                                                <span
                                                                                                    class="fs-14 fw-bold ms-xl-2">I
                                                                                                    wish to offer my
                                                                                                    customers with
                                                                                                    option to cancel
                                                                                                    their orders.
                                                                                                    However, I will
                                                                                                    handle refund
                                                                                                    manually.</span>
                                                                                                <span
                                                                                                    class="ms-xl-4 d-block sub-label mt-2 mb-4">Select
                                                                                                    this option if you
                                                                                                    want to refund your
                                                                                                    customer
                                                                                                    manually.</span>
                                                                                            </label>
                                                                                            <div class="refund-input-content"
                                                                                                data-method="refund-id-1">
                                                                                                <div
                                                                                                    class="input-content mb-3">
                                                                                                    <label
                                                                                                        class="color-black mb-2 fs-14 fw-bold">Cancellation
                                                                                                        must be
                                                                                                        made<span
                                                                                                            class="red">*</span></label>
                                                                                                    <div
                                                                                                        class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
                                                                                                        <div
                                                                                                            class="col-md-4 pl-0">
                                                                                                            <div
                                                                                                                class="input-group mr-3 mx-width-135 input-number">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    min="0"
                                                                                                                    max="30"
                                                                                                                    class="form-control"
                                                                                                                    placeholder="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="input-sign ms-md-3 mt-3 mb-3">
                                                                                                            days before
                                                                                                            the event
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="refund-method">
                                                                                        <label
                                                                                            class="brn-checkbox-radio mb-0 mt-4">
                                                                                            <input type="radio"
                                                                                                name="refund_policy_id"
                                                                                                value="refund-id-2"
                                                                                                class="form-check-input br-checkbox refund-polic-2">
                                                                                            <span
                                                                                                class="fs-14 fw-bold ms-xl-2">I
                                                                                                wish to offer my
                                                                                                customers with option to
                                                                                                cancel their orders and
                                                                                                receive refund
                                                                                                automatically.</span>
                                                                                            <span
                                                                                                class="ms-xl-4 d-block sub-label mt-2 mb-4">Select
                                                                                                this option if you want
                                                                                                to refund your customer
                                                                                                automatically.</span>
                                                                                        </label>
                                                                                        <div class="refund-input-content"
                                                                                            data-method="refund-id-2">
                                                                                            <div
                                                                                                class="input-content mb-3">
                                                                                                <label
                                                                                                    class="color-black mb-2 fs-14 fw-bold">Cancellation
                                                                                                    must be made <span
                                                                                                        class="red">*</span></label>
                                                                                                <div
                                                                                                    class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
                                                                                                    <div
                                                                                                        class="col-md-4">
                                                                                                        <div
                                                                                                            class="input-group input-number">
                                                                                                            <input
                                                                                                                type="number"
                                                                                                                min="0"
                                                                                                                max="30"
                                                                                                                class="form-control"
                                                                                                                placeholder="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="input-sign ms-md-3 mt-3 mb-3">
                                                                                                        days before the
                                                                                                        event</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="input-content mb-3">
                                                                                                <label
                                                                                                    class="color-black mb-2 fs-14 fw-bold">Refund
                                                                                                    amount <span
                                                                                                        class="red">*</span></label>
                                                                                                <div
                                                                                                    class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
                                                                                                    <div
                                                                                                        class="col-md-4">
                                                                                                        <div
                                                                                                            class="input-group loc-group position-relative">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                value=""
                                                                                                                class="form-control"
                                                                                                                placeholder="">
                                                                                                            <span
                                                                                                                class="percentage-icon"><i
                                                                                                                    class="fa-solid fa-percent"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="input-sign ms-md-3 mt-3 mb-3">
                                                                                                        days before the
                                                                                                        event</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="setting-item border_bottom pb_30 pt_30">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""
                                                                                id="ticket-instructions-btn"
                                                                                value="" checked>
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                        <div class="d-flex flex-column">
                                                                            <label class="color-black fw-bold mb-1">I
                                                                                do
                                                                                not require adding any special
                                                                                instructions on the tickets.</label>
                                                                            <p class="mt-2 fs-14 d-block mb-0">Use this
                                                                                space to provide any last minute
                                                                                checklists your attendees must know in
                                                                                order to attend your event. Anything you
                                                                                provide here will be printed on your
                                                                                ticket.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ticket-instructions-holder"
                                                                        style="display:none;">
                                                                        <div class="ticket-instructions-content mt-4">
                                                                            <textarea class="form-textarea" placeholder="About"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="setting-item pb-0 pt_30">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""
                                                                                id="tags-btn" value="" checked>
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                        <div class="d-flex flex-column">
                                                                            <label class="color-black fw-bold mb-1">I
                                                                                do
                                                                                not want to add tags in my event</label>
                                                                            <p class="mt-2 fs-14 d-block mb-0">Use
                                                                                relevant words as your tags to improve
                                                                                the discoverability of your event. <a
                                                                                    href="#"
                                                                                    class="a-link">Learn
                                                                                    more</a></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tags-holder" style="display:none;">
                                                                        <div
                                                                            class="ticket-instructions-content tags-container mt-4">
                                                                            <input class="form-control tags-input"
                                                                                type="text"
                                                                                placeholder="Type your tags and press enter">
                                                                            <div class="tags-list">
                                                                                <!-- keywords go here -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                            <div class="step-footer step-tab-pager mt-4">
                                @if ($step > 0)
                                    <button data-direction="prev" wire:click="previous()"
                                        class="btn btn-default btn-hover steps_btn">Previous</button>
                                @endif
                                @if ($step === 0 || $step === 1)
                                    <button data-direction="next" wire:click="next()"
                                        class="btn btn-default btn-hover steps_btn">Next</button>
                                @endif
                                @if ($step == 2)
                                    <button data-direction="finish"
                                        class="btn btn-default btn-hover steps_btn">Create</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
