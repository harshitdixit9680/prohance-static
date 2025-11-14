<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ProHance for IT Industry</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #333;
      overflow-x: hidden;
    }

    /* HERO SECTION */
    .hero-section {
      background: url("assets/images/programmer-coding.png") center/cover no-repeat fixed;
      min-height: 100vh;
      position: relative;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(8px);
      z-index: 0;
    }

    .content-wrapper {
      position: relative;
      z-index: 1;
      display: flex;
      flex-wrap: nowrap;
      align-items: stretch;
      gap: 0;
      min-height: 100vh;
    }

    /* LEFT SECTION - 50% WIDTH */
    .left-section {
      flex: 0 0 50%;
      max-width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 60px 80px 60px 100px;
      color: #fff;
    }

    .left-section h1 {
      font-weight: 700;
      font-size: 2.8rem;
      line-height: 1.3;
      margin-bottom: 2rem;
      color: #ffffff;
    }

    .left-section h1 .underlined {
      display: inline-block;
      position: relative;
      padding-bottom: 8px;
    }

    .left-section h1 .underlined::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 3px;
      background: linear-gradient(90deg, #00bfff 0%, #1e90ff 100%);
      border-radius: 2px;
    }

    .left-section h4 {
      color: #7CFC00;
      font-weight: 600;
      font-size: 1.5rem;
      margin-bottom: 2.5rem;
      line-height: 1.4;
    }

    .left-section p {
      color: #e0e0e0;
      font-size: 1.05rem;
      line-height: 1.8;
      margin-bottom: 1.5rem;
      font-weight: 400;
    }

    /* RIGHT SECTION - 50% WIDTH */
    .right-section {
      flex: 0 0 50%;
      max-width: 50%;
      background: linear-gradient(135deg, #1a5f7a 0%, #0d4a5f 100%);
      padding: 60px 50px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
      overflow-y: auto;
    }

    /* ACCORDION STYLING */
    .accordion {
      border: none;
    }

    .accordion-item {
      background: transparent;
      border: none;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      margin-bottom: 0;
      border-radius: 0;
    }

    .accordion-item:last-child {
      border-bottom: none;
    }

    .accordion-button {
      background-color: transparent;
      color: #fff;
      font-weight: 600;
      font-size: 1rem;
      border: none;
      padding: 24px 0;
      box-shadow: none;
      position: relative;
    }

    .accordion-button:not(.collapsed) {
      background-color: transparent;
      color: #fff;
      box-shadow: none;
    }

    .accordion-button::after {
      filter: brightness(0) invert(1);
      position: absolute;
      right: 0;
    }

    .accordion-button:focus {
      box-shadow: none;
      border: none;
    }

    .accordion-button:hover {
      background-color: rgba(255, 255, 255, 0.05);
    }

    .accordion-body {
      background-color: transparent;
      color: #d9d9d9;
      font-size: 0.92rem;
      padding: 10px 0 24px 0;
      line-height: 1.7;
    }

    .accordion-body ul {
      padding-left: 20px;
      margin-top: 12px;
      margin-bottom: 0;
    }

    .accordion-body ul li {
      margin-bottom: 10px;
    }

    /* SUCCESS STORIES SECTION */
    .success-section {
      background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
      padding: 80px 5%;
    }

    .success-header {
      text-align: left;
      margin-bottom: 60px;
      padding-left: 5%;
    }

    .success-header .subtitle {
      font-size: 1rem;
      color: #666;
      font-weight: 500;
      margin-bottom: 10px;
      letter-spacing: 0.5px;
    }

    .success-header h2 {
      font-size: 3rem;
      font-weight: 700;
      color: #333;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin: 0;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
      background: linear-gradient(135deg, #e0e0e0 0%, #f5f5f5 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .stories-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 40px;
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 5%;
    }

    .story-card {
      background: #fff;
      padding: 40px 30px;
      border-radius: 0;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease;
    }

    .story-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
    }

    .story-card .metric {
      font-size: 3rem;
      font-weight: 700;
      color: #4FC3F7;
      margin-bottom: 10px;
      line-height: 1;
    }

    .story-card .metric-label {
      font-size: 0.95rem;
      color: #333;
      margin-bottom: 25px;
      font-weight: 500;
    }

    .story-card .metric::after {
      content: '';
      display: block;
      width: 60px;
      height: 4px;
      background: #4FC3F7;
      margin-top: 15px;
    }

    .story-card .company-name {
      font-size: 1rem;
      font-weight: 700;
      color: #000;
      margin-bottom: 15px;
      margin-top: 20px;
    }

    .story-card .description {
      font-size: 0.95rem;
      color: #555;
      line-height: 1.7;
      font-weight: 400;
    }

    /* CTA SECTION */
    .cta-section {
      text-align: center;
      margin-top: 60px;
      padding: 0 5%;
    }

    .cta-button {
      background: linear-gradient(90deg, #7CFC00 0%, #32CD32 100%);
      color: #000;
      padding: 18px 50px;
      font-size: 1.1rem;
      font-weight: 600;
      border: none;
      border-top-left-radius: 25px;
  border-top-right-radius: 25px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(124, 252, 0, 0.3);
    }

    .cta-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(124, 252, 0, 0.4);
    }

    .cta-button .highlight {
      font-weight: 700;
    }

    /* RESPONSIVE */
    @media (max-width: 992px) {
      .content-wrapper {
        flex-wrap: wrap;
        flex-direction: column;
      }

      .left-section, .right-section {
        flex: 0 0 100%;
        max-width: 100%;
        min-height: auto;
      }

      .left-section {
        padding: 40px 30px;
      }

      .right-section {
        padding: 40px 30px;
      }

      .stories-container {
        grid-template-columns: 1fr;
        gap: 30px;
      }

      .success-header h2 {
        font-size: 2rem;
      }
    }

    @media (max-width: 768px) {
      .left-section h1 {
        font-size: 2rem;
      }

      .left-section h4 {
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>
  
  <!-- HERO SECTION -->
  <section class="hero-section">
    <div class="content-wrapper">
      
      <!-- LEFT SECTION -->
      <div class="left-section">
        <h1><span class="underlined">ProHance</span> For The IT Industry</h1>
        <h4>Transforming IT Work Patterns<br>into Competitive Advantage</h4>
        <p>In today's fast-paced IT industry, success depends on more than just technical skills, it demands complete visibility into workflows, real-time insights, and the ability to act fast.</p>
        <p>ProHance is the leading SaaS productivity platform designed for IT enterprises to turn raw activity data into actionable business insights. With ProHance, delivery heads, project managers, and engineering leaders can track, optimize, and elevate performance across every stage of the software development lifecycle (SDLC)</p>
      </div>

      <!-- RIGHT SECTION -->
      <div class="right-section">
        <div class="accordion" id="accordionExample">
          
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                Deep Visibility into Developer Workflows
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Gain unmatched insights into how your developers work, with automated reports that track time spent across active applications and screens.
                <ul>
                  <li>Identify core (value-adding) vs non-core (disruptive/supporting) activities.</li>
                  <li>Increase core time by 25–30% for developers and engineers.</li>
                  <li>Reduce wasted effort and improve code quality across projects.</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                Real-Time Project Intelligence (JIRA Productivity Tracking)
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Monitor real-time project performance using integrations with tools like JIRA to analyze developer productivity and efficiency.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                Smarter Resource Allocation & IT Capacity Planning
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Make data-driven decisions to allocate teams efficiently, balancing workloads and optimizing utilization.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                Data-Driven Developer Productivity Analytics
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Analyze productivity patterns to improve focus time and reduce idle hours.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                Minimize Context Switching & Maximize Focus
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Track context switches and interruptions to help teams stay in flow state longer and deliver better results.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                Enable Workforce Learning & Upskilling
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Identify skill gaps and create targeted learning paths to strengthen engineering talent across the organization.
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- SUCCESS STORIES SECTION -->
  <section class="success-section">
    <div class="success-header">
      <p class="subtitle">ProHance IT Industry</p>
      <h2>Success Stories</h2>
    </div>

    <div class="stories-container">
      
      <!-- Story Card 1 -->
      <div class="story-card">
        <div class="metric">$18M</div>
        <div class="metric-label">saved annually</div>
        <div class="company-name">Global IT Services Leader<br>(15,000+ licenses):</div>
        <div class="description">
          Boosted billing, cut idle time, and improved efficiency - $18M saved annually.
        </div>
      </div>

      <!-- Story Card 2 -->
      <div class="story-card">
        <div class="metric">28%</div>
        <div class="metric-label">more utilization in 6 months</div>
        <div class="company-name">Mid-Tier IT Company:</div>
        <div class="description">
          Defined work baselines and improved utilization by 28% in just 6 months.
        </div>
      </div>

      <!-- Story Card 3 -->
      <div class="story-card">
        <div class="metric">23%</div>
        <div class="metric-label">higher productive time</div>
        <div class="company-name">Tech Giant (2,000+ FTEs):</div>
        <div class="description">
          Achieved 23% higher productive time within 5 months via ProHance - JIRA integration.
        </div>
      </div>

    </div>

    <!-- CTA Button -->
    <div class="cta-section">
      <button class="cta-button">
        Connect - with an expert to discuss your <span class="highlight">IT transformation</span>
      </button>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
