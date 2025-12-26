<?php
function curPageURL1()
{
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

function curPageName()
{
    $pagename = explode('.', substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1));
    return $pagename[0];
}

function baseURL()
{
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    $pageURL .= $_SERVER["SERVER_NAME"];
    return $pageURL;
}

/*Added on 08-09-2023 by DO Team
Function to get current URL of page */

function getCurrentPageURL($type)
{
    $uri      = strtok($_SERVER["REQUEST_URI"], '?');
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $base_url = $protocol . $_SERVER['HTTP_HOST'];
    $url      = $protocol . $_SERVER['HTTP_HOST'] . $uri;
    $query    = $_SERVER['QUERY_STRING'];
    if ($type == 'query') {
        return $query; // Outputs: Query String
    } else if ($type == 'uri') {
        return $uri; // Outputs: URI    
    } else if ($type == 'url') {
        return $url; // Outputs: Full URL    
    } else if ($type == 'base_url') {
        return $base_url; // Outputs: Full URL    
    } else if ($type == 'title') {
        $ext      = pathinfo($uri);
        $filename = ucwords(str_replace("-", " ", $ext['filename']));
        return $filename; // Outputs: Full URL    
    } 
}

if (curPageName() == "index") {
    if (getCurrentPageURL('url') == "https://www.prohance.net/glossary/") {
        $title = "Workforce Management Glossary: Must-Know Terms & Concepts | ProHance";
        $description = "The workforce management glossary defines the most common keywords, phrases, acronyms and general terminology used in day-to-day professional work in the context of employee productivity.";
        $keywords = "";
    } else {
        $title = "ProHance: Workforce Analytics and Productivity Measurement";
        $description = "Discover how workforce analytics and productivity measurement tools in workforce management software can optimize your business operations. Get insights and improve productivity today.";
        $keywords = "workflow company, employee internet monitoring software, employee time management software, employee productivity monitoring software, productivity tracking app, employee monitoring tool, employee monitor, track work hours app, digital workflows, timesheet tracking system, employee time tracking program, time tracking service, employee monitor software, employee activity monitoring, timekeeping app for employees, automated workflows, time tracking services, new employee time tracker software, tracking staff, online staff management software, attendance management software, software planning software, software to manage business, work tracker software, employee management systems, hybrid workforce model, performance monitoring tools for web application, work planner software, time tracking software, application management tool, employee management tools, tracking programs, the remote desktop software, hybrid workplace, best bpm software, application management software, work task app, hybrid model workplace, employee management software, task monitoring software, tracking management software, employee management, top business management software, online performance management software, employee work management system, enterprise application performance management, employee management system software, software tracking system, workforce performance, best employee tracking app, working remotely, employee manager software, a time tracker, project management tracking software, work management, time tracking, time tracking tool, online workflow system, workflow flow, software workflow, it operations management tools, ProHance, project time tracking tool, task time tracker app, company workflow software, simple time tracker, workflow tracking, cloud based employee time tracking, business workflow, remote productivity monitoring tools, track employee activity, employee productivity, employee tracking tool, process work flow, business workflow automation, app to record time spent on tasks, software to monitor remote employees, employee time management, productivity software, computer remote desktop, best task tracker, hybrid office model, employee management solution, tools to track projects, Business Management Software, monitoring software for remote employees, process workflow software, software to track employees, remote user monitoring software, work flow management software, time tracking & productivity, process tracking software, employee activity monitor, hour tracking software, workflow products, automated digital workflows, time tracker application, it operations management software, work flow tool, operations management software, timesheet for work, software for employee time tracking, employee project time tracking, workforce productivity, employee time tracking, time sheet tracking, work time management software, online workflow software, time allocation software, workflow platform, process management software, time tracker app for employees, time tracker software for employees, employee timekeeping software, work time log app, workflow, project management workflow, workflow program, workflow automation companies, time logging, top time management apps, time tracking systems for employees, workflow free software, it workflows";
    }
} else if (curPageName() == "about-us") {
    $title = "About Us | ProHance";
    $description = "A cloud-based solution that optimizes your workforce processes through powerful real-time analytics.";
    $keywords = "";
} else if (curPageName() == "10-essential-tips-for-successfully-managing-a-hybrid-workforce") {
    $title = "Blog | ProHance";
    $description = "Are you interested to write about ProHance? We made ProHance Brand assets available for use by any media outlet interested in writing about ProHance.";
    $keywords = "";
} else if (curPageName() == "work-time-modules") {
    $title = "Employee Time Tracking Software | ProHance";
    $description = "Boost productivity with ProHance's real-time employee time tracking software. Gain insights into tasks and projects. Try it free for 14 days!";
    $keywords = "";
} else if (curPageName() == "work-output-module") { 
    $title = "Best Employee Productivity & Performance Tracking Software";
    $description = "ProHance's employee productivity and performance tracking software to enhance efficiency, monitor employee performance and help boost productivity.";
    $keywords = "";
} else if (curPageName() == "work-flow-management") {
    $title = "Task & Workflow Management Software | ProHance";
    $description = "Discover ProHance's task & workflow management software to streamline processes, boost efficiency, and keep teams aligned. Get 14 days free trial now!";
    $keywords = "";
} else if (curPageName() == "asset-optimization-module") {
    $title = "Asset Performance Management Software | ProHance";
    $description = "ProHance asset performance management software analyzes employee system resource usage in real-time and helps optimize your IT resources. Get 14 days free trial.";
    $keywords = "";
} else if (curPageName() == "14days-trial") {
    $title = "ProHance: Free 14-Day Trial Workforce Management Platform";
    $description = "Get a 14 day free trial to try ProHance now. Get real-time visibilty of your workforce with customized reports and get actionable Insights.";
    $keywords = "";
} else if (curPageName() == "404") {
    $title = "ProHance 404";
    $description = "";
    $keywords = "";
} else if (curPageName() == "apply-these-secret-techniques-to-improve-the-new-age-remote-workers") {
    $title = "Blog | ProHance";
    $description = "Are you interested to write about ProHance? We made ProHance Brand assets available for use by any media outlet interested in writing about ProHance.";
    $keywords = "";
}  else if (curPageName() == "attendance-and-timesheet") {
    $title = "Best Attendance Monitoring and Timesheet Software for Digital Workforce";
    $description = "With help of ProHance, Organizations can Maintain Schedule Adherence, Reduce Unaccounted Absenteeism and Optimize Capacity Utilization.";
    $keywords = "online time tracking, employee time tracking, best time tracker, employee time clock app, app to track employee hours, employee attendance tracking, time & attendance solutions, desktop time clock software, timesheet tracker, time reporting software, employee timesheet management, time management tools for employees, employee time keeping app, real time attendance software, employee time and attendance system, work time management software, work hours time sheet, employee time tracking tool, online time tracking software, time tracking and productivity monitoring tool, time sheet for work, best employee time tracking system, employee time management system, employee time sheets, online time tracking tool, employee timesheet tracker, timesheet attendance management system, time tracking management software, timesheet tracking system, employee time and attendance tracking software, work time sheet, time sheet tool, best timekeeping app, employee time recording software, employee time reporting software, employee attendance tracking sheet, automated time tracker, time office attendance software, employee time tracking and management software, online timesheet tracker, timesheet management system, employee login logout software, timesheets online, best time tracking software, online timesheet software, time tracking systems, ways to track employee attendance, timesheet tracking software, best employee time tracking software, attendance monitoring system, web based attendance tracking, employee time tracking system, company time management software, best employee time tracking app, employee attendance management, time and attendance systems, automatic time tracking software, best attendance app for employees, attendance software solution, best timesheet software, employee timesheet software, employee time clock, employee time keeping, employee hours tracker, employee time entry,";
} else if (curPageName() == "attendance-and-timesheet-linkedin") {
    $title = "Best Attendance Monitoring and Timesheet Software for Digital Workforce";
    $description = "With help of ProHance, Organizations can Maintain Schedule Adherence, Reduce Unaccounted Absenteeism and Optimize Capacity Utilization.";
    $keywords = "";
} else if (curPageName() == "blog") {
    $title = "Latest Blogs on Workforce & Productivity Analytics | ProHance";
    $description = "Parse through our latest blogs on workforce management and prodcutivity analytics to understant their uses for various industries.";
    $keywords = "";
} else if (curPageName() == "meet-the-team") {
    $title = "Meet Our Team | ProHance";
    $description = "Click here to meet our ProHance's Leadership team recognizing the need to address the challenge of managing a distributed workforce.";
    $keywords = "";
} else if (curPageName() == "partner-ecosystem-management-uk") {
    $title = "Your Offshore vendors are your strategic partners. Be more informed through the data ProHance generates.";
    $description = "Your Offshore vendors are your strategic partners. Be more informed through the data ProHance generates.";
    $keywords = "automated vendor management system, bank vendor management, bank vendor management software, best vendor management, best vendor management software, best vendor management system, bpo governance, bpo vendor management, charge back rationalization, client and vendor management, client vendor management, cloud based vendor management system, cloud vendor management, contract obligation management, contract obligation management software, contract obligations tracker, effective vendor management, enterprise vendor management, erp vendor management, external vendor management, features of vendor management system, healthcare vendor management, healthcare vendor management companies, healthcare vendor management software, healthcare vendor management system, healthcare vendor management systems, hospital vendor management, hospital vendor management system, in country compliance adherence, insurance vendor management, it outsourcing governance, it outsourcing governance model, it tool vendor management, it vendor management, it vendor management best practices, it vendor management process, it vendor management software, offshore contingency management, offshore governance, online vendor management, online vendor management system, outsource compliance adherence, outsourcing governance, outsourcing governance solutions, outsourcing vendor management, partner ecosystem companies, partner ecosystem management, partner ecosystem management companies, partner ecosystem management software, partner ecosystem management solutions, partner ecosystem platform, partner ecosystem program, partner ecosystem services, partner ecosystem software, partner ecosystem solution, performance management software vendors, saas partner ecosystem, saas vendor management, saas vendor management solution, saas vendor management system, small businesses saas vendor management, software vendor license management, software vendor managed inventory, software vendor management best practices, software vendor management solution, top 10 vendor management systems, top vendor management software, top vendor management systems, top vms systems, vendor management analytics, vendor management application, vendor management managed services, vendor management platform, vendor management portal, vendor management program, vendor management services, vendor management services healthcare, vendor management services vms, vendor management software, vendor management software companies, vendor management software features, vendor management software for credit unions, vendor management software for financial institutions, vendor management software for healthcare, vendor management software for small business, vendor management software solutions, vendor management solutions, vendor management system, vendor management system features, vendor management system pricing, vendor management system software, vendor management system tools, vendor management tool, vendor monitoring software, vendor monitoring solutions, vendor monitoring tools, vendor optimization, vendor performance management, vendor performance management software, vendor performance management tools, vendor performance monitoring,";
} else if (curPageName() == "prohancemodules") {
    $title = "Best Featured Products for Workforce Analytics | ProHance";
    $description = "Check out ProHance provides the best - featured products for the New-Age Operations Enablement & Analytics Platform.";
    $keywords = "";
}else if (curPageName() == "advance-analytics-module") {
    $title = "Workforce Analytics & Lean Management Software | ProHance";
    $description = "ProHance workforce analytics software helps in performing multi-dimensional variation analysis and lean management to increase quality and efficiency of work. Get 14 days free trial.";
    $keywords = "";
} else if (curPageName() == "professional-services") {
    $title = "Integrated Change Management and Consulting Services | ProHance";
    $description = "We empower clients in smooth deployment and adoption of the ProHance platform. Get Integrated Change Management and Consulting Services.";
    $keywords = "";

} else if (curPageName() == "prohance-support") {
    $title = "ProHance- Support About";
    $description = "";
    $keywords = "";
} else if (curPageName() == "prohance-vs-other-competitors-in") {
    $title = "Best Workforce and Workflow Management Tool";
    $description = "ProHance can help meet the need for workforce management software for organizations to do Planning, Optimization & Capacity Realization.";
    $keywords = "teramind employee monitoring, desktime demo, company like teramind, competitors to desktime, desk time tracker, what is activtrak, company like desktime, sapience tracking tool, better than desktime, company like activeops, veriato vs activtrak, download activtrak, desktime software, teramind app, sapiens employee training management, teramind vs veriato, teramind pricing, desk time, teramind software, better than activeops, activeops WorkiQ, teramind careers, what is activtrak used for, sapience therapeutics, better than sapience analytics, company like activtrak, teramind monitoring, desktime download, desktime app, teramind features, teramind inc, aktivtrak, teramid, sapiens computer software, teramind, teramind agent, desktime review, competitors to activtrak, teramind co, is teramind legal, company like sapience analytics, teramind reviews, teramind demo, teramind agent download, sapience workforce analytics, teramind support, sapience tool features, sapience application, teramind status, teramind stock, teramind starter, better than activtrak, sapience productivity tool, desktime pro, teramind israel, teramend, teramind vs activtrak, teramind uam, desktime app download, desktime support, sapience analytics, download teramind, competitors to teramind, tera mind, activeops, sapience software, desktime pricing, teramind dlp, how to trick activtrak, teramind download, what does activtrak monitor, app activtrak, teramind india, sapience buddy tool, activeops solutions, teramind cost, teramind agent removal, active ops, activeops CaseworkiQ, detect activtrak, workpuls vs activtrak, teramind login, how does teramind work, sapience tool, activtrak vs teramind, better than teramind, sapience vue, activeops ControliQ, competitors to sapience analytics, teramind vs, sapience tutoring, sapience tracking software, sapeince, competitors to sapience, how does activtrak work, activeops share price, sapience monitoring tool, desktime, teramind software review, competitors to activeops, sapiens software, teramind alternatives, sapiens software company, sapience logo, sapience meaning, sapiens it company, sapience hacks, sapience automation, sapian definition, sapien technologies, sapience definition, better than sapience, sapiens decision, company like sapience, sapience practice, sapience buddy, sapience buddy cheats, sapience investments, sapience buddy for windows 10, teramind trial, sapience tool for monitoring, desktime time tracking, sapiens software solutions, download teramind agent, teramind user guide, what can activtrak see, sapience time tracking tool,";
} else if (curPageName() == "prohance-vs-other-competitors-linkedin") {
    $title = "ProHance vs Competitors - Best Workforce and Workflow Management Tool LinkedIn";
    $description = "ProHance can help meet the need for workforce management software for organizations to do Planning, Optimization & Capacity Realization.";
    $keywords = "";
} else if (curPageName() == "prohance-vs-other-competitors-ph") {
    $title = "ProHance vs Competitors - Best Workforce and Workflow Management Tool";
    $description = "ProHance can help meet the need for workforce management software for organizations to do Planning, Optimization & Capacity Realization.";
    $keywords = "";
} else if (curPageName() == "prohance-vs-other-competitors-uk") {
    $title = "ProHance vs Sapience Analytics - Best Workforce and Workflow Management Tool";
    $description = "ProHance can help meet the need for workforce management software for organizations to do Planning, Optimization & Capacity Realization.";
    $keywords = "";
} else if (curPageName() == "prohance-vs-other-competitors-us") {
    $title = "Prohance VS Other Competitors | ProHance";
    $description = "Compare ProHance with other competitors to see how our solutions offer better time tracking, productivity monitoring, and team management features.";
    $keywords = "teramind employee monitoring, desktime demo, company like teramind, competitors to desktime, desk time tracker, what is activtrak, company like desktime, sapience tracking tool, better than desktime, company like activeops, veriato vs activtrak, download activtrak, desktime software, teramind app, sapiens employee training management, teramind vs veriato, teramind pricing, desk time, teramind software, better than activeops, activeops WorkiQ, teramind careers, what is activtrak used for, sapience therapeutics, better than sapience analytics, company like activtrak, teramind monitoring, desktime download, desktime app, teramind features, teramind inc, aktivtrak, teramid, sapiens computer software, teramind, teramind agent, desktime review, competitors to activtrak, teramind co, is teramind legal, company like sapience analytics, teramind reviews, teramind demo, teramind agent download, sapience workforce analytics, teramind support, sapience tool features, sapience application, teramind status, teramind stock, teramind starter, better than activtrak, sapience productivity tool, desktime pro, teramind israel, teramend, teramind vs activtrak, teramind uam, desktime app download, desktime support, sapience analytics, download teramind, competitors to teramind, tera mind, activeops, sapience software, desktime pricing, teramind dlp, how to trick activtrak, teramind download, what does activtrak monitor, app activtrak, teramind india, sapience buddy tool, activeops solutions, teramind cost, teramind agent removal, active ops, activeops CaseworkiQ, detect activtrak, workpuls vs activtrak, teramind login, how does teramind work, sapience tool, activtrak vs teramind, better than teramind, sapience vue, activeops ControliQ, competitors to sapience analytics, teramind vs, sapience tutoring, sapience tracking software, sapeince, competitors to sapience, how does activtrak work, activeops share price, sapience monitoring tool, desktime, teramind software review, competitors to activeops, sapiens software, teramind alternatives, sapiens software company, sapience logo, sapience meaning, sapiens it company, sapience hacks, sapience automation, sapian definition, sapien technologies, sapience definition, better than sapience, sapiens decision, company like sapience, sapience practice, sapience buddy, sapience buddy cheats, sapience investments, sapience buddy for windows 10, teramind trial, sapience tool for monitoring, desktime time tracking, sapiens software solutions, download teramind agent, teramind user guide, what can activtrak see, sapience time tracking tool,";
} else if (curPageName() == "real-time-tracking-productivity-monitoring-smb") {
    $title = "Leading Time Tracking & Productivity Monitoring Software";
    $description = "ProHance analytics is one the best work management software for all types of businesses.";
    $keywords = "";
} else if (curPageName() == "support-about") {
    $title = "ProHance- Support About";
    $description = "";
    $keywords = "";
}  else if (curPageName() == "zinnov-white-paper") {
    $title = "Zinnov White Paper | ProHance";
    $description = "Boost sustainable growth in GBS with data-driven productivity strategies that optimize operations, improve efficiency, and drive measurable business outcomes.";
    $keywords = "";
}  else if (curPageName() == "thought-leadership") {
    $title = "Thought Leadership | ProHance";
    $description = "Parse through our reference material like Buying Guides, Whitepapers etc.";
    $keywords = "";
}  else if (curPageName() == "industry-reports") {
    $title = "Industry Reports | ProHance";
    $description = "ProHance is a provider of a cloud-based, enterprise workforce analytics and operations enablement platform 
with a focus on hybrid work and productivity.";
    $keywords = "";
}  else if (curPageName() == "case-studies") {
    $title = "Case Study - ProHance";
    $description = "Parse through our case studies to understand ProHance use cases for various industries.";
    $keywords = "";
} else if (curPageName() == "events") {
    $title = "Optimize Your Employee Management Systems | ProHance Events";
    $description = "Join ProHance events to optimize your employee management systems. Explore workforce analytics, employee productivity tracking, and more!";
    $keywords = "";
}  else if (curPageName() == "how-remote-work-is-reshaping-a-future-new-world-of-work") {
    $title = "Webinar: How remote work is reshaping a future new world of work?";
    $description = "ProHance is an innovative company that helps businesses manage their workforce remotely. Learn more about its unique features!";
    $keywords = "";
} else if (curPageName() == "manage-hybrid-and-remote-teams-linkedin") {
    $title = "Manage your Hybrid/Remote Teams with Best Workplace Analytics Software";
    $description = "Powerful Workplace analytics & remote employee management software designed to increase the performance and productivity of hybrid teams.";
    $keywords = "";
} else if (curPageName() == "manage-hybrid-and-remote-teams") {
    $title = "Manage Hybrid Teams with Best Workplace Analytics | ProHance";
    $description = "Easily manage hybrid and remote teams with ProHance’s innovative tools for monitoring, tracking, and optimizing employee productivity.";
    $keywords = "best remote monitoring software, remote monitoring tools, remote employee monitoring system, employee engagement for remote employees, remote employee engagement, remote work monitoring, remote work monitoring software, software to track remote workers, remote working engagement, engaging remote employees, remote work management, hybrid work software, remote employee desktop monitoring software, remote team management tools, employee engagement in remote working, manage remote employees, hybrid remote work, remote work employee engagement, remote team management, tools for managing remote teams, remote application monitoring, remote monitoring software, manage remote workers, employee engagement remote working, remote user monitoring software, manage remote team,";
} else if (curPageName() == "manage-your-hybrid-teams-linkedin") {
    $title = "Manage Hybrid Teams with the Best Workplace Analytics Software";
    $description = "ProHance analytics is one the best work management software for all types of businesses.";
    $keywords = "";
} else if (curPageName() == "manage-your-hybrid-teams-uk") {
    $title = "Manage Hybrid Teams with the Best Workplace Analytics Software";
    $description = "ProHance analytics is one the best work management software for all types of businesses.";
    $keywords = "best performance management software, best performance management software for small business, best performance management systems for small companies, best performance management tools, best performance review software, best performance review software for small companies, best performance review systems, best way to track employee productivity, effective performance evaluation system, effective performance measurement system, employee performance, employee performance analysis software, employee performance evaluation software, employee performance evaluation system, employee performance management software, employee performance management solutions, employee performance metrics, employee performance report, employee performance software, employee productivity measurement tools, employee productivity software, employee productivity tool, employee productivity tracker, employee productivity tracking software, employee's productivity, enterprise performance management, enterprise performance management platform, enterprise performance management software, enterprise performance management solutions, enterprise performance management system, executive performance management system, how to measure productivity in the workplace, improve employee performance, improve employee productivity, improving productivity in the workplace, increase employee productivity, increase workplace productivity, manage remote team, manage remote workers, measuring employee performance, operations management software, performance management platform, performance management software for small business, performance management software for small companies, performance management software solutions, performance management solutions, performance management system for small business, performance management systems, performance measurement software, performance measurement tools for employees, performance review software for small companies, productivity in the workplace, productivity management software, productivity tracker for employees, smart performance management system, staff performance management software, top performance management tools,";
} else if (curPageName() == "manage-your-hybrid-teams-us") {
    $title = "Manage Hybrid Teams with the Best Workplace Analytics Software";
    $description = "ProHance analytics is one the best work management software for all types of businesses.";
    $keywords = "time tracking, productivity software, tools for productivity, real time tracking, software to track projects, employee attendance tracking, manage remote workers, time sheet tracking, workforce productivity, app to track employee hours, performance management platform, employee monitor software, online time tracking software, employee management software, employee time tracking, best performance management software, employee productivity software, time and attendance systems, productivity management software, operations management software, employee monitor, employee monitoring tool, remote work monitoring, work management, increase workplace productivity, how to measure productivity in the workplace, employee tracking systems, best employee time tracking software, tracking productivity, employee tracking software, pc activity monitoring, timesheet management system, work time sheet, employee hours tracker, time tracking solution, tracking software, employee management systems, productivity in the workplace, manage remote team, employee productivity tracking software, computer activity monitoring software, employee productivity tracker, employee productivity, employee timesheet software, employee timekeeping software, employee activity monitor, computer activity tracker, production tracking system, top 10 employee monitoring software, time tracking systems, best time tracker, business tracking system, employee productivity measurement, hour tracking software, employee performance, best time tracking software, online time tracking, performance management systems, remote work monitoring software, employee time tracking software, work tracking software, working remotely, remote monitoring software, best pc monitoring software, time tracking software, employee performance management software,";
} else if (curPageName() == "maturing-hybrid-work-approach") {
    $title = "Maturing the Hybrid Work Approach - Webinar by ProHance";
    $description = "ProHance Software Is your risk management technology ready to help you engage in a new hybrid work approach.";
    $keywords = "";
} else if (curPageName() == "press-releases") {
    $title = "Press Releases | ProHance";
    $description = "Stay up-to-date with the latest news, updates, and events related to ProHance. Find valuable insights and information here.";
    $keywords = "";
} else if (curPageName() == "testimonials") {
    $title = "Client Testimonials | ProHance";
    $description = "At ProHance, customer satisfaction is our ultimate goal. See what our customers have to say about ProHance in their Testimonials.";
    $keywords = "";
} else if (curPageName() == "contact-us") {
    $title = "Contact Us | ProHance";
    $description = "Want to know more? ProHance contact info is listed on this page, along with an easy to fill contact us form.";
    $keywords = "";
} else if (curPageName() == "careers") {
    $title = "Career Page: Find your Next Job at ProHance";
    $description = "Empower your career today. Check out the latest job openings at Prohance.";
    $keywords = "";
} else if (curPageName() == "contingent-workforce-management-linkedin") {
    $title = "Your Contingent Workforce Vendors Are Your Strategic Partners. CoManage the Workforce With Confidence With Data ProHance Will Generate.";
    $description = "";
    $keywords = "";
} else if (curPageName() == "g2-prohance") {
    $title = "ProHance G2 – Workforce Management & Analytics Solutions";
    $description = "ProHance is a cutting-edge, global operations management platform that provides workforce management & analytics solutions with over a 200+ customizable reports.";
    $keywords = "";
} else if (curPageName() == "contingent-workforce-management-us") {
    $title = "Your Contingent Workforce Vendors Are Your Strategic Partners. CoManage the Workforce With Confidence With Data ProHance Will Generate.";
    $description = "Your Contingent Workforce Vendors Are Your Strategic Partners. CoManage the Workforce With Confidence With Data ProHance Will Generate.";
    $keywords = "vendor performance management software, contingent workforce management software, managing contingent workers, contingent workforce staffing, top 10 vendor management systems, vendor monitoring software, vendor management services, it vendor management, supplier performance management software, contingent workforce management companies, coupa contingent workforce, Outsourcing Governance Solutions, contingent workforce companies, it vendor management software, vendor management tool, vendor management solutions, vendor management system software, contingent workforce program, contingent workforce software, best vendor management software, vendor management system, vendor management, contingent workforce services, vendor management platform, vendor management companies, vendor management software, managed service provider contingent workforce, contingent workforce management, Outsourcing Governance, software vendor management solution, vendor management automation, msp contingent workforce, contingent management staffing, partner ecosystem platform, best vendor management system, top vendor management systems, contingent workforce management solutions, vendor management program, contingent workforce, vendor management systems, contract and vendor management, partner ecosystem, contingent workforce solution, contingent workforce manager,";
} else if (curPageName() == "effective-integration-of-the-technology-your-next-gen-bpo") {
    $title = "Webinar: Effective Integration of the Technology for Your Next Gen BPO";
    $description = "Prohance is an effective task management software designed to help BPO companies streamline their processes and increase productivity. Find out more about its features!";
    $keywords = " ";
} else if (curPageName() == "employee-productivity-monitoring-linkedin") {
    $title = "Top Employee Performance & Productivity Monitoring Software in the Industry";
    $description = "With ProHance, gain visibility into the digital workforce to balance their performance, productivity, efficiency & workload.";
    $keywords = " ";
} else if (curPageName() == "employee-productivity-monitoring") {
    $title = "Employee Productivity Monitoring Software | ProHance";
    $description = "Maximize team efficiency with ProHance's employee productivity monitoring software. Gain insights and optimize workforce performance seamlessly.";
    $keywords = "best employee time tracking software, best it management software, best performance management software, best productivity software, best task tracking software, best timesheet software, best way to track employee productivity, best work management software, business task management software, computer activity monitoring software, computer monitoring software, computer software to track activity, effective performance management, effective performance management system, employee desktop live viewer, employee evaluation tool, employee performance, employee performance assessment, employee performance management platform, employee performance management software, employee performance management system, employee performance management tools, employee performance platform, employee performance review system, employee performance system, employee performance tools, employee performance tracker, employee performance tracking, employee performance tracking software, employee performance tracking system, employee productivity, employee productivity app, employee productivity management, employee productivity measurement, employee productivity measurement tools, employee productivity software, employee productivity tool, employee productivity tracker, employee productivity tracking software, employee task tracking system, employee time tracking software, employee timesheet software, employer tracking software, enterprise task management software, hour tracking, how to manage team remotely, how to measure productivity in the workplace, improve employee efficiency, increase employee productivity, increase workplace productivity, increasing employee productivity in the workplace, list of task management software, office productivity software, online performance management system, online task management software, performance evaluation software, performance evaluation tool, performance management platform, performance management process, performance management system process, performance management system software, performance management systems, performance software, performance tracking software, performance tracking system, performance tracking tools, productivity in the workplace, productivity management software, productivity sheet for employees, productivity software, productivity tracker for employees, productivity tracking software, project monitoring system, record work hours, remote work tracking software, remote worker tracking system, software to track projects, software to track remote workers, task and time management software, task assignment software, task management platform, task management software, task management solution, task management system, task management system software, task monitoring software, task monitoring system, task software, team task management software, team task software, time management tools for employees, time task management software, time tracking software, timesheet tracking software, tools for productivity, tools to measure productivity, top performance management software, top task management software, track your employees, tracking employee productivity, tracking productivity, ways to improve employee productivity, ways to improve productivity in the workplace, wfh productivity tools, work management system, work planner software, work productivity software, work productivity tracker, work time sheet, worker tracking system, workforce productivity, workforce productivity software,";
} else if (curPageName() == "empowering-the-GCC-digital-workforce") {
    $title = "Empowering the GCC Digital Workforce | ProHance";
    $description = "Watch the best webinar topic Empowering the GCC Digital Workforce with vice president & client partner  of ProHance Harjiv Singh Rekhi. Register Now!!";
    $keywords = "";
} else if (curPageName() == "privacy-policy") {
    $title = "Privacy Policy | ProHance";
    $description = "ProHance's privacy policy explains how we use the information we collect from you. If you have any questions about our policy, please write to us.";
    $keywords = "";
} else if (curPageName() == "benchmarking-report") {
    $title = "Global Productivity Benchmarking Report | ProHance";
    $description = "Discover how leading organizations across various industries are optimizing productivity in today's distributed and hybrid work environment.";
    $keywords = "";
} else if (curPageName() == "employee-time-tracking-software") {
    $title = "Employee Time Tracking Software to Track Work Hours | ProHance";
    $description = "Streamline your business operations with ProHance's employee time tracking software for efficient task management and performance monitoring.";
    $keywords = "";
} else if (curPageName() == "employee-time-monitoring-software") {
    $title = "Employee Time Monitoring Software for Work Hours | ProHance";
    $description = "Enhance productivity with ProHance's time monitoring software. Track work hours, improve performance, and optimize resources effectively.";
    $keywords = "";
} else if (curPageName() == "attendance-monitoring-software") {
    $title = "Fully Automated Attendance Monitoring Software | ProHance";
    $description = "Track employee attendance with precision using our automated software, ensuring accuracy and time-saving features for your organization.";
    $keywords = "";
} else if (curPageName() == "employee-timesheet-software") {
    $title = "Fully Automated Employee Timesheet Software | ProHance";
    $description = "Manage employee timesheets effortlessly with our automated software, providing seamless tracking and reporting for accurate payroll processing.";
    $keywords = "";
} else if (curPageName() == "no-code-workflow-software") {
    $title = "No-code Workflow Platform with Inbuilt Process Mapping | ProHance";
    $description = "Streamline workflows with ProHance’s no-code workflow software. Build, automate, and optimize processes without coding expertise.";
    $keywords = "";
} else if (curPageName() == "thank-you") {
    $title = "Thank You | ProHance";
    $description = "";
    $keywords = "";
}  else if (curPageName() == "sitemap") {
    $title = "Sitemap | Prohance";
} else if (curPageName() == "time-tracking-productivity-monitoring-ph") {
    $title = "Leading Time Tracking & Productivity Monitoring Software";
    $description = "ProHance analytics is one the best work management software for all types of businesses.";
    $keywords = "activity tracking software, app to track employee attendance, app to track employee hours, best employee tracking app, best monitoring software, best performance management software, best system monitoring software, best time tracking software, computer activity monitoring software, computer activity monitoring software, computer activity tracker, computer monitoring software, computer software to track activity, computer surveillance software, employee activity monitoring, employee hours tracker, employee keystroke monitoring, employee login logout monitoring software, employee login logout tracking software, employee monitor software, employee monitor software, employee monitoring tool, employee performance assessment, employee performance management software, employee performance tools, employee performance, employee productivity measurement tools, employee productivity measurement, employee productivity software, employee productivity tracker, employee productivity tracking software, employee productivity, employee screen monitoring software, employee screen monitoring, employee spy software, employee time and attendance tracking software, employee time recording software, employee time tracking tool, employee time tracking, employee timekeeping software, employee tracking software, employee tracking systems, employer tracking software, hour tracking software, hour tracking software, hour tracking, how to measure productivity in the workplace, increase workplace productivity, laptop monitoring tools, live employee monitoring software, manage remote workers, monitoring staff, online performance management software, online time tracking software, online time tracking tool, pc activity monitoring, performance evaluation software, performance management platform, performance management software tools, performance management system software, performance tracking system, performance tracking system, performance tracking tools, productivity in the workplace, productivity software, productivity tracker for employees, productivity tracker for employees, productivity tracking software, real time tracking system, real time tracking, remote application monitoring, remote employee desktop monitoring software, remote employee monitoring system, remote monitoring software, remote team management, remote user monitoring software, remote user monitoring software, remote work employee engagement, remote work monitoring software, software to monitor employees computer usage, software to monitor remote employees, software to track employees, software to track remote workers, software to track remote workers, software tracking system, task monitoring system, the remote desktop software, time clock application, time logging, time tracking software, time tracking solution, time tracking, tools for productivity, top 10 employee monitoring software, track employee activity, track your employees, tracking employee productivity, tracking management software, tracking productivity, tracking system for employees, work from home time tracking, work monitoring software, work productivity software, work productivity tracker, work time tracking tool, work tracker software, work tracking software, workforce productivity, working remotely,";
}  else if (curPageName() == "time-tracking-productivity-monitoring-linkedin") {
    $title = "Leading Time Tracking & Productivity Monitoring Software";
    $description = "ProHance analytics is one the best work management software for all types of businesses.";
    $keywords = "";
} else if (curPageName() == "time-tracking-productivity-monitoring") {
    $title = "Leading Time Tracking & Productivity Monitoring Software";
    $description = "ProHance analytics is one the best work management software for all types of businesses.";
    $keywords = "employee time tracking software, software for tracking, work tracking app, work tracker software, professional services time tracking, work time tracking app, computer tracker software, track my employees, management tracking system, track time worked, software to track work from home, user activity tracking and log, time tracking software, real time tracking, staff tracker, track your employees, work time tracking software, hour tracking software, computer activity tracker, software to track employees, time tracking web, activity tracker software, tracking management software, enterprise time tracking software, company time tracking software, tracking software on computer, pc usage time tracker, computer use time tracker, time tracking solution, work tracking software, software tracking system, real time tracking system, tracking staff, employee time tracking apps, best timesheet app, activity tracking software, automated time tracking software, daily activity report software, business time tracking, track employee computer activity, tracking computer activity, work from home tracker, hours tracker app for pc, computer surveillance software, employee monitoring software mac, employee spy software, best tracking software, employee keystroke monitoring, laptop monitoring tools, computer tracking, worker tracking system, employee monitoring software work from home, employee monitoring software for linux, computer monitoring software, online monitoring software, workstation monitoring software, employee screen monitoring, employee activity monitor, best monitoring software, monitoring staff, work monitoring software, real time computer monitoring, best tracking software for pc, desktop monitoring system, desktop monitoring tools, windows activity monitor, types of employee monitoring software, work from home monitor, computer monitoring, employee monitor, monitor screen, pc activity monitor, employee activity monitoring, employee desktop monitoring, remote user monitoring software, pc monitoring tool, online employee monitoring, wfh monitoring software, software to monitor work from home employees, Desktop activity monitoring, monitor staff work from home, monitor computer activity, employee pc monitoring, best pc monitoring software, remote employee monitoring software, activity monitor software, activity monitoring software, computer desktop monitor, computer screen monitor, real time employee monitoring software, top monitoring software, employee monitoring examples, employee monitoring app, top it monitoring tools, monitor user activity windows 10, computer activity monitoring software, employee system monitoring software, employee monitoring app, software monitor employee activity, employee work monitoring software, computer monitoring software for business, live employee monitoring software, top computer monitoring software, employee monitoring solution, employee monitoring software list, best screen monitoring software, screen monitoring software for employees, software monitoring employees, online employee monitoring software, top 10 employee monitoring software, employee screen monitoring software, real time employee monitoring software, monitoring employees working from home, windows activity monitor, best system monitoring software, software to monitor employees computer usage, user activity monitoring tools, software to monitor employee computer, employee monitor software, employee monitoring system, employee activity monitoring software, top employee monitoring software, employee monitoring tool, remote employee monitoring software, employee pc monitoring software, pc activity monitor, activity monitoring software, types of employee monitoring software, employee monitoring examples, remote user monitoring software, monitor staff work from home, monitor user activity windows 10, software to monitor work from home employees, employee time tracking software, employee activity tracking software, enterprise time tracking software, automated time tracking software, computer use time tracker, pc usage time tracker, user activity tracking and log, hours tracker app for pc, business time tracking, employee tracking systems, work time tracking software, track employee computer activity, daily activity report software, staff tracking system, employee tracking tool, computer tracker software, tracking computer activity, tracking system for employees, track my employees, employee real time tracking, employee tracking software, employee tracking system, hour tracking software, staff tracking software, best employee tracking app, online employee tracking system, time tracker desktop app, track employee activity, track time worked, software to track work from home,";
} else if (curPageName() == "what-is-the-difference-between-managing-people-and-managing-businesses") {
    $title = "Blog | ProHance";
    $description = "Are you interested to write about ProHance? We made ProHance Brand assets available for use by any media outlet interested in writing about ProHance.";
    $keywords = "";
} else if (curPageName() == "what-are-flexible-schedules-and-why-do-they-matter") {
    $title = "Blog | ProHance";
    $description = "Are you interested to write about ProHance? We made ProHance Brand assets available for use by any media outlet interested in writing about ProHance.";
    $keywords = "";
} else if (curPageName() == "webinar") {
    $title = "Webinar | ProHance";
    $description = "Join ProHance’s upcoming webinars to gain insights into workforce management, productivity improvement, and operational efficiency strategies.";
    $keywords = "";
} else if (curPageName() == "workforce-and-workflow-management-linkedin") {
    $title = "Best Workforce and Workflow Management Tool";
    $description = "ProHance can help meet the need for workforce management software for organizations to do Planning, Optimization & Capacity Realization.";
    $keywords = "";
} else if (curPageName() == "workforce-and-workflow-management") {
    $title = "Best Workforce and Workflow Management Tool";
    $description = "ProHance can help meet the need for workforce management software for organizations to do Planning, Optimization & Capacity Realization..";
    $keywords = "online performance review software, workflow application, employee management system, web activity tracking software, performance management software tools, production management software, performance management platform, it management tool, business tracking software, work computer monitoring software, time tracking solution, performance tracking system, best tracking software, productivity software, call center workforce management software, company employee management system, employee performance tracker, remote team software, best team management software, time clock application, project management system software, management software online, clock in app, remote desktop application, hours time tracker, Employee Geo Tracking, best productivity apps, program management software, employee hours tracker, remote work tool, performance manager software, top remote work tools, remote desktop applications, best employee performance management software, Employee Monitoring tool, team productivity software, best project management platforms, tools for productivity, employee performance monitoring tools, project monitoring software, application remote desktop, program management system, employee performance appraisal software, pm software, employee management, work management app, employee management system software, ProHance Analytics, employee location tracking software, project management applications, work tracker app,";
} else if (curPageName() == "partnership-ecosystem-management") {
    $title = "ProHance | Partnership Ecosystem Management";
    $description = "The Power of Relationship-Focused Contingent Workforce Management Why Your Contingent Workforce is Your Greatest Asset—and How to Protect It Leverage Your Strongest Assets—Your Contingent Workforce";
    $keywords = "";
} else if (curPageName() == "buying-guide-for-time-sheet") {
    $title = "ProHance | Buying Guide for Time Sheet";
    $description = "Optimize your organization's most valuable resource with our comprehensive buying guide for time sheets and learn how to identify project needs and save time and money.";
    $keywords = "";
} else if (curPageName() == "case-studies-filter") {
    $title = "Case Studies | ProHance";
    $description = "Learn how businesses across industries achieved significant productivity and cost savings with ProHance through real-world case studies and success stories.";
    $keywords = "";
} else if (curPageName() == "videos") {
    $title = "Video Library | ProHance";
    $description = "Watch insightful videos showcasing ProHance's capabilities in boosting workforce efficiency, managing productivity, and optimizing operational performance.";
    $keywords = "";
} else if (curPageName() == "global-productivity-benchmarking-report") {
    $title = "Global Productivity Benchmarking Report | Prohance";
    $description = "";
    $keywords = "";
} else if (curPageName() == "buying-guide-for-workplace-analytics-tool") {
    $title = "ProHance | The Buying Guide for Workplace Analytics Tool";
    $description = "ProHance's buying guide for workplace analytics tool provides valuable insights on the features and benefits of using such software for businesses looking to improve productivity and efficiency. Get The Guide now!";
    $keywords = "";
} else if (curPageName() == "sme-tech-landscape-in-india") {
    $title = "SME Tech Landscape in India - White Paper by ProHance and NASSCOM";
    $description = "Read ProHance's White Paper on SME Tech Landscape in India in association with NASSCOM to understand the challenges faced by small and medium-sized enterprises in implementing technology solutions, and how technology adoption can impact their growth and productivity.";
    $keywords = "";
} else if (curPageName() == "/case-study/software-usage-and-optimization-case") {
    $title = "Software Usage and Optimization case| ProHance";
    $description = "We empower clients in the smooth deployment of ProHance and subsequently accelerate benefits realization on their investment by providing bespoke consulting services.";
    $keywords = "";
} else if (curPageName() == "/case-study/improving-operational-efficiency") {
    $title = "Improving Operational Efficiency  | ProHance";
    $description = "We empower clients in the smooth deployment of ProHance and subsequently accelerate benefits realization on their investment by providing bespoke consulting services.";
    $keywords = "";
} else if (curPageName() == "/case-study/enabling-project-utilization-in-it-services") {
    $title = "Enabling Project Utilization in IT Services | ProHance";
    $description = "A leading provider of digital transformation and technology services for Top Global 2000 companies faced challenges with employees spending disproportonate time on incidental activities.";
    $keywords = "";
} else if (curPageName() == "/case-study/firstsource-improving-operational-efficiency") {
    $title = "Firstsource - Improving Operational Efficiency | ProHance";
    $description = "Firstsource is a global BPM company trusted by leading brands in the Banking, Financial Services, Insurance, Healthcare, Telecommunications and Media industries";
    $keywords = "";
} else if (curPageName() == "/case-study/transforming-operations-efficiency-in-revenue-cycle-management") {
    $title = "Transforming Operations Efficiency in Revenue Cycle Management | ProHance";
    $description = "A leading provider of technology-enabled revenue cycle management services for the US healthcare market was challenged with lower operations";
    $keywords = "";
} else if (curPageName() == "/case-study/driving-efficiency-in-shared-service-center") {
    $title = "Driving Efficiency In Shared Service Center | ProHance";
    $description = "A leading Telecommunications Company (FTSE Top 100) was experiencing productivity loss at its Global Shared Services centers.";
    $keywords = "";
} else if (curPageName() == "/case-study/episource-promoting-self-driven-work-culture") {
    $title = "Episource - Promoting Self-Driven Work Culture | ProHance";
    $description = "Episource provides risk adjustment and quality solutions which include consultation, analytics, medical record review, data and management workflow tools.";
    $keywords = "";
} else if (curPageName() == "/case-study/gebbs-healthcare-solutions-optimizing-productive-time") {
    $title = "GeBBS Healthcare Solutions, Optimizing Productive Time | ProHance Case Study";
    $description = "Check out the ProHance case study for GeBBS Healthcare Solutions on Optimizing Productive Time.";
    $keywords = "";
} else if (curPageName() == "/case-study/optimizing-productivity-in-manufacturing") {
    $title = "Episource - Promoting Self-Driven Work Culture | ProHance";
    $description = "Episource provides risk adjustment and quality solutions which include consultation, analytics, medical record review, data and management workflow tools.";
    $keywords = "";
} else if (curPageName() == "/case-study/enhanced-work-life-balance") {
    $title = "Episource - Promoting Self-Driven Work Culture | ProHance";
    $description = "Episource provides risk adjustment and quality solutions which include consultation, analytics, medical record review, data and management workflow tools.";
    $keywords = "";
} else if (curPageName() == "/case-study/acusis-promoting-work-life-balance") {
    $title = "Episource - Promoting Self-Driven Work Culture | ProHance";
    $description = "Episource provides risk adjustment and quality solutions which include consultation, analytics, medical record review, data and management workflow tools.";
    $keywords = "";
} else if (curPageName() == "/case-study/catapult-attaining-visibility-into-workforce") {
    $title = "Catapult, Attaining Visibility into Workforce | ProHance Case Study";
    $description = "Check out the ProHance case study for Catapult on Attaining Visibility into Workforce.";
    $keywords = "";
} else if (curPageName() == "/case-study/acp-billing-optimizing-productive-time") {
    $title = "Episource - Promoting Self-Driven Work Culture | ProHance";
    $description = "Episource provides risk adjustment and quality solutions which include consultation, analytics, medical record review, data and management workflow tools.";
    $keywords = "";
} else if (curPageName() == "/case-study/softsages-optimizing-productive-time") {
    $title = "Episource - Promoting Self-Driven Work Culture | ProHance";
    $description = "Episource provides risk adjustment and quality solutions which include consultation, analytics, medical record review, data and management workflow tools.";
    $keywords = "";
} else if (curPageName() == "/case-study/texila-american-university-managing-teams-effectively") {
    $title = "Episource - Promoting Self-Driven Work Culture | ProHance";
    $description = "Episource provides risk adjustment and quality solutions which include consultation, analytics, medical record review, data and management workflow tools.";
    $keywords = "";
} else if (curPageName() == "/case-study/optimizing-productive-time-in-retail") {
    $title = "Optimizing Productive time in Retail | ProHance";
    $description = "Episource provides risk adjustment and quality solutions which include consultation, analytics, medical record review, data and management workflow tools.";
    $keywords = "";
} else if (curPageName() == "case-studies-wise") {
    $title = "Explore our customers' success stories | ProHance";
    $description = "Discover how ProHance has transformed businesses worldwide. Read our customers' success stories and learn how our solutions can drive productivity and efficiency in your organization.";
    $keywords = "";
}   else if (curPageName() == "our-mission-values") {
    $title = "Our Mission and Our Values - Prohnace";
    $description = "Find the details about Mission Values and how it helps improve business processes and employee productivity.";
    $keywords = "";
}   else if (curPageName() == "prohancecx") {
    $title = "Workforce Management Suite | Advanced Workforce Solutions";
    $description = "ProHanceCX's Workforce Management Suite, all-in-one solutions to meet your workforce management needs. Boost productivity and streamline processes with our advanced solutions.";
    $keywords = ""; 
}   else if(strpos(getCurrentPageURL('url'), 'glossary/what-is') !== false){
    $title = "What is ".str_replace("What Is ", "", getCurrentPageURL('title'))." | Prohance";
    $description = "Find the details about ".str_replace("What Is ", "", getCurrentPageURL('title'))." and how it helps improve business processes and employee productivity";
    $keywords = "";
}   else {
    
    $title="";
    $description="";
    $keywords="";
}

