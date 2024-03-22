<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/finalcss.css') }}">
    <script src="{{ asset('js/finaljs.js') }}" defer></script>
    <title>UPang Registrar System</title>
</head>

<body>
    <!-- HEADER, NOT SUBJECT TO CHANGES-->

    <header>

        <img src="images/upang_text_logo.png" alt="University of Pangasinan" id="upang_text_logo">
    </header>

    <!-- END OF HEADER SECTION -->

    <!-- MAIN, SEE INSTRUCTIONS-->

    <main>

        <!-- PANEL, NOT SUBJECT TO CHANGES-->

        <div id="panel">

            <div id="top_panel">
                <img src="images/upang_circle_logo.png" alt="University of Pangasinan" id="upang_circle_logo">
                <p id="main_title">UPang <br>Registrar <br>System</p>
            </div>

            <ul id="mid_panel">
                <li data-tab-target="#main_home_tab" class="main_tab active" id="home_main">Home</li>
                <li data-tab-target="#main_profile_tab" class="main_tab" id="profile_main">Profile</li>
                <li data-tab-target="#main_request_tab" class="main_tab" id="request_main">Request</li>
                <li data-tab-target="#main_progress_tab" class="main_tab" id="progress_main">Progress</li>
                <li data-tab-target="#main_notifications_tab" class="main_tab" id="notification_main">Notifications</li>
                <li data-tab-target="#main_feedback_tab" class="main_tab" id="feedback_main">Feedback</li>
            </ul>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">LOGOUT</button>
            </form>

        </div>

        <!-- END OF PANEL SECTION -->

        <div id="main_screen">

            <!-- START OF HOME TAB -->

            <div id="main_home_tab" data-tab-content class="active">

                <div id="home_screen_top">
                    <div id="home_screen_top_left">
                        <img src="images/home_icon.png" id="home_icon">
                        <p id="home_text">Home</p>
                    </div>
                    <div id="home_screen_top_right">
                        <img src="images/notification_icon.png" id="notification_icon">
                    </div>
                </div>

                <div id="home_screen_main_text">
                    <div id="home_greetings">
                        <p id="home_screen_greeting">Welcome back, </p>
                        <p id="home_user_name">User!</p>
                    </div>

                    <ul id="home_screen_options">
                        <li class="home_screen_text" id="home_to_request">Request a document</li>
                        <li class="home_screen_text" id="home_to_progress">Check request's progress</li>
                        <li class="home_screen_text" id="home_to_notification">View Notifications</li>
                    </ul>

                </div>

            </div>

            <!-- END OF HOME TAB -->

            <!-- START OF PROFILE TAB -->

            <div id="main_profile_tab" data-tab-content>

                <div id="profile_screen_top">
                    <div id="profile_screen_top_left">
                        <img src="images/user_icon.png" id="profile_icon">
                        <p id="profile_text">Profile</p>
                    </div>
                    <div id="profile_screen_top_right">
                        <img src="images/notification_icon.png" alt="Notification" id="notification_icon">
                    </div>

                </div>

                <div id="profile_screen_body">
                    <div id="profile_screen_body_top">
                        <div id="profile_screen_body_top_top">
                            <div id="personal_profile_text_container">
                                <p id="personal_profile_text">Personal Profile</p>
                            </div>
                            <img src="images/edit_icon.png" id="edit_icon">
                        </div>

                    </div>

                    <div id="sample_profile_additional_info">
                        <img src="images/sample_profile.jpg" id="sample_profile">
                        <p id="sample_student_number">03-2324-123456</p>
                        <p id="sample_student_name">Dela Cruz, Juan T.</p>
                    </div>

                    <div id="profile_screen_body_personal">

                        <div id="personal_data_title">
                            <p id="personal_data_text">Personal Data</p>
                        </div>

                        <div id="personal_data_details">

                            <div id="personal_data_name_top">
                                <p id="name_text">Name</p>
                                <input type="text" id="last_name" placeholder="Enter last name">
                                <input type="text" id="first_name" placeholder="Enter first name">
                                <input type="text" id="middle_name" placeholder="Enter middle name">
                            </div>

                            <div id="personal_data_name_bot">
                                <p id="last_name_text">Last Name</p>
                                <p id="first_name_text">First Name</p>
                                <p id="middle_name_text">Middle Name</p>
                            </div>
                            <div id="personal_data_birth">
                                <p id="date_of_birth_text">Date of Birth</p>
                                <input type="date" id="birthdate_input">
                                <p id="phone_number_text">Phone Number</p>
                                <input type="number" id="phone_number" min="0" max="99999999999"
                                    placeholder="09123456789">
                            </div>

                            <div id="personal_data_address_top">
                                <p id="address_text">Address</p>
                                <select name="country" id="country">
                                    <option value="ph">Philippines</option>
                                    <option value="usa">USA</option>
                                    <option value="jpn">Japan</option>
                                </select>
                                <select name="region" id="region">
                                    <option value="r1">Region 1</option>
                                    <option value="r2">Region 2</option>
                                    <option value="r3">Region 3</option>
                                </select>
                                <select name="province" id="province">
                                    <option value="pangasinan">Pangasinan</option>
                                    <option value="la union">La Union</option>
                                    <option value="ilocos">Ilocos Norte</option>
                                </select>
                                <select name="city" id="city">
                                    <option value="dagupan">Dagupan</option>
                                    <option value="labrador">Labrador</option>
                                    <option value="calasiao">Calasiao</option>
                                </select>
                            </div>
                            <div id="personal_data_address_mid">
                                <p id="country_text">Country</p>
                                <p id="region_text">Region</p>
                                <p id="province_text">Province</p>
                                <p id="municipality_text">Municipality</p>
                            </div>
                            <div id="personal_data_address_bot">
                                <input type="text" id="address_rest_details" placeholder="Enter complete address">
                            </div>
                            <div id="personal_data_address_text">
                                <p id="address_rest_text">Complete Address (Room# Bldg. / House#, Street, Brgy.)</p>
                            </div>
                        </div>
                    </div>

                    <div id="profile_screen_body_academic">
                        <div id="academic_data_text_container">
                            <p id="academic_data_text">Academic Data</p>
                        </div>

                        <div id="academic_data_bot">
                            <div id="academic_data_student_number">
                                <p id="student_number_text">Student Number</p>
                                <input type="text" id="user_student_number" placeholder="03-0000-000000">
                            </div>
                            <div id="academic_data_student_department">
                                <p id="department_text">Department</p>
                                <select name="user_department" id="user_department">
                                    <option value="cite">CITE</option>
                                    <option value="cahs">CAHS</option>
                                    <option value="cela">CELA</option>
                                    <option value="cea">CEA</option>
                                    <option value="cas">CAS</option>
                                    <option value="shs">SHS</option>
                                    <option value="ccje">CCJE</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div id="profile_screen_body_bot">
                        <button id="profile_screen_save" disabled> SAVE </button>
                    </div>
                </div>
            </div>

            <!-- END OF PROFILE TAB -->

            <!-- START OF REQUEST TAB -->

            <div id="main_request_tab" data-tab-content>
                <div id="request_screen_top">
                    <div id="request_screen_upper_top">
                        <div id="request_screen_upper_top_left">
                            <img src="images/request_icon.png" id="request_icon">
                            <p id="request_text">Request</p>
                        </div>
                        <div id="request_screen_upper_top_right">
                            <img src="images/notification_icon.png" alt="Notification" id="notification_icon">
                        </div>
                    </div>
                    <ul id="request_screen_lower_top">
                        <li data-request-tab-target="#choose_a_document_subtab" class="active"
                            id="choose_a_document_text">Choose a Document</li>
                        <li data-request-tab-target="#purpose_of_request_subtab" id="purpose_of_request_text">Purpose
                            of Request</li>
                        <li data-request-tab-target="#mode_of_delivery_subtab" id="mode_of_delivery_text">Mode of
                            Delivery</li>
                        <li data-request-tab-target="#receipt_of_request_subtab" id="receipt_of_request_text">Receipt
                            of Request</li>
                    </ul>
                </div>

                <div id="request_screen_body">

                    <div id="choose_a_document_subtab" data-request-tab-content class="active">

                        <p id="choose_a_document_screen_title">Choose a Document</p>

                        <div id="request_screen_documents">
                            <div id="good_moral_certificate">
                            <form id="document_form" action="{{url('add_document')}}" method="POST">
    @csrf
    <div class="div_deg">
        <label>Good Moral</label>
        <input type="number" id="goodmoral" name="goodmoral" data-price="25">
    </div>
    <div class="div_deg">
        <label>Form 137</label>
        <input type="number" id="form" name="form" data-price="25">
    </div>
    <div class="div_deg">
        <label>Copy of Grades</label>
        <input type="number" id="grade" name="grade" data-price="25">
    </div>

    <div id="purpose_of_request_subtab_title">
        <p>Purpose of Request</p>
    </div>

    <div class="div_deg">
        <textarea id="message" name="message"></textarea>
    </div>

    <div id="documents_count">
        <p id="documents_chosen_text">Documents chosen: </p>
        <p id="documents_chosen_count">0</p>
    </div>
    <div id="current_amount">
        <p id="current_amount_text">Current amount: </p>
        <p id="current_amount_count">0</p>
        <!-- Add a hidden input field to store the total amount -->
        <input type="hidden" id="total_amount_input" name="amount">
    </div>

    <div id="purpose_submit">
        <button id="submit_to_mode_button" type="submit">Submit</button>
    </div>
</form>
                            </div>

                           
                            
                       
                       

                        <!-- ADDITIONAL INFORMATION POPUPS-->

                    </div>

                    <div id="good_moral_additional_information">
                        <p id="good_moral_additional_title">Good Moral Certificate</p>
                        <p id="good_moral_definition">The Good Moral Certificate is to affirm that a former
                            student/enrollee or alumnus/alumna has shown exemplary behavior during the time of his/her
                            enrolment in the college.</p>
                        <div id="good_moral_side">
                            <p id="good_moral_common_uses">Common uses:</p>
                            <ul id="good_moral_common_uses_list">
                                <li>Job Applications</li>
                                <li>University Applications</li>
                            </ul>
                            <p id="good_moral_price">Price: Php 20.00</p>
                        </div>

                        <button id="good_moral_close"> Close </button>

                    </div>

                    <div id="form137_additional_information">
                        <p id="form137_additional_title">Form 137</p>
                        <p id="form137_definition">The Form 137 document is a permanent record of a student's grades
                            from year 7 to year 12.</p>
                        <div id="form137_side">
                            <p id="form137_common_uses">Common uses:</p>
                            <ul id="form137_common_uses_list">
                                <li>Scholarship Applications</li>
                                <li>University Applications</li>
                            </ul>
                            <p id="form137_price">Price: Php 20.00</p>
                        </div>

                        <button id="form137_close">Close</button>
                    </div>

                    <div id="COG_additional_information">
                        <p id="COG_additional_title"> Copy of Grades</p>
                        <p id="COG_definition">The Copy of Grades Document is a document of grades based on scholastic
                            records.</p>
                        <div id="COG_side">
                            <p id="COG_common_uses">Common uses:</p>
                            <ul id="COG_common_uses_list">
                                <li>Scholarship Applications</li>
                                <li>University Applications</li>
                            </ul>
                            <p id="COG_price">Price: Php 20.00</p>
                        </div>

                        <button id="COG_close">Close</button>
                    </div>

                    <div id="purpose_of_request_subtab" data-request-tab-content>

                        
                        <!-- REASON FOR ACQUISITION -->

                        <div id="good_moral_purpose_input">
                            <p id="good_moral_purpose_text">Good Moral</p>
                            <p id="good_moral_purpose_instruction">Kindly state your reason of acquisition below. </p>
                            <textarea id="good_moral_purpose_reason" cols="100" rows="10" placeholder="I need a good moral because..."></textarea>
                            <button id="good_moral_purpose_submit">Submit</button>
                        </div>

                        <div id="form137_purpose_input">
                            <p id="form137_purpose_text"> Form 137 </p>
                            <p id="form137_purpose_instruction">Kindly state your reason of acquisition below. </p>
                            <textarea id="form137_purpose_reason" cols="100" rows="10" placeholder="I need a Form 137 because..."></textarea>
                            <button id="form137_purpose_submit">Submit</button>
                        </div>

                        <div id="COG_purpose_input">
                            <p id="COG_purpose_text">Good Moral</p>
                            <p id="COG_purpose_instruction">Kindly state your reason of acquisition below. </p>
                            <textarea id="COG_purpose_reason" cols="100" rows="10" placeholder="I need a copy of grades because..."></textarea>
                            <button id="COG_purpose_submit">Submit</button>
                        </div>

                        <!-- END OF REASON FOR ACQUISITION -->

                        <div id="mode_of_delivery_subtab" data-request-tab-content>
                            <p id="mode_of_delivery_text">Mode of Delivery</p>
                            <p id="mode_of_delivery_subtext">Kindly choose your mode of delivery below:</p>

                            <div id="delivery_option_a">
                                <label for="pickup_option">I will pick it up in the University Registrar</label>
                                <input type="radio" id="pickup_option" name="delivery_method" required>
                            </div>

                            <div id="delivery_option_b">
                                <label for="delivery_to_address_option">Deliver it to my address</label>
                                <input type="radio" id="delivery_to_address_option" name="delivery_method"
                                    required>
                            </div>

                            <button id="mode_of_delivery_submit" disabled> Submit to Receipt </button>
                        </div>

                        <div id="receipt_of_request_subtab" data-request-tab-content>
                            <div id="receipt_of_request_top">
                                <p id="receipt_of_request_text">Receipt of Request</p>
                                <div id="order_number">
                                    <p id="order_text">Order</p>
                                    <p id="order_processing_number">#000000</p>
                                </div>
                            </div>

                            <div id="receipt_of_request_details">

                                <div id="receipt_name">
                                    <p id="receipt_student_name_text">Student Name: </p>
                                    <p id="receipt_student_name"> Default student name</p>
                                </div>

                                <div id="receipt_address">
                                    <p id="receipt_address_text"> Address: </p>
                                    <p id="receipt_student_address"> Default address</p>
                                </div>

                                <div id="receipt_student_number">
                                    <p id="receipt_student_number_text">Student Number: </p>
                                    <p id="student_number">03-1234-123456</p>
                                </div>

                                <div id="receipt_phone_number">
                                    <p id="receipt_phone_number_text">Phone Number: </p>
                                    <p id="student_phone_number"> Default phone number</p>
                                </div>

                                <div id="receipt_student_department">
                                    <p id="receipt_department_text">Department: </p>
                                    <p id="student_department"> Default department </p>
                                </div>

                                <p id="receipt_documents_requested_text">Documents requested:</p>

                                <ul id="receipt_documents_requested">
                                    <li id="document_one">Document One</li>
                                    <p id="document_one_count">0</p>
                                </ul>
                                <p id="receipt_mode_of_delivery_text">Mode of delivery</p>
                                <p id="receipt_mode_of_delivery">Deliver it to my address</p>
                                <p id="receipt_payment_details_text">Payment details:</p>
                                <div id="receipt_documents_total">
                                    <p id="receipt_documents_total_text">Documents total</p>
                                    <p id="receipt_documents_total_amount">60.00</p>
                                </div>
                                <div id="receipt_shipping_total">
                                    <p id="receipt_shipping_total_text">Shipping fee total</p>
                                    <p id="receipt_shipping_total_amount">40.00</p>
                                </div>
                                <div id="receipt_payment_total">
                                    <p id="receipt_payment_total_text">Total payment</p>
                                    <p id="receipt_payment_total_amount">100.00</p>
                                </div>
                            </div>

                            <button id="receipt_confirm">Submit</button>

                            <div id="confirmation_message">
                                <img src="images/confimed_icon.png" id="receipt_confirmed_icon">
                                <p id="confirmation_message_final">Your request has been submitted to the University
                                    Registrar, Please constantly check the Progress tab to track your request. Thank
                                    you!</p>
                                <button id="got_it">Got it!</button>
                            </div>
                        </div>

                    </div>

                    <!--

              <div>
                  <img src="images/confimed_icon.png">
                  <p>Your request has been submitted to the University Registrar, Please constantly check the Progress tab to track your request. Thank you!</p>
              </div>

              -->

                </div>

                <!-- END OF REQUEST TAB -->

                <!-- START OF PROGRESS TAB -->

                <div id="main_progress_tab" data-tab-content>

                    <div id="progress_screen_top">

                        <div id="progress_screen_upper_top">
                            <img src="images/progress_icon.png" id="progress_icon">
                            <p id="request_text">Progress</p>
                            <img src="images/notification_icon.png" alt="Notification" id="notification_icon">
                        </div>

                        <ul id="progress_screen_lower_top">
                            <li data-progress-tab-target="#to_verify_subtab" class="active" id="to_verify_text">To
                                Verify</li>
                            <li data-progress-tab-target="#orders_in_progress_subtab" id="orders_in_progress_text">
                                Orders in Progress</li>
                            <li data-progress-tab-target="#completed_orders_subtab" id="completed_orders_text">
                                Completed Orders</li>
                        </ul>

                    </div>

                    <div id="to_verify_subtab" data-progress-tab-content>

                        <p id="pending_orders_text">Pending orders</p>
                        <div id="order_container">
                            <div id="order_details_container">
                                <div id="order_details_top">
                                    <p id="order_tracking_number">Order #123456</p>
                                    <p id="order_tracking_amount">P120.00</p>
                                </div>
                                <div id="order_details_bot">
                                    <input type="date" id="order_date_placed">
                                    <p id="order_date_status">Status: Waiting for Confirmation</p>
                                </div>
                            </div>
                            <div id="order_buttons_container">
                                <Button id="order_cancel_button">Cancel</Button>
                            </div>

                            <!-- ORDER CANCELLED MESSAGE -->
                        </div>

                        <div id="order_cancelled_items">
                            <p id="order_cancelled_message">Order has been cancelled!</p>
                            <button id="order_cancelled_button">OK</button>
                        </div>

                    </div>

                    <div id="orders_in_progress_subtab" data-progress-tab-content>

                        <p id="orders_in_progress_text">To be delivered | Picked up</p>

                        <div id="order_details_container">
                            <div id="order_details_top">
                                <p id="order_tracking_number">Order #123456</p>
                                <p id="order_tracking_amount">P120.00</p>
                            </div>
                            <div id="order_details_bot">
                                <input type="date" id="order_date_placed">
                                <p id="order_date_status">Status: To be picked up by courier</p>
                            </div>
                        </div>

                    </div>

                    <div id="completed_orders_subtab" data-progress-tab-content>

                        <p id="completed_orders_text">Completed Orders</p>

                        <div id="completed_orders_container">

                            <div id="order_to_confirm_container">

                                <div id="order_details_container">
                                    <div id="order_details_top">
                                        <p id="order_tracking_number">Order #123456</p>
                                        <p id="order_tracking_amount">P120.00</p>
                                    </div>
                                    <div id="order_details_bot">
                                        <input type="date" id="order_date_placed">
                                        <p id="order_date_status">Status: Confirm order received</p>
                                    </div>


                                </div>
                                <button id="confirmOrderReceivedButton">Confirm Order Received</button>
                            </div>

                            <div id="order_to_confirm_container">

                                <div id="order_details_container">
                                    <div id="order_details_top">
                                        <p id="order_tracking_number">Order #123456</p>
                                        <p id="order_tracking_amount">P120.00</p>
                                    </div>
                                    <div id="order_details_bot">
                                        <input type="date" id="order_date_placed">
                                        <p id="order_date_status">Status: Confirm order received</p>
                                    </div>


                                </div>
                                <button id="confirmOrderReceivedButton">Confirm Order Received</button>
                            </div>

                        </div>

                        <p id="transaction_history_text">Transaction History</p>

                        <!-- BELOW IS THE CONTAINER FOR ALL TRANSACION HISTORY ITEMS-->

                        <div id="transaction_history_container">

                            <div id="order_details_container">
                                <div id="order_details_top">
                                    <p id="order_tracking_number">Order #123456</p>
                                    <p id="order_tracking_amount">P120.00</p>
                                </div>
                                <div id="order_details_bot">
                                    <input type="date" id="order_date_placed">
                                    <p id="order_date_status">Order complete</p>
                                </div>
                            </div>

                            <div id="order_details_container">
                                <div id="order_details_top">
                                    <p id="order_tracking_number">Order #123456</p>
                                    <p id="order_tracking_amount">P120.00</p>
                                </div>
                                <div id="order_details_bot">
                                    <input type="date" id="order_date_placed">
                                    <p id="order_date_status">Order complete</p>
                                </div>
                            </div>


                        </div>




                    </div>

                </div>

                <!-- END OF PROGRESS TAB -->

                <!-- START OF NOTIFICATIONS TAB -->

                <div id="main_notification_tab" data-tab-content>

                    <div id="notifications_screen_top">
                        <div id="notifications_screen_upper_top">
                            <img src="images/notification_icon.png" id="original_notification_icon">
                            <p id="notification_text">Notification</p>
                        </div>
                    </div>

                    <div id="main_notifications_container">

                        <div id="system_notification">
                            <div id="system_notification_titles">
                                <p id="system_notifications_text">System Notifications</p>
                                <p id="system_notifications_clear">Clear</p>
                            </div>

                            <div id="system_notifications_list">
                                <p id="system_notification_sample">Update: Fixed bugs on...</p>
                                <p id="system_notification_sample">Update: Fixed bugs on...</p>
                            </div>
                        </div>

                        <div id="order_notification">

                            <div id="system_notification_titles">
                                <p id="order_notifications_text">Order Notifications</p>
                                <p id="order_notifications_clear">Clear</p>
                            </div>

                            <div id="order_notifications_list">
                                <p id="order_notification_sample">Your order #0001 has been verified!</p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- END OF NOTIFICATIONS TAB -->

                <!-- START OF FEEDBACK TAB -->

                <div id="main_feedback_tab" data-tab-content>

                    <div id="feedback_screen_top">
                        <div id="feedback_screen_upper_top">
                            <img src="images/feedback_icon.png" alt="feedback" id="feedback_icon">
                            <p id="request_text">Feedback</p>
                            <img src="images/notification_icon.png" alt="Notification" id="notification_icon">
                        </div>

                        <ul id="feedback_screen_lower_top">
                            <li data-feedback-tab-target="#sent_subtab" class="active" id="sent_text">Sent</li>
                            <li data-feedback-tab-target="#inbox_subtab" id="inbox_text">Inbox</li>
                        </ul>

                    </div>

                    <div id="sent_subtab" data-feedback-tab-content>
                        <div id="sent_body">
                            <div id="prompt_compose_message">
                                <img src="images/compose_icon.png" id="compose_a_message_icon">
                                <p id="compose_a_message_text">Compose a Message</p>
                                <button id="clear_sent_messages">Clear</button>
                            </div>

                            <div id="sent_messages">
                                <div id="sent_messages_sample">
                                    <p id="message_one1">Please fix this bug</p>
                                    <button id="deleteIndividualMessage">X</button>
                                </div>
                                <div id="sent_messages_sample2">
                                    <p id="message_one2">Ayoko na</p>
                                    <button id="deleteIndividualMessage">X</button>
                                </div>
                                <div id="sent_messages_sample3">
                                    <p id="message_one3">Ako na lang pls</p>
                                    <button id="deleteIndividualMessage">X</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div id="compose_a_message">
                        <div id="compose_body">
                            <p id="to_admin">To: Administrators </p>
                            <input type="text" id="user_message" placeholder="Type here...">
                            <button id="send_message" disabled>Send</button>
                        </div>

                        <div id="star_rating">
                            <p id="rate_text">Rate us here</p>
                            <div id="star_review">
                                <img src="images/unstarred_icon.png" id="star1">
                                <img src="images/unstarred_icon.png" id="star2">
                                <img src="images/unstarred_icon.png" id="star3">
                                <img src="images/unstarred_icon.png" id="star4">
                                <img src="images/unstarred_icon.png" id="star5">

                            </div>
                            <button id="submit_rating_button">Submit Rating</button>
                        </div>
                    </div>

                    <div id="inbox_subtab" data-feedback-tab-content>
                        <div id="inbox_body">
                            <div id="clear_inbox_messages">
                                <button id="clear_inbox_messages_button">Clear</button>
                            </div>

                            <div id="inbox_messages">
                                <div id="inbox_messages_one">
                                    <p id="message_one1"> Please ako na lang</p>
                                    <button id="deleteIndividualInboxMessage">X</button>
                                </div>

                                <div id="inbox_messages_two">
                                    <p id="message_one2"> Please ako na lang</p>
                                    <button id="deleteIndividualInboxMessage">X</button>
                                </div>

                                <div id="inbox_messages_three">
                                    <p id="message_one1"> Please ako na lang</p>
                                    <button id="deleteIndividualInboxMessage">X</button>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

                <!-- END OF FEEDBACK TAB -->

            </div>

            <!-- CHANGING ENDS AT THIS POINT -->

    </main>

    <!-- FOOTER, NOT SUBJECT TO CHANGES -->

    <footer>
        <img src="images/www_icon.png" alt="www" class="footer_icon" id="footer_www_icon">
        <a href="https://up.phinma.edu.ph/" class="footer_text" id="footer_upang_website"
            target="_blank">https://up.phinma.edu.ph</a>
        <img src="images/telephone_icon.png" alt="telephone" telephone class="footer_icon" id="footer_tel_icon">
        <p class="footer_text" id="footer_upang_tel">123-456-789</p>
        <p class="footer_text" id="footer_upang_copyright">Copyright © 2024 PHINMA University of Pangasinan. All
            rights reserved.</p>
    </footer>

    <!-- END OF FOOTER SECTION -->

</body>
<script>
    // Function to calculate the total amount
    function calculateTotalAmount() {
        // Retrieve the values entered by the user
        var goodmoral = parseInt(document.getElementById('goodmoral').value) || 0;
        var form = parseInt(document.getElementById('form').value) || 0;
        var grade = parseInt(document.getElementById('grade').value) || 0;

        // Calculate the total amount
        var totalAmount = (goodmoral + form + grade) * 25;

        // Update the display of the current amount
        document.getElementById('current_amount_count').textContent = totalAmount;
        
        // Update the hidden input field with the calculated total amount
        document.getElementById('total_amount_input').value = totalAmount;
    }

    // Add an event listener to detect changes in input fields
    document.getElementById('goodmoral').addEventListener('input', calculateTotalAmount);
    document.getElementById('form').addEventListener('input', calculateTotalAmount);
    document.getElementById('grade').addEventListener('input', calculateTotalAmount);

    // Call the function initially to calculate the total amount when the page loads
    calculateTotalAmount();
</script>



</html>
