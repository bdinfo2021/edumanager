@extends('front.master')
@section('body')

    <div class="headline-bg">
    </div><!--//headline-bg-->

    <!-- ******Video Section****** -->
    <section class="features-video section section-on-bg">
        <div class="container text-center">
            <h2 class="title">Take a quick tour to see how Aamra EduManager works</h2>
            <div class="jumbotron">
                <h1 class="display-5">Ultimate Education Institute Management Software</h1>
                <p class="lead">Aamra EduManager has every feature you will ever need to run your institution
                    efficiently.</p>
                <hr class="my-4">
                <p>Aamra EduManager is a complete education institution management information system in cloud which is
                    the all-in-one Web based user-friendly Enterprise Resource Planning (ERP) software for the next
                    generation of school or college or university.</p>
                <p>Aamra EduManager is an online web/intranet based software with rich user interface for school or
                    college information management system that simplifies the management processes of most activities of
                    an educational institution. The set of features includes availability of the various plugins, RFID
                    based SMS notification on student attendance, built-in accounting system or integration of existing
                    accounting system<br/> e.g. Tally, Quickbook or any.</p>
                <p class="lead">
                    <a class="btn btn-cta btn-cta-primary btn-lg" href="{{route('/sign-up')}}" role="button">LIVE
                        DEMO</a>
                </p>
            </div>
            <!--<div class="video-container">-->
            <!--<iframe src="https://player.vimeo.com/video/90299717" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            <!--</div>&lt;!&ndash;//video-container&ndash;&gt; -->
        </div><!--//container-->
    </section><!--//feature-video-->

    <!-- ******Features Section****** -->
    <section class="features-tabbed section">
        <div class="container">
            <h2 class="title text-center">Product Features</h2>
            <div class="row">
                <div class="text-center m-auto tabs-container">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#feature-1" role="tab"
                                                data-toggle="tab"><i
                                        class="fa fa-cloud-upload"></i><br/><span
                                        class="hidden-xs-down">CORE MODULES (18)</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#feature-2" role="tab" data-toggle="tab"><i
                                        class="fa fa-tachometer"></i><br/><span class="hidden-xs-down">ADVANCED MODULES (24)</span></a>
                        </li>
                        <li class="nav-item last"><a class="nav-link" href="#feature-3" role="tab" data-toggle="tab"><i
                                        class="fa fa-users"></i><br/><span class="hidden-xs-down">ENTERPRISE MODULES (12)</span></a>
                        </li>
                    </ul><!--//nav-tabs-->

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="feature-1" role="tabpanel">
                            {{--<h3 class="title sr-only">Core Modules</h3>--}}
                            <figure class="figure text-center">
                                <div class="modules">
                                    {{--<h2 id="core_modules">Core Modules <span>(18)</span></h2>--}}
                                    <ul>
                                        <li>
                                            <a title="Configure and manage multiple courses and batches according to your institution’s systems and process.">
                                                <span class="mod-icon course-batch"></span>Courses and Batches</a></li>
                                        <li>
                                            <a title="Record and organize all employee details enabling quick access to employee information, and effective management of employee payroll and leave.">
                                                <span class="mod-icon hr"></span>Human Resources</a></li>
                                        <li>
                                            <a title="Mark and track student attendance quickly to enable teachers to focus on the lesson at hand.">
                                                <span class="mod-icon attendance"></span>Student Attendance </a></li>
                                        <li>
                                            <a title="Create clear and error free timetables within minutes ensuring the best utilization and optimization of teachers and employees across your institution.">
                                                <span class="mod-icon timetable"></span>Timetable </a></li>
                                        <li>
                                            <a title="From supporting grading systems such as ICSE, CCE, CWA, and GPA to generating various student examinations reports, schedule and manage examinations effortlessly to fit the needs of your institution.">
                                                <span class="mod-icon exam"></span>Examination </a></li>
                                        <li>
                                            <a title=" Simple, yet beautifully designed live dashboards for each user role featuring customizable ‘dashlets’ that allows quick access to your favorite and most important information, and an innovative search bar with 'Action Search' functionality.">
                                                <span class="mod-icon dashborad"></span>Customisable Dashboards</a></li>
                                        <li>
                                            <a title="Efficiently manage the complete student admission process using customized admission forms and help welcome applicants that are the best fit for your institution.">
                                                <span class="mod-icon admission"></span>Student Admission</a></li>
                                        <li>
                                            <a title="Spread the news and keep all your employees and students engaged by bringing the latest happenings on campus right to their dashboards and mobile phones.">
                                                <span class="mod-icon news"></span>News Management</a></li>
                                        <li>
                                            <a title="Four user roles—Administrator, Employee, Student, and Parent—that determine what the user can and cannot do within Fedena. Administrators can assign and manage employee privileges based on the role played in the institution.">
                                                <span class="mod-icon user"></span>User Management</a></li>
                                        <li>
                                            <a title="Inform, and be informed of events happening on and off campus by glancing at your color coded Fedena calendar.">
                                                <span class="mod-icon calendar"></span>Institute/Event Calendar</a></li>
                                        <li>
                                            <a title="Secure, comprehensive, and robust—the Finance module provides a fast and efficient way to register financial transactions, automate transactions, and generate financial reports that will help you gain financial insight on managing costs and expenditures.">
                                                <span class="mod-icon finance"></span>Finance </a></li>
                                        <li>
                                            <a title="A quick and easy way to search and access all your student records, both current and archived using various filters.">
                                                <span class="mod-icon info"></span>Student Information</a></li>
                                        <li>
                                            <a title=" Secure personalized login credentials for every student and parent; to empower all students to make the most of Fedena and achieve their educational goals, while facilitating parents to monitor and track their ward’s progress reports, results, attendance, and many more.">
                                                <span class="mod-icon sp-login"></span>Student/Parent Login</a></li>
                                        <li>
                                            <a title="Secure personalized login credentials for every employee, allowing them to perform their tasks efficiently depending on the privileges assigned by their roles.">
                                                <span class="mod-icon t-login"></span>Employee/Teacher Login </a></li>
                                        <li>
                                            <a title="An inbuilt messaging system for quick and easy communication between employees, students, and parents that also acts as a reminder system by sending the user prompt reminders.">
                                                <span class="mod-icon messaging"></span>Messaging System </a></li>
                                        <li>
                                            <a title="Generate various reports on your students, employees, courses, and fee schedules.">
                                                <span class="mod-icon report-center"></span>Report Center </a></li>
                                        <li>
                                            <a title="Provide feedback and general comments about a student’s performance in class and in examinations.">
                                                <span class="mod-icon remarks"></span>Custom Student Remarks </a></li>
                                        <li>
                                            <a title="Communicate with students, parents, and employees on a more personal level by sending SMS text messages right to their mobile phones from Fedena. Customize the SMS settings to deliver alerts when specific events occur in Fedena.">
                                                <span class="mod-icon sms"></span>SMS integration </a></li>
                                    </ul>
                                </div>

                                {{--<img class="img-fluid" src="{{asset('/')}}front/images/features/feature-1.png" alt=""/>--}}
                                {{--<figcaption class="figure-caption">(Screenshot source: Core Modules)</figcaption>--}}
                            </figure>

                            <div class="desc text-left">
                                <div class="block_three">

                                    <h2>Core Modules</h2>
                                    <div class="two_column">
                                        <div class="column_left">
                                            <div class="module_block">
                                                <h2>Dashboard </h2>
                                                <ul>
                                                    <li>Dashlet driven dashboard</li>
                                                    <li>Innovative 'Search bar' enables anybody to use Aamra School ERP
                                                        System within seconds of login
                                                    </li>
                                                    <li>Aamra School ERP Software is designed for a great user
                                                        experience
                                                        with a user friendly interface, meaning that anyone with basic
                                                        computer knowledge can quickly use the system with minimum
                                                        training
                                                    </li>
                                                    <li>Easy to learn and easy to master</li>
                                                    <li>Displays latest news, Events, discussions, birthdays, leave
                                                        applications
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Messages </h2>
                                                <ul>
                                                    <li>Inbuilt messaging system</li>
                                                    <li>Easy and quick way to send messages to any user of the system
                                                    </li>
                                                    <li>Effective communication between administration, teachers,
                                                        students
                                                        and parents
                                                    </li>
                                                    <li>Recording communications with students</li>
                                                    <li>Automatic messages about events, news, fee schedules, new forums
                                                        and
                                                        holidays etc. personalized with your school
                                                    </li>
                                                    <li>Attach files with news</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Admission </h2>
                                                <ul>
                                                    <li>Unique ID for all students</li>
                                                    <li>Comprehensive admission form</li>
                                                    <li>Multiple guardian addition facility</li>
                                                    <li>Emergency contact facility available</li>
                                                    <li>Previous education details can be recorded</li>
                                                    <li>Customisable as per school standards</li>
                                                    <li>Photo upload facility</li>
                                                    <li>Provide Biometric ID of the students</li>
                                                    <li>Manage student records. Attach any type of document and data
                                                        related
                                                        to student.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Student details </h2>
                                                <ul>
                                                    <li>Normal student view facility based on batches</li>
                                                    <li>View complete information of a student from their profile
                                                        regarding
                                                        reports, fees, activities, remarks, records
                                                    </li>
                                                    <li>Search existing and former students</li>
                                                    <li>Advanced search facility to search for specific type of students
                                                        based on large number of filters
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Manage Users</h2>
                                                <ul>
                                                    <li>Search for any users using the search bar</li>
                                                    <li>View profile of all users based on the roles</li>
                                                    <li>View/Edit users password and privileges</li>
                                                    <li>Set privileges to users as per their roles</li>
                                                    <li>Allows organisation to set standards for different roles based
                                                        on
                                                        their responsibility
                                                    </li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/user-management.png"
                                                         alt="Aamra School Management Software Manage User"
                                                         width="100%">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Manage News</h2>
                                                <ul>
                                                    <li>Create/edit/delete news</li>
                                                    <li>Search for any news using search bar</li>
                                                    <li>View all news facility also available</li>
                                                    <li>Add News using rich text format</li>
                                                    <li>Edit/Delete news</li>
                                                    <li>Published news has the facility to comment also</li>
                                                    <li>Delete comment facility also available</li>
                                                    <li>Attach files to the news article</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/school_erp_Manage_News.jpg"
                                                         alt="Aamra School Management Software Manage News">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Examinations</h2>
                                                <ul>
                                                    <li>Create different types of exams based on grades, marks</li>
                                                    <li>Group exams if required</li>
                                                    <li>Online exams services with automatic marks calculation ­-
                                                        Objective
                                                        and descriptive exam types
                                                    </li>
                                                    <li>Extensive report center</li>
                                                    <li>Generate report for required exams</li>
                                                    <li>Automated, quick and on demand report generation</li>
                                                    <li>Statistical and chart reports, a better analytical view</li>
                                                    <li>GPA, CCE, ICSE, Normal and CWA Evaluation methods</li>
                                                    <li>Setting up required formula for calculation in CCE,GPA and ICSE
                                                        exams
                                                    </li>
                                                    <li>ASL(Assessment for speaking and Learning) and 6th subject in CCE
                                                    </li>
                                                    <li>CBSE prescribed report</li>
                                                    <li>Exam wise report, subject wise report, consolidated report,
                                                        combined
                                                        report and reports based on student rankings per class, batch,
                                                        subject and attendance
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="column_right">

                                            <div class="module_block">
                                                <h2>Timetable </h2>
                                                <ul>
                                                    <li>Drag and drop timetable</li>
                                                    <li>Alerts on subject limits per week while creating timetable</li>
                                                    <li>Alerts on employee subject limits while creating timetable</li>
                                                    <li>Conflict warnings if the same teacher assigned with another
                                                        class
                                                        for the same period
                                                    </li>
                                                    <li>Timetable creation in advance</li>
                                                    <li>Edit/Delete timetable facility available</li>
                                                    <li>Timetable tracking</li>
                                                    <li>Effective employee work allotment</li>
                                                    <li>View teacher's timetable</li>
                                                    <li>View complete institution timetable on just one click</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Attendance</h2>
                                                <ul>
                                                    <li>Easy marking of attendance</li>
                                                    <li>Note/Remarks for attendance can be given</li>
                                                    <li>Different types of attendance report can be taken</li>
                                                    <li>Reports can be filtered using the available filters</li>
                                                    <li>Integrate with hardware devices RFID and Biometric</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Settings </h2>
                                                <ul>
                                                    <li>Basic education institute information can be given which is
                                                        reflected on reports and financial reports
                                                    </li>
                                                    <li>Comes with 21 in­bulit languages</li>
                                                    <li>Basic configuration like country, currency, time zone, etc can
                                                        be
                                                        set
                                                    </li>
                                                    <li>Addition of school logo and displayed on reports, receipts and
                                                        login
                                                        screens
                                                    </li>
                                                    <li>Other general settings like enabling grading system as per
                                                        school
                                                        requirements, automatic unique ID for all the users, Oauth/Azure
                                                        application integration
                                                    </li>
                                                    <li>Managing courses and batches</li>
                                                    <li>Batch transfer and graduation facility, generate Transfer
                                                        Certificates
                                                    </li>
                                                    <li>Managing major subjects including elective subjects</li>
                                                    <li>Importing subjects from previous batches</li>
                                                    <li>Add custom fields for admission form</li>
                                                    <li>Activate SMS module</li>
                                                    <li>Automatic SMS alerts</li>
                                                    <li>Set SMS configuration for alerts to be send to specific contact
                                                        numbers for respective actions
                                                    </li>
                                                    <li>Send SMS to single or group users or to all users</li>
                                                    <li>Manage student categories</li>
                                                    <li>Assign Tutors to Batches</li>
                                                    <li>Assign roll numbers to students</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Human Resources</h2>
                                                <ul>
                                                    <li>Manage all employees from admission to exit</li>
                                                    <li>Customisable admission form</li>
                                                    <li>Manage entire payroll efficiently</li>
                                                    <li>Customisable and robust payroll form</li>
                                                    <li>Automatic Loss of Pay calculation</li>
                                                    <li>Generate payslips on daily, weekly, monthly basis</li>
                                                    <li>Efficient leave management system available</li>
                                                    <li>Authenticated payslip approval system</li>
                                                    <li>One click payslip approval and reject facilities</li>
                                                    <li>Normal and advanced search facility</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/school_erp_HR.jpg"
                                                         alt="School Management Software HR Module">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2 id="finance">Finance </h2>
                                                <ul>
                                                    <li>Comprehensive Fee classification system</li>
                                                    <li>Separate fee collection date designing system for faster finance
                                                        process
                                                    </li>
                                                    <li>Easy analysis of fee defaulters and fee structure available</li>
                                                    <li>Easy fee submission process</li>
                                                    <li>Fee import facility for faster system use</li>
                                                    <li>Manage and Pay instant fees</li>
                                                    <li>Manage entire expenses and incomes</li>
                                                    <li>Customise and manage different category of expenses and
                                                        incomes
                                                    </li>
                                                    <li>Adjust settings for printing fee receipts</li>
                                                    <li>Financial Report generation facility with customizable date
                                                        range
                                                    </li>
                                                    <li>Online payment facility</li>
                                                    <li>Payslip approval system</li>
                                                    <li>Manage Assets and Liabilities</li>
                                                    <li>Manage Donations</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/finance-report.png"
                                                         alt="Aamra Student Management System Finance Module"
                                                         width="100%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-2" role="tabpanel">
                            <h3 class="title sr-only">Pro Modules</h3>
                            <figure class="figure text-center">
                                <div class="modules">
                                    {{--<h2 id="pro_modules">Pro Modules <span>(15)</span></h2>--}}
                                    <ul>
                                        <li>
                                            <a title="Distribute and manage homework/assignments with defined due dates, subject notes, and resources to your students instantly.">
                                                <span class="mod-icon assignment"></span>Assignment</a></li>
                                        <li>
                                            <a title="Efficiently manage all your hostels and residential facilities in the institution. Allocate rooms to students, collect and track hostel fees, and generate comprehensive reports that will help keep you on top of all important hostel administrative activities.">
                                                <span class="mod-icon hostel"></span>Hostel</a></li>
                                        <li>
                                            <a title="Manage any kind of data in your institution effectively by creating customized forms to store information.">
                                                <span class="mod-icon data-management"></span>Data Management</a></li>
                                        <li>
                                            <a title="Manage and optimize your entire transportation operation to ensure safe and efficient transport of students to and from school. You can maintain vehicle and routing details, collect transportation fees, and track the number of students using school transport.">
                                                <span class="mod-icon transport"></span>Transport</a></li>
                                        <li>
                                            <a title="Manage your institution’s inventory more efficiently and make sure the items are properly utilized. You can record and maintain item and supplier details, raise indents and purchase orders, as well as create invoices and goods received notes.">
                                                <span class="mod-icon inventory"></span>Inventory</a></li>
                                        <li>
                                            <a title="Upload, organize, and share photos with other students and employees on various events happening in your institution. ">
                                                <span class="mod-icon gallery"></span>Gallery</a></li>
                                        <li>
                                            <a title="Enable students, teachers, and other employees to collaborate, interact, and exchange information and ideas. Encourage thoughtful dialogue by allowing members to post messages and reply to other messages.">
                                                <span class="mod-icon discussion"></span>Discussion</a></li>
                                        <li>
                                            <a title=" Integrated with barcode scanning functionality, you can now efficiently manage and track all the operations performed in your library, from cataloguing of books to maintaining records of books issued and overdue, and a lot more.">
                                                <span class="mod-icon library"></span>Library</a></li>
                                        <li>
                                            <a title="Organize and streamline your campus recruitment process to successfully convert your aspiring students into successful employees.">
                                                <span class="mod-icon placement"></span>Placement</a></li>
                                        <li>
                                            <a title=" Assign and track tasks assigned to an individual student or employee, or to a group. The Task module helps promote collaboration and enables commenting and comment moderation.">
                                                <span class="mod-icon task"></span>Task</a></li>
                                        <li>
                                            <a title="Whether it’s deciding the place for an educational tour or trying to keep a class’ attention, take a poll to engage your students and employees or to make an informed decision.">
                                                <span class="mod-icon poll"></span>Poll</a></li>
                                        <li>
                                            <a title="Add some color to your Fedena institution by choosing a background color from the color palette that best represents your institution.">
                                                <span class="mod-icon theme"></span>Theme</a></li>
                                        <li>
                                            <a title="Record and track disciplinary incidents to ensure that students are held accountable for their actions.">
                                                <span class="mod-icon descpline"></span>Discipline</a></li>


                                        <li><a title="" aria-describedby="ui-id-15">
                                                <span class="mod-icon registration"></span>Applicant Registration</a>
                                        </li>
                                        <li>
                                            <a title="Make it quick and save yourself much time and effort performing common data entry tasks. Upload data in to Fedena in bulk using predefined CSV files.">
                                                <span class="mod-icon custom-import"></span>Custom Import</a></li>
                                        <li><a title="Conveniently backup your Fedena data for data security.">
                                                <span class="mod-icon data-export"></span>Data export</a></li>
                                        <li>
                                            <a title="In addition to generating specific student and employee reports, you can create custom reports using a wide range of filters.">
                                                <span class="mod-icon custom-report"></span>Custom Report</a></li>
                                        <li>
                                            <a title="Assign and manage student fee collections with just a few clicks.">
                                                <span class="mod-icon fee-import"></span>Fee Import</a></li>
                                        <li>
                                            <a title="Collect and manage instant fee payments in a few simple steps without having to schedule fee collection dates.">
                                                <span class="mod-icon instant-fee"></span>Instant Fee</a></li>
                                        <li>
                                            <a title="Run and access any third party application within Fedena without opening the application in a separate tab.">
                                                <span class="mod-icon app-frame"> </span>App frame</a></li>
                                        <li>
                                            <a title="Integrate with third-party applications and extend the functionality of Fedena, and also efficiently manage your Fedena data.">
                                                <span class="mod-icon api-access"></span>API access</a></li>
                                        <li>
                                            <a title="Make secure online fee payments using Paypal, Authorize.net and Interswitch">
                                                <span class="mod-icon payment-gateway"></span>Payment Gateway
                                                Integration</a></li>
                                        <li>
                                            <a title="Customize your email settings to communicate more efficiently with employees, students, and parents. Set automatic email alerts to be sent when admitting students and employees, publishing exam schedules and exam results, nearing fees due dates, and many more.">
                                                <span class="mod-icon email-integration"></span>Email integration</a>
                                        </li>
                                        <li>
                                            <a title="Easily transfer all the finance transactions from Fedena to Tally, and continue using Tally to manage your financial transactions.">
                                                <span class="mod-icon tally"></span>Accounting System/ Integration</a>
                                        </li>

                                    </ul>
                                </div>
                                {{--<img class="img-fluid" src="assets/images/features/feature-2.png" alt=""/>--}}
                                {{--<figcaption class="figure-caption">(Screenshot source: Coral - App &amp; website startup kit)</figcaption>--}}
                            </figure>
                            <div class="desc text-left">
                                <div class="block_four">
                                    <h2>Advanced Modules</h2>
                                    <div class="two_column">
                                        <div class="column_left">
                                            <div class="module_block">
                                                <h2>Hostel </h2>
                                                <ul>
                                                    <li>Manage Hostel
                                                    </li>
                                                    <li>Add/Edit/Delete/View different types of Hostel</li>
                                                    <li>Add/Edit/Delete/View different types of Rooms</li>
                                                    <li>Allocate rooms to the students</li>
                                                    <li>Create hostel fee collection date</li>
                                                    <li>Manage hostel fee collections</li>
                                                    <li>View hostel fee defaulters</li>
                                                    <li>Pay hostel fee - student wise</li>
                                                    <li>Change rooms for students</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/hostel.png"
                                                         alt="Aamra Software for School Management Hostel Module"
                                                         width="100%">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Library </h2>
                                                <ul>
                                                    <li>Browse through library books catalogue and identify the book(s)
                                                        to
                                                        be issued
                                                    </li>
                                                    <li>Manage library books</li>
                                                    <li>View/Edit/Delete/Add books</li>
                                                    <li>Add books with custom tag facility available</li>
                                                    <li>Filter book using available filters</li>
                                                    <li>Normal and detail Search for a book available</li>
                                                    <li>Manage book returns</li>
                                                    <li>Manage book issue</li>
                                                    <li>Initial library setting for courses available</li>
                                                    <li>Issued/Renewed book status</li>
                                                    <li>Manage books renew</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/library.png"
                                                         alt="Aamra Software for School Management Library Module"
                                                         width="100%">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Transport </h2>
                                                <ul>
                                                    <li>Add/Edit/Delete the routes for vehicles</li>
                                                    <li>Add destination and cost details</li>
                                                    <li>Add/Edit/Delete Vehicle details</li>
                                                    <li>Get Transport Details</li>
                                                    <li>Transport Fee facility available</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/transport.png"
                                                         alt="Aamra Student Management System Transport Module"
                                                         width="100%">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Calendar </h2>
                                                <ul>
                                                    <li>Display Events, Examination, Holidays and Dues in the calendar
                                                    </li>
                                                    <li>Separate color for each action as categorised items above</li>
                                                    <li>Display all information about the items on hovering over the
                                                        color
                                                        spots in the calendar
                                                    </li>
                                                    <li>Monthly view of all items</li>
                                                    <li>Easy navigation of calendar month</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/calendar.png"
                                                         alt="School ERP Calendar" width="100%">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Event Creation </h2>
                                                <ul>
                                                    <li>Create any type of event</li>
                                                    <li>Description can also be given to any Event created</li>
                                                    <li>Title facility also available</li>
                                                    <li>Can mark if the event is a holiday</li>
                                                    <li>Can set the even common to all using the check box available
                                                    </li>
                                                    <li>Create event for set of students and faculty</li>
                                                    <li>Automatic intimations through SMS, E­mail and internal messaging
                                                        system
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Applicant Registration</h2>
                                                <ul>
                                                    <li>Comprehensive registration form</li>
                                                    <li>Highly customisable form</li>
                                                    <li>Manage/Edit/Delete registration of courses</li>
                                                    <li>View applicants based on different filters available</li>
                                                    <li>View the status of the applicant like allotted, rejected,
                                                        pending,
                                                        eligible
                                                    </li>
                                                    <li>Allot or discard the applicants after reviewing</li>
                                                    <li>Completed registration form print facility available</li>
                                                    <li>Subject based registration</li>
                                                    <li>Collect application fee through online payment</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Collaborate </h2>
                                                <ul>
                                                    <li>Distance education facility available</li>
                                                    <li>Collaborate with students and other users via text, audio and/or
                                                        video at anytime
                                                    </li>
                                                    <li>Invite and create group / session as required</li>
                                                    <li>Record the session for future use</li>
                                                    <li>Sound files can be shared for later use</li>
                                                    <li>Whiteboard facility available</li>
                                                    <li>Group chat facility available</li>
                                                    <li>Questions can be asked during collaboration via raising hand
                                                        facility
                                                    </li>
                                                    <li>Interactive collaboration facility available</li>
                                                    <li>Parent can view the complaints on his/her wards</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/school_erp_Collaborate.jpg"
                                                         alt="School ERP Collaborate">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Discipline</h2>
                                                <ul>
                                                    <li>Register a new complaint on a student</li>
                                                    <li>View all the registered complaints</li>
                                                    <li>Sort or search for complaints</li>
                                                    <li>Participants can give their comments and clarifications on the
                                                        complaint
                                                    </li>
                                                    <li>Final decision taken by the jury.</li>
                                                    <li>Jury can convict or acquit the accused</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Fee Import</h2>
                                                <ul>
                                                    <li>Import the Fee collection in a batch to students admitted after
                                                        the
                                                        fee collection was created
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="column_right">
                                            <div class="module_block">
                                                <h2>Custom Imports </h2>
                                                <ul>
                                                    <li>Import Student data</li>
                                                    <li>Import Guardian details</li>
                                                    <li>Import daily wise attendance records</li>
                                                    <li>Import Examination scores</li>
                                                    <li>Import Library book details</li>
                                                    <li>Import Inventory details like Store Items, Suppliers</li>
                                                    <li>Check the import log</li>
                                                    <li>Employee payroll details</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Custom Report </h2>
                                                <ul>
                                                    <li>Create custom report for student and employees</li>
                                                    <li>Custom name can be given for the custom report</li>
                                                    <li>Create custom report based on input criteria based on large
                                                        number
                                                        of fields available
                                                    </li>
                                                    <li>Create the report to display based on the user requirement</li>
                                                    <li>Arrange the report display as required</li>
                                                    <li>Displayed custom report can be rearranged in ascending or
                                                        descending
                                                        order based on any of the fields available in the displayed
                                                        report
                                                    </li>
                                                    <li>View/Delete custom report facility</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Data Export</h2>
                                                <ul>
                                                    <li>Export all your data from Aamra.</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Data Management </h2>
                                                <ul>
                                                    <li>Edit/Delete Data categories created</li>
                                                    <li>Manage entire data of the school</li>
                                                    <li>Customise the fields as required by the user</li>
                                                    <li>Robust data management system available</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Discussion </h2>
                                                <ul>
                                                    <li>Create forums on various topics</li>
                                                    <li>Give access to students and employees</li>
                                                    <li>Discussions can be done even outside school</li>
                                                    <li>View/Delete comments / recent activities</li>
                                                    <li>View all posts</li>
                                                    <li>Create groups</li>
                                                    <li>Create discussion</li>
                                                    <li>Comment on discussions</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/discussion.png"
                                                         alt="Aamra ERP for Schools Discussion Module" width="100%">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Gallery</h2>
                                                <ul>
                                                    <li>Create new Gallery category</li>
                                                    <li>Upload photos</li>
                                                    <li>View/Delete photo facility</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/school_erp_Gallery.jpg"
                                                         alt="Aamra ERP for Schools Gallery Module">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Inventory</h2>
                                                <ul>
                                                    <li>Manage and create store categories</li>
                                                    <li>Manage and create store types</li>
                                                    <li>Manage and create stores</li>
                                                    <li>Manage and create Store Item</li>
                                                    <li>Manage and create supplier types</li>
                                                    <li>Manage and create Suppliers</li>
                                                    <li>Creates Indents</li>
                                                    <li>Manage Purchase Order</li>
                                                    <li>Creates GRN</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/inventory.png"
                                                         alt="Aamra ERP for Schools Inventory Module" width="100%">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2> Placement </h2>
                                                <ul>
                                                    <li>Create/Edit/Delete placements</li>
                                                    <li>See archived placements</li>
                                                    <li>Filter placements based on available filters</li>
                                                    <li>Track placement status</li>
                                                    <li>Manage entire placement activities</li>
                                                    <li>Announce new placement</li>
                                                    <li>Students can apply for the placement</li>
                                                    <li>Placement officer can accept or reject the application</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Poll</h2>
                                                <ul>
                                                    <li>Edit/Delete/Closs/Create and publish polls</li>
                                                    <li>Create active/closed polls</li>
                                                    <li>Title and description facility available for polls</li>
                                                    <li>Multiple answer facility available</li>
                                                    <li>Open for poll facility available</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/poll.png"
                                                         alt="Aamra Student Management System Poll Module" width="100%">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Task </h2>
                                                <ul>
                                                    <li>Filter tasks based on filters available</li>
                                                    <li>Create/Edit/Delete Tasks</li>
                                                    <li>Upload document facility available</li>
                                                    <li>Commenting and status update facility available</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/task.png"
                                                         alt="School ERP Task Management" width="100%">
                                                </div>
                                            </div>
                                            <div class="module_block">
                                                <h2>Assignment </h2>
                                                <ul>
                                                    <li>Upload and download notes / assignments for the teachers</li>
                                                    <li>Online submission of notes / assignments by the students</li>
                                                    <li>Teacher can download the assignment submitted and can give the
                                                        comments on the same
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Instant Fee </h2>
                                                <ul>
                                                    <li>Manage miscellaneous fee</li>
                                                    <li>Define fee category and particulars in each fee category</li>
                                                    <li>Collect fee from students, employees, guest users</li>
                                                </ul>
                                            </div>
                                            <div class="module_block">
                                                <h2>Color Theme </h2>
                                                <ul>
                                                    <li>Change the color theme of the application</li>
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!--<blockquote>-->
                                <!--<p>Viverra magna pellentesque in magnis gravida sit augue felis vehicula vestibulum semper penatibus justo ornare semper Gravida felis platea arcu mus non. Montes at posuere. Natoque.</p>-->
                                <!--</blockquote>-->

                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-3" role="tabpanel">
                            <h3 class="title sr-only">Pro Plus Modules</h3>
                            <figure class="figure text-center">
                                <div class="modules">
                                    {{--<h2 id="premium_modules">Pro Plus Modules <span>(12)</span></h2>--}}
                                    <ul>

                                        <li>
                                            <a title="Secure and seamless access to your Fedena account using Google credentials.">
                                                <span class="mod-icon google-sso"></span>Google SSO</a></li>
                                        <li>
                                            <a title="Access documents uploaded to Google Docs in Fedena and vice versa.">
                                                <span class="mod-icon google-doc"></span>Google Doc</a></li>


                                        <li>
                                            <a title="Replace the traditional paper assessment by creating customized computer-based testing from anywhere. With a rich set of question types, you can create standardized tests that allow students to see test results right away.">
                                                <span class="mod-icon online-exam"></span>Online exam</a></li>


                                        <li>
                                            <a title="Build custom forms within minutes. It is as simple as dragging and dropping your fields, configuring your options, and publishing. You can create various types of forms such as, contact forms, feedback forms, and many more.">
                                                <span class="mod-icon form-builder"></span>Form builder</a></li>
                                        <li>
                                            <a title="Organize events to help connect your students and employees with alumni and build strong relationships.">
                                                <span class="mod-icon alumni"></span>Alumni</a></li>
                                        <li><a title="Monitor and track user activities in Fedena in real-time.">
                                                <span class="mod-icon audit"></span>Audit</a></li>
                                        <li>
                                            <a title="A safe location for all your files that is to be shared with other Fedena users.">
                                                <span class="mod-icon doc-manager"></span>Doc manager</a></li>
                                        <li>
                                            <a title=" Empower students, teachers, and other employees to create and publish blog posts on any topic and help share their story with everyone. It includes features typically found in blogs such as searching for old entries, commenting, comment moderation, and many more.">
                                                <span class="mod-icon blog"></span>Blog</a></li>
                                        <li>
                                            <a title="This integration let users login using their Microsoft account credentials.">
                                                <span class="mod-icon azure"></span>Azure Integration</a></li>
                                        <li>
                                            <a title="Users can receive reminders of various events on their mobile numbers and email ids.">
                                                <span class="mod-icon reminder"></span>Reminder</a></li>
                                        <li>
                                            <a title="Remove the manual effort from timetable generation by letting Fedena create timetables for batches. Assign various rules like preferred subject timings and consecutive classes for subjects to get the optimal timetable.">
                                                <span class="mod-icon atg"></span>Automatic Timetable Generator</a></li>
                                        <li>
                                            <a title=""
                                               data-original-title=" Teachers can take attendance, students can view timetable, parents can view attendance, principal and admins can send messages & announcements etc. using the same app. Though the traditional login mechanism with the username and password is preferred by the majority of users, the One Time Password (OTP) login via SMS and Emails is the favorite of all the app users. So we have incorporated both of them in the mobile app to help you choose the one that suits you the best.">
                                                <span class="mod-icon dashborad"></span>Mobile App</a></li>

                                    </ul>
                                </div>
                                {{--<img class="img-fluid" src="assets/images/features/feature-3.png" alt=""/>--}}
                                {{--<figcaption class="figure-caption">(Screenshot source: Pro Plus Modules)</figcaption>--}}
                            </figure>
                            <div class="desc text-left">
                                <div class="block_four">
                                    <h2>Enterprise Modules</h2>
                                    <div class="two_column">
                                        <div class="column_left">
                                            <div class="module_block">
                                                <h2>Blog </h2>
                                                <ul>
                                                    <li>Create blog</li>
                                                    <li>View other blogs</li>
                                                    <li>Filter blogs based on available filter</li>
                                                    <li>Search for specific blog using search facility</li>
                                                    <li>View all the activities in the blog</li>
                                                    <li>Comment and rate blogs</li>
                                                    <li>Ban abusive blog posts, comments</li>
                                                </ul>
                                                <div class="img">
                                                    <img src="{{asset('/')}}front/images/feature-tour/blog.png"
                                                         alt="Aamra Software for School Management Blog Module"
                                                         width="100%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_right">
                                            <div class="module_block">
                                                <h2>Online Exam</h2>
                                                <ul>
                                                    <li>Create different types of exams based on grades, marks</li>
                                                    <li>Group exams if required</li>
                                                    <li>Online exams services with automatic marks calculation ­-
                                                        Objective
                                                        and descriptive exam types
                                                    </li>
                                                    <li>Extensive report center</li>
                                                    <li>Generate report for required exams</li>
                                                    <li>Automated, quick and on demand report generation</li>
                                                    <li>Statistical and chart reports, a better analytical view</li>
                                                    <li>GPA, CCE, ICSE, Normal and CWA Evaluation methods</li>
                                                    <li>Setting up required formula for calculation in CCE,GPA and ICSE
                                                        exams
                                                    </li>
                                                    <li>ASL(Assessment for speaking and Learning) and 6th subject in CCE
                                                    </li>
                                                    <li>CBSE prescribed report</li>
                                                    <li>Exam wise report, subject wise report, consolidated report,
                                                        combined
                                                        report and reports based on student rankings per class, batch,
                                                        subject and attendance
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!--<div class="jumbotron">-->
                                <!--<h1 class="display-4">Latest Updates</h1>-->
                                <!--<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>-->
                                <!--<hr class="my-4">-->
                                <!--<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>-->
                                <!--<p class="lead">-->
                                <!--<a class="btn btn-cta btn-cta-primary btn-lg" href="#" role="button">Learn more</a>-->
                                <!--</p>-->
                                <!--</div>-->

                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-4" role="tabpanel">
                            <h3 class="title sr-only">Enterprise Modules</h3>
                            <figure class="figure text-center">
                                <img class="img-fluid" src="{{asset('/')}}front/images/features/feature-4.png" alt=""/>
                                <figcaption class="figure-caption">(Screenshot source: Enterprise Modules)</figcaption>
                            </figure>
                            <div class="desc text-left">
                                <p class="box">Comming Soon ...</p>
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                    </div><!--//tab-content-->
                </div><!--//col-md-x-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//features-tabbed-->

    <!-- ******Steps Section****** -->
    <section class="steps section">
        <div class="container">
            <h2 class="title text-center">3 Simple Steps to Get you started with Aamra EduManager System</h2>
            <div class="row">
                <div class="step text-center col-xs-12 col-sm-4">
                    <h3 class="title"><span class="number">1</span><br/><span class="text">Sign up</span></h3>
                    <p>Sign up your school/college/university by filling-up the online form.</p>
                </div><!--//step-->
                <div class="step text-center col-xs-12 col-sm-4">
                    <h3 class="title"><span class="number">2</span><br/><span class="text">Payment</span>
                    </h3>
                    <p>Pay the Sign up & Subscription Fee using Online Payment or nearest Local Bank Deposit & Email to
                        info@edumanager.net with Scanned copy of Deposit Slip.</p>
                </div><!--//step-->
                <div class="step text-center col-xs-12 col-sm-4">
                    <h3 class="title"><span class="number">3</span><br/><span class="text">Get Approval</span></h3>
                    <p>Get approval email for successful sign-up completion confirmation and start to use the
                        system.</p>
                </div><!--//step-->
            </div><!--//row-->

            <div class="text-center"><a class="btn btn-cta btn-cta-primary" href="{{route('/sign-up')}}">Get Started -
                    It's Free</a>
            </div>

        </div><!--//container-->
    </section><!--//steps-->
@endsection