if (strpos(getCurrentPageURL('url'), 'index.php/') !== false) {
    $redirectIndexurl = str_replace("index.php/", "", getCurrentPageURL('url'));
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $redirectIndexurl);
    header("Connection: close");
}

?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
	integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" >
<meta content="<?php echo $keywords; ?>" name="keywords">
<meta name="robots" content="index, follow" />
<link rel="canonical" href="<?php echo getCurrentPageURL('url'); ?>" />
<link rel="alternate" href="<?php echo getCurrentPageURL('url'); ?>" hreflang="en-us" />

<!-- Twitter Graph  Code -->

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo $title; ?>" />
<meta name="twitter:description" content="<?php echo $description; ?>" />
<meta name="twitter:image" content="<?php echo getCurrentPageURL('base_url'); ?>/images/ProHance-logo-01.svg"/>

<!-- Open Graph  Code  -->

<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:site_name" content="ProHance">
<meta property="og:url" content="<?php echo getCurrentPageURL('url'); ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo getCurrentPageURL('base_url'); ?>/images/ProHance-logo-01.svg">

<?php if (curPageName() == "index") { ?>
<?php if(getCurrentPageURL('url')!="https://www.prohance.net/glossary/"){ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Prohance",
  "url": "https://www.prohance.net/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.prohance.net/search.php?s={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<?php } ?>
<?php } ?>


<?php if (curPageName() == "index" || curPageName() == "about-us" || curPageName() == "contact-us") { ?>
<?php if(getCurrentPageURL('url')!="https://www.prohance.net/glossary/"){ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Corporation",
  "name": "Prohance",
  "alternateName": "JaMocha Tech Pvt.Ltd",
  "url": "https://www.prohance.net/",
  "logo": "https://www.prohance.net/images/ProHance-logo.png",
  "address":
  [
    {
    "@type": "PostalAddress",
    "streetAddress": "#731, 2nd Floor, 7th Cross Road, 3 Block Koramangala",
    "addressLocality": "Bengaluru",
    "postalCode": "560034",
    "addressCountry": "India",
    "telephone": "1800-212-9293"
    },
    {
    "@type": "PostalAddress",
    "streetAddress": "2055, Limestone Rd, Ste. 200 C",
    "addressLocality": "Wilmington",
    "postalCode": "19808",
    "addressCountry": "US",
    "telephone": "+1-417-529-3884"
    },
    {
    "@type": "PostalAddress",
    "streetAddress": "11th floor, CyberOne Bldg. Eastwood Cyberpark",
    "addressLocality": "Quezon City",
    "postalCode": "1110",
    "addressCountry": "Philippines"
    },
    {
    "@type": "PostalAddress",
    "streetAddress": "WeWork Two Horizon Centre, 5th Floor Two Horizon Centre DLF, DLF Phase 5",
    "addressLocality": "Gurugram",
    "postalCode": "122002",
    "addressCountry": "India"
    }
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "1800-212-9293",
    "contactType": "customer service",
    "contactOption": "TollFree"
    },
  "sameAs": [
    "https://www.facebook.com/people/ProHance/100063905679387/",
    "https://twitter.com/prohance_net?lang=en",
    "https://www.youtube.com/channel/UCDeycuodGITNoNuAXEQLxAQ",
    "https://www.linkedin.com/company/prohance/?originalSubdomain=in"
  ]
}
</script>

<?php } ?>
<?php } ?>

<script type="application/ld+json">
    {
    "@context": "http://schema.org",
        "@type": "WebPage",
        "url": "<?php echo getCurrentPageURL('url'); ?>",
        "name": "<?php echo $title; ?>",
        "description": "<?php echo $description; ?>"
    }
</script>
<?php 
$breadcrumbTilte = getCurrentPageURL('title');
if (curPageName() == "about-us") {
    $breadcrumbTilte = "About Us";
} else if (curPageName() == "10-essential-tips-for-successfully-managing-a-hybrid-workforce") {
} else if (curPageName() == "14days-trial") {
} else if (curPageName() == "404") {
} else if (curPageName() == "apply-these-secret-techniques-to-improve-the-new-age-remote-workers") {
}  else if (curPageName() == "attendance-and-timesheet") {
} else if (curPageName() == "attendance-and-timesheet-linkedin") {
} else if (curPageName() == "blog") {
} else if (curPageName() == "meet-the-team") {
    $breadcrumbTilte = "Meet The Team";
} else if (curPageName() == "partner-ecosystem-management-uk") {
} else if (curPageName() == "prohancemodules") {
    $breadcrumbTilte = "Featured Modules";
} else if (curPageName() == "professional-services") {
    $breadcrumbTilte = "Professional Services";
} else if (curPageName() == "prohance-support") {
} else if (curPageName() == "prohance-vs-other-competitors-in") {
} else if (curPageName() == "prohance-vs-other-competitors-linkedin") {
} else if (curPageName() == "prohance-vs-other-competitors-ph") {
} else if (curPageName() == "prohance-vs-other-competitors-uk") {
} else if (curPageName() == "prohance-vs-other-competitors-us") {
} else if (curPageName() == "real-time-tracking-productivity-monitoring-smb") {
} else if (curPageName() == "support-about") {
} else if (curPageName() == "thought-leadership") {
    $breadcrumbTilte = "Thought Leadership";
} else if (curPageName() == "industry-reports") {
    $breadcrumbTilte = "Industry Reports ";
} else if (curPageName() == "case-studies") {
    $breadcrumbTilte = "Case Studies";
} else if (curPageName() == "events") {
    $breadcrumbTilte = "Events";
} else if (curPageName() == "how-remote-work-is-reshaping-a-future-new-world-of-work") {
} else if (curPageName() == "manage-hybrid-and-remote-teams-linkedin") {
} else if (curPageName() == "manage-hybrid-and-remote-teams") {
} else if (curPageName() == "manage-your-hybrid-teams-linkedin") {
} else if (curPageName() == "manage-your-hybrid-teams-uk") {
} else if (curPageName() == "manage-your-hybrid-teams-us") {  
} else if (curPageName() == "maturing-hybrid-work-approach") {
} else if (curPageName() == "press-releases") {
    $breadcrumbTilte = "Press Releases";
} else if (curPageName() == "testimonials") {
    $breadcrumbTilte = "Client Testimonials";
} else if (curPageName() == "contact-us") {
    $breadcrumbTilte = "Contact Us";
} else if (curPageName() == "careers") {
    $breadcrumbTilte = "Careers";
} else if (curPageName() == "contingent-workforce-management-linkedin") {
} else if (curPageName() == "contingent-workforce-management-us") {
} else if (curPageName() == "effective-integration-of-the-technology-your-next-gen-bpo") {
} else if (curPageName() == "employee-productivity-monitoring-linkedin") {
} else if (curPageName() == "employee-productivity-monitoring") {
} else if (curPageName() == "empowering-the-GCC-digital-workforce") {
} else if (curPageName() == "privacy-policy") {
} else if (curPageName() == "thank-you") {
} else if (curPageName() == "time-tracking-productivity-monitoring-ph") {
} else if (curPageName() == "time-tracking-productivity-monitoring-linkedin") {
} else if (curPageName() == "time-tracking-productivity-monitoring") {
} else if (curPageName() == "what-is-the-difference-between-managing-people-and-managing-businesses") {
} else if (curPageName() == "what-is-are-flexible-schedules-and-why-do-they-matter") {
} else if (curPageName() == "webinar") {
} else if (curPageName() == "workforce-and-workflow-management-linkedin") {
} else if (curPageName() == "workforce-and-workflow-management") {
} else if (curPageName() == "how-partner-ecosystem-management-benefits-clients") {
} else if (curPageName() == "/thought-leadership/buying-guide-for-time-sheet") {
} else if (curPageName() == "/thought-leadership/buying-guide-for-workplace-analytics-tool") {
} else if (curPageName() == "/thought-leadership/sme-tech-landscape-in-india") {
} else if (curPageName() == "/case-study/software-usage-and-optimization-case") {
} else if (curPageName() == "/case-study/improving-operational-efficiency") {
} else if (curPageName() == "/case-study/enabling-project-utilization-in-it-services") {
} else if (curPageName() == "/case-study/firstsource-improving-operational-efficiency") {
} else if (curPageName() == "/case-study/transforming-operations-efficiency-in-revenue-cycle-management") {
} else if (curPageName() == "/case-study/driving-efficiency-in-shared-service-center") {
} else if (curPageName() == "/case-study/episource-promoting-self-driven-work-culture") {
} else if (curPageName() == "/case-study/gebbs-healthcare-solutions-optimizing-productive-time") {
} else if (curPageName() == "/case-study/optimizing-productivity-in-manufacturing") {
} else if (curPageName() == "/case-study/enhanced-work-life-balance") {
} else if (curPageName() == "/case-study/acusis-promoting-work-life-balance") {
} else if (curPageName() == "/case-study/catapult-attaining-visibility-into-workforce") {
} else if (curPageName() == "/case-study/acp-billing-optimizing-productive-time") {
} else if (curPageName() == "/case-study/softsages-optimizing-productive-time") {
} else if (curPageName() == "/case-study/texila-american-university-managing-teams-effectively") {
} else if (curPageName() == "/case-study/optimizing-productive-time-in-retail") {
}
?>
<?php if (curPageName() != "index") { ?>
    <?php if (strpos(getCurrentPageURL('url'), '/glossary/') !== false) { ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Home",
            "item": "<?php echo getCurrentPageURL('base_url'); ?>"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Glossary",
            "item": "https://www.prohance.net/glossary/"  
          },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "<?php echo $breadcrumbTilte; ?>",
            "item": "<?php echo getCurrentPageURL('url'); ?>"  
          }]
        }
        </script>
    <?php } else{ ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Home",
            "item": "<?php echo getCurrentPageURL('base_url'); ?>"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "<?php echo $breadcrumbTilte; ?>",
            "item": "<?php echo getCurrentPageURL('url'); ?>"  
          }]
        }
        </script>
    <?php } ?>
<?php } ?>
<?php if(getCurrentPageURL('url')=="https://www.prohance.net/glossary/"){ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "<?php echo getCurrentPageURL('base_url'); ?>"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "<?php echo $breadcrumbTilte; ?>",
    "item": "<?php echo getCurrentPageURL('url'); ?>"  
  }]
}
</script>
<?php } ?>
<?php if(getCurrentPageURL('url')=="https://www.prohance.net/"){ ?>
<script type="application/ld+json">{
  "@context": "http://schema.org",
  "@type": "VideoObject",
  "name": "Prohance Workforce Analytics for Hybrid & Remote Employees",
  "description": "Leverage data analytics across organizational levels to meet varied objectives in hybrid working pro",
  "thumbnailUrl": "https://i.ytimg.com/vi/ZwvzwC15ptY/default.jpg",
  "uploadDate": "2024-03-19T08:06:44Z",
  "duration": "PT1H4M",
  "embedUrl": "https://www.youtube.com/embed/ZwvzwC15ptY",
  "contentUrl": "https://www.prohance.net/",
  "interactionCount": "96"
}
</script>
<?php } ?>